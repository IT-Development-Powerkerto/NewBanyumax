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

    protected $rules = [
        'product_id'    =>'required',
        'date'          =>'required',
        'time'          =>'required',
        'resistance'    =>'required',
        'solution'      =>'required',
        'image'         =>'image|nullable'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        // dd($this->all());
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

        Evaluation::create($validated);

        $this->emit('routineEvaluationCreated');
    }

    public function render()
    {
        $products = Product::where('admin_id', auth()->user()->admin_id)->get();
        return view('livewire.modal.add-routine-evaluation', compact('products'));
    }
}
