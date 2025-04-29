<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Matakuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Matakuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Matakuliah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= base_url('matakuliah/tambah'); ?>" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Create Matakuliah
                </a>
                <?php if (!empty($matakuliah)): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>Jenis</th>
                                <th>Program Studi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($matakuliah as $mk): ?>
                                <tr>
                                    <td><?= $mk['kode_matakuliah']; ?></td>
                                    <td><?= $mk['nama_matakuliah']; ?></td>
                                    <td><?= $mk['jenis']; ?></td>
                                    <td><?= $mk['prodi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('matakuliah/view/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-success" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= base_url('matakuliah/edit/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-info" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('matakuliah/hapus/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus matakuliah ini?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-center">Belum ada matakuliah yang ditambahkan.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
