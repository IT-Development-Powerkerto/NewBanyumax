<div class="bg-white rounded-xl shadow-xl border px-5 col-span-8 mb-10">
    <div class="container">
        <div class="flex flex-wrap" id="tabs-id">

            <div class="w-full">
                <div class="flex justify-between">
                    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                        <li class="-mb-px mr-2 last:mr-0 text-center">
                            <a class="font-semibold px-5 py-3 text-black bg-white flex justify-center gap-2 border-b-2 border-[#EF4444] cursor-pointer"
                                onclick="changeAtiveTab(event,'tab-personal-info')">
                                Personal Information
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 text-center">
                            <a class="font-semibold px-5 py-3 text-black bg-white flex justify-center gap-2 cursor-pointer"
                                onclick="changeAtiveTab(event,'tab-files')">
                                Files
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6">
                        <div class="px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">

                                <div class="block" id="tab-personal-info">
                                    <div class="overflow-x-auto">
                                        <div class="w-96 md:w-full lg:w-full">
                                            {{-- USER INFO --}}
                                            <div class="flex flex-row justify-between items-center">
                                                <div class="text-lg font-semibold">
                                                    User Info
                                                </div>
                                                <div class="text-xs text-blue-600">
                                                    <button class="font-semibold" type="button" data-modal-toggle="edit-userinfo">Edit</button>
                                                </div>
                                            </div>
                                            <div class="py-5">
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Full Name</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Marsha Lenathea
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Position</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Customer Service
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Phone Number</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        09837929488
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Email</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Marsha@mail.com
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Address</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Repellendus qui amet sed in? Quasi ad exercitationem minima
                                                        quisquam, obcaecati minus. Debitis beatae magnam temporibus
                                                        accusantium deleniti quibusdam iure numquam deserunt.
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- COMPANY INFO --}}
                                            <div class="flex flex-row justify-between items-center">
                                                <div class="text-lg font-semibold">
                                                    Company Info
                                                </div>
                                                <div class="text-xs text-blue-600">
                                                    <button class="font-semibold" type="button" data-modal-toggle="edit-companyinfo">Edit</button>
                                                </div>
                                            </div>
                                            <div class="py-5">
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Company Name</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        PT. Powetkerto Wahyu Keprabon
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Phone Number</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        08928736910
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Email</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Pwkpowekwerto@gmail.com
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Initial Company</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        PWK
                                                    </div>
                                                </div>
                                                <div class="mb-2 grid grid-cols-8 text-sm gap-2">
                                                    <div class="col-span-2 flex flex-row justify-between font-bold">
                                                        <p>Address</p>
                                                        <p>:</p>
                                                    </div>
                                                    <div class="col-span-6">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Repellendus qui amet sed in? Quasi ad exercitationem minima
                                                        quisquam, obcaecati minus. Debitis beatae magnam temporibus
                                                        accusantium deleniti quibusdam iure numquam deserunt.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="hidden" id="tab-files">
                                    <div class="bg-gray-50 rounded-md p-2" id="tabs-id-2">
                                        <div class="w-full flex flex-col md:flex-row lg:flex-row">
                                            <div class="flex flex-col">
                                                <div class="py-5 self-center">
                                                    <button class="text-sm bg-red-700 hover:bg-red-500 text-white py-1 px-10 rounded-lg">
                                                        + Upload
                                                    </button>
                                                </div>
                                                <ul>
                                                    <li class="-mb-px last:mr-0 flex-auto text-left">
                                                        <a class="flex items-center gap-4 text-xs font-bold px-8 py-4 rounded leading-normal text-black bg-sky-100 cursor-pointer"
                                                            onclick="changeAtiveTab2(event,'all-files')">
                                                            <span class="iconify text-orange-400"  data-width="20" data-height="20" data-icon="ant-design:folder-open-outlined"></span>All Files
                                                        </a>
                                                    </li>
                                                    <li class="-mb-px last:mr-0 flex-auto text-left">
                                                        <a class="flex items-center gap-4  text-xs font-bold px-8 py-4 rounded leading-normal text-gray-500 bg-gray-50 cursor-pointer"
                                                            onclick="changeAtiveTab2(event,'images')">
                                                            <span class="iconify text-orange-400"  data-width="20" data-height="20" data-icon="carbon:image"></span></i>Images
                                                        </a>
                                                    </li>
                                                    <li class="-mb-px last:mr-0 flex-auto text-left">
                                                        <a class="flex items-center gap-4 text-xs font-bold px-8 py-4 rounded leading-normal text-gray-500 bg-gray-50 cursor-pointer"
                                                            onclick="changeAtiveTab2(event,'documents')">
                                                            <span class="iconify text-orange-400"  data-width="20" data-height="20" data-icon="carbon:document-blank"></span></i>Documents
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                    
                                            <div class="w-full flex flex-col min-w-0 break-words mb-6 rounded border-l-2">
                                                <div class="px-4 py-5 flex-auto">
                                                    <div class="tab-content-2 tab-space">
                                                        <div class="block" id="all-files">
                                                            <livewire:table.all-files-profil/>
                                                        </div>
                                                        <div class="hidden" id="images">
                                                            <livewire:table.image-files-profil/>
                                                        </div>
                                                        <div class="hidden" id="documents">
                                                            <livewire:table.document-files-profil/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- scrip tabs dalam files --}}
<script type="text/javascript">
    function changeAtiveTab2(event,tabID2){
      let element = event.target;
      while(element.nodeName !== "A"){
        element = element.parentNode;
      }
      ulElement = element.parentNode.parentNode;
      aElements = ulElement.querySelectorAll("li > a");
      tabContents = document.getElementById("tabs-id-2").querySelectorAll(".tab-content-2 > div");
      for(let i = 0 ; i < aElements.length; i++){
        aElements[i].classList.remove("text-black");
        aElements[i].classList.remove("bg-sky-100");
        aElements[i].classList.add("text-gray-500");
        aElements[i].classList.add("bg-gray-50");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
      }
      element.classList.remove("text-gray-500");
      element.classList.remove("bg-gray-50");
      element.classList.add("text-black");
      element.classList.add("bg-sky-100");
      document.getElementById(tabID2).classList.remove("hidden");
      document.getElementById(tabID2).classList.add("block");
    }
  </script>