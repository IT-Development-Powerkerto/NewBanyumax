<?php

namespace App\Http\Livewire\Modal;
use Livewire\Component;
use App\Models\Reimbursement;

class AddReimbursement extends Component
{
    public $admin_id, $user_id, $reason, $phone, $nominal, $attachment;

    public function store()
    {
        // dd($this->all());
        Reimbursement::insert([
            'admin_id'     => auth()->user()->admin_id,
            'user_id'      => auth()->user()->id,
            'reason'       => $this->reason,
            'phone'        => $this->phone,
            'nominal'      => $this->nominal,
            // 'attachment'   => $attachment,
            'status'       => 2,
            'created_at'   => Carbon::now()->toDateTimeString(),
            'updated_at'   => Carbon::now()->toDateTimeString(),
        ]);
    }
    public function render()
    {
        return view('livewire.modal.add-reimbursement');
    }
}
