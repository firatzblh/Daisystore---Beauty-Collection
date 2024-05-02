@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 class="text-center mb-4">Daisystore - Beauty Collection</h2>
                <div class="row">
                    @foreach($items as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $item['image_url'] }}" class="card-img-top mx-auto d-block" alt="{{ $item['name'] }}" style="width: 50%; height: 300px; object-fit: cover;">
                                <div class="card-body">
                                    <a href="{{ route('items.show', $item->id) }}" class="btn1 btn-primary btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
