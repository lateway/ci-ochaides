<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <?= $this->session->flashdata('message'); ?>
            <span class="anchor" id="formChangePassword"></span>
            <!-- form card change password -->
            <div class="card card-outline-secondary shadow-lg">
                <div class="card-header bg-gradient-primary">
                    <h1 class="mb-0 text-uppercase text-white text-center">Change Password</h1>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/changepassword'); ?>" method="post" class="form" role="form" autocomplete="off">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control" id="current_password" name="current_password" required="">
                            <?= form_error('current_password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="new_password1">New Password</label>
                            <input type="password" class="form-control" id="new_password1" name="new_password1" required="">
                            <span class="form-text small text-muted">
                                The password must be 6-20 characters, and must <em>not</em> contain spaces.
                            </span>
                            <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="new_password2">Verify</label>
                            <input type="password" class="form-control" id="new_password2" name="new_password2" required="">
                            <span class="form-text small text-muted">
                                To confirm, type the new password again.
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg float-right shadow">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form card change password -->

        </div>
    </div>

</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->