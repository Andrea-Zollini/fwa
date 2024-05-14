<?php

namespace App\Observers;

use App\Jobs\Auth\AssignRoleToUser;
use App\Models\User;
use Illuminate\Bus\Dispatcher;

class UserObserver
{

    public function __construct(
        private readonly Dispatcher $bus,
    ) {
    }
    public function created(User $user): void
    {
        $this->bus->dispatch(
            command: new AssignRoleToUser(
                user: $user,
                role: 'user',
            ),
        );
    }
    public function updated(User $user): void
    {
        //
    }
    public function deleted(User $user): void
    {
        //
    }
    public function restored(User $user): void
    {
        //
    }
    public function forceDeleted(User $user): void
    {
        //
    }
}
