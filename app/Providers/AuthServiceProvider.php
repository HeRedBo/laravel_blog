<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Comment;
use App\Models\Discussion;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => \App\Policies\UserPolicy::class,
        Comment::class => \App\Policies\CommentPolicy::class,
        Discussion::class => \App\Policies\DiscussionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
