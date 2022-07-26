<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithPagination;

class Announcements extends Component
{
    use WithPagination;
    public $paginate = 5;
    public $search;

    public $listeners =[
        'announcementCreated' => '$refresh'
    ];


    public function render()
    {
        $announcements = $this->search == null ?
            Announcement::latest()->paginate($this->paginate) :
            Announcement::where('id', 'like', '%'.$this->search.'%')
                ->orWhere('announcement', 'like', '%'.$this->search.'%')
                ->latest()->paginate($this->paginate);


        $data['jml_announcement'] = Announcement::all()->count();

        return view('livewire.table.announcements', $data, compact('announcements'));
    }

    public function setPaginate($int)
    {
        // dd($int);
        $this->paginate = $int;
        $this->render();
    }
}
