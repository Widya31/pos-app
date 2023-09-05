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
                            <h4>Daftar Member</h4>
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
                                    Member
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
                        <button data-toggle="modal" data-target="#modal-tmember" class="btn btn-success shadow rounded-3 border-0"style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">
                            <i class="icon-copy fa fa-plus-square" aria-hidden="true" data-color="#fff"></i>
                            &nbsp;Tambah
                        </button>&nbsp;&nbsp;
                        <button href="#" class="btn btn-primary shadow rounded-3 border-0" style="border-color: #2C74B3; background-color:#2C74B3;" data-color="#fff">
                            <i class="icon-copy fa fa-id-card-o" aria-hidden="true" data-color="#fff"></i>
                            &nbsp;Cetak Kartu
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
                            <th>Kode Member</th>
                            <th>Nama Member</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1 + (($dtmember->currentPage() - 1) * $dtmember->perPage());
                        @endphp
                    @foreach ($dtmember as $dt)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$i++}}</td>
                            <td>{{ $dt -> kode_member}}</td>
                            <td>{{ $dt -> nama}}</td>
                            <td>{{ $dt -> alamat}}</td>
                            <td>{{ $dt -> telepon}}</td>
                            <td>
                                <a href="/admin/{{$dt->id_member}}/hps" class="btn btn-outline-danger shadow rounded-3 border-3 "><i class="icon-copy fa fa-trash" aria-hidden="true"></i></a>&nbsp;
                                <a href="/admin/{{$dt->id_member}}/umember" data-toggle="modal" data-id ="{{$dt->id_member}}" data-target="#modal-emember" class="btn btn-outline-info shadow rounded-3 border-5 edit"><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                        <!-- Add more data rows as needed -->
                    </tbody>
                </table>
                {!! $members->appends(Request::except('page'))->render() !!}
            </div>
        </div>
        </div>
    </div>
</div>
    </div>
</div>

<div class="modal fade" id="modal-emember" tabindex="-1" role="dialog" aria-labelledby="modal-emember">
    <div class="modal-dialog modal-lg" role="document">
        <form action="/admin/{{$dt->id_member}}/umember" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit Member</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-lg-12 col-lg-offset-1 control-label mt-2">Nama</label>
                        <div class="col-lg-12">
                            <input type="text" value="" name="nama" id="nama" class="form-control" required autofocus>
                            <input type="hidden" value="" name="member_id" id="member_id" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-lg-12 col-lg-offset-1 control-label mt-2">Alamat</label>
                        <div class="col-lg-12">
                            <input type="text" value="" name="alamat" id="alamat" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="telepon" class="col-lg-12 col-lg-offset-1 control-label mt-2">Telepon</label>
                        <div class="col-lg-12">
                            <input type="text" value="" name="telepon" id="telepon" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-primary" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">Update</button>
                    {{-- <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button> --}}
                </div>
            </div>
        </form>
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
    function cetakMember(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else {
            $('.form-member')
                .attr('target', '_blank')
                .attr('action', url)
                .submit();
        }
    }
    $('document').ready(function(){
        $('.edit').click(function(){
            var id = $(this).attr('data-id');
            $.get('test/'+id).done((res) => {
                $('#nama').val(res.nama)
                $('#alamat').val(res.alamat)
                $('#telepon').val(res.telepon)
                $('#member_id').val(res.id_member)
            })
        })
    })
</script>
@include('member.tambah')
@endsection
