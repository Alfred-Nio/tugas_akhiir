<?php include("../layouts/header.php") ?>
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Layout Demo -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Blog</h3>
    <a href="./tambah-blog.php" class="btn btn-primary">Tambah Blog</a>
  </div>
  <div class="row row-cols-2 g-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Judul Blog</h5>
          <div class="card-subtitle text-muted mb-3">Ini Kategori</div>
          <p class="card-text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit eum necessitatibus eveniet id repellat in incidunt! Ipsa amet, eos facilis totam corrupti sapiente iure mollitia voluptatem odio assumenda. Qui, porro (Ini Deskripsi Pendek dari Blog).
          </p>
          <p class="card-text text-muted fst-italic">
            Tanggal Blog di Buat: 04 Mei 2024
          </p>
          <div class="d-flex justify-content-end align-items-center">
            <a href="./detail-blog.php" class="btn btn-secondary btn-sm">Lihat Detail</a>
            <a href="./edit-blog.php" class="btn btn-primary btn-sm mx-2">Edit</a>
            <button class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#modalHapus">Hapus</button>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-0 text-center">
              <h4>Hapus Blog</h4>
              <p>Apakah anda yakin ingin Menghapus Blog?</p>
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
    </div>
  </div>

  <!--/ Layout Demo -->
</div>
<!-- / Content -->
<?php include("../layouts/footer.php") ?>