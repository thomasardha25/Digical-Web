<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact offset-lg-3">
                    <h3>Digical</h3>
                    <p>
                        IPB University <br>
                        Bogor, Jawa Barat<br>
                        Indonesia <br><br>
                        <strong>Phone:</strong> 081398232696<br>
                        <strong>Email:</strong> abdullah@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links offset-lg-1">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="berita.php">Berita</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="gejala.php">Gejala</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="dokter.php">Dokter</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container  py-4">

        <div class="text-center">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span><small>&copy; <?= date('Y') ?> Digital Medical Information</small></span>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/') ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor/php-email-form/validate.js"></script>

<script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

</body>

</html>