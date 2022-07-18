<?php

namespace App\Http\Livewire\Modal;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Evaluation;
use App\Models\Product;
use Carbon\Carbon;

class AddRoutineEvaluation extends Component
{
    use WithFileUploads;
    public $admin_id, $user_id, $product_id, $date, $time, $resistance, $solution, $image = null;

    public $rules = [
        'product_id'    =>'required',
        'date'          =>'required',
        'time'          =>'required',
        'resistance'    =>'required',
        'solution'      =>'required',
        'image'         =>'nullable'
    ];

    public function updated()
    {
        $this->validate();
    }

    public function store()
    {
        $validated= $this->validate();
        // dd($this->all());
        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image');
        }
        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['user_id'] = auth()->user()->id;
        $validated['image'] = $path;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        Evaluation::insert($validated);

        $this->emit('routineEvaluationCreated');
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.modal.add-routine-evaluation', compact('products'));
    }
}
