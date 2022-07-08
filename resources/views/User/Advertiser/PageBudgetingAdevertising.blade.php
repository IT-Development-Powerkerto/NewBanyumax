<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Budgeting Advertising</title>
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
    {{-- <livewire:navbar.navbar2 /> --}}
    @livewire('navbar.navbar2', [
        'dashboard' => '/dashboard-adv',
        'campaign' => '/campaign-adv',
        'operator' => '/operator-adv',
        'budgetingadvertising' => '/budgetingadvertising-adv',
        'budgetingrealization' => '/budgetingrealization-adv',
        'routineevaluation' => '/routineevaluation-adv',
    ])
    {{-- <livewire:navbar.navbar2 :$dashboard="dashboard"> --}}
    <div class="container mx-auto py-5 px-5 mb-10">
        <livewire:table.data-budgeting-adv-log-activity />
    </div>

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
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          });
        });
        </script>
</body>

</html>
