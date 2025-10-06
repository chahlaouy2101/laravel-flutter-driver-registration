<?php
namespace App\Services;

use App\Models\User;

class ProfileService
{
    public function update($id, $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
}