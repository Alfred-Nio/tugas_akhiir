<?php include("../layouts/header.php") ?>


<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="card mb-4">
    <h5 class="card-header">Edit Kategori</h5>
    <div class="card-body">
      <form action="">
        <div class="mb-3">
          <label for="namaKategori" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" id="namaKategori" placeholder="Masukan Nama Kategori" name="nama-kategori" value="Isi Nama Kategori" />
        </div>

        <div class="mb-3">
          <label for="deskKategori" class="form-label">Deskripsi Kategori</label>
          <textarea class="form-control" id="deskKategori" rows="3" name="nama-kategori">Isi Deskripsi Kategori</textarea>
        </div>
        <div class="d-flex align-items-center">
          <a href="./category.php" class="btn btn-secondary me-2">Kembali</a>
          <button class="btn btn-primary" type="submit">Edit</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>