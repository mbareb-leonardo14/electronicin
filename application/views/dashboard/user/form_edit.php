<div class="row">
   <div class="col-6 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Edit User</h4>
            <p class="card-description">
               Input User
            </p>
            <form class="forms-sample" method="post" action="<?php echo site_url('user/edit'); ?>">
               <input type="hidden" name="id">
               <div class="form-group">
                  <label for="exampleInputName1">Nama</label>
                  <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama"
                     value="<?= $user->nama_lengkap; ?>">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Email</label>
                  <input type="text" id="id" class="form-control" name="email" placeholder="Email" readonly
                     value="<?= $user->email; ?>">
               </div>
               <div class="form-group">
                  <label for="exampleInputName1">Username</label>
                  <input type="text" id="id" class="form-control" name="username" placeholder="Username"
                     value="<?= $user->username; ?>">
               </div>

               <button type="submit" class="btn btn-primary text-white me-2">Save</button>
               <button class="btn btn-light">Cancel</button>
            </form>
         </div>
      </div>
   </div>
</div>