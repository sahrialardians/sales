@extends('layouts.app')

@push('add-on-style')
<link rel="stylesheet" href="{{ asset('backend/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
@endpush

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
                            <li class="active">Customer</li>
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
            <div class="col-md-12">
                @if (session('status'))
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Success</span>
                        Customer {{ session('status') }} successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('customer.create') }}">Add Customer</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('customer.edit', $customer->id) }}">Edit</a>
                                        <form action="{{ route('customer.destroy', $customer->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-link" href="">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

@push('add-on-script')
<script src="{{ asset('backend/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/jszip.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/init/datatables-init.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
} );
@endpush