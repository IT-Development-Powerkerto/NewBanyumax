<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Staff;
use Livewire\WithFileUploads;
use App\Models\Role;

class EditStaffOnAdmin extends Component
{
    use WithFileUploads;
    public $role_id, $name, $image_temp, $status, $staffId;
    public $image = '';

    public $listeners = [
        'getStaff' => 'showStaff',
        'updateStaff' => 'updateStaff',
    ];

    protected $rules = [
        'name'      => 'required',
        'role_id'   => 'required',
        'image_temp'     => 'image|nullable',
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function showStaff($id)
    {
        // dd($id);
        // this->reset('image_temp');
        $staff = Staff::find($id);
        $this->staffId = $staff->id;
        $this->name = $staff->name;
        $this->role_id = $staff->role_id;

    }

    public function updateStaff($staffId)
    {
        // dd($staffId);
        $staff = Staff::where('id', $staffId)->first();
        $validated = $this->validate();

        $validated['updated_at']= Carbon::now()->toDateTimeString();
        $staff->update($validated);
        $this->emit('staffUpdated');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.modal.edit-staff-on-admin', compact('roles'));
    }
}
