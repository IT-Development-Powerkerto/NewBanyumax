<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Reimbursement;

class DeleteReimbursment extends Component
{
    public function render()
    {
        return view('livewire.modal.delete-reimbursment');
    }
    public $listeners = [
        'deletedId' => 'deletedId'
    ];
    public $deletedId = '';

    public function deletedId($id)
    {
        $this->deletedId = $id;
    }
    public function delete()
    {
        // dd($this->deletedId);
        Reimbursement::find($this->deletedId)->delete();
        $this->emit('reimbursementDeleted');
    }
}
