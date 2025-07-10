<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= User::all();
        return view( 'admin.userdetail',['result'=>$user]);
        
    }

    public function fetchUsers()
{
    return response()->json(User::all()); // sirf data, koi HTML/Blade nahi
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user= User::find($id);
        return view('admin.edituser',['result'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }

    // Basic data update
    $user->name = $request->name;
    $user->email = $request->email;

    // ✅ Password sirf tabhi update hoga jab koi naya password diya gaya ho
    if (!empty($request->password)) {
        $user->password = Hash::make($request->password);
    }

    if ($user->save()) {
        return redirect('userdetail')->with('success', 'User updated successfully');
    } else {
        return redirect()->back()->with('error', 'Update failed');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete= User::destroy($id);
         return redirect('userdetail');
    }
}
