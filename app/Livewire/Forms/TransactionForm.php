<?php

namespace App\Livewire\Forms;

use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TransactionForm extends Form
{
    public $customer_id;
    public $items;
    public $desc;
    public $price;
    public $is_done = false;
    public ?Transaction $transaction;

    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;

        $this->customer_id = $transaction->customer_id;
        $this->items = $transaction->items;
        $this->desc = $transaction->desc;
        $this->price = $transaction->price;
        $this->is_done = $transaction->is_done;
    }

    public function store()
    {
        $valid = $this->validate([
            'customer_id' => '',
            'items' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'is_done' => 'required'
        ]);

        Transaction::create($valid);
        $this->reset();
    }

    public function update()
    {
        $valid = $this->validate([
            'customer_id' => '',
            'items' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'is_done' => 'required'
        ]);

        $this->transaction->update($valid);
        $this->reset();
    }
}
