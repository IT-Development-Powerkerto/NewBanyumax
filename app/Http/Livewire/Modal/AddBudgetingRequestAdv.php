<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\BudgetingDisbursement;
use Carbon\Carbon;

class AddBudgetingRequestAdv extends Component
{
    public $admin_id, $user_id, $role_id, $nominal, $no_rek, $target_omzet, $status;

    public function render()
    {
        return view('livewire.modal.add-budgeting-request-adv');
    }

    public function store()
    {
        BudgetingDisbursement::create([
            'admin_id'  => auth()->user()->admin_id,
            'user_id'   => auth()->user()->id,
            'campaign_id'   => $this->campaign_id,
            'nominal'   => $this->nominal,
            'no_rek'    => $this->no_rek,
            'target_omzet'  => $this->target_omzet,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }

}
