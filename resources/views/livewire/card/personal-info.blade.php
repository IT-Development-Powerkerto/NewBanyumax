<div class="bg-white rounded-xl shadow-xl border px-5 col-span-8 mb-10">
    <div class="container">
        <div class="flex flex-wrap" id="tabs-id">

            <div class="w-full">
                <div class="flex justify-between">
                    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                        <li class="-mb-px mr-2 last:mr-0 text-center">
                            <a class="font-semibold px-5 py-3 text-black bg-white flex justify-center gap-2 border-b-2 border-[#EF4444] cursor-pointer"
                                onclick="changeAtiveTab(event,'tab-personal-info')">
                                Personal Information
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 text-center">
                            <a class="font-semibold px-5 py-3 text-gray-600 text-black bg-white flex justify-center gap-2 cursor-pointer"
                                onclick="changeAtiveTab(event,'tab-files')">
                                Files
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6">
                        <div class="px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">

                                <div class="block" id="tab-personal-info">
                                    <div class="overflow-x-auto">
                                        <div class="w-96 md:w-full lg:w-full">
                                            {{-- USER INFO --}}
                                            <div class="flex flex-row justify-between items-center">
                                                <div class="text-lg font-semibold">
                                                    User Info
                                                </div>
                                                <div class="text-xs text-blue-600 font-semibold">
                                                    <a href="">Edit</a>
                                                </div>
                                            </div>
                                            <div class="py-5">
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Full Name</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Marsha Lenathea
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Position</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Customer Service
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Phone Number</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        09837929488
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Email</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Marsha@mail.com
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Address</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Repellendus qui amet sed in? Quasi ad exercitationem minima
                                                        quisquam, obcaecati minus. Debitis beatae magnam temporibus
                                                        accusantium deleniti quibusdam iure numquam deserunt.
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- COMPANY INFO --}}
                                            <div class="flex flex-row justify-between items-center">
                                                <div class="text-lg font-semibold">
                                                    Company Info
                                                </div>
                                                <div class="text-xs text-blue-600 font-semibold">
                                                    <a href="">Edit</a>
                                                </div>
                                            </div>
                                            <div class="py-5">
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Company Name</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        PT. Powetkerto Wahyu Keprabon
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Phone Number</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        08928736910
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Email</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Pwkpowekwerto@gmail.com
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Initial Company</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        PWK
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Address</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Repellendus qui amet sed in? Quasi ad exercitationem minima
                                                        quisquam, obcaecati minus. Debitis beatae magnam temporibus
                                                        accusantium deleniti quibusdam iure numquam deserunt.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="hidden" id="tab-files">
                                    tab2
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
