<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BudgetingDisbursement;

class DataBudgetingAdvLogActivity extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

    public $listeners = [
        'disbursementCreated' => '$refresh',
    ];
    public function render()
    {
        $budgeting_dis = $this->search == null ?
            BudgetingDisbursement::with(['user', 'campaign'])->latest()->paginate($this->paginate):
            BudgetingDisbursement::where('id', 'like', '%'.$this->search.'%')
                    ->orWhere('nominal', 'like', '%'.$this->search.'%')
                    ->orWhere('no_rek', 'like', '%'.$this->search.'%')
                    ->orWhere('target_omzet', 'like', '%'.$this->search.'%')
                    ->orWhereHas('campaign', function($q){
                        $q->where('campaign_name', 'like', '%'.$this->search.'%');
                    })
                    ->orWhereHas('user', function($q){
                        $q->where('name', 'like', '%'.$this->search.'%');
                    })->latest()->paginate($this->paginate);

        $data['jml_budgetdis'] = BudgetingDisbursement::all()->count();

        return view('livewire.table.data-budgeting-adv-log-activity', $data, compact('budgeting_dis'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }

}
