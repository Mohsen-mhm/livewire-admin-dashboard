<x-modal>
    <x-slot name="title">
        {{ __('messages.show.user') }}
    </x-slot>

    <x-slot name="content">

        <div class="flex justify-center items-center mt-16">
            <div
                class="w-full bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center py-10">
                    <img class="w-32 h-32 mb-8 rounded-full border" src="/images/default.png"
                         alt="Bonnie image"/>
                    <div class="w-full flex justify-evenly items-center">
                        <div class="flex flex-col justify-center items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('messages.name') }}:</span>
                            <h5 class="mb-1 text-lg font-medium text-gray-900 dark:text-white">{{ $user->name }}</h5>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('messages.email') }}:</span>
                            <h5 class="mb-1 text-lg font-medium text-gray-900 dark:text-white">{{ $user->email }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

</x-modal>
