@extends('admin.admin_master')
@section('admin_content')
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">View Invoice</h3>
            <hr style="border-color:red;">

        </div>
    </div>
    <!-- page start-->
    <div class="row">
        <div class="col-lg-offset-1 col-lg-6">
            <section class="panel">
                <div class="pull-left">
                    <img src="{{URL::to('public/admin_assets/img/logo.png')}}" class="img-responsive" style="max-width: 200px;">
                </div>
                <div class="pull-right">
                    <h5>Invoice # &nbsp;<span>{{$order_info->order_id}}</span></h5>
                    <h5>Created : &nbsp;<span>Jan 5, 2017</span></h5>
                    <h5>Due : &nbsp;<span>Feb 5, 2017</span></h5>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-6">
            <section class="panel">
                <div class="pull-left">
                    <h3>Customer Info:</h3>
                    <ul class="list-unstyled">
                        <li>{{$customer_info->first_name}} {{$customer_info->last_name}}</li>
                        <li>{{$customer_info->city}}</li>
                        <li>{{$customer_info->address}}</li>
                        <li>{{$customer_info->mobile_number}}</li>
                    </ul>
                </div>
                <div class="pull-right">
                    <h3>Shipping Info:</h3>
                    <ul class="list-unstyled">
                        <li>{{$customer_info->first_name}} {{$customer_info->last_name}}</li>
                        <li>{{$customer_info->city}}</li>
                        <li>{{$customer_info->address}}</li>
                        <li>{{$customer_info->mobile_number}}</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="pull-left col-lg-offset-1 col-lg-6">
                <table>
                    <thead>
                        <tr>
                            <th>Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $payment_info->payment_type}}</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-offset-1 col-lg-6">
            <table class="text-left">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th colspan="3"></th>
                            <th colspan="2">Quantity</th>
                            <th colspan="3"></th>
                            <th colspan="3">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($order_details_info as $v_order)
                        <tr>

                            <td colspan="2">{{$v_order->product_name}}</td>
                            <td colspan="3"></td>
                            <td colspan="2" class="text-center">{{$v_order->product_sale_quantity}} </td>
                            <td colspan="3"></td>
                            <td colspan="2">{{ $v_order->product_price * $v_order->product_sale_quantity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>

                            <td colspan="3">TOTAL</td>
                            <td colspan="7"></td>
                            <td colspan="2">{{$order_info->order_total}}</td>
                        </tr>
                    </tfoot>
                </table>
        </div>

    </div>
    <!-- page end-->
</section>

@endsection