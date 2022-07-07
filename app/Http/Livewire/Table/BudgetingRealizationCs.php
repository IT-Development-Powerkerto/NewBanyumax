<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\BudgetingRealization;

class BudgetingRealizationCs extends Component
{
    public function render()
    {
        $budgeting_reals =BudgetingRealization::all();
        $data['jml_budgetingadv'] = BudgetingRealization::all()->count();
        return view('livewire.table.budgeting-realization-cs', $data, compact('budgeting_reals'));
    }
}
