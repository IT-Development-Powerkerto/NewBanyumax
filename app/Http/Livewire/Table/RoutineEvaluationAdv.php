<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class RoutineEvaluationAdv extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;
    // public $search1;
    // public $search5;
    // public $search10;
    // public $search20;

    public $listeners =[
        'routineEvaluationCreated' => '$refresh'
    ];
    public function render()
    {
        $evaluations = $this->search == null ?
            Evaluation::with(['product'])->latest()->paginate($this->paginate) :
            Evaluation::where('id', 'like', '%'.$this->search.'%')
                    ->orWhere('date', 'like', '%'.$this->search.'%')
                    ->orWhere('time', 'like', '%'.$this->search.'%')
                    ->orWhere('resistance', 'like', '%'.$this->search.'%')
                    ->orWhere('solution', 'like', '%'.$this->search.'%')
                    ->orWhereHas('product', function($q){
                        $q->where('name', 'like', '%'.$this->search.'%');
                    })->latest()->paginate($this->paginate);
            Evaluation::where('admin_id', auth()->user()->admin_id)->get();

        $data['jml_eval'] = Evaluation::all()->count();
        return view('livewire.table.routine-evaluation-adv',$data, compact('evaluations'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
