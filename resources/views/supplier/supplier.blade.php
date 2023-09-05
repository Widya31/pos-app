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
                            <h4>Daftar Supplier</h4>
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
                                    Supplier
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
            <div class="card-tools mb-4 d-flex justify-content-between">
                <button data-toggle="modal" data-target="#modal-tsu" class="btn btn-success shadow rounded-3 border-0" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">
                    <i class="icon-copy fa fa-plus-square" data-color="#fff" aria-hidden="true"></i>
                    &nbsp;Tambah
                </button>
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
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1 + (($dtsup->currentPage() - 1) * $dtsup->perPage());
                        @endphp
                    @foreach ($dtsup as $dt)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $dt -> nama}}</td>
                            <td>{{ $dt -> email}}</td>
                            <td>{{ $dt -> alamat}}</td>
                            <td>{{ $dt -> telepon}}</td>
                            <td>
                                <a href="/admin/{{$dt->id_supplier}}/hsup" class="btn btn-outline-danger shadow rounded-3 border-3 "><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>&nbsp;
                                <button data-toggle="modal" data-target="#editSupplier" class="btn btn-outline-info shadow rounded-3 border-5"><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    @endforeach
                        <!-- Add more data rows as needed -->
                    </tbody>
                </table>
                {!! $suppliers->appends(Request::except('page'))->render() !!}
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
@include('supplier.tambah')
@include('supplier.edit')
@endsection
