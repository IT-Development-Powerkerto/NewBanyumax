<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Promotion;

class DeletePromotion extends Component
{
    public function render()
    {
        $promotions = Promotion::all();
        return view('livewire.modal.delete-promotion', compact('promotions'));
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
        Promotion::find($this->deletedId)->delete();
        $this->emit('promotionDeleted');
    }
}
