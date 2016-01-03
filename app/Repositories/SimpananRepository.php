<?php

namespace app\Repositories;

use App\User;
use App\Anggota;
use App\Simpanan;

class SimpananRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param User $user
     *
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Simpanan::where('user_id', $user->id)
                    ->orderBy('tanggal_pembayaran', 'desc')
                    ->get();
    }

    public function untukUser(User $user)
    {
        return Anggota::where('user_id', $user->id)
                    ->get();
    }
}
