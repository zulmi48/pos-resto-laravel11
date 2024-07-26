<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Form;

class CustomerForm extends Form
{
    public $name;
    public $contact;
    public $desc;
    public ?Customer $customer;

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        $this->name = $customer->name;
        $this->contact = $customer->contact;
        $this->desc = $customer->desc;
    }

    public function store()
    {
        $valid = $this->validate([
            'name' => 'required',
            'contact' => 'required',
            'desc' => 'nullable',
        ]);

        Customer::create($valid);
        $this->reset();
    }

    public function update()
    {
        $valid = $this->validate([
            'name' => 'required',
            'contact' => 'required',
            'desc' => 'nullable',
        ]);

        $this->customer->update($valid);
        $this->reset();
    }
}
