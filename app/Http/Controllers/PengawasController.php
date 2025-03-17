<?php

namespace App\Http\Controllers;

use App\Models\Pengawas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengawasController extends Controller
{
    public function index()
    {
        return response()->json(Pengawas::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pengawas',
            'password' => 'required|min:6',
        ]);

        $pengawas = Pengawas::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($pengawas, 201);
    }

    public function show($id)
    {
        $pengawas = Pengawas::find($id);
        return $pengawas ? response()->json($pengawas) : response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    public function update(Request $request, $id)
    {
        $pengawas = Pengawas::find($id);
        if (!$pengawas) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $pengawas->update([
            'nama' => $request->nama ?? $pengawas->nama,
            'email' => $request->email ?? $pengawas->email,
            'password' => $request->password ? Hash::make($request->password) : $pengawas->password,
        ]);

        return response()->json($pengawas);
    }

    public function destroy($id)
    {
        $pengawas = Pengawas::find($id);
        if (!$pengawas) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $pengawas->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}