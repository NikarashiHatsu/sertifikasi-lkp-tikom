<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-semibold">
            List Kursus yang Saya Ikuti
        </h3>

        <a href="{{ route('dashboard.my-course.create') }}" class="btn btn-primary space-x-2">
            <x-phosphor-plus class="w-4 h-4"/>
            <span>
                Ikuti Kursus
            </span>
        </a>
    </div>

    <x-alerts/>

    <livewire:data-tables.my-course-data-table />
</x-app-layout>
