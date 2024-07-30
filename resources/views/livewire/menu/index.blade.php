<div class="page-wrapper ">
    <div class="flex flex-col md:flex-row gap-2 md:justify-between">
        <input wire:model.live="search" type="search" class="input input-bordered" placeholder="Cari...">

        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-plus class="size-5" />
            <span>Tambah Menu</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="flex gap-3 items-center">
                                <div class="avatar">
                                    <div class="w-10 rounded-lg">
                                        <img src="{{ $menu->gambar }}" alt="">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="font-bold">{{ $menu->name }}</div>
                                    <div>{{ $menu->type }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $menu->harga }}</td>
                        <td class="whitespace-normal w-96">
                            <div class="line-clamp-2">
                                {{ $menu->desc }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <div class="tooltip tooltip-left" data-tip="Edit Menu">
                                    <button class="btn btn-xs btn-square"
                                        wire:click="$dispatch('editMenu', {menu : {{ $menu->id }}})">
                                        <x-tabler-edit class="size-4" />
                                    </button>
                                </div>
                                <div class="tooltip tooltip-left" data-tip="Hapus Menu">
                                    <button class="btn btn-xs btn-square"
                                        wire:click="$dispatch('deleteMenu', {menu : {{ $menu->id }}})">
                                        <x-tabler-trash class="size-4" />
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <livewire:menu.actions />
</div>
