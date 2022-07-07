<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\BudgetingRealization;

class AddBudgetingRealizationCs extends Component
{
    public $admin_id, $user_id, $item, $nominal, $description;
    public function render()
    {
        return view('livewire.modal.add-budgeting-realization-cs');
    }

    public function store()
    {
        BudgetingRealization::create([
            'admin_id' => auth()->user()->admin_id,
            'user_id'  => auth()->user()->id,
            'item' => $this->item,
            'nominal' => $this->nominal,
            'description'=> $this->description,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
