<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Reimbursement as Reimburs;
use Livewire\WithPagination;

class Reimbursment extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

    public $listeners = [
        'reimbursementCreated' => '$refresh',
        'reimbursementDeleted' => '$refresh'
    ];
    public function render()
    {

        $reimbursements = $this->search == null ?
            Reimburs::with(['user'])->latest()->paginate($this->paginate):
            Reimburs::where('id', 'like', '%'.$this->search.'%')
            ->orWhere('reason', 'like', '%'.$this->search.'%')
            ->orWhere('phone', 'like', '%'.$this->search.'%')
            // ->orWhere('nominal', 'like', '%'.$this->search.'%')
            ->orWhere('no_rekening', 'like', '%'.$this->search.'%')
            ->orWhereHas('user', function($q){
                $q->where('name', 'like', '%'.$this->search.'%');
            })->latest()->paginate($this->paginate);

        $data['jml_reimbursment'] = Reimburs::all()->count();
        return view('livewire.table.reimbursment', $data, compact('reimbursements'));
    }
}
