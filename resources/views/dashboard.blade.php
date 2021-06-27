@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hola') . ' '. auth()->user()->name,
        'description' => __('Bienvenido al sistema de soporte tecnico de la Univercidad Tecnologica del Poniente | UTP.
        aqui podran hacer sus '),
        'class' => 'col-lg-7'
    ])
        @include('layouts.headers.cards')
    <div class="container-fluid">
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
