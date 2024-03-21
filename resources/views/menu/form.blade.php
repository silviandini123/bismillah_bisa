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


 <div class="modal fade" id="modalFormMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="nama_menu" class="col-sm-4 col-form-label">Nama Menu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_menu" value="" name="nama_menu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_id" class="col-sm-4 col-form-label">Jenis ID</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="jenis_id" id="jenis_id">
                            {{-- <option value="">Pilih Jenis ID</option> --}}
                            @foreach ($jenis as $c)
                                <option value="{{ $c->id }}">{{ $c->nama_jenis }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="text" class="form-control" id="harga" value="" placeholder="harga" name="harga">
                    </div>

                    {{-- <div class="form-group row">
                        <label for="inputFile" class="col-sm-4 col-form-label">Image</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" value="" name="image">
                        </div>
                    </div> --}}

                    <div class="form-group row">
                    <label for="inputFile" class="col-sm-4 col-form-label">Image</label>
                    <div class="col-sm-8">
                        <input type="file" id="image" value="" name="image">
                        {{-- <input type="file" id="image" name="image"/> --}}
                    </div>
                    </div>


                    {{-- <div class="form-group row">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi">
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="form-label col-sm-4">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="deskripsi" value="" name="deskripsi"></textarea>
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
