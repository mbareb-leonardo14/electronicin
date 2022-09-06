<div class="row">
   <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">User</h4>
            <p class="card-description">
               Input User
            </p>

            <!-- form add -->
            <form class="forms-sample" method="post" action="<?php echo site_url('user/save'); ?>">
               <div class="form-group">
                  <label for="exampleInputName1">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Nama User" name="namaUser">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" name="userName">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Password" name="password">
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
         <h4 class="card-title">Data User</h4>

         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>
                        No
                     </th>
                     <th>
                        Nama
                     </th>
                     <th>
                        Email
                     </th>
                     <th>
                        Username
                     </th>
                     <th>
                        Password
                     </th>
                     <th>
                        Action
                     </th>
                  </tr>
               </thead>
               <?php $i = 1;
               foreach ($user as $item) { ?>
               <tbody>
                  <tr>
                     <td class="py-1">
                        <?= $i++ ?>
                     </td>
                     <td>
                        <?= $item->nama_lengkap ?>
                     </td>
                     <td>
                        <?= $item->email ?>
                     </td>
                     <td>
                        <?= $item->username ?>
                     </td>
                     <td>
                        <?= $item->password ?>
                     </td>
                     <td>
                        <a href="<?= site_url('user/getid/' . $item->id_user); ?>"
                           class="btn btn-primary text-white">Edit</a>

                        <form action="<?= site_url('user/delete'); ?>" method="post">
                           <input type="hidden" value="<?= $item->id_user ?>" name="id_user" />
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