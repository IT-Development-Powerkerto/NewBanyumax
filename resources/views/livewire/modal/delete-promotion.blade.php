<div>
    <!-- Main modal -->
    <div id="delete-promotion" wire:ignore.self tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-slate-100" >
                <div class="py-6 px-6 lg:px-8">
                    <form id="formDelete" class="space-y-6">
                        @csrf
                        @method('DELETE')
                        <div class="text-center text-xl text-gray-700 font-bold mb-12">
                            <h1>Delete Promotion ?</h1>
                        </div>
                        <div class="flex flex-row gap-3">
                            <button type="button" wire:click.prevent="delete" class="w-full bg-red-600 text-white border font-medium rounded-xl text-sm px-5 py-2.5 text-center" data-modal-toggle="delete-promotion">Delete</button>
                            <button type="button" class="w-full text-gray-400 font-medium rounded-xl text-sm px-5 py-2.5 text-center border-2" data-modal-toggle="delete-promotion">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
