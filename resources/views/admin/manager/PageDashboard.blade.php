<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Dashboard Manager</title>
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
    <livewire:navbar.navbar-admin />

    {{-- <livewire:navbar.navbar2 :$dashboard="dashboard"> --}}
    <div class="py-5 px-5">
        <div class="flex flex-row justify-between items-center py-3">
            <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Dashboard Information
            </h1>
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

    <div class="flex flex-wrap justify-between pb-5 gap-2 mx-5">
        <livewire:card.leads />
        <livewire:card.omzet />
        <livewire:card.expense />
    </div>

    <div class="items-center py-3 px-5">
        <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Dashboard Information
        </h1>
    </div>
    <div class="w-full p-5">
        <div class="flex flex-col md:grid lg:grid sm:grid grid-cols-3 gap-4 ">
            <livewire:card.advertising-cost-admin />
            <livewire:card.total-lead-admin />
            <livewire:card.total-closing-admin />
        </div>
        <div class="flex flex-col md:grid lg:grid sm:grid grid-cols-4 gap-4 py-5">
            <livewire:card.total-box-admin />
            <livewire:card.cost-per-result-admin />
            <livewire:card.cross-selling-admin />
            <livewire:card.caq-lead-admin />
        </div>
    </div>
    <div class="mt-5 mx-5 px-6 py-2 rounded-md bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold">
        Information
    </div>

    <div class="container mx-auto px-5 mb-10">
        <livewire:table.weekly-info-adv-admin />
        <livewire:table.budgeting-request-adv-admin />
        <livewire:table.budgeting-request-non-adv-admin />
        <livewire:table.realization-adv2 />
        <livewire:table.realization-non-adv />
        <livewire:table.activity-evaluation />
        <livewire:table.activity-logs-ceo />
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
