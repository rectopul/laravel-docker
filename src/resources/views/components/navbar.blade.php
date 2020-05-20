@extends('pages.dashboard.dashboard')


@section('nav')
    @parent

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.webp') }}" width="170" class="d-inline-block align-top" alt="" loading="lazy">
        </a>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">Painel <span class="sr-only">(current)</span></a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Sair</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav> <!-- navbar // -->
@endsection