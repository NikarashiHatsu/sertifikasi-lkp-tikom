<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('dashboard.master.user.index') }}" class="btn btn-ghost space-x-2">
            <x-phosphor-arrow-left class="w-4 h-4"/>
            <span>
                Kembali
            </span>
        </a>

        <h3 class="text-2xl font-semibold">
            Tambah User
        </h3>
    </div>

    <x-alerts/>

    <div class="card bg-base-100 border rounded">
        <div class="card-body">
            <h5 class="text-lg font-semibold">
                Form tambah User
            </h5>

            <form action="{{ route('dashboard.master.user.store') }}" method="post">
                @csrf
                <div class="form-control">
                    <label for="name" class="label">
                        <span class="label-text">
                            Nama
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="input input-bordered"
                        value="{{ old('name') }}"
                        required
                    />
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="email" class="label">
                        <span class="label-text">
                            Email
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="input input-bordered"
                        value="{{ old('email') }}"
                        required
                    />
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="gender" class="label">
                        <span class="label-text">
                            Jenis Kelamin
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <select
                        name="gender"
                        id="gender"
                        class="select select-bordered"
                        required
                    >
                        <option @selected(old('gender') == 'Laki-laki') value="Laki-laki">Laki-laki</option>
                        <option @selected(old('gender') == 'Perempuan') value="Perempuan">Perempuan</option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="address" class="label">
                        <span class="label-text">
                            Alamat
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <textarea
                        name="address"
                        id="address"
                        class="textarea textarea-bordered"
                        rows="5"
                        required
                    >{{ old('address') }}</textarea>
                    @error('address')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="phone" class="label">
                        <span class="label-text">
                            No. HP
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="input input-bordered"
                        value="{{ old('phone') }}"
                        required
                    />
                    @error('phone')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="role" class="label">
                        <span class="label-text">
                            Peran
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <select
                        name="role"
                        id="role"
                        class="select select-bordered"
                        required
                    >
                        <option @selected(old('role') == 'user') value="user">user</option>
                        <option @selected(old('role') == 'admin') value="admin">admin</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="password" class="label">
                        <span class="label-text">
                            Kata Sandi
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="input input-bordered"
                        required
                    />
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-control mt-2">
                    <label for="password_confirmation" class="label">
                        <span class="label-text">
                            Konfirmasi Kata Sandi
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="input input-bordered"
                        required
                    />
                    @error('password_confirmation')
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
