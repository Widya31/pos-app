@extends('template.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Daftar Produk</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="home">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="home">Master</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Produk
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-outline-danger shadow rounded-3 border-3 dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="card-box mb-30">
            <div class="card-body">
            <div class="card-tools mb-4 mt-3">
                <div class="row">
                <div class="col-6">
                <div class="d-flex ">
                    <button href="#" data-toggle="modal" data-target="#modal-tambah-produk" class="btn btn-success shadow rounded-3 border-0" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">
                        <i class="icon-copy fa fa-plus-square" aria-hidden="true" data-color="#fff"></i>
                        &nbsp;Tambah
                    </button>&nbsp;&nbsp;
                    {{-- <button href="#" class="btn btn-danger shadow rounded-3 border-0">
                        <i class="icon-copy fa fa-trash" aria-hidden="true"></i>
                        &nbsp;Hapus
                    </button>&nbsp;&nbsp; --}}
                    <button href="#" class="btn btn-primary shadow rounded-3 border-0" style="border-color: #2C74B3; background-color:#2C74B3;" data-color="#fff">
                        <i class="icon-copy bi bi-qr-code" data-color="#fff"></i>
                        &nbsp;Cetak Barcode
                    </button>
                </div>
            </div>
            <div class="col-6">
                <form method="GET">
                    <div class="d-flex justify-content-end">
                        <div class="form-inline">
                            <label class="mr-2">Search :</label>
                            <input value="{{ $search }}" name="search" type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" onclick="toggleSelectAll(this)"></th>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1 + (($dtproduk->currentPage() - 1) * $dtproduk->perPage());
                        @endphp
                        @foreach ($dtproduk as $data)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$i++}}</td>
                            <td>{{ $data -> kode_produk}}</td>
                            <td>{{ $data -> nama_produk}}</td>
                            <td>{{ $data ->kategori->nama_kategori }}</td>
                            <td>{{ $data -> merk}}</td>
                            <td>{{ $data -> harga_beli}}</td>
                            <td>{{ $data -> harga_jual}}</td>
                            <td>{{ $data -> stok}}</td>
                            <td>
                                <a href="/admin/{{$data->id_produk}}/hapus1" class="btn btn-outline-danger shadow rounded-3 border-3 "><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>&nbsp;
                                <a href="/edit_produk/{{$data->id_produk}}" class="btn btn-outline-info shadow rounded-3 border-5 link-edit"><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                        <!-- Add more data rows as needed -->
                    </tbody>
                </table>
                {!! $dtproduk->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>
</div>
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
@include('produk.tambah')
{{-- @include('produk.edit') --}}
@endsection
