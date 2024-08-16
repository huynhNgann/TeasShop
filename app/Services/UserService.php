<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Function: get all users
     * Created at: 04/07/2024
     * Created by: Ngân
     * @return object
     */
    public function getAllUser()
    {
        return $this->userRepository->getAllHavePaginate();
    }
    /**
     * Function create new user
     * Created at: 04/07/2024
     * Created by: Ngân
     * 
     * @param array $data
     * @return array
     */
    public function create(array $data = array())
    {
        if (empty($data)) {
            return [
                'status' => false,
                'message' => 'Inputs empty.'
            ];
        }

        try {
            $user = $this->userRepository->create($data);
            if ($user) {
                return [
                    'status' => true,
                    'message' => 'Create new user successfully.'
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Create new user unsuccessfully. Please check again.'
                ];
            }
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            return [
                'status' => false,
                'message' => 'A system error has occurred. Please check logs.'
            ];
        }
    }

    /**
     * Function find user by id
     * Created at: 06/07/2024
     * Created by: Ngân
     * 
     * @param int $user_id
     * @return array
     */
    public function find($user_id = 0)
    {
        $user = $this->userRepository->find($user_id);
        if (empty($user)) {
            return [
                'status' => false,
                'message' => 'user not found.'
            ];
        } else {
            return [
                'status' => true,
                // 'user' => $this->formatData($user)
            ];
        }
    }

    // public function formatData($user = null)
    // {
    //     if (empty($user)) return false;
    //     if ($user->published_at) {
    //         $user->published_at = Carbon::parse($user->published_at)->format('Y-m-d');
    //     }
    //     return $user;
    // }

    /**
     * Function update user
     * Created at: 06/07/2024
     * Created by: Ngân
     * 
     * @param int $user_id
     * @param array $data
     * @return array
     */
    public function update($user_id = 0, array $data = array())
    {
        if (empty($data)) {
            return [
                'status' => false,
                'message' => 'Inputs empty.'
            ];
        }

        try {
            $userUpdated = $this->userRepository->update($user_id, $data);
            if ($userUpdated) {
                return [
                    'status' => true,
                    'message' => 'Update user successfully.'
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Update user unsuccessfully. Please check again.'
                ];
            }
        } catch (\Exception $e) {
            Log::error('Error updating user: ' . $e->getMessage());
            return [
                'status' => false,
                'message' => 'A system error has occurred. Please check logs.'
            ];
        }
    }

    /**
     * Function delete user
     * Created at: 06/07/2024
     * Created by: Ngân
     * 
     * @param int $user_id
     * @return array
     */
    public function delete($user_id = 0)
    {
        try {
            $userDeleted = $this->userRepository->delete($user_id);
            
            if ($userDeleted) {
                return [
                    'status' => true,
                    'message' => 'Delete user successfully.'
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Delete user unsuccessfully. Please check again.'
                ];
            }
        } catch (\Exception $e) {
            Log::error('Error deleting user: ' . $e->getMessage());
            return [
                'status' => false,
                'message' => 'A system error has occurred. Please check logs.'
            ];
        }
    }
    /**
     * Function delete user
     * Created at: 09/08/2024
     * Created by: Ngân
     * 
     * @param int $user_id
     * @return array
     */
    public function updateLoginDetails($user_id = 0, $email, $username = null){
        return $this->userRepository->updateLoginDetails($user_id, $email, $username);
    }
    public function updatePassword($id, $password)
    {
        return $this->userRepository->updatePassword($id, $password);
    }
}
