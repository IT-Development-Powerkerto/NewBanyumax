<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Announcement;

class DeleteAnnouncementOnAdmin extends Component
{
    public $listeners = [
        'deletedId' => 'deletedId'
    ];

    public $deletedId = '';

    public function render()
    {
        return view('livewire.modal.delete-announcement-on-admin');
    }

    public function deletedId($id)
    {
        $this->deletedId = $id;
    }
    public function delete()
    {
        // dd($this->deletedId);
        Announcement::find($this->deletedId)->delete();
        $this->emit('announcementDeleted');
    }
}
