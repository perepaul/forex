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

</script>

@if($errors->any())
{{-- @dd($errors->all()) --}}
<script>
    @foreach($errors->all() as $error)
    error('{{$error}}')
    @endforeach
</script>

@elseif(session()->has('message'))
<script>
    success('{{session()->get("message")}}')
</script>
@elseif(session()->has('warning'))
<script>
    warn('{{session()->get("message")}}')
</script>
@endif


