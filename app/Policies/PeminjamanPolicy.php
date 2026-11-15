<?php

namespace App\Policies;

use App\Models\Peminjaman;
use App\Models\User;

class PeminjamanPolicy
{
    public function view(User $user, Peminjaman $peminjaman): bool
    {
        if ($user->hasRole(['admin', 'petugas'])) {
            return true;
        }

        return (int) $user->id === (int) $peminjaman->user_id;
    }
}