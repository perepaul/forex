<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
    crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

{{-- <script src="{{ asset('js/user/bootstrap-bundle.js') }}"></script> --}}

<script>
    var match = window.matchMedia('(display-mode: standalone)')
    // console.log(match)
    if (match.matches) {
        // alert('matched')
    } else {
        // alert('not matched')
    }

    if (typeof(iziToast) != 'undefined') {
        iziToast.settings({
            timeout: 10000,
            resetOnHover: true,
            icon: 'fontawesome',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            position: 'topRight',
            zindex: 10000,
        });
    }


    function successMessage(message) {
        if (typeof(iziToast) != 'undefined') {
            return iziToast.success({
                message
            })
        } else {
            alert(message);
        }
    }

    function warnMessage(message) {
        if (typeof(iziToast) != 'undefined') {
            iziToast.warning({
                message
            });
        } else {
            alert(message)
        }

    }

    function errorMessage(message) {
        if (typeof(iziToast) != 'undefined') {
            iziToast.error({
                message
            })
        } else {
            alert(message)
        }
    }

    var copy = document.getElementById('copy');
    if(typeof(copy) != 'undefined' && copy != null)
    {
        document.getElementById('copy').onclick = (event) => {
            try {
                document.getElementById('copy-text').select();
                document.execCommand('copy')
                successMessage('Copied wallet address to clipboard', 'success')
            } catch (err) {
                errorMessage(['An error occured, copy manually'], 'error')
            }

        }
    }

    if(typeof(window.livewire) != 'undefined' && typeof($) != 'undefined')
    {
        window.livewire.on('toggle-modal', e => {
            $('#' + e.id).modal('toggle');
        })
        window.livewire.on('close-modal', e => {
            $('#' + e.id).modal('close');
        })

        window.livewire.on('success', e => {
            successMessage(e.message);
        })

        window.livewire.on('redirect', e => {
            setTimeout(() => {
                location.href = e.to
            }, e.timeout || 2000);
        })

        window.livewire.on('error', e => {
            for (error in e.errors) {
                errorMessage(e.errors[error]);
            }
        })

        window.livewire.on('warn', e => {
            for (warn in e.warns) {
                warnMessage(e.warns[warn]);
            }
        })
    }

</script>

@if ($errors->any())
    {{-- @dd($errors->all()) --}}
    <script>
        @foreach ($errors->all() as $error)
            errorMessage('{{ $error }}')
        @endforeach
    </script>

@elseif(session()->has('message'))
    <script>
        successMessage('{{ session()->get('message') }}')

    </script>
@elseif(session()->has('warning'))
    <script>
        warnMessage('{{ session()->get('message') }}')

    </script>
@endif
