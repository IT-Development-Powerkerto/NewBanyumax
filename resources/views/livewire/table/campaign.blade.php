<div>
    <div class="mt-1 flex flex-col w-full">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color:#7E8299">Campaigns</h1>
        <div class="flex flex-row gap-2">
            <span class="font-reguler text-sm" style="color:#7E8299">100 Campaigns</span>
        </div>
    </div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg">
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
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 ring-blue-400 border-blue-400"
                    placeholder="Search..">
            </div>

            <div class="flex flex-col gap-2 md:gap-0 md:flex-row">
            </div>
            <button
                class="text-blue-400 w-56 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                type="button" data-modal-toggle="add-campaign">
                {{-- <a href= {{ route('campaign.create') }}> --}}
                <i class="las la-layer-group text-xl"></i>
                <span>Create Campaign</span>
            </button>
            @livewire('modal.add-campaign')
        </div>
    </div>
    <div class="overflow-x-auto h-96 bg-white -lg">

        <div class="overflow-x-auto h-96 bg-white rounded-b-lg">
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
        <div class="px-6 py-3 flex flex-row justify-between items-center border rounded-b-lg"
            style="background-color: #e6f8fa">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="mt-1 flex w-full">
                    <span class="font-semibold text-xs antialiased text-white tracking-wide" style="color: #7E8299">Rows
                        per page: 10</span>
                </div>
            </div>
        </div>
    </div>
