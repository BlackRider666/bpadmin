<?php
Route::name('bpadmin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('bpadmin::pages.index');
    })->name('pages.index');
});
