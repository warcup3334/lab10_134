<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function register(Request $request){
        $field = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:user,email',
            'password' => 'required|string',
            'address' => 'required|string|confirmed',
            'role' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $field['name'],
            'email' => $field['email'],
            'address' => $field['address'],
            'password' => bcrypt($field['password']),
            'role' => $field['role'],
        ]);

        $token = $user->createToken($request->userAgent(),[$field['role']])->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
}
