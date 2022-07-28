<?php

namespace App\Http\Livewire\Modal;
use Livewire\Component;
use App\Models\Reimbursement;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AddReimbursement extends Component
{
    use WithFileUploads;
    public $admin_id, $user_id, $reason, $phone, $nominal, $attachment, $no_rekening, $status, $image;

    protected $rules = [
        'reason'        =>'required',
        'phone'         =>'required',
        'nominal'       =>'required',
        'image'         => 'image|nullable',
        'no_rekening'   =>'required'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        // dd($this->all());
        $validated = $this->validate();

        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image/reimbursement');
        }
        $validated['admin_id']  = auth()->user()->admin_id;
        $validated['user_id']   = auth()->user()->id;
        $validated['image']     = $path;
        $validated['created_at']    = Carbon::now()->toDateTimeString();

        Reimbursement::insert($validated);

        $this->emit('reimbursementCreated');
    }
    public function render()
    {
        return view('livewire.modal.add-reimbursement');
    }
}
