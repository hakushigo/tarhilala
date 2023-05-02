<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi profil '.$tipe_akun) }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Silahkan mengubah informasi $tipe_akun anda disini") }}
        </p>
    </header>

    @switch($user->tipe_akun)
        @case(0)
            <form method="post" action="{{ route('entity.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <x-input-label for="nama_unit" :value="__('Nama Unit')" />
                    <x-text-input id="nama_unit" class="block mt-1 w-full" type="text" name="nama_unit" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="alamat_unit" :value="__('Alamat Unit')" />
                    <x-text-input id="alamat_unit" class="block mt-1 w-full" type="text" name="alamat_unit" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="kecamatan_unit" :value="__('Nama kecamatan Unit')" />
                    <x-text-input id="kecamatan_unit" class="block mt-1 w-full" type="text" name="kecamatan_unit" required autofocus />
                </div>


                <div class="block mt-4">
                    <x-primary-button class="btn btn-sm btn-success">
                        {{ __('Ubah Informasi unit!') }}
                    </x-primary-button>
                </div>
            </form>
            @break
            <form method="post" action="{{ route('entity.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <x-input-label for="nama_nasabah" :value="__('Nama Nasabah')" />
                    <x-text-input id="nama_nasabah" class="block mt-1 w-full" type="text" name="nama_nasabah" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="no_rekening" :value="__('Nomor Rekening Nasabah')" />
                    <x-text-input id="no_rekening" class="block mt-1 w-full" type="number" name="no_rekening" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="alamat_nasabah" :value="__('Alamat Nasabah')" />
                    <x-text-input id="alamat_nasabah" class="block mt-1 w-full" type="text" name="alamat_nasabah" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="nik_nasabah" :value="__('NIK Nasabah')" />
                    <x-text-input id="nik_nasabah" class="block mt-1 w-full" type="text" name="nik_nasabah" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="nasabah_of" :value="__('Unit yang dipilih')" />

                    <select required name="nasabah_of" class='form-select'>
                        <!--- there will be list of nasabahs -->
                        @foreach($unit as $u)
                            <option value="{{ $u["id"] }}">{{ $u["nama_unit"]  }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="block mt-4">
                    <x-primary-button class="btn btn-sm btn-success">
                        {{ __('Ubah Informasi unit!') }}
                    </x-primary-button>
                </div>
            </form>

        @case(1)

        @break

        @default
        @break
    @endswitch

</section>
