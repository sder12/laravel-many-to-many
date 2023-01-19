<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="top">
        {{-- Header --}}
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
            <div class="row justify-content-between">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Projects 2022-2023</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </header>
        {{-- / Header --}}


        <div class="container-fluid vh-100">
            <div class="row h-100">
                {{-- Sidebar --}}
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">

                        <ul class="nav flex-column mt-3">

                            {{-- Dashboard --}}
                            <li class="nav-item">
                                <a class="nav-link text-white 
                                    {{ Route::currentRouteName() === 'admin.dashboard' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>
                                    Dashboard
                                </a>
                            </li>
                            {{-- / Dashboard --}}

                            <hr class="border border-danger border-2 opacity-50">

                            {{-- Projects INDEX --}}
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() === 'admin.projects.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.projects.index') }}">
                                    <i class="fa-regular fa-folder-open"></i>
                                    Projects
                                </a>
                            </li>
                            {{-- /Projects INDEX --}}

                            {{-- Technologies --}}
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() === 'admin.technologies.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.technologies.index') }}">
                                    <i class="fa-regular fa-folder-open"></i>
                                    Technologies
                                </a>
                            </li>
                            {{-- /Technologies --}}

                            {{-- Types --}}
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() === 'admin.types.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.types.index') }}">
                                    <i class="fa-regular fa-folder-open"></i>
                                    Types
                                </a>
                            </li>
                            {{-- /Types --}}

                            <hr class="border border-danger border-2 opacity-50">

                            {{-- CREATE --}}
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() === 'admin.projects.create' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.projects.create') }}">
                                    <i class="fa-regular fa-square-plus"></i>
                                    Add Project
                                </a>
                            </li>
                            {{-- /CREATE --}}
                        </ul>
                    </div>

                </nav>
                {{-- /  Sidebar --}}

                {{-- Main --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
                {{-- / Main --}}
            </div>
        </div>

    </div>
</body>

</html>
