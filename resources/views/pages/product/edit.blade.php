@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li><a href="#">Master Data</a></li>
                            <li><a href="#">Product</a></li>
                            <li class="active">Form Edit Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-link" href="{{ route('product.index') }}"><i class="ti-arrow-circle-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="{{ route('product.update', $product->id) }}" method="post" novalidate="novalidate">
                                    @csrf
                                    @method("put")
                                    <div class="form-group">
                                        <label for="product_name" class="control-label mb-1">Product Name</label>
                                        <input id="product_name" name="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" value="{{ $product->product_name }}">
                                        @error('product_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id" class="control-label mb-1">Category</label>
                                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                            @foreach ($categories as $category)
                                                @if ($category->id == $product->category_id)
                                                    <option value="{{ $category->id }}" selected>
                                                    {{ $category->category_name }}
                                                </option>
                                                @else
                                                    <option value="{{ $category->id }}">
                                                    {{ $category->category_name }}
                                                </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">Description</label>
                                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" cols="25" rows="10" value="{{ $product->description }}"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stock" class="control-label mb-1">Stock</label>
                                        <input id="stock" name="stock" type="text" class="form-control @error('stock') is-invalid @enderror" value="{{ $product->stock }}">
                                        @error('stock')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="control-label mb-1">Price</label>
                                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <span id="payment-button-amount">Save</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div> <!-- .card -->

            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection