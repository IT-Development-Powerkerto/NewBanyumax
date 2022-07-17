<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\BudgetingDisbursement;

class DataBudgetingAdvLogActivity extends Component
{
    public function render()
    {
        $budgeting_dis = BudgetingDisbursement::all();
        $data['jml_budgetdis'] = BudgetingDisbursement::all()->count();
        return view('livewire.table.data-budgeting-adv-log-activity', $data, ['budgeting_dis'=>$budgeting_dis]);
    }

}
