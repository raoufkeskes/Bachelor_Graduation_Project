<?php

Route::get('/admin', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

   

    return view('admin.auth.admin-login');
})->name('admin');

