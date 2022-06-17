<div>
    <div class="flex">
        <div class="mt-1 flex flex-col w-full">
            <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color:#7E8299">Campaigns</h1>
            <div class="flex flex-row gap-2">
                <span class="font-reguler text-sm" style="color:#7E8299">100 Campaigns</span>
            </div>
        </div>
        <button
            class="text-blue-400 h-max w-56 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
            type="button" data-modal-toggle="add-campaign">
            {{-- <a href= {{ route('campaign.create') }}> --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            <span>Create Campaign</span>
        </button>
        @livewire('modal.add-campaign')
    </div>

    <div class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg"
        style="margin-top:20px">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="relative w-36 md:w-fit">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-blue-400 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border ring-blue-400 border-blue-400"
                    placeholder="Search..">
            </div>
        </div>
    </div>
    

        <div class="h-max bg-white overflow-x-auto">
            {{-- {{dd($products)}} --}}

            <table class="w-full text-sm text-left">
                <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
                    style="background-color:#06B6D41A">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Operator
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Leads
                        </th>
                        <th scope="col" class="px-6 py-3 w-52">
                            Fp Code
                        </th>
                        <th scope="col" class="px-6 py-3 w-52">
                            Wa Code
                        </th>
                        <th scope="col" class="px-6 py-3 w-52">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($campaigns as $campaign)
                        <tr class="bg-white border-b text-xs text-black">
                            <td class="px-6 py-4">
                                {{-- {{$campaign->id}} --}}
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $campaign->campaign_name }}
                            </td>
                            <td class="px-6 py-4">
                                Hutari Trinurcahyani
                            </td>
                            <td class="px-6 py-4">
                                100 Leads
                            </td>
                            <td class="px-6 py-4">

                                <textarea type="text" id="fp-code" class="rounded-lg text-sm border border-grey-200" style="height: 52px; width:220px"
                                    disabled> <!doctype html>
                            <html lang="en">...</textarea>
                            </td>
                            <td class="px-6 py-4">
                                <textarea type="text" id="fp-code" class="rounded-lg text-sm border border-grey-200" style="height: 52px; width:220px"
                                    disabled> <!doctype html>
                            <html lang="en">...</textarea>
                            <td class="px-6 py-4">
                                <div class="flex flex-row gap-2">
                                    <a href="/editcampaign"
                                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl"
                                        title="Edit Campaign">
                                        <i class="las la-edit"></i>
                                    </a>

                                    <button type="button" class="flex flex-row gap-2 items-center">
                                        <i class="las la-clipboard text-xl text-gray-400 hover:text-cyan-400"></i>
                                        <span>Facebook Pixel Code</span>
                                    </button type="button">
                                    <div class="hidden">
                                        <textarea name="" id="" cols="30" rows="10">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio commodi ex autem magni blanditiis voluptatum assumenda dignissimos
                                temporibus pariatur accusantium! Architecto earum cum nobis accusamus sunt
                                perferendis, modi ut perspiciatis sapiente illum aperiam repudiandae
                                facere sed blanditiis consectetur molestiae, magni aliquam dolorum voluptatibus
                                est reprehenderit dolorem! Ea excepturi quo soluta aperiam veniam ex.
                                Facere minus, earum expedita nam tempore commodi nihil dicta delectus voluptatibus maiores sunt,
                                deleniti ex quidem pariatur aliquam sapiente provident, voluptas animi cumque voluptates ipsa vel qui!
                                Aliquam veniam pariatur deleniti repudiandae sed explicabo totam impedit,
                                asperiores eos doloremque nesciunt natus quam dicta non necessitatibus autem modi.
                            </textarea>
                                    </div>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="flex flex-row gap-2 items-center">
                                    <i class="las la-clipboard text-xl text-gray-400 hover:text-cyan-400"></i>
                                    <span>Tiktok Pixel Code</span>
                                </button type="button">
                                <div class="hidden">
                                    <textarea name="" id="" cols="30" rows="10">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio commodi ex autem magni blanditiis voluptatum assumenda dignissimos
                                temporibus pariatur accusantium! Architecto earum cum nobis accusamus sunt
                                perferendis, modi ut perspiciatis sapiente illum aperiam repudiandae
                                facere sed blanditiis consectetur molestiae, magni aliquam dolorum voluptatibus
                                est reprehenderit dolorem! Ea excepturi quo soluta aperiam veniam ex.
                                Facere minus, earum expedita nam tempore commodi nihil dicta delectus voluptatibus maiores sunt,
                                deleniti ex quidem pariatur aliquam sapiente provident, voluptas animi cumque voluptates ipsa vel qui!
                                Aliquam veniam pariatur deleniti repudiandae sed explicabo totam impedit,
                                asperiores eos doloremque nesciunt natus quam dicta non necessitatibus autem modi.
                            </textarea>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="flex flex-row gap-2 items-center">
                                    <i class="las la-clipboard text-xl text-gray-400 hover:text-cyan-400"></i>
                                    <span>Whatsapp Pixel Code</span>
                                </button type="button">
                                <div class="hidden">
                                    <textarea name="" id="" cols="30" rows="10">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio commodi ex autem magni blanditiis voluptatum assumenda dignissimos
                                temporibus pariatur accusantium! Architecto earum cum nobis accusamus sunt
                                perferendis, modi ut perspiciatis sapiente illum aperiam repudiandae
                                facere sed blanditiis consectetur molestiae, magni aliquam dolorum voluptatibus
                                est reprehenderit dolorem! Ea excepturi quo soluta aperiam veniam ex.
                                Facere minus, earum expedita nam tempore commodi nihil dicta delectus voluptatibus maiores sunt,
                                deleniti ex quidem pariatur aliquam sapiente provident, voluptas animi cumque voluptates ipsa vel qui!
                                Aliquam veniam pariatur deleniti repudiandae sed explicabo totam impedit,
                                asperiores eos doloremque nesciunt natus quam dicta non necessitatibus autem modi.
                            </textarea>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-row gap-2">
                                    <a href="{{ route('campaign.edit', $campaign->id) }}"
                                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl"
                                        title="Edit Campaign">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="/addoperator"
                                        class="bg-gradient-to-r from-emerald-500 to-green-500 hover:bg-gradient-to-r hover:from-emerald-400 hover:to-green-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl"
                                        title="Add Operator">
                                        <i class="las la-users"></i>
                                    </a>
                                    <a href="{{ route('campaign.destroy', $campaign->id) }}"
                                        class="bg-gradient-to-r from-orange-500 to-red-500 hover:bg-gradient-to-r hover:from-orange-400 hover:to-red-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl"
                                        title="Delete Campaign">
                                        <i class="lar la-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    <div class="px-6 py-3 flex flex-row-reverse justify-between items-center border rounded-b-lg"
        style="background-color: #E7F8FB">
        <div class="flex flex-row items-center">
            <!-- Help text -->
                <span class="font-semibold text-gray-400 py-2 text-xs antialiased tracking-wide">Rows per page: 10</span>
                <button id="FilterDropdown" data-dropdown-toggle="FiltersDropdown"
                class="text-gray-400 border-hidden hover:text-cyan-400 font-medium rounded-lg text-sm py-2.5 text-center inline-flex items-center"
                type="button"><svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>
            <!-- Dropdown menu -->
            <div id="FiltersDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="FilterDropdown">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">5</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">10</a>
                    </li>
                </ul>
            </div>
                <span class="font-semibold text-gray-400 py-2 px-4 mt-1 text-xs antialiased tracking-wide">1-10 of 276</span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button class="py-2 px-4 text-2xl font-medium hover:text-cyan-400 text-gray-400 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <
                </button>
                <button class="py-2 px-4 text-2xl font-medium hover:text-cyan-400 text-gray-400 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </button>
            </div>
        </div>
    </div>
