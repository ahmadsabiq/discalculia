<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            "title" => "User",
            "active" => "user",
            "users" => User::all()
        ]);
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
        return view('dashboard.user.show', [
            "title" => "User",
            "active" => "user",
            "user" => $user
        ]);
    }

    // List all pending registrations
    public function showPendingRegistrations()
    {
        $pendingUsers = User::where('approved', false)->get();
        return view('admin.users.pending', compact('pendingUsers'));
    }

    // Approve a user
    public function approveUser($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->approved = true;
            $user->save();
        }

        return redirect()->route('admin.pending.users');
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
}
