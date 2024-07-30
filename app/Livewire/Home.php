<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class Home extends Component
{
    public function toggleDone(Transaction $transaction)
    {
        $transaction->is_done = !$transaction->is_done;
        $transaction->save();
    }

    public function render()
    {
        $today = date('Y-m-d');
        [$year, $month] = explode('-', date('Y-m'));
        $transactiion = Transaction::where('is_done', true)->whereYear('created_at', $year)
            ->whereMonth('created_at', $month);

        return view('livewire.home', [
            'monthly' => $transactiion->get()->sum('price'),
            'today' => $transactiion->whereDate('created_at', $today)->get(),
            'datas' => Transaction::where('is_done', false)->get(),
        ]);
    }
}
