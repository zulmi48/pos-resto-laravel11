<?php

namespace App\Livewire\Transaction;

use App\Exports\TransactionExport;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Export extends Component
{
    public $monthly;

    public function export()
    {
        $this->validate([
            'monthly' => 'required',
        ]);
        return Excel::download(new TransactionExport($this->monthly), "laporan-transaksi-{$this->monthly}.xlsx");
    }

    public function render()
    {
        return view('livewire.transaction.export');
    }
}
