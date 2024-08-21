<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index'); });

Route::get('/about', function () {
    return view('pages.about'); });

Route::get('/gallery', function () {
    return view('pages.gallery'); });
    
Route::get('/services', function () {
    return view('pages.services'); });

Route::get('/contact', function () {
    return view('pages.contact'); });