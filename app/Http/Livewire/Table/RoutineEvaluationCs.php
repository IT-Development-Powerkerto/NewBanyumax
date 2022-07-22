<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;

class RoutineEvaluationCs extends Component
{
    public $listeners =[
        'routineEvaluationCreated' => '$refresh'
    ];

    public function render()
    {
        $evaluations = Evaluation::all();
        $data['jml_evaluation'] = Evaluation::all()->count();
        return view('livewire.table.routine-evaluation-cs',$data, compact('evaluations'));
    }
}
