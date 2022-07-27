<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-white border-t border-x rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="">
                <h1 class="font-semibold text-xl antialiased text-black tracking-wide">Staff </h1>
                <div class="flex flex-row gap-2 py-2">
                    <span class="font-medium text-sm text-zinc-400">{{$jml_staff}} Staff</span>
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
                    <input type="search" id="default-search" wire:model = "search"
                        class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..">
                </div>

                <div class="mr-2 w-36 md:w-fit">
                    <!-- Modal toggle -->
                    <button
                        class="text-gray-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                        type="button" data-modal-toggle="export-lead">
                        <i class="las la-print text-xl"></i>
                        <span>Export</span>
                    </button>

                    <!-- Main modal -->
                    <div id="export-lead" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-slate-100 rounded-lg shadow">
                                <button type="button"
                                    class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="export-lead">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="py-6  lg:px-8">
                                    <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                        Export to Excel</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="flex flex-row gap-2">
                                            <div class="relative">
                                                <input type="date" name="date-one" wire:model.defer='date-one'
                                                    id="date-one"
                                                    class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                    required>
                                            </div>
                                            <div class="relative self-center">
                                                <p>-</p>
                                            </div>
                                            <div class="relative">
                                                <input type="date" name="date-two" wire:model.defer='date-two'
                                                    id="date-two"
                                                    class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit"
                                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Export</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="hover:text-blue-400 h-max shadow bg-gradient-to-r from-cyan-500 to-blue-500 border text-white hover:from-white hover:to-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                    type="button" data-modal-toggle="add-staff-on-admin">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Add Staff</span>
                </button>
            </div>
        </div>
    </div>
    <div class="h-max bg-white overflow-x-auto border-x px-5">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-100 uppercase font-mono">
                <tr>
                    <th scope="col" class="py-3 px-5">
                        Staff
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Status
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Poin
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ($staff as $stf)
                <tr class="bg-white border-b text-xs text-black">
                    <td class=" py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-12 h-12 rounded-full" src="assets/img/zee.jpeg" alt="Ava image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-black truncate dark:text-white">
                                    {{$stf->name}}
                                </p>
                                <p class="text-sm font-reguler text-gray-500 truncate dark:text-white">
                                    {{$stf->role->name}}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class=" py-4">
                        <p
                            class="text-sm w-max py-1 px-2 rounded-lg bg-[#06B6D4] bg-opacity-25 text-[#06B6D4] font-semibold truncate dark:text-white border">
                            Work</p>
                    </td>
                    <td class=" py-4">
                        <p
                            class="text-sm w-max py-1 px-2 rounded-lg bg-purple-300 bg-opacity-25 text-purple-500 font-semibold truncate dark:text-white border">
                            50 Point</p>
                    </td>
                    <td class=" py-4">
                        <div class="flex flex-row">
                            <button data-modal-toggle="edit-staff-on-admin" type="button"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="las la-edit"></i>
                            </button>
                            <button data-modal-toggle="delete-staff-on-admin" type="button"
                                class="bg-gradient-to-r ml-2 from-orange-500 to-red-500 hover:text-red-700 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="las la-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr class="bg-white border-b text-xs text-black">
                    <td class="py-4" colspan="10">
                        <div class="text-gray-400 rounded-md px-3 py-1 text-center">
                            Data Not Available
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="py-3 px-5 flex justify-between items-center border rounded-b-lg bg-white">

        <button id="dropdownDefault" data-dropdown-toggle="dropdownFilter"
            class="text-gray-500 bg-gray-200 bg-gradient-to-r hover:text-white hover:from-cyan-400 hover:to-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">{{$paginate}}<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div id="dropdownFilter"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-20 dark:bg-gray-700"
            data-popper-placement="bottom"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(351.5px, 735.5px, 0px);">
            <ul class="py-1 text-sm text-gray-700 text-center dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="javascript:void(0)" wire:click="setPaginate(5)"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="javascript:void(0)" wire:click="setPaginate(10)"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">10</a>
                </li>
                <li>
                    <a href="javascript:void(0)" wire:click="setPaginate(10)"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">20</a>
                </li>
            </ul>
        </div>

        {{ $staff->onEachSide(1)->links('livewire.custom-pagination-links-view') }}
        {{-- <nav aria-label="Page navigation example">
            <ul class="inline-flex items-center -space-x-px">
                <li>
                    <a href="#"
                        class="block py-2 px-3 ml-0 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="z-10 py-2 px-3  ml-2 rounded-lg leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 ml-0 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav> --}}

        <div></div>

    </div>
</div>
