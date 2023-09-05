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
                            <h4>Daftar Kategori</h4>
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
                                    Kategori
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
                <button class="btn btn-success shadow rounded-3 border-0" data-toggle="modal" data-target="#modal-form" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">
                    <i class="icon-copy fa fa-plus-square" aria-hidden="true" data-color="#fff"></i>
                    &nbsp;Tambah
                </button>
                <form method="GET">
                <div class="form-inline">
                    <label for="search" class="mr-2">Search :</label>
                    <input type="text" value="{{ $search }}" name="search" class="form-control form-control-sm">
                </div>
                </form>
            </div>
            {{-- <div class="card-tools mb-4 d-flex justify-content-between">
                <div class="form-inline">
                    <label for="perPage" class="mr-2">Show:</label>
                    <select name="perPage" id="perPage" class="form-control form-control-sm" onchange="this.form.submit()">
                        <option value="5" @if($kategori->perPage() == 5) selected @endif>5</option>
                        <option value="10" @if($kategori->perPage() == 10) selected @endif>10</option>
                        <option value="20" @if($kategori->perPage() == 20) selected @endif>20</option>
                        <option value="{{ $kategori->total() }}" @if($kategori->perPage() == $kategori->total()) selected @endif>All</option>
                    </select>
                    <label>&nbsp; entries</label>
                </div>
            </div> --}}
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i = 1 + (($kategori->currentPage() - 1) * $kategori->perPage());
                        @endphp

                        @foreach ($kategori as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $item -> nama_kategori}}</td>
                                <td>
                                    <a href="/admin/{{$item->id}}/hapusdt" class="btn btn-outline-danger shadow rounded-3 border-3 "><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>&nbsp;
                                    <button data-toggle="modal" data-id="{{$item->id}}" data-target="#modal-ecategory" class="btn btn-outline-info shadow rounded-3 border-5 catedit"><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <!-- Add more data rows as needed -->
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $kategori->links() }} --}}
                {!! $kategori1s->appends(Request::except('page'))->render() !!}
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="modal-ecategory" tabindex="-1" role="dialog" aria-labelledby="modal-ecategory">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ route('updatedt', $item->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-lg-12 col-lg-offset-1 control-label mt-2">Nama Kategori</label>
                        <div class="col-lg-12">
                            <input type="text" value="" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
                            <input type="hidden" value="" name="kategori_id" id="kategori_id" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-primary" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const perPageSelect = document.getElementById("perPage");

        perPageSelect.addEventListener("change", function() {
            this.form.submit();
        });
    });
</script> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function toggleSelectAll(source) {
        var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = source.checked;
        });
    }
    
    $('document').ready(function () {
        $('.catedit').click(function () {
            var id = $(this).attr('data-id');
            $.get('reqajax/' + id).done((res) => {
                $('#nama_kategori').val(res.nama_kategori);
                $('#kategori_id').val(res.id);
                // Ensure the value is set after receiving the response
            });
        });
    });
</script>

@include('kategori.form')

@endsection
