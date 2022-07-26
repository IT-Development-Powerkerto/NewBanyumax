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
                                    <p class="text-xs text-gray-400">If you need more info, please check out <a class="text-blue-700 font-semibold" href="">Help Page.</a> </p>
                                </div>
                                <div class="flex flex-row mt-5 gap-4">
                                    <div class="p-4 w-full border-2 rounded-lg cursor-pointer border-dashed">
                                        <p class="mb-3">Entrepreneur Plan</p>
                                        <p class="text-blue-600 font-bold text-lg">Rp. 139.000 / month</p> 
                                    </div>

                                    <div class="p-4 w-full border-2 rounded-lg cursor-pointer border-dashed">
                                        <p class="mb-3">Felxible Plan</p>
                                        <p class="text-blue-600 font-bold text-lg">Rp. 150.000 / month</p> 
                                    </div>
                                    
                                    <div class="p-4 w-full border-2 rounded-lg cursor-pointer border-dashed">
                                        <p class="mb-3">Developer Plan</p>
                                        <p class="text-blue-600 font-bold text-lg">Rp. 299.000 / month</p> 
                                    </div>

                                </div>
                                <div class="flex justify-end mt-10 mb-10">
                                    <a href="#" class="btn btn-next bg-blue-600 text-white py-2 px-5 rounded-lg">Continue</a>
                                </div>
                            </div>
                           
                        </div>

                        <div class="form-step">
                            <div class="input-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" />
                            </div>
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="btns-group">
                                <a href="#" class="btn btn-prev">Previous</a>
                                <a href="#" class="btn btn-next">Next</a>
                            </div>
                        </div>

                        <div class="form-step">
                            <div class="input-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" id="dob" />
                            </div>
                            <div class="input-group">
                                <label for="ID">National ID</label>
                                <input type="number" name="ID" id="ID" />
                            </div>
                            <div class="btns-group">
                                <a href="#" class="btn btn-prev">Previous</a>
                                <a href="#" class="btn btn-next">Next</a>
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
</body>

</html>
