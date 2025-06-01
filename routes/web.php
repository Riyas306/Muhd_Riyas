<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project/hrpanel', function() {
    return view('hrpanel');
})->name('project.hr');