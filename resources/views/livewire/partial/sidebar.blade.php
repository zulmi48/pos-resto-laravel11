<ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4 border-r-2 border-base-300 space-y-4">
    <li>
        <h2>Dashboard</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}" wire:navigate @class(['active' => Route::is('home')])>
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
                <a href="" wire:navigate @class(['active' => false])>
                    <x-tabler-transfer class="size-5" />
                    <span>Input Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2>Data Master</h2>
        <ul>
            <li>
                <a href="" wire:navigate @class(['active' => false])>
                    <x-tabler-tools-kitchen-2 class="size-5" />
                    <span>Menu Makanan</span>
                </a>
            </li>
            <li>
                <a href="" wire:navigate @class(['active' => false])>
                    <x-tabler-users class="size-5" />
                    <span>Data Customer</span>
                </a>
            </li>
            <li>
                <a href="" wire:navigate @class(['active' => false])>
                    <x-tabler-history class="size-5" />
                    <span>Riwayat Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2>Account</h2>
        <ul>
            <li>
                <a href="{{ route('profile') }}" wire:navigate @class(['active' => Route::is('profile')])>
                    <x-tabler-user-cog class="size-5" />
                    <span>Edit Profile</span>
                </a>
                <button href="" wire:click="logout">
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
