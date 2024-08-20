<div class="page-wrapper">
    <div class="flex flex-col md:flex-row gap-2 md:justify-between">
        <input type="month" class="input input-bordered" wire:model.live="date">
        <a href="{{ route('transaction.export') }}" class="btn btn-primary" wire:navigate>
            <x-tabler-upload class="size-5" />
            <span>Export Transaksi</span>
        </a>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Waktu Transaksi</th>
                <th>Customer</th>
                <th>Total</th>
                <th colspan="2" class="text-center">Status</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $transaction->created_at->diffForHumans() }}</td>
                        <td>{{ $transaction->customer->name ?? '-' }}</td>
                        <td>Rp. {{ Number::format($transaction->price) }}</td>
                        <td>
                            {{ $transaction->is_done ? 'Selesai' : 'Belum Selesai' }}
                        </td>
                        <td>
                            <input type="checkbox" class="toggle toggle-sm toggle-primary" @checked($transaction->is_done)
                                wire:change="toggleDone({{ $transaction->id }})" />
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <div class="tooltip tooltip-left" data-tip="Detail Transaksi">
                                    <button class="btn btn-xs btn-square"
                                        wire:click="$dispatch('detailTransaction', {transaction : {{ $transaction->id }}})">
                                        <x-tabler-receipt class="size-4" />
                                    </button>
                                </div>
                                <div class="tooltip tooltip-left" data-tip="Edit Transaksi">
                                    <a href="{{ route('transaction.edit', $transaction) }}"
                                        class="btn btn-xs btn-square">
                                        <x-tabler-edit class="size-4" />
                                    </a>
                                </div>
                                <div class="tooltip tooltip-left" data-tip="Hapus Transaksi">
                                    <button class="btn btn-xs btn-square"
                                        wire:click="deleteTransaction({{ $transaction->id }})">
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
    <livewire:transaction.detail />
</div>
