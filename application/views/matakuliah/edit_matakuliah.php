<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Matakuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Matakuliah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Update Matakuliah</h3>
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
                <form action="<?= base_url('matakuliah/update/'. $matakuliah['kode_matakuliah']);?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Matakuliah</label>
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Matakuliah" value="<?= $matakuliah['kode_matakuliah'];?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Matakuliah</label>
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Nama Matakuliah" value="<?= $matakuliah['nama_matakuliah'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <select class="form-control" name="sks" id="sks" required>
                                <option value="1" <?= ($matakuliah['sks'] == 1) ? 'selected' : ''; ?>>1 SKS</option>
                                <option value="2" <?= ($matakuliah['sks'] == 2) ? 'selected' : ''; ?>>2 SKS</option>
                                <option value="3" <?= ($matakuliah['sks'] == 3) ? 'selected' : ''; ?>>3 SKS</option>
                                <option value="4" <?= ($matakuliah['sks'] == 4) ? 'selected' : ''; ?>>4 SKS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
                                <option value="1" <?= ($matakuliah['semester'] == 1) ? 'selected' : ''; ?>>Semester 1</option>
                                <option value="2" <?= ($matakuliah['semester'] == 2) ? 'selected' : ''; ?>>Semester 2</option>
                                <option value="3" <?= ($matakuliah['semester'] == 3) ? 'selected' : ''; ?>>Semester 3</option>
                                <option value="4" <?= ($matakuliah['semester'] == 4) ? 'selected' : ''; ?>>Semester 4</option>
                                <option value="5" <?= ($matakuliah['semester'] == 5) ? 'selected' : ''; ?>>Semester 5</option>
                                <option value="6" <?= ($matakuliah['semester'] == 6) ? 'selected' : ''; ?>>Semester 6</option>
                                <option value="7" <?= ($matakuliah['semester'] == 7) ? 'selected' : ''; ?>>Semester 7</option>
                                <option value="8" <?= ($matakuliah['semester'] == 8) ? 'selected' : ''; ?>>Semester 8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" name="jenis" id="jenis" required>
                                <option value="Wajib" <?= ($matakuliah['jenis'] == 'Wajib') ? 'selected' : ''; ?>>Wajib</option>
                                <option value="Pilihan" <?= ($matakuliah['jenis'] == 'Pilihan') ? 'selected' : ''; ?>>Pilihan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" name="prodi" id="prodi" required>
                                <option value="Informatika" <?= ($matakuliah['prodi'] == 'Informatika') ? 'selected' : ''; ?>>Teknologi Informasi</option>
                                <option value="Sistem Informasi" <?= ($matakuliah['prodi'] == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                                <option value="Kompeterisasi Akuntansi" <?= ($matakuliah['prodi'] == 'Kompeterisasi Akuntasi') ? 'selected' : ''; ?>>Kompeterisasi Akuntansi</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('matakuliah');?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Tambahkan catatan atau informasi jika diperlukan -->
            </div>
        </div>
    </section>
</div>
