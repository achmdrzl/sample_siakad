<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mata Kuliah</h3>
            <button type="button" class="btn btn-primary tombolTambahData mb-2" data-toggle="modal" data-target="#formModal">
                Tambah Data Mata Kuliah
            </button>
            <table class="table">
                <thead>
                    <th>No.</th>
                    <th>Mata Kuliah</th>
                    <th>Kuota</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data['matkul'] as $db) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $db['nama_matkul']; ?></td>
                            <td><?= $db['kuota']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/matkul/hapus/<?= $db['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                                <a href="<?= BASEURL; ?>/matkul/detail/<?= $db['id']; ?>" class="badge badge-primary float-right">Cek Mahasiswa Terdaftar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/matkul/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama Matkul</label>
                        <input type="text" class="form-control" id="nama" name="nama_matkul" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="nrp">Kuota</label>
                        <input type="number" class="form-control" id="nrp" name="kuota" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>