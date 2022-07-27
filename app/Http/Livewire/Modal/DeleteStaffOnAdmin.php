<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Staff;

class DeleteStaffOnAdmin extends Component
{
    public function render()
    {
        return view('livewire.modal.delete-staff-on-admin');
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
        Staff::find($this->deletedId)->delete();
        $this->emit('staffDeleted');
    }
}
