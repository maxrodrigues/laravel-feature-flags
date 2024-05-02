<?php

namespace App\Features;

use App\Models\User;
use Illuminate\Support\Lottery;

class AdminUsersFeature
{
    /**
     * Resolve the feature's initial value.
     */
    public function resolve(User $user): bool
    {
        return $user->is_admin ?? false;
    }
}
