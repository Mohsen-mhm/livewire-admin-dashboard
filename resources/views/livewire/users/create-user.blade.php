<x-modal>
    <x-slot name="title">
        {{ __('messages.create.permission') }}
    </x-slot>

    <x-slot name="content">

        <form class="w-full flex flex-col justify-center items-center my-8" wire:submit.prevent="store">
            @csrf

            <div class="w-5/6 grid gap-4 mb-4 sm:grid-cols-2" dir="rtl">
                <div>
                    <label for="name" dir="rtl"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.name') }}</label>
                    <input type="text" name="name" id="name" wire:model.debounce.750ms="user.name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 transition"
                           placeholder="mohsen" required="">
                    @error('user.name') <span
                        class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="email"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.email') }}</label>
                    <input type="email" name="email" id="email" wire:model.debounce.750ms="user.email" dir="ltr"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 transition"
                           placeholder="example.gmail.com" required="">
                    @error('user.email') <span
                        class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.password') }}</label>
                    <input type="password" name="password" id="password"
                           wire:model.debounce.750ms="user.password"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 transition"
                           placeholder="••••••••" required="">
                    @error('user.password') <span
                        class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password-confirm"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.confirm.password') }}</label>
                    <input type="password" name="password_confirmation" id="password-confirm"
                           wire:model.debounce.750ms="user.password_confirmation"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500 transition"
                           placeholder="••••••••" required="">
                    @error('user.password_confirmation') <span
                        class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <button type="submit"
                    class="bg-white text-gray-800 font-normal text-sm rounded border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-3 mx-1 mt-4 inline-flex items-center transition">
                <span class="mx-auto" wire:target="store" wire:loading.remove>{{ __('messages.create.user') }}</span>
                <div role="status" wire:target="store" wire:loading>
                    <svg aria-hidden="true"
                         class="inline w-6 h-6 mx-3 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600"
                         viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor"/>
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </button>
        </form>

    </x-slot>

</x-modal>
