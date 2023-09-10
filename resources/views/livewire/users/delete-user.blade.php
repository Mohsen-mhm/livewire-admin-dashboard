<x-modal>
    <x-slot name="title">
        Delete user
    </x-slot>

    <x-slot name="content">

        <div class="w-full flex justify-center items-center mt-16">
            <div
                class="w-full bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">

                <div class="w-full flex flex-col items-center p-10">
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Are you sure you want
                        to delete this user?</h5>
                    <div class="flex justify-center items-center w-1/2 mt-6">
                        <button type="button" wire:click="destroy({{ $user->id }})"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Yes
                        </button>
                        <button type="button" wire:click="$emit('closeModal')"
                                class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">
                            No
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

</x-modal>
