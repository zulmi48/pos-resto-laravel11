<div class="page-wrapper ">
    <div class="flex flex-col md:flex-row gap-2 md:justify-between">
        <input wire:model.live="search" type="search" class="input input-bordered" placeholder="Cari...">

        <button class="btn btn-primary" wire:click="$dispatch('createCustomer')">
            <x-tabler-plus class="size-5" />
            <span>Tambah Customer</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Kontak</th>
                <th>Keterangan</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->contact }}</td>
                        <td class="whitespace-normal w-96">
                            <div class="line-clamp-2">
                                {{ $customer->desc }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('editCustomer', {customer : {{ $customer->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('deleteCustomer', {customer : {{ $customer->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <livewire:customer.actions />
</div>
