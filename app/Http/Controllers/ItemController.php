<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;


class ItemController extends Controller
{
    public function index()
    {
        $items = Barang::all();
        return view('items.index', compact('items'));
    }

    public function create()
{
    $satuans = Satuan::all();
    return view('items.create', compact('satuans'));
}


public function store(Request $request)
{
    $request->validate([
        'kode' => 'required|unique:barangs',
        'nama' => 'required',
        'harga' => 'required|numeric',
        'deskripsi' => 'required',
        'satuan_id' => 'required|exists:satuans,id',
    ]);

    $barangData = $request->except('_token');

    Barang::create($barangData);

    return redirect()->route('items.index')->with('success', 'Barang berhasil ditambahkan.');
}
public function edit($id)
{
    $item = Barang::findOrFail($id);

    $satuans = Satuan::all();

    return view('items.edit', compact('item', 'satuans'));
}
public function update(Request $request, $id)
{
    $item = Barang::findOrFail($id);

    $request->validate([
        'kode' => 'required|unique:barangs,kode,'.$id,
        'nama' => 'required',
        'harga' => 'required|numeric',
        'deskripsi' => 'required',
        'satuan_id' => 'required|exists:satuans,id',
    ]);

    $item->update($request->except('_token'));

    return redirect()->route('items.index')->with('success', 'Item has been updated successfully.');
}
public function show($id)
{
    $item = Barang::with('satuan')->find($id);
    return view('items.show', compact('item'));
}
public function destroy($id)
{
    $item = Barang::find($id);

    if (!$item) {
        return redirect()->route('items.index')->with('error', 'Item not found.');
    }

    $item->delete();

    return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
}
}



