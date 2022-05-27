<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Edit Campaign</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    @livewireStyles
</head>
<body class="bg-zinc-200" style="font-family: 'Poppins', sans-serif;">
    <livewire:navbar.navbar /> 
    <div class="container mx-auto py-5 px-5 md:px-0">
        <div class="bg-white p-2 md:p-5 rounded-lg shadow-sm">
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Edit Campaign</h3>
                <form class="space-y-6" action="#">
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="las la-layer-group text-gray-400"></i>
                            </div>
                            <input type="text" name="campaign_name" id="campaign_name" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Campaign Name" required>
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="las la-box text-gray-400"></i>
                            </div>
                            <select id="product" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option selected hidden>Select Product</option>
                                <option value="Role">Etawaku</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-facebook-f text-gray-400"></i>
                            </div>
                            <input type="facebook_pixel" name="facebook_pixel" id="facebook_pixel" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Facebook Pixel" required>
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-facebook-f text-gray-400"></i>
                            </div>
                            <select id="facebook_event" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option selected hidden>Facebook Event</option>
                                <option value="Role">Add To Cart</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-tumblr text-gray-400"></i>
                            </div>
                            <input type="tiktok_pixel" name="tiktok_pixel" id="tiktok_pixel" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tiktok Pixel" required>
                        </div>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="lab la-tumblr text-gray-400"></i>
                            </div>
                            <select id="tiktok_event" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                <option selected hidden>Tiktok Event</option>
                                <option value="Role">Add To Cart</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="lab la-whatsapp text-gray-400"></i>
                        </div>
                        <select id="whatsapp_event" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                            <option selected hidden>Whatsapp Event</option>
                            <option value="Role">Add To Cart</option>
                        </select>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="customer_cs" name="customer_cs" id="customer_cs" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Customer to CS" required></textarea>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-user-friends text-gray-400"></i>
                        </div>
                        <textarea type="cs_customer" name="cs_customer" id="cs_customer" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="CS to Customer" required></textarea>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-sticky-note text-gray-400"></i>
                        </div>
                        <textarea type="thanks_page" name="thanks_page" id="thanks_page" class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Thanks Page" required></textarea>
                    </div>
                    <div class="flex flex-row justify-center gap-5 py-2">
                        <div class="flex items-center">
                            <input checked id="automation_rotation" type="radio" value="" name="colored-radio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500">
                            <label for="automation_rotation" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Automation Rotation</label>
                        </div>
                        <div class="flex items-center">
                            <input id="comparison_rotation" type="radio" value="" name="colored-radio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500">
                            <label for="comparison_rotation" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comparison Rotation</label>
                        </div>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save Changes</button>
                        <a href="/campaign" class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
</body>
</html>