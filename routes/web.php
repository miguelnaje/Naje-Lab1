<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/character', function () {
    return view('character');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/asahi', function () {
    return view('asahi');
});

Route::get('/chikara', function () {
    return view('chikara');
});

Route::get('/daichi', function () {
    return view('daichi');
});

Route::get('/hinata', function () {
    return view('hinata');
});

Route::get('/hisashi', function () {
    return view('hisashi');
});

Route::get('/hitoka', function () {
    return view('hitoka');
});
Route::get('/kageyama', function () {
    return view('kageyama');
});

Route::get('/kazuhito', function () {
    return view('kazuhito');
});

Route::get('/kei', function () {
    return view('kei');
});

Route::get('/koshi', function () {
    return view('koshi');
});

Route::get('/kyoko', function () {
    return view('kyoko');
});

Route::get('/ryunosuke', function () {
    return view('ryunosuke');
});

Route::get('/tadashi', function () {
    return view('tadashi');
});

Route::get('/takeda', function () {
    return view('takeda');
});

Route::get('/ukai', function () {
    return view('ukai');
});

Route::get('/yu', function () {
    return view('yu');
});