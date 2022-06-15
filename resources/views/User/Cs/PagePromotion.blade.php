<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Promotion</title>
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

    <div class="container mx-auto py-5 px-5 md:px-0">
        <div class="mx-10">
            <div class="">
                <div class="flex flex-row justify-between items-center">
                    <h1 class="font-semibold tracking-wide text-xl">Promotion</h1>
                    <!-- Modal toggle -->
                    <button
                    class="text-white shadow bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 font-medium rounded-lg text-sm px-4 py-2.5 text-center"
                    type="button" data-modal-toggle="add-promotion">
                       + Add Promotion
                    </button>
                    <livewire:modal.add-promotion />
                </div>
            </div>
        </div>
    </div>
    <livewire:modal.edit-promotion />
    <livewire:modal.delete-product />
    <div class="px-10 w-full rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto">
            <livewire:table.create-promotion-cs />
        </div>
    </div>
    

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
</body>

</html>
