<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuks;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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
        // print_r([111]);
        

       $validator = Validator::make($request->all(), [
            'tanggal_surat' => 'required|string',
            'judul_surat' => 'required|string',
            'tautan_surat' => 'required|string'
        ]);
        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create user
        $suratmasuk = Suratmasuks::create([
            'tanggal_surat'      => $request->tanggal_surat,
            'judul_surat'     => $request->judul_surat,
            'tautan_surat'  => $request->tautan_surat,
        ]);

        //return response JSON user is created
        if($suratmasuk) {
            return response()->json([
                'success' => true,
                'user'    => $suratmasuk,  
            ], 201);
        }

        //return JSON process insert failed 
        return response()->json([
            'success' => false,
        ], 409);
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
