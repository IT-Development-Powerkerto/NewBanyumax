<div class="container max-w-96 mx-auto">

    <!-- Dropdown menu -->
    <div id="Pivot-Information" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="pivot-information">
            <li class="-mb-px mr-2 last:mr-0 text-center">
                <a class="block px-4 py-2 bg-white cursor-pointer text-[#00000080] hover:bg-gray-100 hover:text-blue-700"
                    onclick="changeAtiveTab(event,'tab-product')">Product
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 text-center">
                <a class="block px-4 py-2 bg-white cursor-pointer text-[#00000080] hover:bg-gray-100 hover:text-blue-700"
                    onclick="changeAtiveTab(event,'tab-region')">Region
                </a>
            </li>
        </ul>
    </div>
    <div class="flex flex-wrap" id="tabs-id">
        <div class="w-full">
            <div class="flex justify-between">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6">
                    <div class="px-4 py-5 flex-auto">
                        <div class="tab-content tab-space">
                            <div class="block" id="tab-product">
                                <div class="grid grid-cols-12 bg-white py-5">
                                    <div class="col-span-8">
                                        <livewire:modal.maps-indo-product />
                                    </div>
                                    <div class="col-span-4">
                                        <div class="mt-10 grid grid-cols-2 px-5 py-2 rounded-t-lg self-center">
                                            <div class="text-xs font-semibold text-gray-400">
                                                Product
                                            </div>
                                            <div class="text-xs font-semibold text-gray-400 justify-self-end">
                                                Quantity
                                            </div>
                                        </div>
                                        <div class="rounded-b-lg h-72 self-center overflow-y-auto ">
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Etawaku Platinum
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    10.000
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Gizidat
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    4
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Generous
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    4
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    New Briswa
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    4
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Nutriflakes
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    4
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="text-xs text-gray-400 self-center">
                                                    <img class="w-10 h-10 rounded-lg" src="assets/img/zee.jpeg"
                                                        alt="user photo">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Weight Herba
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden" id="tab-region">
                                <div class="grid grid-cols-12 bg-white py-5">
                                    <div class="col-span-8">
                                        <livewire:modal.maps-indo />
                                    </div>
                                    <div class="col-span-4">
                                        <div class="mt-10 grid grid-cols-2 px-5 py-2 rounded-t-lg self-center">
                                            <div class="text-xs font-semibold text-gray-400">
                                                REGION
                                            </div>
                                            <div class="text-xs font-semibold text-gray-400 justify-self-end">
                                                SOLD PRODUCT
                                            </div>
                                        </div>
                                        <div class="rounded-b-lg h-72 self-center overflow-y-auto ">
                                            <div class="grid grid-cols-4 px-5 pb-2">
                                                <div class="bg-[#06B6D4] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Kalimantan Tengah
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    10.000
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 py-5 pb-2">
                                                <div class="bg-[#3B82F6] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Riau
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    800
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 py-5 pb-2">
                                                <div class="bg-[#F97316] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Palembang
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    300
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 py-5 pb-2">
                                                <div class="bg-[#EF4444] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Papua Barat
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    100
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 py-5 pb-2">
                                                <div class="bg-[#f045fe] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Nusa Tenggara Timur
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    80
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-4 px-5 py-5 pb-2">
                                                <div class="bg-[#fae31b] w-5 h-5 rounded-lg self-center">
                                                </div>
                                                <div class="col-span-2 text-xs text-black self-center">
                                                    Jawa Timur
                                                </div>
                                                <div class="text-xs text-black justify-self-end self-center">
                                                    10
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
