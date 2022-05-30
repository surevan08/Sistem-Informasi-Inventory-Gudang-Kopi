<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('gudang/permintaanbarang'); ?>">Permintaan Barang</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('gudang/permintaanbarang/detail/' . $id_permintaanbarang); ?>">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
    </ol>
</nav>

<!-- jika ada pesan gagal -->
<?php if (!empty($gagal)) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= $gagal ?>
    </div>

    <script>
        $(".alert").alert();
    </script>
<?php endif ?>

<!-- Card Tambah Data  -->
<div class="col-lg-12 mx-auto">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <table class="table table-borderless text-secondary font-weight-bold">
                        <tr>
                            <td>Kode : <?= $permintaanbarang['kode_permintaanbarang']; ?> </td>
                            <th>Tanggal : <?= tanggal($permintaanbarang['tgl_permintaanbarang']); ?></th>
                        </tr>
                        <tr>
                            <td>Oleh : <?= $permintaanbarang['nama']; ?></td>
                            <th>
                                <label>Status</label>
                                <div class="input-group mb-2">
                                    <label class="form-control">
                                        <input type="radio" name="status_permintaanbarang" value="Setuju" <?php if ($permintaanbarang['status_permintaanbarang'] == 'Setuju') {
                                                                                                                echo "checked";
                                                                                                            } ?>> Setuju
                                    </label>
                                    <label class="form-control">
                                        <input type="radio" name="status_permintaanbarang" value="Ditolak" <?php if ($permintaanbarang['status_permintaanbarang'] == 'Ditolak') {
                                                                                                                echo "checked";
                                                                                                            } ?>> Tolak
                                    </label>
                                </div>
                            </th>
                        </tr>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Permintaan</th>
                                <th scope="col">Stock Gudang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($detailpermintaanbarang as $key => $value) : ?>
                                <tr>
                                    <td scope="row"><?= $key + 1; ?></td>
                                    <td><?= $value['kode_barang']; ?></td>
                                    <td><?= $value['nama_barang']; ?></td>
                                    <td><?= $value['jumlah_permintaanbarang']; ?></td>
                                    <td><?= $value['stock_gudang']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
        <div class=" card-footer text-md-right">
            <a href="<?= base_url('gudang/permintaanbarang/detail/' . $id_permintaanbarang); ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>