<div class="modal fade" id="formImport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Import Data Stok</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <form method="POST" action="stok/import" enctype="multipart/form-data">
                     @csrf
                     <div class="modal-body">
                         <div class="card-body">
                             <div class="form-group">
                                 <label for="stok">File Excel</label>
                                 <input type="file" name="import" id="import">
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Upload</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

