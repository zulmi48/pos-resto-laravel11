<div class="page-wrapper">
    <div class="card card-divider max-w-4xl mx-auto">
        <div class="card-body space-y-4">
            <h3 class="font-bold text-xl">Export Data Transaksi</h3>
            <p>Untuk mengekspor data transaksi atau mendapatkan rekap data transaksi dalam bentuk excel, silahkan pilih
                bulan terlebih dahulu kemudian klik "Export Data"</p>
        </div>
        <div class="card-body py-4">
            <form class="card-actions justify-between" wire:submit="export">
                <input type="month" @class([
                    'input input-bordered',
                    'input-error' => $errors->first('monthly'),
                ]) wire:model="monthly">
                <button type="submit" class="btn btn-primary">
                    <x-tabler-upload class="size-5" />
                    <span>Export Data</span>
                </button>
            </form>
        </div>
    </div>
</div>
