<div class="bg-white mx-5 mb-5 shadow-md rounded-md">
    <div class="min-w-44 overflow-x-auto">
        <ul id="tabs" class="inline-flex w-full border-b text-center">
            <li class="flex-grow bg-gray-50 px-8 text-gray-800 font-semibold py-5 border-t border-r-2 border-l-2 -mb-px">
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
            <canvas class="p-4" id="lineChartTotalOmset"></canvas>
            {{-- <canvas id="chartLine"> </canvas> --}}
        </div>
        <div id="second" class="hidden p-4">
            <canvas class="p-4" id="lineChartTotalBottle"></canvas>
        </div>
        <div id="third" class="hidden p-4">
            <canvas class="p-4" id="lineChartTotalLead"></canvas>
        </div>
        <div id="fourth" class="hidden p-4">
            <canvas class="p-4" id="lineChartTotalClosing"></canvas>
        </div>
    </div>
</div>

<script>
    //Chart Total Omset
    var ctxL = document.getElementById("lineChartTotalOmset").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Dec"],
            datasets: [{
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
            }, {
                label: "Gizdat",
                data: [15, 26, 40, 16, 36, 49, 5, 17, 23, 20, 15, 20],
                backgroundColor: ['rgb(0, 187, 85, .2)'],
                borderColor: ['#00BB55'],
                borderWidth: 2
            }, ]
        },
        options: {
            responsive: true
        }
    });
</script>

<script>
    //Chart Total Bottle
    var ctxL = document.getElementById("lineChartTotalBottle").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Dec"],
            datasets: [{
                label: "Generous",
                data: [49, 5, 17, 23, 20, 15, 21, 5, 26, 40, 16, 36],
                backgroundColor: ['rgb(0, 178, 255, .2)'],
                borderColor: ['#00B2FF'],
                borderWidth: 2
            }, {
                label: "Freshmag",
                data: [30, 45, 5, 2, 20, 30, 45, 0, 10, 5, 2, 20],
                backgroundColor: ['rgb(59, 130, 246, .2)'],
                borderColor: ['#3B82F6'],
                borderWidth: 2
            }, {
                label: "Gizdat",
                data: [1, 18, 38, 43, 27, 31, 14, 0, 20, 5, 15, 25, 34],
                backgroundColor: ['rgb(0, 187, 85, .2)'],
                borderColor: ['#00BB55'],
                borderWidth: 2
            }, ]
        },
        options: {
            responsive: true
        }
    });
</script>

<script>
    //Chart Total Lead
    var ctxL = document.getElementById("lineChartTotalLead").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Dec"],
            datasets: [{
                label: "Generous",
                data: [0, 10, 45, 5, 2, 20, 30, 45, 5, 2, 20, 30],
                backgroundColor: ['rgb(0, 178, 255, .2)'],
                borderColor: ['#00B2FF'],
                borderWidth: 2
            }, {
                label: "Freshmag",
                data: [10, 20, 5, 43, 27, 31, 14, 15, 25, 34, 18, 38],
                backgroundColor: ['rgb(59, 130, 246, .2)'],
                borderColor: ['#3B82F6'],
                borderWidth: 2
            }, {
                label: "Gizdat",
                data: [15, 26, 17, 23, 20, 15, 20, 40, 16, 36, 49, 5],
                backgroundColor: ['rgb(0, 187, 85, .2)'],
                borderColor: ['#00BB55'],
                borderWidth: 2
            }, ]
        },
        options: {
            responsive: true
        }
    });
</script>

<script>
    //Chart Total Closing
    var ctxL = document.getElementById("lineChartTotalClosing").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Dec"],
            datasets: [{
                label: "Generous",
                data: [49, 5, 17, 5, 26, 40, 16, 36, 23, 20, 15, 21],
                backgroundColor: ['rgb(0, 178, 255, .2)'],
                borderColor: ['#00B2FF'],
                borderWidth: 2
            }, {
                label: "Freshmag",
                data: [30, 45, 5, 2, 20, 5, 2, 20, 30, 45, 0, 10],
                backgroundColor: ['rgb(59, 130, 246, .2)'],
                borderColor: ['#3B82F6'],
                borderWidth: 2
            }, {
                label: "Gizdat",
                data: [1, 18, 20, 5, 15, 25, 34, 38, 43, 27, 31, 14, 0],
                backgroundColor: ['rgb(0, 187, 85, .2)'],
                borderColor: ['#00BB55'],
                borderWidth: 2
            }, ]
        },
        options: {
            responsive: true
        }
    });
</script>

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
