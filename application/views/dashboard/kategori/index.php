<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Kategori</h4>
            <p class="card-description">
               Input Kategori
            </p>
            <form class="forms-sample" method="post" action="<?php echo site_url('kategori/save'); ?>">
               <div class="form-group">
                  <label for="exampleInputName1">Nama Kategori</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kategori"
                     name="namaKategori">
               </div>
               <button type="submit" class="btn btn-primary text-white me-2">Submit</button>
               <button class="btn btn-light">Cancel</button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="col-lg-9 grid-margin stretch-card">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">Data Kategori</h4>

         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>
                        No
                     </th>
                     <th>
                        Nama Kategori
                     </th>
                     <th>
                        Action
                     </th>
                  </tr>
               </thead>
               <?php $i = 1;
               foreach ($kategori as $item) { ?>
               <tbody>
                  <tr>
                     <td class="py-1">
                        <?= $i++ ?>
                     </td>
                     <td>
                        <?= $item->kategori ?>
                     </td>
                     <td>
                        <a href="<?= site_url('kategori/getid/' . $item->id_kategori); ?>"
                           class="btn btn-primary text-white">Edit</a>

                        <form action="<?= site_url('kategori/delete'); ?>" method="post">
                           <input type="hidden" value="<?= $item->id_kategori ?>" name="id_kategori" />
                           <button class="btn btn-danger text-white">
                              <i class="mdi mdi-delete"></i>
                           </button>
                        </form>

                     </td>
                  </tr>
               </tbody>
               <?php } ?>
            </table>
         </div>
      </div>
   </div>
</div>