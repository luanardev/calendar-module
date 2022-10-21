<?php

namespace Luanardev\Lumis\Calendar\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Lumis\Calendar\Entities\FinancialYear as Calendar;

class FinancialYear extends LivewireUI
{
    public $financialyears = [];

    public $search;

    public function mount()
    {
        $this->financialyears = Calendar::latest()->get();        
    }

    public function updatedSearch($value)
    {
        $this->financialyears = Calendar::search($value);
    }

    public function render()
    {
        return view('calendar::livewire.financialyear.index');
    }

    
}
