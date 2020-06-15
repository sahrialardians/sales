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
                            <li><a href="#">Customer</a></li>
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
                        <a class="btn btn-link" href="{{ route('customer.index') }}"><i class="ti-arrow-circle-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form action="{{ route('customer.update', $customer->id) }}" method="post" novalidate="novalidate">
                                    @csrf
                                    @method("put")
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" value="{{ $customer->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label mb-1">Email</label>
                                        <input id="email" name="email" type="text" class="form-control" value="{{ $customer->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="control-label mb-1">Address</label>
                                        <textarea id="address" name="address" class="form-control" cols="25" rows="10" value="{{ $customer->address }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number" class="control-label mb-1">Phone Number</label>
                                        <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{ $customer->phone_number }}">
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