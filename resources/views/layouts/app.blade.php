@extends('layouts.base')

@section('body')
    @include('components.navbar')

    @if(isset($breadcrumbs))
        <x-breadcrumb :breadcrumbs="$breadcrumbs" />
    @endif

    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset

    @include('components.footer')
@endsection
