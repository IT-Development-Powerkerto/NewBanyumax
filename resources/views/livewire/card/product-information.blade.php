<div class="flex flex-col md:grid md:grid-cols-12 gap-4">
    @foreach ($products as $product)
    <div class="md:col-span-6 lg:col-span-3 flex justify-center">
        <div class="bg-white rounded-lg w-full md:w-72 h-36">
            <div class="flex flex-col h-full justify-center shadow-lg border rounded-md gap-4 px-3">
                <div class="flex flex-row border-orange-500 border-b py-2 justify-between items-center -mt-1">
                    <h1 class="text-orange-500 tracking-wide font-semibold text-base ">{{ $product->name }}</h1>
                    <div class="text-white text-xl -mt-1">
                        <button class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-edit hover:text-cyan-500" wire:click="$emit('getProduct' ,{{ $product->id }})" data-modal-toggle="edit-product"></button>
                        <button class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-trash-alt hover:text-red-700" wire:click="$emit('deletedId', {{ $product->id }})" data-modal-toggle="delete-product" ></button>
                        {{-- <i class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-trash-alt hover:text-red-700" onclick="confirmDelete({{$product->id}})" type="submit"></i> --}}
                    </div>
                </div>
                {{-- {{ Storage::get($product->image)}} --}}
                <div class="flex flex-row justify-between items-center gap-2">
                    <div class="flex flex-row items-center gap-5">
                        <img src="{{ url( $product->image != null ? 'storage/'.str_replace('public/', '',$product->image) : 'assets/img/favicon.png') }}" class="h-14 w-14 rounded-lg border bg-white shadow-sm mb-1" alt="">
                        <div class="flex flex-col">
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">{{ $product->sku ?? 'Not Set' }}</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">Rp. {{ number_format($product->price, 2, ',', '.')  }}</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">10.000 Leads</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">{{ $product->product_link ?? 'Not Set' }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div id="edit-product" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="edit-product">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Edit Product</h3>
                <form class="space-y-6" enctype="multipart/form-data" wire:submit.prevent="updateProduct({{ $productId }})">
                    @csrf
                    @method('PATCH')
                    <div class="relative">
                        <input type="text" name="name" wire:model="name" id="name" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Product Name" required>
                    </div>
                    <div class="relative">
                        <input type="text" wire:model="sku" name="sku"  id="sku" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="SKU" required>
                    </div>
                    <div class="relative">
                        <input type="number" wire:model="price" name="price" id="price" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Price" required>
                    </div>
                    {{-- <div class="relative">
                        <input type="number" name="discount" wire:model.defer='discount' id="discount" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Discount" required>
                    </div> --}}
                    <div class="relative">
                        <input type="text" wire:model="product_link" name="product_link" id="linkproduct" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="linkproduct" required>
                    </div>
                    <div class="relative">
                        <span class="text-gray-500 px-1 mb-2">Image</span>
                            <label name="image-product" id="image-product" required>
                                {{-- <span class=""> --}}

                                    {{-- </span> --}}
                                    {{-- {{ $image }} --}}
                                    @if ($image_temp)
                                    <img src="{{ $image_temp->temporaryUrl() }}" class="img-preview-edit w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer" alt="">
                                    @else
                                    {{-- dlkfjsdkj --}}
                                    <img src="{{ $image }}" class="img-preview-edit w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer" alt="">
                                    @endif
                                <input class="hidden" wire:model="image_temp" type="file" name="image" id="image-edit" onchange="previewImageEdit()">
                            </label>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" data-modal-toggle="edit-product" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>






