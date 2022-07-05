@foreach ($products as $product)
{{-- {{dd($product)}} --}}
<!-- Main modal -->
<div id="edit-product{{$product->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="edit-product{{$product->id}}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Edit Product</h3>
                <form class="space-y-6" action="{{ route('product.update',['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="relative">
                        <input type="text" value="{{$product->name}}" name="name" id="name" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Product Name" required>
                    </div>
                    <div class="relative">
                        <input type="text" value="{{$product->sku}}" name="sku"  id="sku" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="SKU" required>
                    </div>
                    <div class="relative">
                        <input type="number" value="{{$product->price}}" name="price" id="price" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Price" required>
                    </div>
                    {{-- <div class="relative">
                        <input type="number" name="discount" wire:model.defer='discount' id="discount" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Discount" required>
                    </div> --}}
                    <div class="relative">
                        <input type="text" value="{{$product->product_link}}" name="product_link" id="linkproduct" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="linkproduct" required>
                    </div>
                    <div class="relative">
                        <span class="text-gray-500 px-1 mb-2">Image</span>
                            <label type="file" name="image-product" id="image-product" required>
                                <span class="">
                                    <img src="assets/img/icon-foto.png" class="img-preview-edit w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer" src="{{ asset($product->image) }}" alt="">
                                </span>
                                <input class="hidden" value="{{$product->image}}" type="file" name="image" id="image-edit" onchange="previewImageEdit()">
                            </label>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button wire:click="update" type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
    function previewImageEdit(){

        const image = document.querySelector('#image-edit');
        const imgPreview = document.querySelector('.img-preview-edit');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
        }
</script>

