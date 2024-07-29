@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div clas="row g-0">
        <div class="card mb-3">
            <div class="col-md-4">
                {{-- <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start"> --}}
                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['product']->getName() }} (${{ $viewData['product']->getPrice() }})
                    </h5>
                    <p class="card-text"> {{ $viewData['product']->getDescription() }} </p>
                    <p class="card-text"><code class="text-muted">Add to Cart </code></p>
                </div>
            </div>
        </div>
    </div>
@endsection
