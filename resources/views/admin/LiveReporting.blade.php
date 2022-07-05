<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Live Reporting</title>
    <link href="../css/app.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    @livewireStyles
</head>

<body class="bg-zinc-200" style="font-family: 'Poppins', sans-serif;">
    <livewire:navbar.navbar-admin />

    <div class="container mx-auto py-5 px-5 md:px-0">
        <div class="pb-5">
            <div class="flex flex-row justify-between items-center py-3 px-5">
                <h1 class="text-black font-semibold tracking-wide text-xl" style="color: #7E8299">Dashboard Information
                </h1>
                <button id="FilterReporting" data-dropdown-toggle="FiltersReporting"
                    class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">This Month <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="FiltersReporting" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="FilterReporting">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">slect1</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">slect2</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">slect3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white mx-5 mb-10">
        <div class="min-w-44 overflow-x-auto">
            <ul id="tabs" class="inline-flex w-full border-b text-center">
                <li
                    class="flex-grow bg-gray-50 px-8 text-gray-800 font-semibold py-5 border-t border-r-2 border-l-2 -mb-px">
                    <a id="default-tab" href="#first">Total Omset</a>
                </li>
                <li class="flex-grow px-8 text-gray-800 font-semibold py-5"><a href="#second">Total Bottle</a></li>
                <li class="flex-grow px-8 text-gray-800 font-semibold py-5"><a href="#third">Total Lead</a></li>
                <li class="flex-grow px-8 text-gray-800 font-semibold py-5"><a href="#fourth">Total Closing</a></li>
            </ul>
        </div>

        <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="p-4">
                <canvas id="lineChartTotalOmset"></canvas>
                {{-- <canvas id="chartLine"> </canvas> --}}
            </div>
            <div id="second" class="hidden p-4">
                Second tab
            </div>
            <div id="third" class="hidden p-4">
                Third tab
            </div>
            <div id="fourth" class="hidden p-4">
                Fourth tab
            </div>
        </div>
    </div>


    @livewireScripts
    <script>
        //Chart Bisnis Mingguan
        var ctxL = document.getElementById("lineChartTotalOmset").getContext('2d');
        var myLineChart = new Chart(ctxL, {
          type: 'line',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt" ,"Nov", "Dec"],
            datasets: [
            {
              label: "Generous",
              data: [0, 10, 5, 2, 20, 30, 45, 5, 2, 20, 30, 45],
              backgroundColor: ['rgb(0, 178, 255, .2)'],
              borderColor: ['#00B2FF'],
              borderWidth: 2
            }, {
              label: "Freshmag",
              data: [10, 20, 5, 15, 25, 34, 18, 38, 43, 27, 31, 14],
              backgroundColor: ['rgb(59, 130, 246, .2)'],
              borderColor: ['#3B82F6'],
              borderWidth: 2
            },{
              label: "Gizdat",
              data: [15,26,40,16,36,49,5,17,23,20,15,20],
              backgroundColor: ['rgb(0, 187, 85, .2)'],
              borderColor: ['#00BB55'],
              borderWidth: 2
            },
            ]
          },
          options: {
            responsive: true
          }
        });
        </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt" ,"Nov", "Dec"];
        const data = {
            labels: labels,
            datasets: [{
                label: "Generous",
                backgroundColor: "#00B2FF",
                borderColor: "#00B2FF",
                data: [0, 10, 5, 2, 20, 30, 45, 5, 2, 20, 30, 45],
            }, {
                label: "Freshmag",
                backgroundColor: "#3B82F6",
                borderColor: "#3B82F6",
                data: [10, 20, 5, 15, 25, 34, 18, 38, 43, 27, 31, 14],
            }, {
                label: "Gizdat",
                backgroundColor: "#00BB55",
                borderColor: "#00BB55",
                data: [15,26,40,16,36,49,5,17,23,20,15,20],
            }, 
        ],
        };

        const configLineChart = {
            type: "line",
            data,
            options: {},
        };

        var chartLine = new Chart(
            document.getElementById("chartLine"),
            configLineChart
        );
    </script> --}}

    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r-2", "border-l-2",
                        "-mb-px", "bg-gray-50");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r-2", "border-l-2", "-mb-px",
                    "bg-gray-50");
            });
        });
    </script>

    <script src="assets/vendor/flowbite/dist/flowbite.js"></script>
    <script src="assets/vendor/flowbite/dist/datepicker.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

</body>

</html>
