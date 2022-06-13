<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
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

<body class="bg-zinc-200" style="font-family: 'Poppins', sans-serif;">
    {{-- <livewire:navbar.navbar2 /> --}}
    <livewire:navbar.navbar-cs2 />
    {{-- @livewire('navbar.navbar-cs',) --}}
    {{-- <livewire:navbar.navbar2 :$dashboard="dashboard"> --}}
    <div class="container mx-auto py-5 px-5 md:px-0">
        <div class="mx-10">
            <div class="pb-3">
                <div class="flex flex-row justify-between items-center py-3">
                    <h1 class="text-gray-400 font-semibold tracking-wide text-xl">Product Information</h1>
                    <!-- Modal toggle -->
                    <button
                        class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center"
                        type="button" data-modal-toggle="add-product">
                        Add Product
                    </button>
                    <livewire:modal.add-product />
                </div>
            </div>
            <div class="flex flex-col md:grid md:grid-cols-12 gap-4">
                <livewire:card.product-information />
            </div>
        </div>
    </div>
    <div class="container mx-auto lg:grid lg:grid-cols-12 flex flex-col gap-4 px-5 md:px-0 pb-5 lg:px-0">
        @if (session()->has('success'))
            <livewire:flash-message.success />
        @endif
        @if (session()->has('error'))
            <livewire:flash-message.error />
        @endif
        <div class="col-span-6">
            @if (session()->has('success'))
                <livewire:flash-message.success />
            @endif
            @if (session()->has('error'))
                <livewire:flash-message.error />
            @endif
        </div>
    </div>

    <div class="mx-10">
        <livewire:table.lead-tunneling />
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
