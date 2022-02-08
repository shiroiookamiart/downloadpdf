<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\UploadDownloadPdf::class, "index"]);
Route::get("downloadpdf/{dir}", [App\Http\Controllers\UploadDownloadPdf::class, "downloadpdf"]);

Route::post("uploadpdf", [App\Http\Controllers\UploadDownloadPdf::class, "uploadpdf"]);
