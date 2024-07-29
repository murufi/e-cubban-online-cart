@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

    @foreach ($viewData['product'] as $product)
        <div class="item">
            <div class="image">
                <img src="{{ asset('/storage/' . $product->getImage()) }}" alt="" />
            </div>
            <div class="content">
                <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                    class="btn bg-primary text-white">{{ $product->getName() }}</a>

                {{-- <span>₦ {{ $product->getPrice() }}</span> --}}
            </div>
        </div>
    @endforeach
@endsection
