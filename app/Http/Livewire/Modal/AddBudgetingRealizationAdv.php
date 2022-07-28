<?php

namespace App\Http\Livewire\Modal;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\BudgetingRealization;
use Carbon\Carbon;
use App\Models\Campaign;

class AddBudgetingRealizationAdv extends Component
{
    use WithFileUploads;
    public $admin_id, $user_id, $item, $nominal, $description, $attachment, $campaign_id, $funds, $image;

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
        'image'         =>'image|nullable'
        // 'attachment'    => 'nullable'
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
            $path = $this->image->store('public/image/budrel');
        }
        // dd($this->all());
        $validated['admin_id']  = auth()->user()->admin_id;
        $validated['user_id']   = auth()->user()->id;
        // $validated['user_name'] = auth()->user()->name;
        // $validated['role_id']   = auth()->user()->role_id;
        $validated['image']    = $path;
        $validated['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        $validated['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

        BudgetingRealization::create($validated);

        $this->emit('realizationCreated');
    }
}
