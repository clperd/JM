@extends('layouts.app')

@push('css_import')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('footer')
    @include('layouts.footer')
@endsection
