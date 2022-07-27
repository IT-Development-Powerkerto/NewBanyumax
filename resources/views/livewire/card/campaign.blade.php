<div class="">
    <div class="bg-white w-full rounded-lg px-5 py-5 shadow">
        <div class="grid grid-cols-12">
            <div class="col-span-2">
                <img src="/Assets/img/zee.jpeg" alt="" class="rounded-lg w-10 h-10">
            </div>
            <div class="col-span-6 flex flex-col">
                <span>Etawaku Platinum</span>
                <span class="text-[#7E8299] ">100 Lead</span>
            </div>
            <div class="col-span-4 flex items-start text-[#7E8299] gap-3 justify-end">
                <button class="" type="button" data-modal-toggle="edit-campaign">
                    <span class="iconify cursor-pointer" data-icon="akar-icons:edit"></span>
                </button>
                <button class="" type="button" data-modal-toggle="add-operator">
                    <span class="iconify cursor-pointer" data-icon="fluent:people-community-add-20-regular"></span>
                </button>
                <button class="" type="button" data-modal-toggle="delete-campaign">
                    <span class="iconify cursor-pointer" data-icon="bytesize:trash"></span>
                </button>
                <button class="" type="button">
                    <span class="iconify cursor-pointer" data-icon="fluent:copy-20-regular"></span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-12 text-xs py-5 w-full">
            <div class="col-span-4 px-4">
                <div class="flex w-full gap-1">
                    <span class="text-[#7E8299] font-semibold">FP code </span>
                    <span class="iconify text-xl text-[#7E8299]" data-icon="fluent:copy-20-regular"></span>
                </div>
            </div>
            <div class="col-span-4 px-4">
                <div class="flex w-full gap-1">
                    <span class="text-[#7E8299] font-semibold">WA code </span>
                    <span class="iconify text-xl text-[#7E8299]" data-icon="fluent:copy-20-regular"></span>
                </div>
            </div>
            <div class="col-span-4 px-4">
                <div class="flex w-full gap-1">
                    <span class="text-[#7E8299] font-semibold">TT code </span>
                    <span class="iconify text-xl text-[#7E8299]" data-icon="fluent:copy-20-regular"></span>
                </div>
            </div>
        </div>
        <div class="gap-4 flex flex-row items-center">
            <div class="flex flex-row items-center -space-x-2">
                <div>
                    <img src="Assets/img/zee.jpeg" class="w-8 h-8 rounded-full shadow-lg border-2 border-white"
                        alt="" data-tooltip-target="tooltip1">
                    <div id="tooltip1" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Zee
                        <div class="tooltip-arrow" data-popper-arrow>

                        </div>
                    </div>
                </div>
                </button>
                <div>
                    <img src="Assets/img/marsha.jpeg" class="w-8 h-8 rounded-full shadow-lg border-2 border-white"
                        alt="" data-tooltip-target="tooltip2">
                    <div id="tooltip2" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Marsha
                        <div class="tooltip-arrow" data-popper-arrow>

                        </div>
                    </div>
                </div>
                <div>
                    <img src="Assets/img/zee.jpeg" class="w-8 h-8 rounded-full shadow-lg border-2 border-white"
                        alt="" data-tooltip-target="tooltip3">
                    <div id="tooltip3" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Aji
                        <div class="tooltip-arrow" data-popper-arrow>

                        </div>
                    </div>
                </div>
                <div>
                    <img src="Assets/img/zee.jpeg" class="w-8 h-8 rounded-full shadow-lg border-2 border-white"
                        alt="" data-tooltip-target="tooltip4">
                    <div id="tooltip4" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Habib
                        <div class="tooltip-arrow" data-popper-arrow>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-8 h-8 flex items-center place-content-center rounded-full shadow-lg border-2 border-white bg-[#7E8299] text-xs cursor-default"
                        data-tooltip-target="tooltip5">
                        +10
                    </div>
                    <div id="tooltip5" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Lainnya
                        <div class="tooltip-arrow" data-popper-arrow>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" data-modal-toggle="edit-table-campaign">
                    <span class="text-[#7E8299] text-sm">4 Operators</span>
                </button>
            </div>
            <livewire:modal.edit-campaign />
            <livewire:modal.add-operator />
            <livewire:modal.delete-campaign />
            <livewire:modal.edit-table-campaign/>
            {{-- @livewire('modal.edit-table-campaign') --}}
        </div>
    </div>
</div>
