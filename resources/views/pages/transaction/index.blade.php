@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Transactions </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                        <tr>
                                            <td> #000{{ $transaction->id }} </td>
                                            <td>  <span class="name">{{ $transaction->customer->name }}</span> </td>
                                            <td> <span class="product">{{ $transaction->product->product_name }}</span> </td>
                                            <td><span class="count">{{ $transaction->quatity }}</span></td>
                                            <td>
                                                Rp. <span class="count">{{ $transaction->transaction_total }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 change 12 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>
@endsection