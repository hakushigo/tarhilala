@extends('dashboard.component.dashboard')
@section('dashboard.content')

    <ul class="nav nav-tabs">
        <li class="nav-item" >
            <a class="nav-link  {{ $request->get('page') == "" || $request->get('page') == "home" ? "active" : "" }}" href="?page=">Home</a>
        </a>
        <li class="nav-item">
            <a class="nav-link {{ $request->get('page') == "autentikasi" ? "active" : "" }}"  href="?page=autentikasi" >profil autentikasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $request->get('page') == "profil" ? "active" : "" }}" href="?page=profil">profil unit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $request->get('page') == "password" ? "active" : "" }}" href="?page=password">kata sandi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger {{ $request->get('page') == "hapusakun" ? "active fw-bold" : "" }}" href="?page=hapusakun">hapus akun <i class="bi bi-exclamation-triangle"></i></a>
        </li>
    </ul>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white sm:rounded-lg">
                <div class="max-w-xl">
                    @switch($request->get('page'))
                        @case('autentikasi')
                            @include('profile.partials.update-profile-information-form')
                            @break
                        @case('profil')
                            @include('profile.partials.update-users-entity-form')
                            @break
                        @case('password')
                            @include('profile.partials.update-password-form')
                            @break
                        @case('hapusakun')
                            @include('profile.partials.delete-user-form')
                            @break
                        @default
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Selamat datang di halaman profil!') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Pilih salah satu menu untuk update/melihat profil anda!") }}
                            </p>

                            @break
                    @endswitch
                </div>
            </div>

        </div>
    </div>

@endsection
