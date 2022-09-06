<div class="row">
   <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Produk</h4>
            <p class="card-description">
               Input Produk
            </p>
            <form class="forms-sample" method="post" action="<?php echo site_url('produk/save'); ?>">
               <div class="form-group">
                  <label for="exampleInputName1">Nama Produk</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Produk"
                     name="produk">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlSelect2">Kategori</label>
                  <select class="form-control" id="exampleFormControlSelect2">
                     <option>~ Pilih Kategori ~</option>
                     <?php foreach ($kategori as $item) : ?>
                     <option value="<?= $item->id_kategori ?>"><?= $item->kategori ?></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Foto Produk</label>
                  <input type="file" class="form-control" id="exampleInputName1" name="foto">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Harga Produk</label>
                  <input type="number" class="form-control" id="exampleInputName1" name="harga"
                     placeholder="Harga Produk">
               </div>
               <br>
               <button type="submit" class="btn btn-primary text-white me-2">Submit</button>
               <button class="btn btn-light">Cancel</button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">Data Produk</h4>

         <div class="form-group col-lg-3">
            <div class="input-group row">

               <?= form_open('produk/search'); ?>
               <input type="text" class="form-control col-lg-3" placeholder="Cari Produk" name="keyword">
               <!-- <div class="input-group-append ms-3"> -->
               <button class="btn btn-sm btn-primary text-white" type="submit">Search</button>
               <!-- </div> -->
               <?= form_close(); ?>
            </div>
         </div>


         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>
                        No
                     </th>
                     <th>
                        Nama Produk
                     </th>
                     <th>
                        Kategori
                     </th>
                     <th>
                        Picture
                     </th>
                     <th>
                        Harga
                     </th>
                     <th>
                        Action
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i = 1;
                  foreach ($produk as $item) : ?>
                  <tr>
                     <td class="py-1">
                        <?= $i++ ?>
                     </td>
                     <td>
                        <?= $item->nama_produk ?>
                     </td>
                     <td>
                        <?= $item->kategori ?>
                     </td>
                     <td>
                        <img src="<?= base_url('assets/img/television.jpg'); ?>" alt="poto">
                     </td>
                     <td>
                        Rp<?= number_format($item->harga, 2, ',', '.') ?>
                     </td>
                     <td>
                        <a href="#" class="btn btn-primary text-white">Edit</a>
                        <!-- <a href="#" class="btn btn-danger">Hapus</a> -->
                        <form action="<?= site_url('produk/delete'); ?>" method="post">
                           <input type="hidden" value="<?= $item->id_produk ?>" name="id_produk" />
                           <button class="btn btn-danger text-white">
                              <i class="fa fa-trash"></i> Delete
                           </button>
                        </form>
                     </td>
                  </tr>
                  <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>