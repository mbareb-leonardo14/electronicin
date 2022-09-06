<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Kurir</h4>
            <p class="card-description">
               Input Kurir
            </p>

            <!-- form add -->
            <form class="forms-sample" method="post" action="<?php echo site_url('kurir/save'); ?>">
               <div class="form-group">
                  <label for="exampleInputName1">Nama Kurir</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kurir"
                     name="jenisKurir">
               </div>
               <button type="submit" class="btn btn-primary text-white me-2">Add</button>
               <button class="btn btn-light">Cancel</button>
            </form>

         </div>
      </div>
   </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">Data Kurir</h4>

         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>
                        No
                     </th>
                     <th>
                        Nama Kurir
                     </th>
                     <th>
                        Action
                     </th>
                  </tr>
               </thead>
               <?php $i = 1;
               foreach ($kurir as $item) { ?>
               <tbody>
                  <tr>
                     <td class="py-1">
                        <?= $i++ ?>
                     </td>
                     <td>
                        <?= $item->jenis_kurir ?>
                     </td>
                     <td>
                        <a href="<?= site_url('kurir/getid/' . $item->id_kurir); ?>"
                           class="btn btn-primary text-white">Edit</a>

                        <form action="<?= site_url('kurir/delete'); ?>" method="post">
                           <input type="hidden" value="<?= $item->id_kurir ?>" name="id_kurir" />
                           <button class="btn btn-danger text-white">
                              <i class="fa fa-trash"></i> Delete
                           </button>
                        </form>
                        <!-- <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a> -->
                     </td>
                  </tr>
               </tbody>
               <?php } ?>
            </table>
         </div>
      </div>
   </div>
</div>