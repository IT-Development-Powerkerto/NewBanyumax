<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\BudgetingDisbursement;
use App\Models\Campaign;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class AddBudgetingRequestAdv extends Component
{
    use WithFileUploads;
    public $admin_id, $user_id, $role_id, $nominal, $no_rek, $target_omzet, $status;

    protected $rules = [
        'campaign_id'   =>'required',
        'nominal'   => 'required',
        'no_rek'    => 'required',
        'target_omzet'  => 'required'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        $advertiser = User::where('id', Campaign::where('id', $request->campaign_id)->value('user_id'))->value('name');

        $validated = $this->validate();

        $validated['admin_id'] = auth()->user()->admin_id;
        $validated['user_id'] = auth()->user()->id;
        $validated['advertiser'] = $advertiser;
        $validated['created_at'] = Carbon::now()->toDateTimeString();

        BudgetingDisbursement::create($validated);

        $this->emit('disbursementCreated');
    }

    public function render()
    {
        return view('livewire.modal.add-budgeting-request-adv');
    }
}
