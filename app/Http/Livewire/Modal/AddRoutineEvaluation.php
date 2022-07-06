<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class AddRoutineEvaluation extends Component
{
    public $admin_id, $user_id, $product_id, $date, $time, $resistance, $solution;
    public function render()
    {
        return view('livewire.modal.add-routine-evaluation');
    }

    public function store()
    {
        // dd($this->all());
        Evaluation::insert([
            'admin_id'     => auth()->user()->admin_id,
            'user_id'      => auth()->user()->id,
            'product_id'   => $request->product_id,
            'date'         => $request->date,
            'time'         => $request->time,
            'resistance'   => $request->resistance,
            'solution'     => $request->solution,
            'created_at'   => Carbon::now()->format('Y-m-d'),
            'updated_at'   => Carbon::now()->format('Y-m-d'),
        ]);
    }
}
