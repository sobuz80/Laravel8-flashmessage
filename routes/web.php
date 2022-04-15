<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\FlashMsgController;

  

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

  

Route::get('flash-msg',[FlashMsgController::class,'index']);

Route::get('flash-msg-success',[FlashMsgController::class,'success'])->name('success');

Route::get('flash-msg-info',[FlashMsgController::class,'info'])->name('info');

Route::get('flash-msg-warning',[FlashMsgController::class,'warning'])->name('warning');

Route::get('flash-msg-error',[FlashMsgController::class,'error'])->name('error');