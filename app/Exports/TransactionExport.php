<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionExport implements FromView
{
    public $month;
    public $year;

    public function __construct($monthly)
    {
        [$this->year, $this->month] = explode('-', $monthly);
    }

    public function view(): View
    {
        return view('exports.transaction', [
            'transactions' => Transaction::with('customer')
                ->whereYear('created_at', $this->year)
                ->whereMonth('created_at', $this->month)
                ->get(),
        ]);
    }
}
