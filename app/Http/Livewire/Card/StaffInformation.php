<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;
use App\Models\Staff;
use Livewire\WithPagination;

class StaffInformation extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

    public $listeners = [
        'staffCreated'  =>  '$refresh',
        'staffUpdated'  =>  '$refresh',
        'staffDeleted'  =>  '$refresh',
    ];

    public function render()
    {
        $staff = $this->search == null ?
            Staff::with(['role'])->latest()->paginate($this->paginate) :
            Staff::where('id', 'like', '%'.$this->search.'%')
                ->orwhere('name', 'like', '%'.$this->search.'%')
                ->orWhereHas('role', function($q){
                    $q->where('name', 'like', '%'.$this->search.'%');
                })->latest()->paginate($this->paginate);

        $data['jml_staff'] = Staff::all()->count();
        return view('livewire.card.staff-information', $data, compact('staff'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
