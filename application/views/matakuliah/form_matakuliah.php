<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Matakuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Matakuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Matakuliah</h3>
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
                <form action="<?= base_url('matakuliah/insert'); ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Matakuliah</label>
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Matakuliah" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Matakuliah</label>
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Nama Matakuliah" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" name="jenis" id="jenis" required>
                                <option value="">-- Pilihan --</option>
                                <option value="Wajib">Wajib</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" name="prodi" id="prodi" required>
                                <option value="">-- Pilihan --</option>
                                <option value="Informatika">Teknologi Informasi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('matakuliah'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Tambahkan catatan atau informasi jika diperlukan -->
            </div>
        </div>
    </section>
</div>
