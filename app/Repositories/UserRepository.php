<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
class userRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAllUser()
    {
        return $this->user->get();
    }

    public function getAllHavePaginate()
    {
        return $this->user->paginate(5);
    }

    public function create($data)
    {
        DB::beginTransaction();
        try {
            $user = $this->user->create($data);
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating user: ' . $e->getMessage());
            return false;
        }
    }

    public function find(int $id)
    {
        try {
            return $this->user->find($id);
        } catch (\Exception $e) {
            Log::error('Error finding user: ' . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        DB::beginTransaction();
        try {
            $user = $this->find($id);
            if ($user) {
                $user->update($data);
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating user: ' . $e->getMessage());
            return false;
        }
    }
 
    public function delete(int $id)
    {
        DB::beginTransaction();
        try {
            $user = $this->find($id);
            if ($user) {
                $user->delete();
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting user: ' . $e->getMessage());
            return false;
        }
    }
    public function updateLoginDetails($id, $email, $username = null)
    {
        $user = $this->find($id);
        if ($user) {
            $user->email = $email;
            if ($username !== null) {
                $user->username = $username;
            }
            $user->save();
        }
        return $user;
    }
    public function updatePassword($id, $password)
    {
        $user = $this->find($id);
        if ($user) {
            $user->password = Hash::make($password);
            $user->save();
        }
        return $user;
    }
}
