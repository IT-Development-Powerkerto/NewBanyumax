<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\BudgetingRealization as BudgetingReal;

class BudgetingRealization extends Component
{
    public function render()
    {
        $budgeting_reals = BudgetingReal::all();
        $data['jml_budgetingadv'] = BudgetingReal::all()->count();
        return view('livewire.table.budgeting-realization',$data, compact('budgeting_reals'));
    }
}
