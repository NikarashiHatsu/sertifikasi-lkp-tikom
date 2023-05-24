<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(auth()->user()->role == 'user', 403);

        return view('dashboard.transaction.participant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        abort_if(auth()->user()->role == 'user', 403);

        try {
            $participant->delete();
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
