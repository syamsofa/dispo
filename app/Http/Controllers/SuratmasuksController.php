<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuks;
use Illuminate\Http\Request;

class SuratmasuksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $suratmasuks = Suratmasuks::all();

            return response()->json([
                'status' => 'success',
                'message' => 'Get all students success',
                'data' => $suratmasuks,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Get all students failed',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tanggal_surat' => 'required|string',
            'judul_surat' => 'required|string',
            'tautan_surat' => 'required|string'
        ]);
        $suratmasuks = new Suratmasuks([
            'tanggal_surat' => $request->tanggal_surat,
            'judul_surat' => $request->judul_surat,
            'tautan_surat' => $request->tautan_surat,

        ]);
        $suratmasuks->save();
        if ($suratmasuks) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data added succesfully',
                'data' => $suratmasuks
            ]);
        } else {
            return Response()->json([
                'status' => 'error',
                'message' => 'Error adding data',
                'data' => $suratmasuks
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $suratmasuks = Suratmasuks::find($id);

            return response()->json([
                'status' => 'success',
                'message' => 'Get all students success',
                'data' => $suratmasuks,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Get all students failed',
                'error' => $e->getMessage(),
            ]);
        }
    }
    public function showok(string $id)
    {
        try {
            $suratmasuks = Suratmasuks::find($id);

            return response()->json([
                'status' => 'success',
                'message' => 'Get all students success',
                'data' => $suratmasuks,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Get all students failed',
                'error' => $e->getMessage(),
            ]);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
