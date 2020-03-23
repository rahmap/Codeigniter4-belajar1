<?= $this->extend('layouts/main_auth') ?>

<?= $this->section('title') ?>
    <?= $title ?> | <?= APP_NAME ?>
<?= $this->endSection() ?>

<?= $this->section('pageName') ?>
Register Page <?= APP_NAME ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-5 text-center">Register Account to <?= APP_NAME ?>.</h5>
                    <form class="form-horizontal" action="<?= base_url('auth/register') ?>" method="POST">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label for="username">Nama</label>
                                    <input type="text" class="form-control <?= (\Config\Services::validation()->getError('nama'))? 'is-invalid' : '' ; ?>" name="nama" id="username" value="<?= set_value('nama') ?>" placeholder="Masukkan Nama">
                                    <div class="invalid-feedback">
                                        <?= \Config\Services::validation()->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="useremail">Email</label>
                                    <input type="email" class="form-control <?= (\Config\Services::validation()->getError('email'))? 'is-invalid' : '' ; ?>" name="email" id="useremail" value="<?= set_value('email') ?>" placeholder="Masukkan email">        
                                    <div class="invalid-feedback">
                                        <?= \Config\Services::validation()->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control <?= (\Config\Services::validation()->getError('password'))? 'is-invalid' : '' ; ?>" name="password" id="userpassword" placeholder="Masukkan password">
                                    <div class="invalid-feedback">
                                        <?= \Config\Services::validation()->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="userpassword">Password Konfirmasi</label>
                                    <input type="password" class="form-control <?= (\Config\Services::validation()->getError('password1'))? 'is-invalid' : '' ; ?>" name="password1" id="userpassword" placeholder="Masukkan password konfirmasi">                            
                                    <div class="invalid-feedback">
                                        <?= \Config\Services::validation()->getError('password1'); ?>
                                    </div>
                                </div>
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                </div> -->
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="submit">Register</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="<?= route_to('login') ?>" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>