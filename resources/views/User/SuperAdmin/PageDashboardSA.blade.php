<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Dashboard</title>
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

<body class="bg-white" style="font-family: 'Poppins', sans-serif;" x-data="sidebar()"
    @resize.window="handleResize()">

<div class="flex">
    <livewire:sidebar.sidebar-sa />
    <main class="w-screen">
        <div class="px-5 mt-5">
            <div class="py-5">
                <p class="font-bold text-xl mb-2">
                    Welcome, Super Veza
                </p>
                <p class="text-gray-400">
                    Super Admin
                </p>
            </div>

            <div class="flex flex-wrap justify-center md:justify-between py-5">
                <livewire:card.user-activity-on-sa />
                <livewire:card.total-pricing-on-sa />
                <livewire:card.user-nonactive-on-sa />
            </div>

            <div class="py-5">
                <livewire:table.admin />
                <livewire:modal.add-admin />
            </div>

            <div class="py-5 mb-10">
                <livewire:card.expedition />
                <livewire:modal.add-expedition />
            </div>

        </div>
    </main>
</div>

@livewireScripts
<script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
</body>

</html>
