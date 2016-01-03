<?php

namespace app\Repositories;

use App\User;
use App\Anggota;
use App\Simpanan;

class BerandaRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param User $user
     *
     * @return Collection
     */
    public function Anggota(User $user)
    {
        return Anggota::where('user_id', $user->id)
                    ->count();
    }

    public function SimpananWajib(User $user)
    {
        return Simpanan::where('user_id', $user->id)
                    ->sum('simpanan_wajib');
    }

    public function SimpananSukarela(User $user)
    {
        return Simpanan::where('user_id', $user->id)
                    ->sum('simpanan_sukarela');
    }
}
