<div>
<!-- Main modal -->
@foreach ($promotions as $promotion)
<div id="edit-promotion{{$promotion->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="edit-promotion{{$promotion->id}}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Edit Promotion</h3>
                <form class="space-y-6" action="#">
                    <div class="relative">
                        <input type="text" value="{{$promotion->promotion_name}}" name="promotion_name" wire:model.defer='promotion-name' id="promotion_name" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Promotion Name" required>
                    </div>
                    <div class="relative">
                        <select name="product_id" id="product_id" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                            <option disabled selected>Select Product</option>
                            @foreach ($products as $product)
                                <option value="{{$product->id}}" {{($product->id == $promotion->product_id) ? "selected": ""}}>{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative">
                        <select name="promotion_type_id" id="promotion_type_id" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                            <option disabled selected>Select Promotion Type</option>
                            @foreach ($type_promotions as $type_promotion)
                                <option value="{{$type_promotion->id}}" {{($type_promotion->id == $promotion->promotion_type_id) ? "selected": ""}}>{{$type_promotion->name}}</option>
                            @endforeach
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
                        <input type="number" value ="{$promotion->promotion_product_price}" name="promotion_product_price" wire:model.defer='promotion_product_price' id="promotion_product_price" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                    </div>
                    <div class="relative">
                        <div class="flex w-9 justify-center absolute rounded-l-lg inset-y-0 left-0 items-center pointer-events-none bg-gray-200 text-xs text-gray-400">
                            %
                        </div>
                        <input type="number" value ="{$promotion->promotion_product_percent}" name="promotion_product_percent" wire:model.defer='promotion_product_percent' id="promotion_product_percent" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                    </div>
                    <div class="relative">
                        <input type="number" value ="{$promotion->total_promotion}" disabled name="total_promotion" wire:model.defer='total_promotion' id="total_promotion" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Total Promotion" required>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
