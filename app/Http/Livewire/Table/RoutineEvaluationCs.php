<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;
use Livewire\WithPagination;

class RoutineEvaluationCs extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

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

        $data['jml_evaluation'] = Evaluation::all()->count();
        return view('livewire.table.routine-evaluation-cs',$data, compact('evaluations'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
