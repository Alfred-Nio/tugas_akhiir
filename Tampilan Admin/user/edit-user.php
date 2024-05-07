<?php include("../layouts/header.php") ?>


<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="card mb-4">
    <h5 class="card-header">Edit User</h5>
    <div class="card-body">
      <form action="">
        <div class="mb-3">
          <label for="namaUser" class="form-label">Nama User</label>
          <input type="text" class="form-control" id="namaUser" placeholder="Masukan Username" name="userName" value="admin" />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="namaKategori" placeholder="Masukan Email" name="email" value="admin@gmai.com" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="email" class="form-control" id="password" placeholder="Masukan Password" name="password" />
        </div>

        <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Pilih Role</label>
          <select class="form-select" id="role" aria-label="Default select example">
            <option disabled>Pilih Role</option>
            <option selected value="admin">Admin</option>
            <option value="editor">Editor</option>
          </select>
        </div>
        <div class="d-flex align-items-center">
          <a href="./user.php" class="btn btn-secondary me-2">Kembali</a>
          <button class="btn btn-primary" type="submit">Edit</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->

<?php include("../layouts/footer.php") ?>