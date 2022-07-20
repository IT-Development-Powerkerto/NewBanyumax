<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\BudgetingRealization;
use Carbon\Carbon;
use App\Models\Campaign;

class AddBudgetingRealizationAdv extends Component
{
    public $admin_id, $user_id, $item, $nominal, $description, $image, $campaign_id, $advertiser_id, $funds;

    public function render()
    {
        $campaigns = Campaign::all();
        return view('livewire.modal.add-budgeting-realization-adv', compact('campaigns'));
    }

    protected $rules = [
        'campaign_id'   => 'required',
        'advertiser_id' => 'required',
        'funds'         => 'required',
        'item'          => 'required',
        'nominal'       => 'required',
        'description'   => 'required',
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
            $path = $this->image->store('public/image');
        }

        $validated['admin_id']  = auth()->user()->admin_id;
        $validated['user_id']   = auth()->user()->id;
        $validated['user_name'] = auth()->user()->name;
        $validated['role_id']   = auth()->user()->role_id;
        $validated['image']     = $path;
        $validated['created_at'] = Carbon::now()->format('Y-m-d H:i:s');

        BudgetingRealization::create($validated);

        $this->emit('realizationCreated');
    }
}
