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

        <div class="copy">&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Digital Medical Information
        </div>
    </aside>
</div>