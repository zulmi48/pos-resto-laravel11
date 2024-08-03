<table>
    <thead>
        <tr>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                <td>{{ $transaction->customer->name ?? '-' }}</td>
                <td>{{ $tranaction->price }}</td>
                <td>{{ $transaction->desc }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
