@extends('template.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
<!-- Default Basic Forms Start -->
<div class="card-box mb-30">
    <div class="card-header" style="background-color:#35A29F; border-radius:5px 5px 0px 0px;">
            <h4 class="text-white">Edit Data Produk</h4>
    </div>
    <form action="/admin/{{$produk->id_produk}}/update1" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method('post')

            <div class="modal-body">
                <div class="form-group row">
                    <label for="nama_produk" class="col-lg-12 col-lg-offset-1 control-label mt-2">Nama Produk</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{$produk->nama_produk}}" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_kategori" class="col-lg-12 col-lg-offset-1 control-label mt-2">Kategori</label>
                    <div class="col-lg-12">
                        <select id="id_kategori" name="id_kategori" class="form-control custom-select">
                            <option selected disabled>~Pilih~</option>
                            @forelse($kategoris as $pilih)
                                <option value="{{$pilih->id}}" @if($pilih->id == $produk->id_kategori) selected @endif>{{$pilih->nama_kategori}}</option>
                            @empty
                                <!-- Tindakan yang akan diambil jika tidak ada kategori -->
                            @endforelse
                        </select>
                    </div>
                </div>
                                    <div class="form-group row">
                    <label for="merk" class="col-lg-12 col-lg-offset-1 control-label mt-2">Merk</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{$produk->merk}}" name="merk" id="merk" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_beli" class="col-lg-12 col-lg-offset-1 control-label mt-2">Harga Beli</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{$produk->harga_beli}}" name="harga_beli" id="harga_beli" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_jual" class="col-lg-12 col-lg-offset-1 control-label mt-2">Harga Jual</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{$produk->harga_jual}}" name="harga_jual" id="harga_jual" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-lg-12 col-lg-offset-1 control-label mt-2">Stok</label>
                    <div class="col-lg-12">
                        <input type="text" value="{{$produk->stok}}" name="stok" id="stok" class="form-control" required autofocus>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-flat btn-primary" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">Update</button>
            </div>
    </form>
</div>
<!-- Default Basic Forms End --></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function toggleSelectAll(source) {
        var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = source.checked;
        });
    }
</script>
@endsection
