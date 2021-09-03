<?php

namespace App\Policies;

use App\Tracker;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrackerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any trackers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tracker.
     *
     * @param  \App\User  $user
     * @param  \App\Tracker  $tracker
     * @return mixed
     */
    public function view(User $user, Tracker $tracker)
    {
        //
    }

    /**
     * Determine whether the user can create trackers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tracker.
     *
     * @param  \App\User  $user
     * @param  \App\Tracker  $tracker
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the tracker.
     *
     * @param  \App\User  $user
     * @param  \App\Tracker  $tracker
     * @return mixed
     */
    public function delete(User $user, Tracker $tracker)
    {
        //
    }

    /**
     * Determine whether the user can restore the tracker.
     *
     * @param  \App\User  $user
     * @param  \App\Tracker  $tracker
     * @return mixed
     */
    public function restore(User $user, Tracker $tracker)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tracker.
     *
     * @param  \App\User  $user
     * @param  \App\Tracker  $tracker
     * @return mixed
     */
    public function forceDelete(User $user, Tracker $tracker)
    {
        //
    }
}
