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

<body class="bg-white" style="font-family: 'Poppins', sans-serif;">

    <div class="flex">
        <div class="fixed">
            <livewire:navbar.sidebar-sa/>
        </div>
        <div class="container text-4xl md:ml-64 px-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In aspernatur cum aut veniam labore doloremque, perspiciatis ipsam dolor. Dolorum aut mollitia eligendi voluptates dolores ipsum quia accusamus id dolore aspernatur.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sed aperiam laboriosam sunt! Sint dolor labore, iure optio excepturi unde soluta magni eos laboriosam est sequi voluptatem vitae, voluptates animi?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis debitis molestiae corrupti autem recusandae ea quidem deleniti? A fuga, tempora laborum inventore, perferendis alias nulla adipisci sit sapiente dicta facilis!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt quia, sit beatae omnis atque doloribus at, ut aspernatur neque numquam suscipit animi. Blanditiis, odit maxime sint tempora corrupti error?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolor blanditiis, ducimus maxime incidunt neque? Odit quis sed quas sit, delectus impedit velit ratione pariatur eaque quos corporis doloribus tempore.
        </div>
    </div>
    
   


    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <script>
        var sideBar = document.getElementById("mobile-nav");
        var openSidebar = document.getElementById("openSideBar");
        var closeSidebar = document.getElementById("closeSideBar");
        sideBar.style.transform = "translateX(-260px)";

        function sidebarHandler(flag) {
            if (flag) {
                sideBar.style.transform = "translateX(0px)";
                openSidebar.classList.add("hidden");
                closeSidebar.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                closeSidebar.classList.add("hidden");
                openSidebar.classList.remove("hidden");
            }
        }
    </script>
</body>

</html>
