<?php

namespace App\Http\Livewire\Table;
use App\Models\Campaign;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BudgetingRealization as BudgetingReal;

class BudgetingRealization extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

    public $listeners =[
        'realizationCreated' => '$refresh'
    ];

    public function render()
    {
        $budgeting_reals = $this->search == null ?
            BudgetingReal::with(['campaign'])->latest()->paginate($this->paginate) :
            BudgetingReal::where('id', 'like', '%'.$this->search.'%')
                ->orWhere('item', 'like', '%'. $this->search.'%')
                ->orWhere('nominal', 'like', '%'.$this->search.'%')
                ->orWhere('funds', 'like', '%'.$this->search.'%')
                ->orWhereHas('campaign', function($q){
                    $q->where('campaign_name', 'like', '%'.$this->search.'%');
                })->latest()->paginate($this->paginate);

        $data['jml_budgetingadv'] = BudgetingReal::all()->count();
        return view('livewire.table.budgeting-realization',$data, compact('budgeting_reals'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
