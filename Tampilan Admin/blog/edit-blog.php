<?php include("../layouts/header.php") ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="card mb-4">
    <h5 class="card-header">Edit Blog</h5>
    <div class="card-body">
      <form action="">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul" value="Judul Blog" />
        </div>

        <div class="mb-3">
          <label for="deskPendek" class="form-label">Deskripsi Pendek</label>
          <textarea class="form-control" id="deskPendek" rows="3" name="deskirpsi-pendek">Deskripsi Pendek</textarea>
        </div>
        <div class="mb-3">
          <label for="konten" class="form-label">Konten</label>
          <textarea class="form-control" id="konten" rows="3" name="konten">Konten</textarea>
        </div>

        <div class="row row-cols-2 mb-3">
          <div class="col">
            <label for="kategori" class="form-label">Pilih Kategori</label>
            <select class="form-select" id="kategori" aria-label="Default select example">
              <option disabled>Pilih Kategori</option>
              <option selected value="business">Business</option>
              <option value="economy">Economy</option>
              <option value="technology">Technology</option>
              <option value="heailthy">Healthy</option>
            </select>
          </div>
          <div class="col">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" placeholder="Masukan nama author" name="author" value="author" />
          </div>
        </div>
        <div class="row row-cols-2 mb-3">
          <div class="col">
            <label for="gabarBackgournd" class="form-label">Gambar Background</label>
            <input class="form-control" type="file" id="formFile" name="gambar-backgound" />
          </div>
          <div class="col">
            <label for="gambarKonten" class="form-label">Gambar Konten</label>
            <input class="form-control" type="file" id="formFile" name="gambar-konten" />
          </div>
        </div>
        <div class="d-flex align-items-center">
          <a href="./blog.php" class="btn btn-secondary me-2">Kembali</a>
          <button class="btn btn-primary" type="submit">Edit</button>
        </div>
      </form>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>