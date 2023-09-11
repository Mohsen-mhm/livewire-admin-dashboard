<?php

// return Iran flag and language name for header
function ir()
{
    return "<a href='" . route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'fa']) . "'
                class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white\"
                role=\"menuitem\">
                    <div class=\"inline-flex items-center\">
                        <img src=\"/images/flags/ir.svg\" class=\"mx-1\" alt=\"Iran Flag\">
                        " . __('messages.persian') . "
                    </div>
                </a>";
}

// return US flag and language name for header
function en()
{
    return "<a href='" . route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en']) . "'
                class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white\"
                role=\"menuitem\">
                    <div class=\"inline-flex items-center\">
                        <img src=\"/images/flags/us.svg\" class=\"mx-1\" alt=\"United state Flag\">
                         " . __('messages.english') . "
                    </div>
                </a>";
}

?>
