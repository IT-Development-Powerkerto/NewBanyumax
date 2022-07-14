<div class="flex flex-col md:grid md:grid-cols-12 gap-4">
    @foreach ($products as $product)
    <div class="w-full md:col-span-6 lg:col-span-3 flex justify-center">
        <div class="bg-white rounded-lg w-full md:w-72 h-36">
            <div class="flex flex-col h-full justify-center gap-4 px-3">
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
                        <img src="{{ url( $product->image != null ? 'storage/'.str_replace('public', '',$product->image) : 'assets/img/favicon.png') }}" class="h-14 w-14 rounded-lg border bg-white shadow-sm mb-1" alt="">
                        <div class="flex flex-col">
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">{{ $product->sku ?? 'Not Set' }}</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">Rp. {{ number_format($product->price, 2, ',', '.')  }}</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">10.000 Leads</h1>
                            <h1 class="text-white text-xs tracking-wide mb-1" style="color: #6E6893">{{ $product->link ?? 'Not Set' }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>






