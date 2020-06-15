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
                            <li><a href="#">Category</a></li>
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
                        <a class="btn btn-link" href="{{ route('category.index') }}"><i class="ti-arrow-circle-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="{{ route('category.update', $category->id) }}" method="post" novalidate="novalidate">
                                    @csrf
                                    @method("put")
                                    <div class="form-group">
                                        <label for="category_name" class="control-label mb-1">Category Name</label>
                                        <input id="category_name" name="category_name" type="text" class="form-control" value="{{ $category->category_name }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-info btn-block">Save</button>
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