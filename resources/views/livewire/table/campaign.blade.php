<div>
    <div class="mt-1 flex flex-col w-full">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color:#7E8299">Campaigns</h1>
        <div class="flex flex-row gap-2">
            <span class="font-reguler text-sm" style="color:#7E8299">100 Campaigns</span>
        </div>
    </div>
    <div
        class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg">
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
                <div class="flex flex-row justify-between items-center w-full">
                    <button
                        class="text-blue-400 w-56 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                        type="button" data-modal-toggle="add-campaign">
                        <i class="las la-layer-group text-xl"></i>
                        <span>Create Campaign</span>
                    </button>
                    <livewire:modal.add-campaign />
                </div>
            </div>
        </div>
        {{--  --}}
    </div>
    <div class="overflow-x-auto h-96 bg-white -lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono" style="background-color:#06B6D41A">
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
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        Etawaku Platinum
                    </td>
                    <td class="px-6 py-4">
                        Hutari Trinurcahyani
                    </td>
                    <td class="px-6 py-4">
                        100 Leads
                    </td>
                    <td class="px-6 py-4">
                        <textarea type="text" id="fp-code" class="rounded-lg text-sm border border-grey-200" style="height: 52px; width:220px" disabled> <!doctype html>
<html lang="en">...</textarea>
                    </td>
                    <td class="px-6 py-4">
                        <textarea type="text" id="fp-code" class="rounded-lg text-sm border border-grey-200" style="height: 52px; width:220px" disabled> <!doctype html>
<html lang="en">...</textarea>
                    <td class="px-6 py-4">
                        <div class="flex flex-row gap-2">
                            <a href="/editcampaign"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl"
                                title="Edit Campaign">
                                <i class="las la-edit"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="px-6 py-3 flex flex-row justify-between items-center border rounded-b-lg"
            style="background-color: #e6f8fa">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="mt-1 flex w-full">
                    <span class="font-semibold text-xs antialiased text-white tracking-wide" style="color: #7E8299">Rows per page: 10</span>
                </div>
            </div>
        </div>
</div>
