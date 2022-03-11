<?php

namespace App\Providers;

use App\Repositories\JournalistRepository;
use App\Repositories\JudgeRepository;
use App\Repositories\ParticipantRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Participant\CreateJudgeController;
use App\Http\Controllers\Participant\UpdateJudgeController;
use App\Http\Controllers\Participant\DeleteJudgeController;
use App\Http\Controllers\Participant\CreateJournalistController;
use App\Http\Controllers\Participant\UpdateJournalistController;
use App\Http\Controllers\Participant\DeleteJournalistController;
use App\Http\Controllers\Participant\CreateParticipantController;
use App\Http\Controllers\Participant\UpdateParticipantController;
use App\Http\Controllers\Participant\DeleteParticipantController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when([
            CreateJudgeController::class,
            UpdateJudgeController::class,
            DeleteJudgeController::class
        ])
            ->needs(UserRepositoryInterface::class)
            ->give(JudgeRepository::class);

        $this->app->when([
            CreateJournalistController::class,
            UpdateJournalistController::class,
            DeleteJournalistController::class
        ])
            ->needs(UserRepositoryInterface::class)
            ->give(JournalistRepository::class);

        $this->app->when([
            CreateParticipantController::class,
            UpdateParticipantController::class,
            DeleteParticipantController::class
        ])
            ->needs(UserRepositoryInterface::class)
            ->give(ParticipantRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
