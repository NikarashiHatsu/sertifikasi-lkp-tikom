<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('dashboard.my-course.index') }}" class="btn btn-ghost space-x-2">
            <x-phosphor-arrow-left class="w-4 h-4"/>
            <span>
                Kembali
            </span>
        </a>

        <h3 class="text-2xl font-semibold">
            Ikuti Sertifikasi Baru
        </h3>
    </div>

    <x-alerts/>

    <div class="card bg-base-100 border rounded">
        <div class="card-body">
            <h5 class="text-lg font-semibold">
                Form Ikuti Sertifikasi Baru
            </h5>

            <form action="{{ route('dashboard.my-course.store') }}" method="post">
                @csrf
                <div class="form-control mt-2">
                    <label for="kode_skema" class="label">
                        <span class="label-text">
                            Sertifikasi
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <select
                        name="kode_skema"
                        id="kode_skema"
                        class="select select-bordered"
                        required
                    >
                        @foreach ($schemas as $schema)
                            <option
                                @selected(old('kode_skema') == $schema->kode)
                                @disabled($schema->participants->count() >= $schema->jumlah_unit || auth()->user()->participants()->where('kode_skema', $schema->kode)->exists())
                                value="{{ $schema->kode }}"
                            >
                                {{ $schema->nama }}

                                {{ auth()->user()->participants()->where('kode_skema', $schema->kode)->exists() ? '(Sudah diikuti)' : '' }}

                                @if ($schema->participants->count() >= $schema->jumlah_unit)
                                    (Penuh)
                                @endif
                            </option>
                        @endforeach
                    </select>
                    @error('kode_skema')
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
