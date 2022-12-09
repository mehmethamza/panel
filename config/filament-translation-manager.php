<?php

return [
    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Application Supported Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the possible locales that can be used.
    | You are free to fill this array with any of the locales which will be
    | supported by the application.
    |
    */
    'supported_locales' => [
        'en',
        'tr',
//        'fr',
    ],

    /*
    |--------------------------------------------------------------------------
    | Access
    |--------------------------------------------------------------------------
    |
    | Limited = false (default)
    |   Anyone can use the translation manager.
    |
    | Limited = true
    |   The page will use the provided gate to see if the user has access.
    |   - Default Laravel: you can define the gate in a service provider
            (https://laravel.com/docs/9.x/authorization)
    |   - Spatie permissions: set the 'gate' variable to a permission name you want to check against, see the example below.
    |
    |
    */
    'access' => [
        'limited' => false,
        //'gate' => 'view-filament-translation-manager',
    ],

    /*
     |--------------------------------------------------------------------------
     | Ignore Groups
     |--------------------------------------------------------------------------
     |
     | You can list the translation groups that you do not want users to translate.
     | Note: the JSON files are grouped in 'json-file' by default. (see config/laravel-chained-translator.php)
     */
    'ignore_groups' => [
        "filament::widgets/filament-info-widget",
        "filament::resources/pages/view-record",
        "filament::resources/pages/view-record",
        "filament::widgets/tilament-info-widget  ",
        "filament::widgets/filament-info-widget",
        "filament::resources/pages/view-record",
        "filament::resources/pages/edit-record",
        "filament::widgets/account-widget",
        "filament::resources/pages/list-records",
        "filament::resources/pages/create-record",
        "filament-support::actions/attach",
        "filament-support::actions/create",
        "filament-support::actions/delete",
       "filament-support::actions/detach",
         "filament-support::actions/dissociate",
        "filament-support::actions/edit",
   "filament-support::actions/force-delete",
    "filament-support::actions/associate",
    "filament::pages/dashboard",
    "filament-support::actions/modal",
    "filament-support::actions/group",
    "filament-support::actions/replicate",
    "validation",
    "filament-support::actions/view",
    "filament-support::components/button",
    "filament-support::components/modal",
    "filament::global-search",
    "filament::login",
    "filament-support::actions/restore",
    "passwords",
    "filament::layout",


    ],

    /*
     |--------------------------------------------------------------------------
     | Navigatio Sort
     |--------------------------------------------------------------------------
     |
     | You can specify the order in which navigation items are listed.
     | Accepts integer value according to filamnet documentation.
     | (visit: https://filamentphp.com/docs/2.x/admin/resources/getting-started#sorting-navigation-items)
     */
    'navigation_sort' => null,
];
