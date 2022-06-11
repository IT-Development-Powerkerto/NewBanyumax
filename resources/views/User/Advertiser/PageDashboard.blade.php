<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Dashboard</title>
    <link href="../css/app.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @livewireStyles
</head>

<body class="bg-zinc-200" style="font-family: 'Poppins', sans-serif;">

    <livewire:navbar.navbar2 />
    <div class="container mx-auto py-5 px-5 md:px-0">
        <div class="pb-5">
            <div class="flex flex-row justify-between items-center py-3 px-5">
                <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Dashboard Information</h1>
                <button id="FilterReporting" data-dropdown-toggle="FiltersReporting"
                    class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">Daily <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
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
        <div class="w-full p-5">
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
    <div class="container mx-auto px-5 md:px-0">
        @if (session()->has('success'))
            <livewire:flash-message.success />
        @endif
        @if (session()->has('error'))
            <livewire:flash-message.error />
        @endif
        <livewire:table.lead-tunneling />
    </div>
    <div class="container mx-auto py-5 px-5 md:px-0">
        @if (session()->has('success'))
            <livewire:flash-message.success />
        @endif
        @if (session()->has('error'))
            <livewire:flash-message.error />
        @endif
        <div>
            <div class="pb-5">
                <div class="flex flex-row justify-between items-center py-3 px-5">
                    <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Product Information</h1>
                    <!-- Modal toggle -->
                    <button
                        class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center"
                        type="button" data-modal-toggle="add-product">
                        Add Product
                    </button>
                    <livewire:modal.add-product />
                </div>
            </div>
            <div class="flex flex-col md:grid md:grid-cols-12 gap-4">
                <livewire:card.product-information />
                <livewire:card.product-information />
                <livewire:card.product-information />
                <livewire:card.product-information />
            </div>
            <div class="flex flex-col md:grid md:grid-cols-12 gap-4" style="margin-top:29px;">
                <livewire:card.product-information />
                <livewire:card.product-information />
                <livewire:card.product-information />
                <livewire:card.product-information />
            </div>
        </div>
    </div>
    <div class="container mx-auto lg:grid lg:grid-cols-12 flex flex-col gap-4 px-5 md:px-0 pb-5 lg:px-0">
        @if (session()->has('success'))
            <livewire:flash-message.success />
        @endif
        @if (session()->has('error'))
            <livewire:flash-message.error />
        @endif
        <div class="col-span-6">
            @if (session()->has('success'))
                <livewire:flash-message.success />
            @endif
            @if (session()->has('error'))
                <livewire:flash-message.error />
            @endif
        </div>
    </div>

    @livewireScripts
    <script src="assets/vendor/flowbite/dist/flowbite.js"></script>
    <script src="assets/vendor/flowbite/dist/datepicker.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            $('input[name="selectdate"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
    </script>
</body>

</html>
