<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
    integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
    crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{asset('js/user/bootstrap-bundle.js')}}"></script>

<script>
    iziToast.settings({
        timeout: 10000,
        resetOnHover: true,
        icon: 'fontawesome',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        position: 'topRight',
        zindex: 10000,
    });

    function successMessage(message) {
        return iziToast.success({
            message
        })
    }

    function warnMessage(message) {
        iziToast.warning({
            message
        });

    }

    function errorMessage(message) {

        iziToast.error({
            message
        })
    }

    window.livewire.on('toggle-modal', e => {
        $('#' + e.id).modal('toggle');
    })
    window.livewire.on('close-modal', e => {
        $('#' + e.id).modal('close');
    })

    window.livewire.on('success', e => {
        successMessage(e.message);
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
