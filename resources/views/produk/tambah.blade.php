<div class="modal fade" id="modal-tambah-produk" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-produk">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{route ('simpan1')}}" enctype="multipart/form-data" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="mt-2 mb-2" style="margin-inline-end: 20px; margin-inline-start:20px;">Tambah Produk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" style="margin-inline-end: 20px; margin-inline-start:20px;">
                    {{-- <div class="form-group row">
                        <label for="kode_produk" class="col-lg-12 col-lg-offset-1 control-label mt-2">Kode Produk</label>
                        <div class="col-lg-12">
                            <input name="kode_produk" id="kode_produk" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label for="nama_produk" class="col-lg-12 col-lg-offset-1 control-label mt-2">Nama Produk</label>
                        <div class="col-lg-12">
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kategori" class="col-lg-12 col-lg-offset-1 control-label mt-2">Kategori</label>
                        <div class="col-lg-12">
                        <select id="id_kategori" name="id_kategori" class="form-control custom-select">
                            <option selected disabled>~Pilih~</option>
                            @forelse($kategori as $pilih)
                                <option value="{{$pilih->id}}">{{$pilih->nama_kategori}}</option>
                            @empty

                            @endforelse
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk" class="col-lg-12 col-lg-offset-1 control-label mt-2">Merk</label>
                        <div class="col-lg-12">
                            <input type="text" name="merk" id="merk" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_beli" class="col-lg-12 col-lg-offset-1 control-label mt-2">Harga Beli</label>
                        <div class="col-lg-12">
                            <input type="varchar" name="harga_beli" id="harga_beli" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_jual" class="col-lg-12 col-lg-offset-1 control-label mt-2">Harga Jual</label>
                        <div class="col-lg-12">
                            <input type="varchar" name="harga_jual" id="harga_jual" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-lg-12 col-lg-offset-1 control-label mt-2">Stok</label>
                        <div class="col-lg-12">
                            <input type="varchar" name="stok" id="stok" class="form-control" required autofocus>
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
