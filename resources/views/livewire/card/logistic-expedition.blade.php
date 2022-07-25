<div class="px-6 py-3 bg-white border rounded-lg shadow-md">
    <div class="flex flex-row justify-between items-center">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="">
                <h1 class="font-semibold text-xl antialiased text-black tracking-wide">Expedition</h1>
                <div class="flex flex-row gap-2 py-2">
                    <span class="font-medium text-sm text-zinc-400">1000 Data</span>
                </div>
            </div>

        </div>
        <div class="flex flex-col gap-2 md:gap-0 md:flex-row w-max">
            <div class="relative mr-2">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block px-4 py-2 pl-10 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search..">
            </div>
            <button
                class="w-40 hover:text-blue-400 h-max shadow bg-gradient-to-r from-cyan-500 to-blue-500 border text-white hover:from-white hover:to-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                type="button" data-modal-toggle="add-logistic-expedition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-xs">Add Expedition</span>
            </button>
        </div>
    </div>
    <div class="py-5 flex flex-wrap gap-4 bg-">
        <livewire:card.detail-expedition/>
        <livewire:card.detail-expedition/>
        <livewire:card.detail-expedition/>
        <livewire:card.detail-expedition/>
        <livewire:card.detail-expedition/>
        <livewire:card.detail-expedition/>
    </div>
</div>
