<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <title>CRM</title>
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

<body class="bg-white" style="font-family: 'Poppins', sans-serif;" x-data="sidebar()"
    @resize.window="handleResize()">

    <div class="flex">
        <livewire:sidebar.sidebar-cs />
        <main class="w-screen">
            <div class="px-5 mt-5">
                <div class="py-5 mb-10 flex justify-between">
                    <div>
                        <p class="font-bold text-lg tracking-wide mb-2">
                            Customer Relationship Management (CRM)
                        </p>
                        <p class="text-xs text-gray-400">
                            Role CS
                        </p>
                    </div>

                    <div class="flex gap-7">
                        <div class="self-center">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdownNotification"
                                class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                                type="button">
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <div class="relative flex">
                                    <div
                                        class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900">
                                    </div>
                                </div>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNotification"
                                class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-800 dark:divide-gray-700"
                                data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(150.667px, 54px, 0px);">
                                <div
                                    class="block px-4 py-2 font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-white">
                                    Notifications
                                </div>
                                <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-full w-11 h-11" src="assets/img/zee.jpeg"
                                                alt="Zee image">
                                            <div
                                                class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                                    </path>
                                                    <path
                                                        d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-full pl-3">
                                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message
                                                from <span class="font-semibold text-gray-900 dark:text-white">Azizi
                                                    Asadel</span>: "Hey, what's up? All set for the presentation?"</div>
                                            <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="self-center">
                            <a type="button" href="profil-cs"
                                class="flex mr-3 text-sm bg-gray-800 rounded-lg md:mr-0 focus:ring-4 focus:ring-gray-300"
                                id="user-menu-button" aria-expanded="false">
                                <img class="w-8 h-8 rounded-lg" src="assets/img/marsha.jpeg" alt="user photo">
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <livewire:table.crm />
                </div>

            </div>
        </main>
    </div>


    @livewireScripts
    <script src="assets/vendor/flowbite/dist/flowbite.js"></script>
    <script src="assets/vendor/flowbite/dist/datepicker.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
    </script>
</body>

</html>
