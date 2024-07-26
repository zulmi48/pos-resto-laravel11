<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class Index extends Component
{
    public $search;

    protected $listeners = [
        'reload' => '$refresh',
    ];
    public function render()
    {
        return view('livewire.menu.index', [
            "menus" => \App\Models\Menu::when($this->search, function ($menu) {
                $menu->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('type', 'like', '%' . $this->search . '%')
                    ->orWhere('desc', 'like', '%' . $this->search . '%');
            })->get(),
        ]);
    }
}
