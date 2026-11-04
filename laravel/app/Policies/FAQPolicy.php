<?php

namespace App\Policies;

use App\Models\FAQ;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FAQPolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, FAQ $fAQ): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, FAQ $fAQ): bool
    {
        return false;
    }

    public function delete(User $user, FAQ $fAQ): bool
    {
        return false;
    }

    public function restore(User $user, FAQ $fAQ): bool
    {
        return false;
    }

    public function forceDelete(User $user, FAQ $fAQ): bool
    {
        return false;
    }
}
