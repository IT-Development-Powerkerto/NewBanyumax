<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Reimbursement as Reimburs;

class Reimbursment extends Component
{
    public $listeners = [
        'reimbursementCreated' => '$refresh'
    ];
    public function render()
    {

        $reimbursements = Reimburs::all();
        $data['jml_reimbursment'] = Reimburs::all()->count();
        return view('livewire.table.reimbursment', $data, compact('reimbursements'));
    }
}
