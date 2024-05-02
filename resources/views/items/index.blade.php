@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="d-flex justify-content-end">
        <a href="{{ route('items.create') }}" class="btn btn-outline-dark mb-3">Tambah Barang</a>
    </div>
    <br>
    <h2 class="text-center text-br"><strong>Daftar Barang</strong></h2>

    <br>
    <br>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th><strong>Kode</strong></th>
                    <th><strong>Nama</strong></th>
                    <th><strong>Harga</strong></th>
                    <th><strong>Deskripsi</strong></th>
                    <th><strong>Satuan</strong></th>
                    <th><strong>Gambar</strong></th>
                    <th><strong>Aksi</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            @if ($item->satuan)
                                {{ $item->satuan->nama_satuan }}
                            @else
                                Satuan tidak tersedia
                            @endif
                        </td>
                        <td>
                            @if($item->image_url)
                                <img src="{{ $item->image_url }}" alt="Gambar Barang" style="max-width: 100px; max-height: 100px;">
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>
                        <td>
                            <td>@include('items.actions')</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
