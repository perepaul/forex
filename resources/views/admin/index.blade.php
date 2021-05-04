@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('content')
    @livewire('admin.dashboard')
@endsection
@push('js')
    <script src="js/admin/pages/dashboard.js"></script>
@endpush
