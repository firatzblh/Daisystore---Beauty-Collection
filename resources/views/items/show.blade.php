@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ $item->nama }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Kode:</strong> {{ $item->kode }}</p>
                        <p><strong>Harga:</strong> {{ $item->harga }}</p>
                        <p><strong>Satuan:</strong> {{ $item->satuan->nama }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Deskripsi:</strong></p>
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
