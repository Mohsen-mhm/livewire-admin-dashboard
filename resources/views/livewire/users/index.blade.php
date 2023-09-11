<div class="w-full flex flex-col justify-center items-center p-5" dir="ltr">
    <div class="w-5/6 flex justify-end items-end my-4">
        <button type="button" wire:click="$emit('openModal', 'users.create-user')"
                class="focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition">
            {{ __('messages.create.user') }}
        </button>
    </div>

    <livewire:user-table/>
</div>
