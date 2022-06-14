<!-- Main modal -->
<div id="add-campaign" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                class="absolute top-5 right-6 text-white-400 bg-transparent hover:bg-red-500 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="add-campaign">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Create Campaign</h3>
                <form class="space-y-6" method="POST" action="{{ route('campaign.store') }}">
                    @csrf
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-layer-group text-gray-400"></i>
                        </div>
                        <input type="text" name="add_item" id="add_item"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Add Item" required>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-box text-gray-400"></i>
                        </div>
                        <input type="text" name="nominal" id="nominal"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Nominal (Rp)" required>
                    </div>
                    <div class="relative">
                        <div class="flex justify-center mt-8">
                            <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                <div class="m-4">
                                    <label class="inline-block mb-2 text-gray-500">Upload
                                        Image(jpg,png,svg,jpeg)</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    Select a photo</p>
                                            </div>
                                            <input type="file" class="opacity-0" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex p-2 space-x-4">
                                    <button class="px-4 py-2 text-white bg-red-500 rounded shadow-xl">Cannel</button>
                                    <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="lab la-facebook-f text-gray-400"></i>
                        </div>
                        <select name="facebook_pixel_id"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option selected hidden>Facebook Event Form</option>
                            <option>Add Payment Info</option>
                            <option>Add to Cart</option>
                            <option>Add to Wishlist</option>
                            <option>Complate Registration</option>
                            <option>Contract</option>
                            <option>Customize Product</option>
                            <option>Lead</option>
                            <option>Purchase</option>
                            <option>View Content</option>
                        </select>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-sticky-note text-gray-400"></i>
                        </div>
                        <textarea type="thanks_page" name="thanks_page" id="thanks_page"
                            class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Thanks Page" required></textarea>
                    </div>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="lab la-tumblr text-gray-400"></i>
                        </div>
                        <select name="facebook_even_wa"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option selected hidden>Facebook Event WA</option>
                        </select>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="customer_cs" name="customer_cs" id="customer_cs"
                            class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Customer to CS" required></textarea>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="cs_customer" name="cs_customer" id="cs_customer"
                            class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="CS to Customer" required></textarea>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                            Campaign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
