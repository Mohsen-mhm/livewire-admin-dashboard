<x-modal>
    <x-slot name="title">
        Show user
    </x-slot>

    <x-slot name="content">

        <div class="relative w-full h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" wire:click="$emit('closeModal')"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="create-user-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Show user</h3>
                    <div class="flex justify-center items-center mt-16">
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                            <div class="flex flex-col items-center py-10">
                                <img class="w-24 h-24 mb-3 rounded-full border" src="/images/default.png"
                                     alt="Bonnie image"/>
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

    <x-slot name="buttons">

    </x-slot>
</x-modal>
