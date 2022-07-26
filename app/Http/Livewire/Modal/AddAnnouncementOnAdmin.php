<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Announcement;
use Carbon\Carbon;

class AddAnnouncementOnAdmin extends Component
{
    public $admin_id, $announcement;
    public function render()
    {
        return view('livewire.modal.add-announcement-on-admin');
    }

    protected $rules = [
        'announcement' => 'required'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        $validated= $this->validate();

        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['created_at']= Carbon::now()->toDateTimeString();
        $validated['updated_at']= Carbon::now()->toDateTimeString();

        Announcement::create($validated);

        $this->emit('announcementCreated');
    }
}
