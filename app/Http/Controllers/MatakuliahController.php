<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah; // pastikan huruf K konsisten

class MatakuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index()
    {
        return view('list_mk', [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all()
        ]);
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|unique:mata_kuliah,nama_mk',
            'sks' => 'required|integer|min:1|max:3',
        ]);

        try {
            Matakuliah::create([
                'nama_mk' => $request->nama_mk,
                'sks' => $request->sks,
            ]);

            return redirect()->route('matakuliah.index')
                ->with('success', 'Mata kuliah berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('matakuliah.index')
                ->with('error', 'Gagal menambahkan mata kuliah: ' . $e->getMessage());
        }
    }

    // Form edit
    public function edit($id)
    {
        $mk = Matakuliah::findOrFail($id);
        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mk
        ]);
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|unique:mata_kuliah,nama_mk,' . $id,
            'sks' => 'required|integer|min:1|max:3',
        ]);

        try {
            $mk = Matakuliah::findOrFail($id);
            $mk->update([
                'nama_mk' => $request->nama_mk,
                'sks' => $request->sks,
            ]);

            return redirect()->route('matakuliah.index')
                ->with('success', 'Data mata kuliah berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('matakuliah.index')
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }

    // Hapus data
    public function destroy($id)
    {
        try {
            $mk = Matakuliah::findOrFail($id);
            $mk->delete();

            return redirect()->route('matakuliah.index')
                ->with('success', '🗑 Mata kuliah berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('matakuliah.index')
                ->with('error', '❌ Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
