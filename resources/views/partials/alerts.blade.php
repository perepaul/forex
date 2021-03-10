<script>
iziToast.settings({
        timeout: 10000,
        resetOnHover: true,
        icon: 'fontawesome',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        position: 'topRight',
        zindex:10000,
    });

    function successMessage(message) {
        return iziToast.success({message})
    }

    function warnMessage(message) {
            iziToast.warning({message});

    }

    function errorMessage(message)
    {

            iziToast.error({message})
    }

    window.livewire.on('toggle-modal', e => {
            $('#' + e.id).modal('toggle');
        })
    window.livewire.on('close-modal',e=>{
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

@if($errors->any())
{{-- @dd($errors->all()) --}}
<script>
    @foreach($errors->all() as $error)
    errorMessage('{{$error}}')
    @endforeach
</script>

@elseif(session()->has('message'))
<script>
    successMessage('{{session()->get("message")}}')
</script>
@elseif(session()->has('warning'))
<script>
    warnMessage('{{session()->get("message")}}')
</script>
@endif


