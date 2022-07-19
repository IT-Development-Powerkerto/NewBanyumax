<!-- Main modal -->
<div id="add-advertising-expenditure-adv" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-slate-100" >
            <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-advertising-expenditure-adv">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Advertising Expenditure</h3>
                <span class="text-gray-500 px-1 py-10">Primary Card</span>
                <form class="space-y-6" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative">
                        <select name="advertiser-name" id="advertiser-name"
                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option disabled selected>Advertiser Name</option>
                            <option value="1">Azizi Asadel</option>
                            <option value="2">Marsha Lenathea</option>
                            <option value="3">Yesica Tamara</option>
                        </select>
                    </div>
                    <div class="relative">
                        <input type="text" name="campaign" wire:model.defer='campaign' id="campaign" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Campaign" required>
                    </div>
                    <div class="relative">
                        <input type="text" name="product" wire:model.defer='product' id="product" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Product Name" required>
                    </div>
                    <div class="relative pt-5">
                        <input type="number" name="realized-budget" wire:model.defer='realized-budget' id="realized-budget" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Realized Budget" required>
                    </div>
                    <div class="relative">
                        <input type="number" name="value-tax" wire:model.defer='value-tax' id="value-tax" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Value Added Tax" required>
                    </div>
                    <div class="relative">
                        <span class="text-gray-500 px-1 py-10">Upload Attachment</span>
                        <input
                        class="block w-full text-sm text-gray-500 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="proof_lead" type="file" multiple>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" wire:click='store' class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Create</button>
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
