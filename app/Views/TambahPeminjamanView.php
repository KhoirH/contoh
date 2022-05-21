<?= $this->extend('layout/BaseView') ?>

<?= $this->section('content') ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= $this->include('component/Sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?= $this->include('layout/topBar') ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Peminjaman</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Peminjaman Buku</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url().'/PeminjamanBuku/DoPinjam' ?>" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="peminjam">Peminjam</label>
                                        <select id="peminjam" class="form-control" name="id_anggota" required>
                                            <option value="">-- Pilih Nama Peminjam --</option>
                                            <?php foreach($dataAnggota as $value) { ?>
                                                <option value="<?php echo $value->id_anggota ?>"><?php echo $value->kode_anggota ?> - <?php echo $value->nama_anggota ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="judul_buku">Judul Buku</label>
                                        <select id="judul_buku" class="form-control" name="id_buku" required>
                                            <option value="">-- Pilih Judul Buku --</option>
                                            <?php foreach($dataBuku as $value) { ?>
                                                <option value="<?php echo $value->id_buku ?>"><?php echo $value->kode_buku ?> - <?php echo $value->judul_buku ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="tanggal_kembali">Estimasi Tanggal Kembali</label>
                                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" min="<?php echo date('Y-m-d') ?>" required>
                                    </div>
                                </div>
                                    
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url().'/login' ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
