<div class="page-wrapper">
    <div class="max-w-sm mx-auto space-y-8">
        <div class="text-center">
            <h3 class="font-bold text-xl">{{ config('app.name') }}</h3>
            <p>{{ fake()->address() }}</p>
        </div>
        <!---------------------------------------------------->
        <div>
            <table class="w-full">
                <tr>
                    <td>Kode Transaksi</td>
                    <td> :</td>
                    <td class="text-right">{{ $transaction->id }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td> :</td>
                    <td class="text-right">{{ $transaction->created_at->format('d F Y H:i') }}</td>
                </tr>
                <tr>
                    <td>Customer</td>
                    <td> :</td>
                    <td class="text-right">{{ $transaction->customer->name ?? '-' }}</td>
                </tr>
            </table>
        </div>
        <!---------------------------------------------------->
        <div class="space-y-2">
            @foreach ($transaction->items as $name => $item)
                <div class="flex flex-col">
                    <div>{{ $name }}</div>
                    <div class="flex justify-between">
                        <div>Rp. {{ Number::format($item['price'] / $item['qty']) }} X {{ $item['qty'] }}</div>
                        <div>Rp. {{ Number::format($item['price']) }}</div>
                    </div>
                </div>
            @endforeach
        </div>
        <!---------------------------------------------------->
        <div class="text-right">
            <small>Total</small>
            <div class="text-xl">Rp. {{ Number::format($transaction->price) }}</div>
        </div>
    </div>

</div>
