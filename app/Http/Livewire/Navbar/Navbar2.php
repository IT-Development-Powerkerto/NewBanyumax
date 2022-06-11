<?php

namespace App\Http\Livewire\Navbar;

use Livewire\Component;

class Navbar2 extends Component
{
    public $dashboard;
    public $campaign;
    public $operator;
    public $budgetingadvertising;
    public $budgetingrealization;
    public $routineevaluation;

    public function render()
    {
        return view('livewire.navbar.navbar2', [
            'dashboard'=>$this->dashboard, 
            'campaign'=>$this->campaign,
            'operator'=>$this->operator,
            'budgetingadvertising'=>$this->budgetingadvertising,
            'budgetingrealization'=>$this->budgetingrealization,
            'routineevaluation'=>$this->routineevaluation,
        ]);
    }
}
