<x-app-layout>
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-semibold">
            List Seluruh Skema
        </h3>

        <a href="{{ route('dashboard.master.schema.create') }}" class="btn btn-primary space-x-2">
            <x-phosphor-plus class="w-4 h-4"/>
            <span>
                Tambah
            </span>
        </a>
    </div>

    <x-alerts/>

    <livewire:data-tables.schema-data-table />
</x-app-layout>
