<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <title>SURVEY</title>
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
                            SURVEY
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

                <div class="p-5 flex justify-between border bg-white rounded-md shadow-md">
                    <div class="font-bold">
                        Survey CRM
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="flex gap-3 items-center font-semibold bg-slate-100 text-slate-500 py-2 px-4 text-xs rounded-md">
                            <span class="iconify h-5 w-5" data-icon="gridicons:print"></span>
                            Export
                        </button>
                        <button type="button" class="flex gap-3 items-center font-semibold bg-slate-100 text-slate-500 py-2 px-4 text-xs rounded-md">
                            <span class="iconify w-5 h-5" data-icon="ci:share"></span>
                            Share
                        </button>
                    </div>
                </div>

                <div class="mt-10 p-5 border bg-white rounded-md shadow-md">
                    <div class="font-medium">
                        Darimana anda melihat Iklan Produk kami?
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center mb-4">
                            <input id="facebook" type="radio" value="" name="darimana" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="facebook" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Facebook</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="instagram" type="radio" value="" name="darimana" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="instagram" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Instagram</label>
                        </div>
                        <div class="flex items-center">
                            <input id="whatsapp" type="radio" value="" name="darimana" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="whatsapp" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Whatsapp</label>
                        </div>
                    </div>
                </div>

                <div class="my-10 p-5 border bg-white rounded-md shadow-md">
                    <div class="font-medium">
                        Produk apa yang anda pesan?
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center mb-4">
                            <input id="etawaku-premium" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="etawaku-premium" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Etawaku Premium</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="freshmag" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="freshmag" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Freshmag</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="gizidat" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gizidat" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gizidat</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="generos" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="generos" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Generos</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="kopi-rube" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="kopi-rube" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kopi Rube</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="new-briswa" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="new-briswa" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Briswa</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="weight-herba" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="weight-herba" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Weight Herba</label>
                        </div>
                        <div class="flex items-center">
                            <input id="nutriflakes" type="radio" value="" name="produk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="nutriflakes" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nutriflakes</label>
                        </div>
                    </div>
                </div>

                <div class="my-10 p-5 border bg-white rounded-md shadow-md">
                    <div class="font-medium">
                        Seberapa parah penyakit yang sedang dialami?
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center mb-4">
                            <input id="ringan" type="radio" value="" name="sakit" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="ringan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ringan</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="sedang" type="radio" value="" name="sakit" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="sedang" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sedang</label>
                        </div>
                        <div class="flex items-center">
                            <input id="parah" type="radio" value="" name="sakit" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="parah" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Parah</label>
                        </div>
                    </div>
                </div>

                <div class="my-10 p-5 border bg-white rounded-md shadow-md">
                    <div class="font-medium">
                        Sakit apa yang dialami?
                    </div>
                    <div class="mt-5">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="nama-penyakit" id="nama-penyakit" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Jawaban Anda" required />
                        </div>
                    </div>
                </div>

                <div class="my-10 p-5 border bg-white rounded-md shadow-md">
                    <div class="font-medium">
                        Harapan setelah meminum produk etawaku platinum?
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center mb-4">
                            <input id="1" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nyeri dan kaku pada sendi hilang</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="2" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Daya tahan dan sistem imun tubuh meningkatkan </label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="3" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pencernaan lancar</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="4" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Produksi asi lancar</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="5" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="5" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menyembuhkan masalah pernafasan dan paru-paru</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="6" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="6" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menurunkan darah tinggi</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="7" type="radio" value="" name="harapan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="7" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menyembuhkan permasalahan asam lambung </label>
                        </div>
                    </div>
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
</body>

</html>
