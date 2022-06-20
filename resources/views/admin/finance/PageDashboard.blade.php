<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Finance</title>
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

    <div class="mx-5 my-10">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color: #7E8299">Dashboard
            Information</h1>
    </div>

    <div class="flex flex-col md:flex-row container px-5 pb-5 justify-center gap-4">
        <livewire:card.staffbudgetingapproved-finance />
        <livewire:card.totalexpence-finance />
        <livewire:card.staffbudgetingrequest-finance />
    </div>

    <div class="mt-5 mx-5 px-6 py-2 rounded-md bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold">
        Data Budgeting
    </div>

    <div class="mx-5 ">
        <livewire:table.closing-customerservice-finance-admin />
        <livewire:table.staff-budgeting-request-finance-admin />
        <livewire:table.staff-budgeting-information-finance-admin />
        <livewire:table.activitylog-finance-admin />
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