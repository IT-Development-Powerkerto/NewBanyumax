<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Campaigns</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">100 Campaigns</span>
                </div>
            </div>
            <button class="text-blue-400 w-56 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center" type="button" data-modal-toggle="add-campaign">
                <i class="las la-layer-group text-xl"></i>
                <span>Create Campaign</span>
            </button>
            <livewire:modal.add-campaign />
        </div>
    </div>
    <div class="overflow-x-auto h-96 bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Campaign Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operators
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Leads
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Facebook Pixel
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Tiktok Pixel
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Whatsapp Code
                    </th>
                    <th scope="col" class="px-6 py-3">
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
                        1 Operator
                    </td>
                    <td class="px-6 py-4">
                        75 Leads
                    </td>
                    <td class="px-6 py-4">
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
                            <a href="/editcampaign" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl" title="Edit Campaign">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="/addoperator" class="bg-gradient-to-r from-emerald-500 to-green-500 hover:bg-gradient-to-r hover:from-emerald-400 hover:to-green-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl" title="Add Operator">
                                <i class="las la-users"></i>
                            </a>
                            <a href="#" class="bg-gradient-to-r from-orange-500 to-red-500 hover:bg-gradient-to-r hover:from-orange-400 hover:to-red-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl" title="Delete Campaign">
                                <i class="lar la-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
