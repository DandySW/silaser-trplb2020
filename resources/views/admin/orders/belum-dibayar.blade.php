@extends('admin.layouts.master')
@section('title','Data Produk | Sistem Informasi Penjualan dan Layanan Servis Laptop ')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Detail Pemesanan</a> <a href="{{url('admin/orders/belum-dibayar')}}" class="current">Belum Dibayar</a> </div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done!</strong> {{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Belum Dibayar</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>ID User</th>
                        <th>ID Ekspedisi</th>
                        <th>Ongkir</th>
                        <th>ID Kupon</th>
                        <th>Nilai Kupon</th>
                        <th>Total</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Status Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Konfirmasi Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="gradeC">
                        <td style="vertical-align: middle;text-align: center;">{{$loop->iteration}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->id}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->user->name}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->expedition}}</td>
                        <td style="vertical-align: middle;">Rp {{$order->shipping_charge}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->coupon_id}}</td>
                        <td style="vertical-align: middle;text-align: center;">Rp {{$order->coupon_amount}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->grand_total}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->order_date}}</td>
                        <td style="vertical-align: middle;text-align: center;">{{$order->checkout_status}}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="#myModal{{$order->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="{{url('admin/orders/pembayaran',$order->id)}}" class="btn btn-warning btn-mini">Konfirmasi</a>
                        </td>
                    </tr>
                    {{--Pop Up Model for View Struk--}}
                    <div id="myModal{{$order->id}}" class="modal hide">
                        <div class="modal-header">
                            <button data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center"><img src="{{url('/checkout/'.$order->struk)}}" alt="Belum ada bukti pembayaran"></div>
                        </div>
                    </div>
                    {{--Pop Up Model for View Struk--}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('jsblock')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/matrix.tables.js')}}"></script>
<script src="{{asset('js/matrix.popover.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- <script>
    $(".deleteRecord").click(function() {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: 'Apakah kamu yakin akan menghapus produk?',
            text: "Tindakan tidak dapat dikembalikan",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#da4f49',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oke',
            cancelButtonText: 'Batal',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }, function() {
            window.location.href = "/admin/" + deleteFunction + "/" + id;
        });
    });
</script> -->
@endsection