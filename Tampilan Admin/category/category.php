<?php include("../layouts/header.php") ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Kategori</h3>
    <a href="./tambah-category.php" class="btn btn-primary">Tambah Kategori</a>
  </div>
  <div class="card">
    <h5 class="card-header">List Kategori</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i>
              <strong>1</strong>
            </td>
            <td>Albert Cook</td>

            <td>
              <div class="d-flex">
                <a href="./edit-kategori.php" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalHapus">Hapus</button>
              </div>
            </td>
          </tr>
          <div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0 text-center">
                  <h4>Hapus Kategori</h4>
                  <p>Apakah anda yakin ingin Menghapus Kategori?</p>
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-outline-secondary " data-bs-dismiss="modal">
                    Batal
                  </button>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>
<!-- / Content -->

<?php include("../layouts/footer.php") ?>