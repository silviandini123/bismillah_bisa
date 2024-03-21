{{-- <div class="modal fade" id="modalFormProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form method="post" action="{{ route('produk.store') }}">
              @csrf
              <div id="method"></div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Nama Produk</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_produk" value="" name="nama_produk">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Category ID</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="category_id" value="" name="category_id">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="harga" value="" name="harga">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi">
                </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
          </form>
    </div>
</div>


 --}}


 <div class="modal fade" id="modalFormPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="{{ route('pelanggan.store') }}">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" value="" name="nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" value="" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-4 col-form-label">No Telp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_telp" value="" name="no_telp">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" value="" name="alamat">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
