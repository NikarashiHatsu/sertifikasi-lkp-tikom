<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        abort_if(auth()->user()->role == 'user', 403);

        $data = $request->validated();

        try {
            User::create($data);
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil menyimpan data.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.master.user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        abort_if(auth()->user()->role == 'user', 403);

        $data = $request->validated();

        try {
            if ($request->has('password')) {
                $data['password'] = Hash::make($data['password']);
            }

            $user->update($data);
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat memperbarui data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        abort_if(auth()->user()->role == 'user', 403);

        try {
            $user->delete();
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan saat menghapus data: ' . $th->getMessage())
                ->withInput();
        }

        return redirect()
            ->back()
            ->with('success', 'Berhasil menghapus data.');
    }
}
