<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Reimbursement</title>
    <link href="/css/app.css" rel="stylesheet">
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
    <livewire:navbar.navbar-cs2 />

    <div class="container mx-auto py-5 px-5">
        <div class="flex flex-row justify-between items-center">
            <h1 class="font-semibold tracking-wide text-xl">Reimbursement</h1>
            <!-- Modal toggle -->
            <button
            class="text-white shadow bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 font-medium rounded-lg text-sm px-4 py-2.5 text-center"
                type="button" data-modal-toggle="add-reimbursement">
                + Add Reimbursement   
            </button>
            <livewire:modal.add-reimbursement />
        </div>
    </div>

    <div class="container mx-auto mb-10">

        <div class="grid grid-cols-3 gap-4 px-5">
            <div class="bg-white flex flex-row p-4 gap-4 rounded-lg">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="#3B82F6">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <div class="text-blue-500 text-2xl font-bold self-center">
                    20
                </div>
                <div class="text-blue-500 font-bold self-center">
                    Total Reimbursement
                </div>
            </div>
    
            <div class="bg-white flex flex-row p-4 gap-4 rounded-lg">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="#06B6D4">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <div class="text-cyan-500 text-2xl font-bold self-center">
                    20
                </div>
                <div class="text-cyan-500 font-bold self-center">
                    Approved Reimbursement
                </div>
            </div>
            
            <div class="bg-white flex flex-row p-4 gap-4 rounded-lg">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="#EF4444">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <div class="text-red-500 text-2xl font-bold self-center">
                    20
                </div>
                <div class="text-red-500 font-bold self-center">
                    Rejected Reimbursement
                </div>
            </div>
        </div>
        
    </div>

    <div class="px-5 w-full rounded-lg dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto">
            <livewire:table.reimbursment />
        </div>
    </div>
    <livewire:modal.delete-product />

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
</body>

</html>
