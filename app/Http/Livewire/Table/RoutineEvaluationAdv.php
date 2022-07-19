<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Evaluation;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class RoutineEvaluationAdv extends Component
{
    use WithPagination;
    public $search1;
    public $search5;
    public $search10;
    public $search20;

    public $listeners =[
        'routineEvaluationCreated' => '$refresh'
    ];
    public function render()
    {
        // if($this->search1){
        //     $evaluations = DB::table('evaluations')
        //     ->leftJoin('products', 'evaluations.product_id','=','products.id')
        //     ->where('date', 'LIKE', '%' . $this->search1 . '%')
        //     ->orWhere('time', 'LIKE', '%' . $this->search1 . '%')
        //     ->orWhere('resistance', 'LIKE', '%' . $this->search1 . '%')
        //     ->orWhere('solution', 'LIKE', '%' . $this->search1 . '%')
        //     ->paginate(1);
        // }
        // else if($this->search5){
        //     $evaluations = DB::table('evaluations')
        //     ->leftJoin('products', 'evaluations.product_id','=','products.id')
        //     ->where('date', 'LIKE', '%' . $this->search5 . '%')
        //     ->orWhere('time', 'LIKE', '%' . $this->search5 . '%')
        //     ->orWhere('resistance', 'LIKE', '%' . $this->search5 . '%')
        //     ->orWhere('solution', 'LIKE', '%' . $this->search5 . '%')
        //     ->paginate(5);
        // }
        // else if($this->search10){
        //     $evaluations = DB::table('evaluations')
        //     ->leftJoin('products', 'evaluations.product_id','=','products.id')
        //     ->where('date', 'LIKE', '%' . $this->search10 . '%')
        //     ->orWhere('time', 'LIKE', '%' . $this->search10 . '%')
        //     ->orWhere('resistance', 'LIKE', '%' . $this->search10 . '%')
        //     ->orWhere('solution', 'LIKE', '%' . $this->search10 . '%')
        //     ->paginate(10);
        // }
        // else if($this->search20){
        //     $evaluations = DB::table('evaluations')
        //     ->leftJoin('products', 'evaluations.product_id','=','products.id')
        //     ->where('date', 'LIKE', '%' . $this->search20 . '%')
        //     ->orWhere('time', 'LIKE', '%' . $this->search20 . '%')
        //     ->orWhere('resistance', 'LIKE', '%' . $this->search20 . '%')
        //     ->orWhere('solution', 'LIKE', '%' . $this->search20 . '%')
        //     ->paginate(20);
        // }

        $evaluations = Evaluation::all();
        $data['jml_eval'] = Evaluation::all()->count();
        return view('livewire.table.routine-evaluation-adv',$data, compact('evaluations'));
    }
}
