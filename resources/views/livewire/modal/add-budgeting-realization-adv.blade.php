<!-- Main modal -->
<div wire:ignore.self id="add-budgeting-realization-adv" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-budgeting-realization-adv">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Budget Realization</h3>
                <form class="space-y-6" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="relative">
                        <select wire:model.debounce.500ms="advertiser_id" id="advertiser_id"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Advertiser Names</option>
                            <option value="1">Azizi Asadel</option>
                            <option value="2">Marsha Lenathea</option>
                            <option value="3">Yesica Tamara</option>
                            @error('advertiser_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="relative">
                        <input type="text" wire:model.debounce.500ms='item' id="item" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Item" required>
                        @error('item') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <input type="number" wire:model.debounce.500ms='nominal' id="nominal" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Nominal (Rp)" required>
                        @error('nominal') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <select wire:model.debounce.500ms="campaign_id" id="campaign"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Select Campaign</option>
                            @foreach ($campaigns as $campaign)
                                <option value="{{$campaign->id}}">{{$campaign->campaign_name}}</option>
                            @endforeach
                            @error('campaign_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="relative">
                        <input type="number" wire:model.debounce.500ms='funds' id="funds" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Remaining Funds (Rp)" required>
                        @error('funds') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <textarea wire:model.debounce.500ms='description' id="description" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description" required></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <span class="text-gray-500 px-1 mb-2">Upload Proof</span>
                        <label type="file" name="image-product" id="image-product" required>
                            <span class="">
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer">
                                @else
                                <img src="assets/img/icon-foto.png" class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer" alt="">
                                @endif
                            </span>
                            <input wire:model="image" class="hidden" type="file" id="image">
                        </label>
                        <div wire:loading wire:target="image">
                            Uploading image...
                        </div>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" wire:click.prevent ='store' data-modal-toggle="add-budgeting-realization-adv" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(){

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
        }
</script>
