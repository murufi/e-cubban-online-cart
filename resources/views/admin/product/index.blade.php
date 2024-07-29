@extends('layouts.admin')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="table-responsive">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Product
        </button>
        @if ($errors->any())
            <ul class="alert alert-danger list-unstyle">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>

        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['product'] as $product)
                    <tr>
                        <td>{{ $product->getId() }}</td>
                        <td>{{ $product->getName() }}</td>
                        {{-- <td>{{ $product->getDescription() }}</td> --}}
                        <td>₦ {{ $product->getPrice() }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                <i class="bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                <input type="number" name="price" value="{{ old('price') }}" class="form-control"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea class="form-control" row="3" name="description">{{ old('discription') }} </textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1">Product Image</label>
                                <input type="file" name="image" class="form-control" id="exampleCheck1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
