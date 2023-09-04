<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{route ('simpandt')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mt-2 mb-2" style="margin-inline-end: 20px; margin-inline-start:20px;">Tambah Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-inline-end: 20px; margin-inline-start:20px;">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-lg-12 col-lg-offset-1 control-label mt-2">Nama Kategori</label>
                        <div class="col-lg-12">
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-primary" style="border-color: #35A29F; background-color:#35A29F;" data-color="#fff">Simpan</button>
                    {{-- <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>
