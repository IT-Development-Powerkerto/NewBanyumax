<!-- Main modal -->
<div id="add-campaign" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-5 right-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-campaign">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Create Campaign</h3>
                <form class="space-y-6" action="#">
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="las la-layer-group text-gray-400"></i>
                            </div>
                            <input type="text" wire:model.debounce.500ms="campaign_name" id="campaign_name" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Campaign Name" required>
                            @error('campaign_name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="las la-box text-gray-400"></i>
                            </div>
                            <select wire:model.debounce.500ms="product_id" id="product_id" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select Product</option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                                @error('product_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-facebook-f text-gray-400"></i>
                            </div>
                            <input type="facebook_pixel" wire:model.debounce.500ms="facebook_pixel" id="facebook_pixel" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Facebook Pixel" required>
                            @error('facebook_pixel') <span class="text-red-500">{{$message }}</span> @enderror
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-facebook-f text-gray-400"></i>
                            </div>
                            <select id="facebook_event_id" wire:model.debounce.500ms="facebook_event_id" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Facebook Event</option>
                                @foreach ($facebook_event as $fe )
                                    <option value="{{$fe->id}}">{{$fe->name}}</option>
                                @endforeach
                                @error('facebook_event_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-tumblr text-gray-400"></i>
                            </div>
                            <input type="tiktok_pixel" wire:model.debounce.500ms="tiktok_pixel" id="tiktok_pixel" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tiktok Pixel" required>
                            @error('tiktok_pixel') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-tumblr text-gray-400"></i>
                            </div>
                            <select id="tiktok_event_id" wire:model.debounce.500ms="tiktok_event_id" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Tiktok Event</option>
                                @foreach ($tiktok_event as $te)
                                    <option value="{{$te->id}}">{{$te->name}}</option>
                                @endforeach
                                @error('tiktok_event_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="lab la-whatsapp text-gray-400"></i>
                        </div>
                        <select id="facebook_wa_id"  wire:model.debounce.500ms="facebook_wa_id" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Whatsapp Event</option>
                            @foreach ($facebook_wa as $fw)
                                <option value="{{$fw->id}}">{{$fw->name}}</option>
                            @endforeach
                            @error('facebook_wa_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="customer_cs" wire:model.debounce.500ms="customer_cs" id="customer_cs" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Customer to CS" required></textarea>
                        @error('customer_cs') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="cs_customer" wire:model.debounce.500ms="cs_customer" id="cs_customer" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="CS to Customer" required></textarea>
                        @error('cs_customer') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-sticky-note text-gray-400"></i>
                        </div>
                        <textarea type="thanks_page" wire:model.debounce.500ms="thanks_page" id="thanks_page" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Thanks Page" required></textarea>
                    </div>
                    <div class="flex flex-row justify-center gap-5 py-2">
                        <div class="flex items-center">
                            <input checked id="automation_rotation" type="radio" value="0" wire:model.debounce.500ms="rotation_type" name="colored-radio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500">
                            <label for="automation_rotation" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Automation Rotation</label>
                        </div>
                        <div class="flex items-center">
                            <input id="comparison_rotation" type="radio" value="1" name="colored-radio" wire:model.debounce.500ms="rotation_type" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500">
                            <label for="comparison_rotation" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comparison Rotation</label>
                        </div>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button wire:click.prevent ="store" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-toggle="add-campaign">Create Campaign</button>
                        <button type="submit" class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-toggle="add-campaign">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
