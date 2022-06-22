<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Campaign</title>
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
    <livewire:navbar.navbar-admin />
    {{-- <livewire:navbar.navbar2 :$dashboard="dashboard"> --}}
    <div class="flex flex-col md:grid lg:grid sm:grid grid-cols-3 gap-4 mx-5 my-5">
        <livewire:card.total-campaign />
        <livewire:card.total-operator />
        <livewire:card.total-lead />
    </div>
    <div class="flex flex-col md:grid lg:grid grid-cols-3 h-full gap-3 mx-auto py-5 px-5">
        <div class="col-span-2">
            <livewire:table.operator-campaign />
        </div>
        <div class="col">
            <livewire:table.operator-list />
        </div>
      
    </div>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
</body>

</html>