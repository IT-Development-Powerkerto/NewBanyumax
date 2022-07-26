<div id="payment" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-4 rounded-t">
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="payment">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="text-xs flex gap-6">
                    <p>Pay in</p>
                    <p class="text-red-600">23:45:21</p>
                </div>
            </div>
            <!-- Modal body -->
            <div class="p-5 h-96 overflow-y-auto">
                <div class="flex gap-10 items-center">
                    <img src="assets/img/mandiri.png" class="h-11 w-11 border shadow-md" alt="">
                    <h2 class="text-3xl font-bold text-gray-800 py-3">Bank Mandiri</h2>
                </div>
                <p class="text-sm text-gray-600">Make a payment from your Mandiri bank account to the following virtual
                    account number.</p>
                <div class="py-3">
                    <div class="font-bold text-gray-700 py-1 text-sm">
                        Company Code
                    </div>
                    <div class="font-bold text-sm py-1 flex justify-between border-b border-gray-400">
                        <p>7122</p>
                        <button class="text-xs text-[#06B6D4]">Copy</button>
                    </div>
                </div>
                <div class="py-3">
                    <div class="font-bold text-gray-700 py-1 text-sm">
                        Virtual Account
                    </div>
                    <div class="font-bold text-sm py-1 flex justify-between border-b border-gray-400">
                        <p>886172728400</p>
                        <button class="text-xs text-[#06B6D4]">Copy</button>
                    </div>
                </div>
                <div class="py-3">
                    <div class="font-bold text-gray-700 py-1 text-sm">
                        How to Make Payment
                    </div>

                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-2">
                            <button type="button" class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                <span class="text-sm">ATM</span>
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <div class="bg-gray-100 rounded-md p-4 text-sm">
                                   <p>1. Pilih Bayar/Beli pada menu utama.</p>
                                   <p>2. Pilih Lainnya.</p>
                                   <p>3. Pilih Multi Payment.</p>
                                   <p>4. Masukkan kode perusahaan 70012.</p>
                                   <p>5. Masukkan nomor virtual account, lalu konfirmasi.</p>
                                   <p>6. Pembayaran selesai.</p> 
                                </div>
                            </div>
                        </div>
                        
                        <h2 id="accordion-flush-heading-3">
                            <button type="button" class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                <span class="text-sm">Internet Banking</span>
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <div class="bg-gray-100 rounded-md p-4 text-sm">
                                    <p>1. Pilih Bayar pada menu utama.</p>
                                    <p>2. Pilih Multi Payment.</p>
                                    <p>3. Pilih Dari rekening.</p>
                                    <p>4. Pilih Midtrans di bagian Penyedia jasa.</p>
                                    <p>5. Masukkan nomor virtual account, lalu konfirmasi.</p>
                                    <p>6. Pembayaran selesai.</p> 
                                 </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b">
                <button class="btn btn-next w-full bg-cyan-400 text-white py-2 px-5 rounded-lg" type="button" data-modal-toggle="payment">
                    Pay Now
                </button>
            </div>
        </div>
    </div>
</div>
