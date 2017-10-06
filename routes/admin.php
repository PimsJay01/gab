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
    CRUD::resource('addresses', 'AddressCrudController');
    CRUD::resource('courts', 'CourtCrudController');
    CRUD::resource('court_infos', 'CourtInfoCrudController');
    CRUD::resource('court_schedules', 'CourtScheduleCrudController');
    CRUD::resource('court_types', 'CourtTypeCrudController');
    CRUD::resource('documents', 'DocumentCrudController');
    CRUD::resource('document_types', 'DocumentTypeCrudController');
    CRUD::resource('links', 'LinkCrudController');
    CRUD::resource('link_types', 'LinkTypeCrudController');
    CRUD::resource('news', 'NewsCrudController');
    CRUD::resource('seasons', 'SeasonCrudController');
});
