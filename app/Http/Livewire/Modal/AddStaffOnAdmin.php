<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Role;
use Livewire\WithFileUploads;
use App\Models\Staff;

class AddStaffOnAdmin extends Component
{
    use WithFileUploads;
    public $role_id, $name, $image;

    protected $rules = [
        'name'      => 'required',
        'role_id'   => 'required',
        'image'     => 'image|nullable',
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        $validated = $this->validate();

        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image/staff');
        }

        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['image'] = $path;

        Staff::create($validated);

        $this->emit('staffCreated');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.modal.add-staff-on-admin', compact('roles'));
    }




}
