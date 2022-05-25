<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Dashboard</title>
    <link href="../css/app.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @livewireStyles
</head>
<body class="bg-zinc-200" style="font-family: 'Poppins', sans-serif;">
    
    <livewire:navbar.navbar /> 
    <div class="container mx-auto py-5">
        <div class="bg-white rounded-lg w-full shadow-sm p-5 border-2">
            <div class="pb-5">
                <div class="border-b border-zinc-300 flex flex-row justify-between items-center py-3 px-5">
                    <h1 class="text-black font-semibold tracking-wide text-xl">Filter Reporting</h1>
                    <button id="FilterReporting" data-dropdown-toggle="FiltersReporting" class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Daily <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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
            <div class="grid grid-cols-6 md:grid-cols-12 gap-4">
                <div class="col-span-3">
                    <livewire:card.advertising-cost /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.total-leads /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.total-closing /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.closing-rate /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.upselling /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.total-box /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.cost-perresult /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.cross-selling /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.caq-lead /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.caq-customer /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.caq-bottle /> 
                </div>
                <div class="col-span-3">
                    <livewire:card.caq-total /> 
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <livewire:table.lead-tunneling /> 
    </div>
    <div class="container mx-auto py-5">
        <div class="bg-white rounded-lg w-full shadow-sm p-5 border-2">
            <div class="pb-5">
                <div class="border-b border-zinc-300 flex flex-row justify-between items-center py-3 px-5">
                    <h1 class="text-black font-semibold tracking-wide text-xl">Product Information</h1>
                    <!-- Modal toggle -->
                    <button class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center" type="button" data-modal-toggle="add-product">
                        Add Product
                    </button>
                    
                    <!-- Main modal -->
                    <div id="add-product" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="absolute top-5 right-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-product">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Add Product</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-boxes text-gray-400"></i>
                                            </div>
                                            <input type="text" name="name" id="name" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Name Product" required>
                                        </div>
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="lab la-product-hunt text-gray-400"></i>
                                            </div>
                                            <input type="text" name="sku" id="sku" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="SKU Product" required>
                                        </div>
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-tags text-gray-400"></i>
                                            </div>
                                            <input type="text" name="price" id="price" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Price Product" required>
                                        </div>
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-link text-gray-400"></i>
                                            </div>
                                            <input type="text" name="link" id="link" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Link Product" required>
                                        </div>
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-image text-gray-400"></i>
                                            </div>
                                            <label type="file" name="image-product" id="image-product" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Image Product" required>
                                                <span class="text-gray-500">Image Product</span>
                                                <input type="file" name="image-product" id="image-product" class="hidden" placeholder="Image Product" required>
                                            </label>
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Product</button>
                                            <button type="submit" class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-toggle="add-product">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="flex flex-col md:grid-cols-12 gap-4">
                <div class="w-full md:col-span-3">
                    <livewire:card.product-information /> 
                </div>
            </div>
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
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          });
        });
    </script>
</body>
</html>