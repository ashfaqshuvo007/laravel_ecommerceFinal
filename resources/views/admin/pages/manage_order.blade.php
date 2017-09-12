@extends('admin.admin_master')
@section('admin_content')


<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Manage ORDERS</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="fa fa-table"></i>Orders</li>
                <li><i class="fa fa-th-list"></i>Manage Orders</li>
            </ol>
        </div>
    </div>
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <table class="table table-striped table-advance table-hover">
                    <tbody>
                        <tr>
                            <th class="text-center"><i class="icon_profile"></i> Order ID</th>
                            <th class="text-center"><i class="icon_calendar"></i> Customer Name</th>
                            <th class="text-center"><i class="icon_calendar"></i> Order Total</th>
                            <th class="text-center"><i class="icon_calendar"></i> Order Date</th>
                            <th class="text-center"><i class="icon_mail_alt"></i> Order Status</th>
                            <th class="text-center"><i class="icon_cogs"></i> Action</th>
                        </tr>

                        @foreach ($order_info as $v_order)

                        <tr>
                            <td class="text-center">{{ $v_order->order_id }}</td>
                            <?php $customer_name = DB::table('user')->where('user_id', $v_order->customer_id)->pluck('first_name');?>
                            <td class="text-center">{{ $customer_name }}</td>
                            <td class="text-center"><img src="{{asset($v_product->product_image)}}" alt="pro_image" width="100"></td>
                            <td class="text-center">{{ $v_order->order_total }}</td>
                            <td class="text-center">{{ $v_order->order_date }}</td>
                            <td class="text-center">
                               @if ($v_order->order_status == 'pending')
                                <span class="label label-danger">Pending</span>
                                @elseif($v_order->order_status == 'processing')
                                <span class="label label-info">Processing</span>
                                @else
                                <span class="label label-info">Delivered</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">

                                    @if ($v_order->order_status == 'pending')
                                    <a class="btn btn-danger" href="{{URL::to('/processed-order/'.$v_order->order_id)}}">
                                        <i class="fa fa-thumbs-check"></i>
                                    </a>
                                    @elseif($v_order->order_status == 'processing')
                                    <a class="btn btn-primary" href="{{URL::to('/delivered-product/'.$v_order->order_id)}}">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>

                                    @endif

                                    <a class="btn btn-danger" href="{{URL::to('/delete-order/'.$v_order->order_id)}}" onclick="return checkDelete();"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <!-- page end-->
</section>

@endsection