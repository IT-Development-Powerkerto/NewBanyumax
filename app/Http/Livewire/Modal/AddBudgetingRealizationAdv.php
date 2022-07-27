<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\BudgetingRealization;
use Carbon\Carbon;
use App\Models\Campaign;

class AddBudgetingRealizationAdv extends Component
{
    public $admin_id, $user_id, $item, $nominal, $description, $attachment, $campaign_id, $funds;

    public function render()
    {
        $campaigns = Campaign::all();
        return view('livewire.modal.add-budgeting-realization-adv', compact('campaigns'));
    }

    protected $rules = [
        'campaign_id'   => 'required',
        'funds'         => 'required',
        'item'          => 'required',
        'nominal'       => 'required',
        'description'   => 'required',
        // 'attachment'    => 'nullable'
    ];

    // public function updated()
    // {
    //     $this->validate();
    // }

    public function store()
    {
        $validated = $this->validate();

        // if(!$this->attachment){
        //     $path = null;
        // }else{
        //     $path = $this->image->store('public/attachment');
        // }
        // dd($this->all());
        $validated['admin_id']  = auth()->user()->admin_id;
        $validated['user_id']   = auth()->user()->id;
        // $validated['user_name'] = auth()->user()->name;
        // $validated['role_id']   = auth()->user()->role_id;
        // $validated['attachment']    = $path;
        $validated['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        $validated['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

        BudgetingRealization::create($validated);

        $this->emit('realizationCreated');
    }
}
