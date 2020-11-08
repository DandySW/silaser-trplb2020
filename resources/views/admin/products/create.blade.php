@extends('admin.layouts.master')
@section('title','Add Products Page')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Products</a> <a href="{{route('product.create')}}" class="current">Add New Product</a> </div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Tambah Produk</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <label class="control-label">Kategori Produk</label>
                    <div class="controls">
                        <select name="id_kategori" style="width: 415px;">
                            <option selected>Pilih Kategori</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="nama_produk" class="control-label">Nama Produk</label>
                    <div class="controls{{$errors->has('nama_produk')?' has-error':''}}">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{old('nama_produk')}}" title="" placeholder="Nama Produk" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('nama_produk')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="no_barcode" class="control-label">No Barcode</label>
                    <div class="controls{{$errors->has('no_barcode')?' has-error':''}}">
                        <input type="text" name="no_barcode" id="no_barcode" class="form-control" value="{{old('no_barcode')}}" placeholder="No Barcode" title="" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('no_barcode')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="deskripsi" class="control-label">Deskripsi</label>
                    <div class="controls{{$errors->has('deskripsi')?' has-error':''}}">
                        <textarea class="textarea_editor span12" name="deskripsi" id="deskripsi" rows="6" placeholder="Deskripsi Produk" style="width: 580px;">{{old('deskripsi')}}</textarea>
                        <span class="text-danger">{{$errors->first('deskripsi')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="harga" class="control-label">Harga</label>
                    <div class="controls{{$errors->has('harga')?' has-error':''}}">
                        <div class="input-prepend"> <span class="add-on">Rp</span>
                            <input type="number" name="harga" id="harga" class="" value="{{old('harga')}}" title="" placeholder="Harga Produk" required="required">
                            <span class="text-danger">{{$errors->first('harga')}}</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Upload Gambar</label>
                    <div class="controls">
                        <input type="file" name="gambar" id="gambar" />
                        <span class="text-danger">{{$errors->first('gambar')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label"></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Tambah Produk</button>
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
<script>
    $('.textarea_editor').wysihtml5();
</script>
@endsection