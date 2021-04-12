@extends('layouts.admin.app')

@section('title', 'Emails | Communications')
@section('content')
    @livewire('admin.emails')
@endsection

@push('js')
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
