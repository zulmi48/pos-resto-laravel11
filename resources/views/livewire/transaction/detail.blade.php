<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Detail Transaksi</h3>
            <div class="py-4 space-y-4">
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Tanggal Transaksi</div>
                    <div class="">{{ $transaction?->created_at->format('d F Y H:i') }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Nama Customer</div>
                    <div class="">{{ $transaction?->customer?->name ?? '-' }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Total Bayar</div>
                    <div class="">Rp. {{ Number::format($transaction?->price ?? 0) }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Keterangan</div>
                    <div class="">{{ $transaction?->desc }}</div>
                </div>

                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <th>Nama Menu</th>
                            <th>Qty</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            @foreach ($transaction->items ?? [] as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $item['qty'] }}</td>
                                    <td>Rp. {{ Number::format($item['price']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-action">
                <button class="btn btn-ghost" wire:click="closeModal">Close</button>
            </div>
        </div>
    </div>
</div>
