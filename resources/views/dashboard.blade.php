<x-app-layout>
    <label for="drawer" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>

    <div class="flex items-center justify-between">
        <h3 class="text-2xl font-semibold">
            Dashboard
        </h3>
    </div>

    <x-alerts />

    <h4 class="text-xl font-semibold mt-6 mb-4">
        Statistik
    </h4>

    <div class="grid grid-cols-12 grid-flow-row gap-6">
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="stats w-full">
                <div class="stat bg-base-100">
                    <div class="stat-figure text-primary">
                        <x-phosphor-table class="w-6 h-6" />
                    </div>
                    <div class="stat-title">
                        Total Skema
                    </div>
                    <div class="stat-value text-primary">
                        {{ $total_schema }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="stats w-full">
                <div class="stat bg-base-100">
                    <div class="stat-figure text-secondary">
                        <x-phosphor-user class="w-6 h-6" />
                    </div>
                    <div class="stat-title">
                        Total User
                    </div>
                    <div class="stat-value text-secondary">
                        {{ $total_user }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3">
            <div class="stats w-full">
                <div class="stat bg-base-100">
                    <div class="stat-figure">
                        <x-phosphor-users class="w-6 h-6" />
                    </div>
                    <div class="stat-title">
                        Total Partisipan
                    </div>
                    <div class="stat-value">
                        {{ $total_participants }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12">
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <livewire:chart-participants />
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-xl font-semibold mt-6 mb-4">
        List Seluruh Partisipan
    </h4>

    <div class="">
        <livewire:data-tables.participant-data-table />
    </div>
</x-app-layout>
