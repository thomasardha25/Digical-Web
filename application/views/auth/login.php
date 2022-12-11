<div id="register">
    <aside>
        <figure>
            <a href="<?= base_url('') ?>">
                <img src="<?= base_url('') ?>assets/img/logo/logo-01.png" width="60%" height="30%" alt="Logo">
            </a>
            <h5 class="m-3">Login Page</h5>
        </figure>

        <?= $this->session->flashdata('message'); ?>

        <form class="user" method="post" action="<?= base_url('auth'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                <i class="icon_mail_alt"></i>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <i class="icon_lock_alt"></i>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="clearfix add_bottom_15">
                <div class="float-end"><a id="forgot" href="#">Lupa password?</a></div>
            </div>

            <button type="submit" class="btn btn-success full-width" style="width: 100%;">Login</button>

            <div class="text-center mt-2">
                <small>
                    Belum memiliki akun? <strong><a href="<?= base_url('auth/registration') ?>" style="color: #1fac96;">Register</a></strong>
                </small>
            </div>
        </form>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success full-width" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 100%;">
            Informasi Akun
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Informasi Akun Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="admin@gmail.com" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="1234" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copy">&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Digital Medical Information
        </div>
    </aside>
</div>