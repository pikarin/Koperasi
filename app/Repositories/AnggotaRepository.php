<?php

namespace app\Repositories;

use App\User;
use App\Anggota;
use App\Simpanan;

class AnggotaRepository
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
        return Anggota::where('user_id', $user->id)
                    ->get();
    }

    public function Simpanan(User $id)
    {
        return Simpanan::where('anggota_id', $id->id)
                   ->get();
    }
}
