<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-brand">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
    </div>

    <div  class="card-header">
        <h4>Mohon melengkapi info akun sebelum melanjutkan</h4> <br>
    </div>

    <form method="POST" action="/setup">
        @csrf
        <!--- if else based on the data type --->
        @switch($tipe)
            @case(0)
                <!-- You are register as unit! -->
                <div class="form-group">
                    <x-input-label for="nama_unit" :value="__('Nama Bank Sampah')" />
                    <x-text-input id="nama_unit" class="form-control" type="text" name="nama_unit" required autofocus />
                    <x-input-error :messages="$errors->get('nama_unit')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="alamat_unit" :value="__('Alamat Bank Sampah')" />
                    <x-text-input id="alamat_unit" class="form-control" type="text" name="alamat_unit" required autofocus />
                    <x-input-error :messages="$errors->get('alamat_unit')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="kecamatan_unit" :value="__('Nama kecamatan Bank Sampah')" />
                    <x-text-input id="kecamatan_unit" class="form-control" type="text" name="kecamatan_unit" required autofocus />
                    <x-input-error :messages="$errors->get('kecamatan_unit')" class="mt-2" />
                </div>

                <input type="hidden" value="0" name="tipe">

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                @break

            @case(1)
                <div class="form-group">
                    <x-input-label for="nama_nasabah" :value="__('Nama Nasabah')" />
                    <x-text-input id="nama_nasabah" class="form-control" type="text" name="nama_nasabah" required autofocus />
                    <x-input-error :messages="$errors->get('nama_nasabah')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="no_rekening" :value="__('Nomor Rekening Nasabah')" />
                    <x-text-input id="no_rekening" class="form-control" type="number" name="no_rekening" required autofocus />
                    <x-input-error :messages="$errors->get('no_rekening')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="alamat_nasabah" :value="__('Alamat Nasabah')" />
                    <x-text-input id="alamat_nasabah" class="form-control" type="text" name="alamat_nasabah" required autofocus />
                    <x-input-error :messages="$errors->get('alamat_nasabah')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="nik_nasabah" :value="__('NIK Nasabah')" />
                    <x-text-input id="nik_nasabah" class="form-control" type="number" name="nik_nasabah" required autofocus />
                    <x-input-error :messages="$errors->get('nik_nasabah')" class="mt-2" />
                </div>

                <input type="hidden" value="1" name="tipe">

                <div class="mt-4">
                    <x-input-label for="nasabah_of" :value="__('Unit yang dipilih')" />

                    <select required name="nasabah_of" class='form-select'>
                        <!--- there will be list of nasabahs -->
                        @foreach($unit as $u)
                            <option value="{{ $u["id"] }}">{{ $u["nama_unit"]  }}</option>
                        @endforeach
                    </select>

                    <x-input-error :messages="$errors->get('nasabah_of')" class="mt-2" />

                </div>
                @break

            @default
                <p>abooga</p>
                @break
        @endswitch

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-success fw-bold">
                {{ "Siapkan akun ".($tipe == 0 ? "unit" : ($tipe == 1 ? "nasabah" : ""))}}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById("")
    </script>
</x-guest-layout>
