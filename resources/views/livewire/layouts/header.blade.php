<nav class="bg-white border-gray-200 dark:bg-gray-900 border border-b shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home', app()->getLocale()) }}" class="flex items-center">
            <span
                class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">{{ __('messages.livewire') }}</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="/images/flags/{{ app()->getLocale() == 'fa' ? 'ir.svg' : 'us.svg' }}" class="mx-1"
                     alt="United State Flag">
            </button>
            <!-- Dropdown -->
            <div
                class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                @php require_once app_path('Helpers/FlagIcons.php') @endphp
                <ul class="py-2 font-medium" role="none">
                    <li>
                        @if(app()->getLocale() == 'en')
                            {!! en() !!}
                        @else
                            {!! ir() !!}
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'en')
                            {!! ir() !!}
                        @else
                            {!! en() !!}
                        @endif
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-language" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('home', app()->getLocale()) }}"
                       class="{{ in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['home']) ? 'block p-1 mx-2 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500' : 'block p-1 mx-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}"
                       aria-current="page">{{ __('messages.home') }}</a>
                </li>
                <li>
                    <a href="{{ route('users', app()->getLocale()) }}"
                       class="{{ in_array(\Illuminate\Support\Facades\Route::currentRouteName(),['users']) ? 'block p-1 mx-2 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500' : 'block p-1 mx-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">{{ __('messages.users') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
