@extends('admin.layouts.master')
@section('title','Edit Produk | SILASER - Sistem Informasi Penjualan dan Layanan Servis Laptop')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Products</a> <a href="#" class="current">Edit Produk</a> </div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add New Products</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{route('product.update',$edit_product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                @csrf
                {{method_field("PUT")}}
                <div class="control-group">
                    <label class="control-label">Select Category</label>
                    <div class="controls">
                        <select name="id_kategori" style="width: 415px;">
                            @foreach($categories as $key=>$value)
                            <option value="{{$key}}" {{$edit_category->id==$key?' selected':''}}>{{$value}}</option>
                            <?php
                            if ($key != 0) {
                                $sub_categories = DB::table('categories')->select('id', 'name')->where('parent_id', $key)->get();
                                if (count($sub_categories) > 0) {
                                    foreach ($sub_categories as $sub_category) { ?>
                                        <option value="{{$sub_category->id}}" {{$edit_category->id==$sub_category->id?' selected':''}}>&nbsp;&nbsp;--{{$sub_category->name}}</option>
                            <?php }
                                }
                            }
                            ?>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="nama_produk" class="control-label">Nama Produk</label>
                    <div class="controls{{$errors->has('nama_produk')?' has-error':''}}">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{$edit_product->nama_produk}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('nama_produk')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="no_barcode" class="control-label">No Barcode</label>
                    <div class="controls{{$errors->has('no_barcode')?' has-error':''}}">
                        <input type="text" name="no_barcode" id="no_barcode" class="form-control" value="{{$edit_product->no_barcode}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('no_barcode')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="deskripsi" class="control-label">Deskripsi</label>
                    <div class="controls{{$errors->has('deskripsi')?' has-error':''}}">
                        <textarea class="textarea_editor span12" name="deskripsi" id="deskripsi" rows="6" placeholder="Deskripsi Produk" style="width: 580px;">{{$edit_product->deskripsi}}</textarea>
                        <span class="text-danger">{{$errors->first('deskripsi')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="harga" class="control-label">Harga</label>
                    <div class="controls{{$errors->has('harga')?' has-error':''}}">
                        <div class="input-prepend"> <span class="add-on">$</span>
                            <input type="number" name="harga" id="harga" class="" value="{{$edit_product->harga}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('harga')}}</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Upload Gambar</label>
                    <div class="controls">
                        <input type="file" name="gambar" id="gambar" />
                        <span class="text-danger">{{$errors->first('gambar')}}</span>
                        @if($edit_product->gambar!='')
                        &nbsp;&nbsp;&nbsp;
                        <a href="javascript:" rel="{{$edit_product->id}}" rel1="delete-gambar" class="btn btn-danger btn-mini deleteRecord">Delete Old Gambar</a>
                        <img src="{{url('products/small/',$edit_product->gambar)}}" width="35" alt="">
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label"></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Edit Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('jsblock')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
<script src="{{asset('js/masked.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/matrix.form_common.js')}}"></script>
<script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    $(".deleteRecord").click(function() {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }, function() {
            window.location.href = "/admin/" + deleteFunction + "/" + id;
        });
    });
    $('.textarea_editor').wysihtml5();
</script>
@endsection