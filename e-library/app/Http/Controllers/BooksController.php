<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validasi input
    $validatedData = $request->validate([
        'nama'            => 'required|string|max:255',
        'Penerbit'        => 'required|string|max:255',
        'Description'     => 'required|string',
        'TahunPenerbit'   => 'required|integer|min:1800|max:' . date('Y'),
        'JumlahHalaman'   => 'required|integer|min:1',
    ]);
    // Simpan data ke database
    Books::create($validatedData);

    // Redirect ke route books.index dengan pesan sukses
    return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan');
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
        //
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
