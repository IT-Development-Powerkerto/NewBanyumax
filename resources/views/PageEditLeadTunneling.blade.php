<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/img/favicon.png" rel="icon">
    <title>Evaluation</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body class="bg-zinc-200 container mx-auto py-10 px-5" style="font-family: 'Poppins', sans-serif;">
    <h1 class="text-2xl font-semibold py-4">Edit Lead Tunneling</h1>
    <div class="h-max bg-white rounded-lg px-5 py-5">

        <div class="relative">
            <h1 class="px-4 text-lg">Data Customer Service</h1>

            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="w-full text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Advertiser</label>
                    <input type="text" id="advertise_lead" name="advertise_lead" disabled
                        placeholder="Alfian Ridho Utama"
                        class="bg-slate-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <label class="text-gray-500">Auto - Filled Advertiser Name</label>
                </div>
                <div
                    class="w-full text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Operator</label>
                    <input type="text" id="operator_lead" name="operator_lead" disabled
                        placeholder="Alfian Ridho Utama"
                        class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <label class="text-gray-500">Auto - Filled Advertiser Name</label>
                </div>
                <div
                    class="w-full text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Status</label>
                    <select name="status_lead" id="status_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Status</option>
                        <option>Status 1</option>
                        <option>Status 2</option>
                        <option>Status 3</option>
                    </select>
                </div>
            </div>

        </div>

    </div>

    <div class="h-max bg-white rounded-lg mt-5 px-5 py-5">
        <div class="relative border-b">
            <h1 class="px-4 text-lg">Data Order</h1>
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Customer Name</label>
                    <input type="text" id="customername_lead" name="customername_lead"
                        placeholder="Alfian Ridho Utama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Contact</label>
                    <input type="number" id="contact_lead" name="contact_lead" placeholder="62895762742432"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Address</label>
                    <input type="text" id="address_lead" name="address_lead"
                        placeholder="Jl. Supriadi Gang Satria II, Purwokerto Timur"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
        </div>

        <div class="relative py-5">
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Product</label>
                    <input type="text" id="product_lead" name="product_lead" disabled placeholder="Etawaku Platinum"
                        class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <label class="text-gray-500">Auto - Filled Product</label>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Quantity</label>
                    <input type="number" id="quantity_lead" name="quantity_lead" placeholder="0"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Price</label>
                    <input type="number" id="price_lead" name="price_lead" placeholder="0"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Product Promotion</label>
                    <select name="productpromotion_lead" id="productpromotion_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden> Select Product Promotion</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Additional Product Promotion</label>
                    <select name="aditionalproductpromotion_lead" id="aditionalproductpromotion_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Additional Product Promotion</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Product Promotion</label>
                    <input type="number" id="priceproductpromotion_lead" name="priceproductpromotion_lead" disabled
                        placeholder="0"
                        class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <label class="text-gray-500">Auto - Filled Product Promotion</label>
                </div>
            </div>
        </div>
        <div class="relative border-b">
            <div class="flex flex-col md:flex-row lg:flex-row">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Total Price</label>
                    <input type="number" id="totalprice_lead" name="totalprice_lead" placeholder="0" disabled
                        class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <label class="text-gray-500">Auto - Filled Total Price</label>
                </div>
            </div>
        </div>
        <div class="relative py-5">
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="text-gray-500 px-3">Weight (gram)</label>
                    <input type="number" id="weight_lead" name="weight_lead" placeholder="Input Product Weight"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Warehouse</label>
                    <select name="warehouse_lead" id="warehouse_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Warehouse</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Destination Province</label>
                    <select name="destinationprovince_lead" id="destinationprovince_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Destination Province</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Destination City</label>
                    <select name="destinationcity_lead" id="destinationcity_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden> Select Destination City</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Destination Subdistrict</label>
                    <select name="destinationsubdistrict_lead" id="destinationsubdistrict_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Destination Subdistrict</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Payment</label>
                    <select name="payment_lead" id="payment_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Payment</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="relative py-5 border-b">
            <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3 text-gray-500">Courier</label>
                    <select name="courier_lead" id="courier_lead"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option selected hidden>Select Courier</option>
                        <option>Generous</option>
                        <option>Gizidat</option>
                        <option>Etawaku Platinum</option>
                        <option>New Briswa</option>
                        <option>Freshmag</option>
                        <option>Weigh Platinum</option>
                        <option>Kopi Rube</option>
                    </select>
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3">Shipping Price</label>
                    <input type="number" id="shippingprice_lead" name="shippingprice_lead" placeholder="95.000"
                        class="border  border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div
                    class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                    <label class="px-3">Promo Shipping</label>
                    <input type="number" id="promoshipping_lead" name="promoshipping_lead" placeholder="95.000"
                        class="border  border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="relative py-5 border-b">
                <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="px-3 text-gray-500">Additional Shipping Promotion</label>
                        <select name="additionalsphippingpromotion_lead" id="additionalsphippingpromotion_lead"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected hidden>Select Additional Shipping Promotion</option>
                            <option>Generous</option>
                            <option>Gizidat</option>
                            <option>Etawaku Platinum</option>
                            <option>New Briswa</option>
                            <option>Freshmag</option>
                            <option>Weigh Platinum</option>
                            <option>Kopi Rube</option>
                        </select>
                    </div>
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="px-3 text-gray-500">Shipping Propmotion</label>
                        <select name="shippingpropmotion_lead" id="shippingpropmotion_lead"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected hidden>Select Shipping Propmotion</option>
                            <option>Generous</option>
                            <option>Gizidat</option>
                            <option>Etawaku Platinum</option>
                            <option>New Briswa</option>
                            <option>Freshmag</option>
                            <option>Weigh Platinum</option>
                            <option>Kopi Rube</option>
                        </select>
                    </div>
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="text-gray-500 px-3">Total Shipping Price</label>
                        <input type="totalshippingprice_lead" id="totalshippingprice_lead"
                            name="totalshippingprice_lead" placeholder="95.000" disabled
                            class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label class="text-gray-500">Auto - Filled Total Shipping Price</label>
                    </div>
                </div>
            </div>
            <div class="relative py-5">
                <div class="flex flex-col md:flex-row lg:flex-row justify-between">
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="text-gray-500 px-3">Shipping Admin Cost</label>
                        <input type="shippingadmincost_lead" id="shippingadmincost_lead"
                            name="shippingadmincost_lead" placeholder="95.000" disabled
                            class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label class="text-gray-500">Auto - Filled Shipping Admin Cost</label>
                    </div>
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="px-3 text-gray-500">Admin Promotion</label>
                        <select name="adminpromotion_lead" id="adminpromotion_lead"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected hidden>Select Admin Propmotion</option>
                            <option>Generous</option>
                            <option>Gizidat</option>
                            <option>Etawaku Platinum</option>
                            <option>New Briswa</option>
                            <option>Freshmag</option>
                            <option>Weigh Platinum</option>
                            <option>Kopi Rube</option>
                        </select>
                    </div>
                    <div
                        class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="px-3 text-gray-500">Additional Admin Promotion</label>
                        <select name="additionaladminpromotion_lead" id="additionaladminpromotion_lead"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected hidden>Select Additional Admin Promotion</option>
                            <option>Generous</option>
                            <option>Gizidat</option>
                            <option>Etawaku Platinum</option>
                            <option>New Briswa</option>
                            <option>Freshmag</option>
                            <option>Weigh Platinum</option>
                            <option>Kopi Rube</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="relative py-5 border-b">
                <div class="grid grid-cols-12 flex-col md:flex-row lg:flex-row">
                    <div
                        class="col-span-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="text-gray-500 px-3">Admin Cost Promotion</label>
                        <input type="number" id="admincostpromotion_lead" name="admincostpromotion_lead"
                            placeholder="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div
                        class="col-span-8 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="text-gray-500 px-3">Total Admin Cost</label>
                        <input type="number" id="totaladmincost_lead_lead" name="totaladmincost_lead_lead"
                            placeholder="95.000" disabled
                            class="border bg-slate-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label class="text-gray-500">Auto - Filled Total Admin Cost</label>
                    </div>
                </div>
            </div>
            <div class="relative py-5 border-b">
                <div class="grid grid-cols-12 flex-col md:flex-row lg:flex-row">
                    <div
                        class="col-span-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="px-3 text-gray-500">Grand Total</label>
                        <input type="number" id="grandtotal_lead" name="grandtotal_lead" disabled placeholder="0"
                            class="bg-slate-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label class="text-gray-500">Auto - Filled Grand Total</label>
                    </div>
                    <div
                        class="col-span-4 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3">
                        <label class="text-gray-500 px-3">Upload Proof</label>
                        <input
                            class="block w-full text-sm text-gray-500 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="proof_lead" type="file" multiple>
                    </div>
                    <div class="col-span-4"></div>
                </div>
            </div>
            {{-- button --}}
            <div class="px-6 py-3 flex flex-row justify-between items-center">
                <div class="flex flex-col md:flex-row lg:flex-row justify-between items-center w-full gap-3">
                    <div class="relative mr-5 w-36 md:w-fit">
                        <button
                            class="text-white h-max w-max shadow bg-green-400 hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row items-center"
                            type="button">
                            <span>Copy to Clipboard</span>
                        </button>
                    </div>

                    <div class="flex flex-col gap-2 md:gap-0 md:flex-row">
                        <div class="mr-2 w-36 md:w-fit">
                            <a href="/dashboard-adv"
                                class="text-gray-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2">
                                <span>Cancel</span>
                            </a>
                        </div>
                        <div class="mr-2 w-36 md:w-fit">
                            <!-- Modal toggle -->
                            <button
                                class="text-white shadow w-full bg-blue-600 hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                                type="button">
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>
