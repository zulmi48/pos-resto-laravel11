<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public CustomerForm $form;

    #[On('createCustomer')]
    public function createModal()
    {
        $this->show = true;
    }

    #[On('editCustomer')]
    public function editCustomer(Customer $customer)
    {
        $this->form->setCustomer($customer);
        $this->show = true;
    }

    #[On('deleteCustomer')]
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();

        $this->dispatch('reload');
    }

    public function simpan()
    {
        if (isset($this->form->customer)) {
            $this->form->update();
        } else {
            $this->form->store();
        }
        $this->closeModal();

        $this->dispatch('reload');
    }

    public function closeModal()
    {
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.customer.actions');
    }
}
