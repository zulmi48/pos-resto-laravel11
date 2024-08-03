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
        $this->date = now()->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.transaction.index', [
            'transactions' => Transaction::when($this->date, function ($transaction) {
                $transaction->whereDate('created_at', $this->date);
            })->latest()->get(),
        ]);
    }
}
