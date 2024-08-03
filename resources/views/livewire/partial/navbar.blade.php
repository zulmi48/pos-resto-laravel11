<div class="navbar bg-base-100 border-b-2 border-base-300 print:hidden">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl" href="{{ route('home') }}" wire:navigate>{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a href="{{ route('transaction.create') }}" class="btn btn-ghost btn-circle">
            <x-tabler-plus class="size-5" />
        </a>
    </div>
</div>
