<!-- Main modal -->
<div id="add-budgeting-request-adv" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-budgeting-request-adv">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Request Budgeting</h3>
                <form class="space-y-6" enctype="multipart/form-data">
                    @csrf
                    <div class="relative">
                        <input type="text" wire:model.debounce.500ms='nominal' id="nominal" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Nominal Request" required>
                        @error('nominal') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <input type="text" wire:model.debounce.500ms='no_rek' id="no_rek" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="No. Rekening" required>
                        @error('no_rek') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <input type="text" wire:model.debounce.500ms='target_omzet' id="target_omzet" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Target Omzet" required>
                        @error('target_omzet') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <select wire:model.debounce.500ms="campaign_id" id="campaign_id"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Select Campaign</option>
                            @foreach ($campaigns as $campaign)
                                <option value="{{$campaign->id}}">{{$campaign->campaign_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="button" wire:click.prevent='store' data-modal-toggle="add-budgeting-request-adv" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

