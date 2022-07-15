<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;

class RoutineEvaluationAdv extends Component
{
    public function render()
    {
        $evaluations = Evaluation::all();
        $data['jml_eval'] = Evaluation::all()->count();
        return view('livewire.table.routine-evaluation-adv',$data, compact('evaluations'));
    }
}
