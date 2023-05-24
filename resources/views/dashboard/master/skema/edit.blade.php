<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('dashboard.master.schema.index') }}" class="btn btn-ghost space-x-2">
            <x-phosphor-arrow-left class="w-4 h-4"/>
            <span>
                Kembali
            </span>
        </a>

        <h3 class="text-2xl font-semibold">
            Edit Skema
        </h3>
    </div>

    <x-alerts/>

    <div class="card bg-base-100 border rounded">
        <div class="card-body">
            <h5 class="text-lg font-semibold">
                Form edit Skema
            </h5>

            <form action="{{ route('dashboard.master.schema.update', $schema) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-control">
                    <label for="nama" class="label">
                        <span class="label-text">
                            Nama
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="input input-bordered"
                        value="{{ old('nama', $schema->nama) }}"
                        required
                    />
                    @error('nama')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="jenis" class="label">
                        <span class="label-text">
                            Jenis
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="text"
                        name="jenis"
                        id="jenis"
                        class="input input-bordered"
                        value="{{ old('jenis', $schema->jenis) }}"
                        required
                    />
                    @error('jenis')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="jumlah_unit" class="label">
                        <span class="label-text">
                            Jumlah Unit
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="number"
                        name="jumlah_unit"
                        id="jumlah_unit"
                        class="input input-bordered"
                        value="{{ old('jumlah_unit', $schema->jumlah_unit) }}"
                        required
                    />
                    @error('jumlah_unit')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-4 flex justify-end">
                    <button class="btn btn-primary space-x-2">
                        <x-phosphor-floppy-disk class="w-4 h-4" />
                        <span>
                            Simpan
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
