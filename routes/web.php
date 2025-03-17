<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    DB::table('users')->where('id', 1)->update([
        'name' => 'Dostonbek',
        'age' => 17
    ]);

    $users = DB::table('users')->get();
    return view('welcome', compact('users'));
});
