<?php

/*
|--------------------------------------------------------------------------
| Web Admin/CRUD Routes
|--------------------------------------------------------------------------
|
| Backpack\CRUD: Define the resources for the entities you want to CRUD.
|
*/

Route::middleware(['role:committee'])->group(function ()
{
    CRUD::resource('users', 'UserCrudController');
    CRUD::resource('aboutus', 'AboutusCrudController');
});
