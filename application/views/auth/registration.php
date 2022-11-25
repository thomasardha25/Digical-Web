<div id="register">
    <aside>
        <figure>
            <a href="<?= base_url('') ?>">
                <img src="<?= base_url('') ?>assets/img/logo/logo-01.png" width="60%" height="30%" alt="Logo">
            </a>
            <h5 class="m-3">Registration</h5>
        </figure>

        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" type="text" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                <i class="icon_pencil-edit"></i>
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                <i class="icon_mail_alt"></i>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                <i class="icon_lock_alt"></i>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
                <input type="hidden" name="id_role" value="2">
                <i class="icon_lock_alt"></i>
            </div>


            <button type="submit" class="btn btn-success full-width" style="width: 100%;">Register</button>
            <div class="text-center mt-2">
                <small>
                    Sudah memiliki akun?
                    <strong>
                        <a href="<?= base_url('') ?>" style="color: #1fac96">Login</a>
                    </strong>
                </small>
            </div>
        </form>

        <div class="copy">&copy; <script>
                document.write(new Date().getFullYear());
            </script> Digital Medical Information</div>
    </aside>
</div>