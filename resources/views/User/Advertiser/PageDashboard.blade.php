<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
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

<body class="bg-white" style="font-family: 'Poppins', sans-serif;" x-data="sidebar()"
    @resize.window="handleResize()">

    <div class="flex">
        <livewire:sidebar.sidebar-adv />
        <main class="w-screen">
            <div class="px-5 mt-5">
                <div class="py-5 mb-10 flex justify-between">
                    <div>
                        <p class="font-bold text-lg tracking-wide mb-2">
                            Hi! Marsha Lenathea
                        </p>
                        <p class="text-xs text-gray-400">
                            Good Morning!
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
                            <button type="button"
                                class="flex mr-3 text-sm bg-gray-800 rounded-lg md:mr-0 focus:ring-4 focus:ring-gray-300"
                                id="user-menu-button" aria-expanded="false" type="button"
                                data-dropdown-toggle="dropdown">
                                <img class="w-8 h-8 rounded-lg" src="assets/img/marsha.jpeg" alt="user photo">
                            </button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-row justify-between items-center py-3 px-5">
                    <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Dashboard
                        Information
                    </h1>
                    <button id="FilterReporting" data-dropdown-toggle="FiltersReporting"
                        class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                        type="button">Daily <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="FiltersReporting"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="FilterReporting">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Daily</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Weekly</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">Monthly</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 justify-between">
                    <livewire:card.advertising-cost />
                    <livewire:card.total-leads />
                    <livewire:card.total-closing />
                    <livewire:card.closing-rate />
                    <livewire:card.upselling />
                    <livewire:card.total-box />
                    <livewire:card.cost-perresult />
                    <livewire:card.cross-selling />
                    <livewire:card.caq-lead />
                    <livewire:card.caq-customer />
                    <livewire:card.caq-bottle />
                    <livewire:card.caq-total />
                </div>

                <div class="py-5">
                    <livewire:table.lead-tunneling />
                </div>

                <div class="flex flex-row justify-between items-center pb-5">
                    <h1 class="font-semibold text-[#7E8299] tracking-wide text-xl">Product Information</h1>
                    <!-- Modal toggle -->
                    <button
                        class="hover:text-blue-400 h-max shadow bg-gradient-to-r from-orange-500 to-red-500 border text-white hover:from-white hover:to-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                        type="button" data-modal-toggle="add-product">
                        + Add Product
                    </button>
                    {{-- <livewire:modal.add-product2 /> --}}
                    <div id="add-product" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative rounded-lg shadow bg-slate-100">
                                <button type="button"
                                    class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="add-product">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3
                                        class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                        Add Product</h3>
                                    <form class="space-y-6" wire:submit.prevent="store"
                                        enctype="multipart/form-data">
                                        <div class="relative">
                                            <input type="text" wire:model.defer="name" id="name"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                placeholder="Product Name" required>
                                        </div>
                                        <div class="relative">
                                            <input type="text" wire:model.defer="sku" id="sku"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                placeholder="SKU" required>
                                        </div>
                                        <div class="relative">
                                            <input type="number" wire:model.defer="price" id="price"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                placeholder="Price" required>
                                        </div>
                                        {{-- <div class="relative">
                                            <input type="number" name="discount" wire:model.defer='discount' id="discount" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Discount" required>
                                        </div> --}}
                                        <div class="relative">
                                            <input type="text" wire:model.defer="product_link" id="product_link"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                placeholder="linkproduct" required>
                                        </div>
                                        <div class="relative">
                                            <span class="text-gray-500 px-1 mb-2">Image</span>
                                            {{-- @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded">
                                            @else
                                            kosong
                                            @endif --}}

                                            {{-- <label type="file" name="image-product" id="image-product" required>
                                                <span class="">
                                                    <img src="assets/img/icon-foto.png"
                                                        class="img-preview-staff-edit w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                                        alt="">
                                                </span>
                                                <input class="hidden" type="file" name="image"
                                                    id="image-staff-edit" onchange="previewImageStaffEdit()">
                                            </label> --}}
                                            <input wire:model="image" type="file" id="image">
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit" data-modal-toggle="add-product"
                                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Add
                                                Product</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <livewire:card.product-information />
                    {{-- <livewire:modal.edit-product /> --}}
                    <livewire:modal.delete-product />
                </div>

            </div>
        </main>
    </div>
    {{-- <livewire:navbar.navbar-cs2 />
    <div class="container mx-auto py-5 px-5">
        <div class="flex flex-row justify-between items-center pb-5">
            <h1 class="font-semibold tracking-wide text-xl">Product Information</h1>
            <!-- Modal toggle -->
            <button
                class="hover:text-blue-400 h-max shadow bg-gradient-to-r from-cyan-500 to-blue-500 border text-white hover:from-white hover:to-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
                type="button" data-modal-toggle="add-product">
                + Add Product
            </button>
            <livewire:modal.add-product2 />
        </div>
        <div class="flex flex-col md:grid md:grid-cols-12 gap-4">
            <livewire:card.product-information />
        </div>
        <livewire:modal.edit-product />
        <livewire:modal.delete-product />
    </div>

    <div class="px-5 -mt-10 mb-10 container mx-auto">
        <livewire:table.lead-tunneling />
    </div> --}}


    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <script src="assets/vendor/flowbite/dist/datepicker.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
    <script>
        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
