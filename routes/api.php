<?php

use App\Http\Controllers\Journalist\CreateJournalistController;
use App\Http\Controllers\Journalist\DeleteJournalistController;
use App\Http\Controllers\Journalist\UpdateJournalistController;
use App\Http\Controllers\Judge\CreateJudgeController;
use App\Http\Controllers\Judge\DeleteJudgeController;
use App\Http\Controllers\Judge\UpdateJudgeController;
use App\Http\Controllers\Participant\CreateParticipantController;
use App\Http\Controllers\Participant\DeleteParticipantController;
use App\Http\Controllers\Participant\UpdateParticipantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('RedirectIfAdministrator')->group(function () {
    Route::post('createJournalistController', CreateJournalistController::class);
    Route::post('deleteJudge', DeleteJudgeController::class);
    Route::post('deleteParticipant', DeleteParticipantController::class);
    Route::post('deleteJournalistController', DeleteJournalistController::class);
});

Route::middleware(['RedirectIfAdministrator', 'RedirectIfJudge'])->group(function () {
    Route::post('updateJudge', UpdateJudgeController::class);
    Route::post('updateParticipant', UpdateParticipantController::class);
});

Route::middleware(['RedirectIfAdministrator', 'RedirectIfParticipant'])->group(function () {
    Route::post('createParticipant', CreateParticipantController::class);
});

Route::middleware(['RedirectIfAdministrator', 'RedirectIfJournalist'])->group(function () {
    Route::post('createJudge', CreateJudgeController::class);
    Route::post('updateJournalistController', UpdateJournalistController::class);
});

