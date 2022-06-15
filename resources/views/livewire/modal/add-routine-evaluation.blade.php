<!-- Main modal -->
<div id="add-campaign" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                class="absolute top-5 right-6 text-white-400 bg-transparent hover:bg-red-500 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="add-campaign">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Routine Evaluation</h3>
                <form class="space-y-6" method="POST" action="">
                    @csrf
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-layer-group text-gray-400"></i>
                        </div>
                        <select name="product_name"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option selected hidden>Product Name</option>
                            {{-- <option value="{{$fp->id}}">{{$fp->name}}</option> --}}
                            <option>Generous</option>
                            <option>Gizidat</option>
                            <option>Etawaku Platinum</option>
                            <option>New Briswa</option>
                            <option>Freshmag</option>
                            <option>Weigh Platinum</option>
                            <option>Kopi Rube</option>
                        </select>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        </div>
                        <input type="date" name="date" id="date"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        </div>
                        <input id="time" type="time" name="time"
                            class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-sticky-note text-gray-400"></i>
                        </div>
                        <textarea type="resistance_routine" name="resistance_routine" id="resistance_routine"
                            class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Resistance" required></textarea>
                    </div>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="las la-sticky-note text-gray-400"></i>
                        </div>
                        <textarea type="solution_evaluation" name="solution_evaluation" id="solution_evaluation"
                            class="block px-4 py-2 pl-10 h-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Solution" required></textarea>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button type="submit"
                            class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
