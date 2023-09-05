<div class="modal fade" id="modal-emembe" tabindex="-1" role="dialog" aria-labelledby="modal-emember">
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
                            <input type="text" value="{{$dt->nama}}" name="nama" id="nama" class="form-control" required autofocus>
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
                            <input type="text" value="{{$dt->telepon}}" name="telepon" id="telepon" class="form-control" required autofocus>
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
