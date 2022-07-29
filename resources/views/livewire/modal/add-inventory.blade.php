<!-- Main modal -->
<div id="add-inventory" tabindex="-1" aria-hidden="true"
    class="hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-96 md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100">
            <button type="button"
                class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="add-inventory">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Add Inventory</h3>
                <span class="text-gray-500 px-1 py-10">Product</span>
                <form class="space-y-6 h-96 overflow-y-auto" action="" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="relative">
                        <select name="product-name" id="product-name"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option disabled selected>Select Product</option>
                            <option value="1">Select 1</option>
                            <option value="2">Select 2 </option>
                            <option value="3">Select 3</option>
                        </select>
                    </div>

                    <div class="relative">
                        <input type="number" id="sku" name="sku" placeholder="SKU"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="">
                        <span class="text-gray-500 px-1">Create Promotion</span>
                    </div>
                    <div class="repeater" id="group_b">
                        <div data-repeater-list="group_b">
                            <div data-repeater-item="">
                                <div class="py-2">
                                    <input type="text" name="promotion-name" wire:model.defer='promotion-name'
                                        id="promotion-name"
                                        class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Promotion Name" required>
                                </div>
                                <div class="py-2">
                                    <select name="promotion-type" id="promotion-type"
                                        class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                        <option disabled selected>Select Promotion Type</option>
                                        <option value="1">Select 1</option>
                                        <option value="2">Select 2 </option>
                                        <option value="3">Select 3</option>
                                    </select>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-gray-500 px-1">Promotion Product Price</span>
                                    <button>
                                    <span class="iconify" data-icon="emojione-monotone:information"></span>
                                    </button>
                                </div>

                                <div class="relative">
                                    <div class="flex w-9 justify-center absolute rounded-l-lg inset-y-0 left-0 items-center pointer-events-none bg-gray-200 text-xs text-gray-400">
                                        IDR
                                    </div>
                                    <input type="number"  wire:model.debounce.500ms='promotion_product_price' id="price" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                                    @error('promotion_product_price') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="relative mt-4">
                                    <div class="flex w-9 justify-center absolute rounded-l-lg inset-y-0 left-0 items-center pointer-events-none bg-gray-200 text-xs text-gray-400">
                                        %
                                    </div>
                                    <input type="number"  wire:model.debounce.500ms='promotion_product_percent' id="discount" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="0" required>
                                    @error('promotion_product_percent') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="relative mt-4">
                                    <input type="number" disabled wire:model.debounce.500ms='total_promotion' id="total" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Total Promotion">
                                </div>
                                <button type="button" class="text-white rounded-lg mt-6" data-repeater-delete>
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" class="text-[#3B82F6] border-dashed rounded-lg p-2"
                            data-repeater-create="">
                            <i class="las la-plus-circle"></i>
                            Add Other Promotion
                        </button>
                    </div>

                    <div class="flex flex-row gap-3">
                        <button type="submit" wire:click='store'
                            class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"
    integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('.repeater').repeater({
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            defaultValues: {
                'text-input': 'foo'
            },
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this materi?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: true
        })
    });
</script>
