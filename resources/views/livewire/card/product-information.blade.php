@foreach ($products as $product)
<div class="w-full md:col-span-6 lg:col-span-3 flex justify-center">
    <div class="bg-white rounded-lg w-full md:w-72 h-36">
        <div class="flex flex-col h-full justify-center gap-4 px-3">
            <div class="flex flex-row border-orange-500 border-b py-2 justify-between items-center -mt-1">
                <h1 class="text-orange-500 tracking-wide font-semibold text-base ">{{ $product->name }}</h1>
                <div class="text-white text-xl -mt-1">
                    <i class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-edit hover:text-cyan-500" data-modal-toggle="edit-product{{$product->id}}"></i>
                    <i class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-trash-alt hover:text-red-700" data-modal-toggle="delete-product{{$product->id}}" ></i>
                    {{-- <i class="bg-gradient-to-r from-orange-500 to-red-500 rounded las la-trash-alt hover:text-red-700" onclick="confirmDelete({{$product->id}})" type="submit"></i> --}}
                </div>
            </div>
            <div class="flex flex-row justify-between items-center gap-2">
                <div class="flex flex-row items-center gap-5">
                    <img src="{{ $product->image ?? 'assets/img/favicon.png' }}" class="h-14 w-14 rounded-lg border bg-white shadow-sm mb-1" alt="">
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
<livewire:modal.edit-product />
@endforeach

{{-- <div id="delete-product{{$product->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <div class="py-6 px-6 lg:px-8">
                <form class="space-y-6" action="{{ route('product.destroy', ['product'=>$product->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="text-center text-xl text-gray-700 font-bold mb-12">
                        <h1>Delete Product ?</h1>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" class="w-full bg-red-600 text-white border font-medium rounded-xl text-sm px-5 py-2.5 text-center">Delete</button>
                        <button class="w-full text-gray-400 font-medium rounded-xl text-sm px-5 py-2.5 text-center border-2" data-modal-toggle="delete-product">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}






