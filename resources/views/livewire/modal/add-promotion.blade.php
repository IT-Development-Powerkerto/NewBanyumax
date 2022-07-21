<!-- Main modal -->
<div wire:ignore.self id="add-promotion" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-promotion">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Add Promotion</h3>
                <form class="space-y-6" enctype="multipart/form-data">
                    <div class="relative">
                        <input type="text" wire:model.debounce.500ms='promotion_name' id="promotion_name" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Promotion Name" required>
                        @error('promotion_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <select wire:model.debounce.500ms="product_id" id="product_id" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                            <option disabled selected>Select Product</option>
                            @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                            @error('product_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="relative">
                        <select wire:model.debounce.500ms="promotion_type_id" id="promotion_type_id" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                            <option disabled selected>Select Promotion Type</option>
                            @foreach ($type_promotions as $type_promotion)
                                <option value="{{$type_promotion->id}}">{{$type_promotion->name}}</option>
                            @endforeach
                            @error('promotion_type_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="text-sm flex flex-row gap-2">
                        Promotion Product Price
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="flex w-9 justify-center absolute rounded-l-lg inset-y-0 left-0 items-center pointer-events-none bg-gray-200 text-xs text-gray-400">
                            IDR
                        </div>
                        <input type="number"  wire:model.debounce.500ms='promotion_product_price' id="price" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                        @error('promotion_product_price') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <div class="flex w-9 justify-center absolute rounded-l-lg inset-y-0 left-0 items-center pointer-events-none bg-gray-200 text-xs text-gray-400">
                            %
                        </div>
                        <input type="number"  wire:model.debounce.500ms='promotion_product_percent' id="discount" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                        @error('promotion_product_percent') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="relative">
                        <input type="number" disabled wire:model.debounce.500ms='total_promotion' id="total" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Total Promotion">
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="button" wire:click.prevent="store" data-modal-toggle="add-promotion" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Create Promotion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    var promotionProduct_price = 0;
    var promotionProduct_percent = 0;
    var totalPromotion = 0;

</script> --}}
