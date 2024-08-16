<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\CreateRequest;
use App\Services\UserService;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = $this->userService->getAllUser();
        return view('backend.user.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['users'] = $this->userService->create();
        return view('backend.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $inputs = $request->all();
      //  var_dump($inputs);
       // die();
        $user= $this->userService->create($inputs);
        if ($user['status']) {
            return redirect()->route('user.index')->with('success', $user['message']);
        }
        return back()->with('error', $user['message']);
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $user= $this->userService->getAlluser()->find($id);
    //     return view('user.show', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        // $find = $this->userService->find($id);
        // if ($find['status']) {
        //     $data['users'] = $find['users'];
        //     return view('user.edit', $data);
        // }
        return redirect()->route('user.create');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRequest $request, $id)
    {
        $inputs = $request->all();
        // $user = $this->userService->find($id);
        // if (!$user) {
        //     return back()->with('error', 'user not found.');
        // }
        // Cập nhật thông tin của user
        $updateResult = $this->userService->update($id, $inputs);
        if ($updateResult['status']) {
            return redirect()->route('user.index')->with('success', $updateResult['message']);
        }
        return back()->with('error', $updateResult['message'],$updateResult);
    }
    public function show($id)
    {
        //  $data['users']=$this->userService->create();
        //   return view('backend.user.create',$data);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = $this->userService->delete($id);
        if ($user['status']) {
            return redirect()->route('user.index')
                ->with('success', 'user deleted successfully');
        } else {
            return  back()->with('error', 'Delete user unsuccessfully. Please check again.');
        }
    }
    public function updateLoginDetails(Request $request, $id)
    {
        $email = $request->input('email');
        $username = $request->input('username');
    
        $user = $this->userService->updateLoginDetails($id, $email, $username);
    
        // Sử dụng redirect đúng với tham số id
        return redirect()->route('user.update-info', ['id' => $id]);
    }
    
    public function updatePassword(Request $request, $id)
    {
        $password = $request->input('password');
    
        $user = $this->userService->updatePassword($id, $password);
    
        // Sử dụng redirect đúng với tham số id
        return redirect()->route('user.update-pass', ['id' => $id]);
    }
    public function upload_img(){
        return view('backend.user.test-upload');
    }
}
