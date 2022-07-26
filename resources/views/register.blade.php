<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/stepper.js" defer></script>
    <title>Register</title>
    <link href="/css/app.css" rel="stylesheet">

    @livewireStyles
</head>

<body style="background-color: blueviolet">
    {{-- style="background-image: url('assets/img/bg-regis.png'); --}}
    <div>
        {{-- <div class="relative bg-slate-500">
            <img class="w-screen h-screen opacity-50" src="assets/img/bg-regis.png" alt="">
        </div> --}}

        <div class="absolute top-0 left-0">
            <div class="container p-10 flex flex-col md:grid grid-cols-5">
                <div class="col-span-2 ">
                    <div>
                        <img src="assets/img/BANYUMAX.png" class="h-4" alt="Banyumax Logo" />
                    </div>
                    <div class="mt-16 tracking-widest">
                        <div class="py-2 gap-3 flex flex-wrap text-white text-5xl">
                            <p class="font-thin">the</p>
                            <p class="font-extrabold">first step</p>
                        </div>
                        <div class="py-2 gap-3 flex flex-wrap text-white text-5xl">
                            <p class="font-extrabold">to become</p>
                            <p class="font-thin">a</p>
                        </div>
                        <div class="py-2 font-thin text-white text-5xl">
                            Better Business
                        </div>
                        <div class="py-2 font-thin text-white pr-5">
                            Maximize the conversion of sales leads obtained from your business. Provide a faster, easier
                            and accurate response to customers.
                        </div>
                    </div>
                </div>

                <div class="col-span-3">
                    <form action="#" class="form">
                        <!-- Progress bar -->
                        <div class="progressbar">
                            <div class="progress" id="progress"></div>

                            <div class="progress-step progress-step-active" data-title="Account Type"></div>
                            <div class="progress-step" data-title="Account Info"></div>
                            <div class="progress-step" data-title="Pay to Complate"></div>
                            <div class="progress-step" data-title="Password"></div>
                        </div>

                        <!-- Steps -->
                        <div class="form-step form-step-active">
                            <div class="bg-white rounded-lg p-5">
                                <div class="mt-5">
                                    <p class="font-bold text-lg"> Choose Account Type </p>
                                    <p class="text-xs text-gray-400">If you need more info, please check out <a
                                            class="text-blue-700 font-semibold" href="">Help Page.</a> </p>
                                </div>
                                <ul class="grid gap-4 mt-5 w-full md:grid-cols-3">
                                    <li>
                                        <input type="radio" id="entrepreneur-plan" name="plan"
                                            value="entrepreneur-plan" class="hidden peer" required>
                                        <label for="entrepreneur-plan"
                                            class="items-center px-3 py-5 w-full text-gray-500 bg-white rounded-lg border-2 border-dashed border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-cyan-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <p class="mb-3">Entrepreneur Plan</p>
                                            <p class="text-blue-600 font-bold text-lg">Rp. 139.000 / month</p>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="felxible-plan" name="plan" value="felxible-plan"
                                            class="hidden peer" required>
                                        <label for="felxible-plan"
                                            class="items-center px-3 py-5 w-full text-gray-500 bg-white rounded-lg border-2 border-dashed border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-cyan-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <p class="mb-3">Felxible Plan</p>
                                            <p class="text-blue-600 font-bold text-lg">Rp. 139.000 / month</p>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="developer-plan" name="plan" value="developer-plan"
                                            class="hidden peer" required>
                                        <label for="developer-plan"
                                            class="items-center px-3 py-5 w-full text-gray-500 bg-white rounded-lg border-2 border-dashed border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-cyan-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <p class="mb-3">Developer Plan</p>
                                            <p class="text-blue-600 font-bold text-lg">Rp. 139.000 / month</p>
                                        </label>
                                    </li>

                                </ul>

                                <div class="flex font-semibold justify-end mt-10 mb-10">
                                    <a href="#"
                                        class="flex items-center btn btn-next bg-cyan-400 text-white py-2 px-5 rounded-lg">Continue
                                        <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="form-step">
                            <div class="bg-white rounded-lg p-5">
                                <div class="mt-5">
                                    <p class="font-bold text-lg"> Account Register</p>
                                    <p class="text-xs text-gray-400">If you need more info, please check out <a
                                            class="text-blue-700 font-semibold" href="">Help Page.</a> </p>
                                </div>

                                <div class="py-2">
                                    <label for="name"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Name</label>
                                    <input type="text" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="py-2">
                                    <label for="username"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Username</label>
                                    <input type="text" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Your Username" required>
                                </div>
                                <div class="py-2">
                                    <label for="password"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Password</label>
                                    <input type="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                                <div class="py-2">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="example@mail.com" required>
                                </div>
                                <div class="py-2">
                                    <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone</label>
                                    <input type="number" id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="py-2">
                                    <label for="company-name"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Company
                                        Name</label>
                                    <input type="text" id="company-name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Business Corp" required>
                                </div>
                                <div class="py-2">
                                    <label for="initial-company-name"
                                        class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Initial
                                        Company Name</label>
                                    <input type="text" id="initial-company-name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="BSC" required>
                                </div>

                                <div class="flex font-semibold justify-between mt-10 mb-10">
                                    <a href="#"
                                        class="flex items-center btn btn-prev bg-cyan-100 text-cyan-500 py-2 px-5 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                        </svg>
                                        Back
                                    </a>
                                    <a href="#"
                                        class="flex items-center btn btn-next bg-cyan-400 text-white py-2 px-5 rounded-lg">Continue
                                        <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-step">
                            <div class="bg-white rounded-lg p-5">
                                <div class="mt-5">
                                    <p class="font-bold text-lg">Pay to Complete</p>
                                    <p class="text-xs text-gray-400">If you need more info, please check out <a
                                            class="text-blue-700 font-semibold" href="">Help Page.</a> </p>
                                </div>

                                <div class="mt-10 bg-gray-100 rounded-lg p-5">
                                    <div class="text-md font-bold text-gray-700">
                                        Total Bill : Rp 139.000
                                    </div>
                                    <div class="text-xs font-thin text-gray-400">
                                        Order ID #BMX-ORD/1658458289
                                    </div>
                                    <div class="py-2 text-sm font-semibold border-b-2 mb-0.5">
                                        Fakhri Azmi Ulala <br>
                                        08122323122
                                    </div>
                                    <div class="flex text-sm text-gray-400 py-2 border-t-2 justify-between">
                                        <p>Your Order</p>
                                        <p>Price</p>
                                    </div>
                                    <div class="flex text-sm text-gray-800 font-bold pb-3 border-b-2 justify-between">
                                        <p>Enterpreneur Plan</p>
                                        <p>Rp 139.000</p>
                                    </div>
                                    <div class="flex gap-16 text-sm text-blue-700 font-bold py-3 justify-end">
                                        <p>Total </p>
                                        <p>Rp 139.000</p>
                                    </div>
                                </div>

                                <div class="mt-10 bg-gray-100 rounded-lg">
                                    <div class="text-md font-bold pt-5 px-5 text-gray-700">
                                        Payment Method
                                    </div>
                                    <div class="rounded-md" id="tabs-id-2">
                                        <div class="w-full">
                                            <div class="">
                                                <ul class="flex px-5 py-8 gap-5">
                                                    <li class="-mb-px last:mr-0 ">
                                                        <a class="border bg-white text-xs font-semibold px-4 py-2 rounded leading-normal text-orange-500 border-orange-500 cursor-pointer"
                                                            onclick="changeAtiveTabInfo(event,'transfer-bank')">
                                                            Transfer Bank
                                                        </a>
                                                    </li>
                                                    <li class="-mb-px last:mr-0 ">
                                                        <a class="border bg-white text-xs font-semibold px-4 py-2 rounded leading-normal text-gray-500 border-gray-500 cursor-pointer"
                                                            onclick="changeAtiveTabInfo(event,'credit-debit')">
                                                            Credit/Debit Card
                                                        </a>
                                                    </li>
                                                    <li class="-mb-px last:mr-0 ">
                                                        <a class="border bg-white text-xs font-semibold px-4 py-2 rounded leading-normal text-gray-500 border-gray-500 cursor-pointer"
                                                            onclick="changeAtiveTabInfo(event,'e-wallet')">
                                                            Electronic Wallet
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="w-full flex flex-col min-w-0 break-words bg-gray-200 ">
                                                <div class="px-5 py-5 flex-auto">
                                                    <div class="tab-content-INFO tab-space">
                                                        <div class="block" id="transfer-bank">
                                                            <div class="flex gap-2 items-center py-2">
                                                                <input id="mandiri" type="radio" value="" name="bank" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                <img id="mandiri" src="assets/img/mandiri.png" for="mandiri" class="h-8 w-8" alt="">
                                                                <label for="mandiri" class="pt-2 font-medium text-gray-900 dark:text-gray-300">
                                                                    <div>Bank Mandiri</div>
                                                                </label>
                                                            </div>
                                                            <div class="flex gap-2 items-center py-2">
                                                                <input id="bni" type="radio" value="" name="bank" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                <img id="bni" src="assets/img/bni.png" for="bni" class="h-8 w-8" alt="">
                                                                <label for="bni" class="pt-2 font-medium text-gray-900 dark:text-gray-300">
                                                                    <div>Bank BNI</div>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="hidden" id="credit-debit">
                                                            <div class="flex flex-wrap gap-4">
                                                                kedua
                                                            </div>
                                                        </div>

                                                        <div class="hidden" id="e-wallet">
                                                            <div class="flex flex-wrap gap-4">
                                                                ketiga
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="flex font-semibold justify-between mt-10 mb-10">
                                    <a href="#"
                                        class="flex items-center btn btn-prev bg-cyan-100 text-cyan-500 py-2 px-5 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                        </svg>
                                        Back
                                    </a>
                                    <a href="#"
                                        class="flex items-center btn btn-next bg-cyan-400 text-white py-2 px-5 rounded-lg">
                                        Continue
                                        <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-step">
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </div>
                            <div class="input-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" name="confirmPassword" id="confirmPassword" />
                            </div>
                            <div class="btns-group">
                                <a href="#" class="btn btn-prev">Previous</a>
                                <input type="submit" value="Submit" class="btn" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    {{-- Script tabs payment --}}
    <script type="text/javascript">
        function changeAtiveTabInfo(event, tabsDashboardInfo) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id-2").querySelectorAll(".tab-content-INFO > div");
            for (let i = 0; i < aElements.length; i++) {
                aElements[i].classList.remove("text-orange-500");
                aElements[i].classList.remove("border-orange-500");
                aElements[i].classList.add("text-gray-500");
                aElements[i].classList.add("border-gray-500");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-gray-500");
            element.classList.remove("border-gray-500");
            element.classList.add("text-orange-500");
            element.classList.add("border-orange-500");
            document.getElementById(tabsDashboardInfo).classList.remove("hidden");
            document.getElementById(tabsDashboardInfo).classList.add("block");
        }
    </script>

</body>

</html>
