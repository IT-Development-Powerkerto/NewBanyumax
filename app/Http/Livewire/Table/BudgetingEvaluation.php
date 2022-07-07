<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;

class BudgetingEvaluation extends Component
{
    public function render()
    {
        $evaluations = Evaluation::all();
        $data['jml_evaluation'] = Evaluation::all()->count();
        return view('livewire.table.budgeting-evaluation',$data, compact('evaluations'));
    }
}
