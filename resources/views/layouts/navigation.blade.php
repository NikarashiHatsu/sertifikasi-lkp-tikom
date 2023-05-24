<nav class="menu p-4 w-80 bg-base-100 text-base-content border-r">
    <li class="border-b mb-2 pb-2">
        <a href="{{ route('dashboard.index') }}">
            <x-application-logo />
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.index') }}" @class(['active' => request()->routeIs('dashboard.index')])>
            <x-phosphor-house class="w-4 h-4" />
            <span>
                Dashboard
            </span>
        </a>
    </li>

    @if (auth()->user()->role == 'admin')
        <li class="menu-title mt-4 mb-2">
            Data Master
        </li>
        <li>
            <a href="{{ route('dashboard.master.schema.index') }}" @class(['active' => request()->routeIs('dashboard.master.schema.*')])>
                <x-phosphor-table class="w-4 h-4" />
                <span>
                    Skema
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.master.user.index') }}" @class(['active' => request()->routeIs('dashboard.master.user.*')])>
                <x-phosphor-user class="w-4 h-4" />
                <span>
                    User
                </span>
            </a>
        </li>

        <li class="menu-title mt-4 mb-2">
            Data Transaksi
        </li>
        <li>
            <a href="{{ route('dashboard.transaction.participant.index') }}" @class(['active' => request()->routeIs('dashboard.transaction.participant.*')])>
                <x-phosphor-users class="w-4 h-4" />
                <span>
                    Partisipan
                </span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role == 'user')

    @endif

    <li class="menu-title mt-4 mb-2">
        Pengaturan
    </li>
    <li>
        <a href="{{ route('profile.edit') }}" @class(['active' => request()->routeIs('profile.edit')])>
            <x-phosphor-gear class="w-4 h-4" />
            <span>
                Akun
            </span>
        </a>
    </li>
    <li x-data>
        <form
            x-ref="logoutForm"
            x-show="false"
            action="{{ route('logout') }}"
            method="post"
        >
            @csrf
        </form>
        <a
            x-on:click="$refs.logoutForm.submit()"
            href="javascript:void(0)"
        >
            <x-phosphor-sign-out class="w-4 h-4" />
            <span>
                Logout
            </span>
        </a>
    </li>
</nav>
