<div class="container mx-auto py-5 px-5 md:px-0">
    <div class="bg-white rounded-lg w-full shadow-sm p-5 border-2">
        <div class="pb-5">
            <div class="border-b border-zinc-300 flex flex-row justify-between items-center py-3 px-5">
                <h1 class="text-black font-semibold tracking-wide text-xl">Filter Dashboard</h1>
                <button id="FilterReporting" data-dropdown-toggle="FiltersReporting" class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Daily <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="FiltersReporting" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="FilterReporting">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Daily</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Weekly</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Monthly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-6 md:grid-cols-12 gap-4">
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.advertising-cost />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.total-leads />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.total-closing />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.closing-rate />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.upselling />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.total-box />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.cost-perresult />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.cross-selling />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.caq-lead />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.caq-customer />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.caq-bottle />
            </div>
            <div class="col-span-3 md:col-span-6 lg:col-span-3 mx-auto">
                <livewire:card.caq-total />
            </div>
        </div>
    </div>
</div>