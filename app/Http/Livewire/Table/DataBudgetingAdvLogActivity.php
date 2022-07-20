<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\BudgetingDisbursement;

class DataBudgetingAdvLogActivity extends Component
{
    public $listeners = [
        'disbursementCreated' => '$refresh',
    ];
    public function render()
    {
        $budgeting_dis = BudgetingDisbursement::all();
        $data['jml_budgetdis'] = BudgetingDisbursement::all()->count();
        return view('livewire.table.data-budgeting-adv-log-activity', $data, compact('budgeting_dis'));
    }

}
