<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-semibold">
            List Sertifikasi yang Saya Ikuti
        </h3>

        <a href="{{ route('dashboard.my-course.create') }}" class="btn btn-primary space-x-2">
            <x-phosphor-plus class="w-4 h-4"/>
            <span>
                Ikuti Sertifikasi
            </span>
        </a>
    </div>

    <x-alerts/>

    @if (! empty(auth()->user()->gender) && ! empty(auth()->user()->address) && ! empty(auth()->user()->phone))
        <livewire:data-tables.my-course-data-table />
    @else
        <div class="alert alert-error mt-4">
            <span>
                Mohon lengkapi data diri Anda pada halaman <a class="font-bold" href="{{ route('profile.edit') }}">Pengaturan</a>.
            </span>
        </div>
    @endif
</x-app-layout>
