<?php

namespace App\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public $date;

    public function toggleDone(Transaction $transaction)
    {
        $transaction->is_done = !$transaction->is_done;
        $transaction->save();
    }

    public function deleteTransaction(Transaction $transaction)
    {
        $transaction->delete();
    }

    public function mount()
    {
        $this->date = now()->format('Y-m');
    }

    public function render()
    {
        return view('livewire.transaction.index', [
            'transactions' => Transaction::whereMonth('created_at', date('m', strtotime($this->date)))
                ->whereYear('created_at', date('Y', strtotime($this->date)))
                ->latest()
                ->get(),
        ]);
        // ->when($this->date, function ($transaction) {
        //     $transaction->whereDate('created_at', $this->date);
        // })
    }
}
