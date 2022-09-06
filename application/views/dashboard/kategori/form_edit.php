<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Kategori</h4>
            <p class="card-description">
               Input Kategori
            </p>
            <form class="forms-sample" method="post" action="<?php echo site_url('kategori/edit'); ?>">
               <div class="form-group">
                  <label for="exampleInputName1">Nama Kategori</label>
                  <input type="text" id="id" class="form-control" name="namaKategori" placeholder="Nama Kategori"
                     value="">
               </div>
               <button type="submit" class="btn btn-primary text-white me-2">Edit</button>
               <button class="btn btn-light">Cancel</button>
            </form>
         </div>
      </div>
   </div>
</div>