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
                            <h4>Daftar Pembelian</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="home">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="home">Transaksi</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pembelian
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
                    <button href="#" class="btn btn-success shadow rounded-3 border-0"style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">
                        <i class="icon-copy fa fa-plus-square" aria-hidden="true" data-color="#fff"></i>
                        &nbsp;Tambah
                    </button>&nbsp;&nbsp;
                    <button href="#" class="btn btn-primary shadow rounded-3 border-0" style="border-color: #2C74B3; background-color:#2C74B3;" data-color="#fff">
                        <i class="icon-copy bi bi-printer-fill"></i>
                        &nbsp;Cetak Data
                    </button>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <div class="form-inline">
                        <label class="mr-2">Search :</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Supplier</th>
                            <th>Total Item</th>
                            <th>Total Harga</th>
                            <th>Diskon</th>
                            <th>Total Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12/05/2023</td>
                            <td>Koko</td>
                            <td>3</td>
                            <td>200.000</td>
                            <td>5%</td>
                            <td>586.000</td>
                            <td>
                                <button href="#" class="btn btn-outline-danger shadow rounded-3 border-3 "><i class="icon-copy fa fa-trash" aria-hidden="true"></i></button>&nbsp;
                                <button href="#" class="btn btn-outline-info shadow rounded-3 border-5"><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <!-- Add more data rows as needed -->
                    </tbody>
                </table>
            </div>
            <div class="card-tools mb-4 d-flex justify-content-between">
                <div class="form-inline">
                    <label class="mr-2">Show</label>
                    <select class="form-control form-control-sm">
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>All</option>
                    </select>
                    <label class="mr-2">&nbsp; entries</label>
                </div>
            <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
