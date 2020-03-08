<?= $this->extend('layouts/main_auth') ?>

<?= $this->section('title') ?>
    <?= $title ?> | <?= APP_NAME ?>
 <?= $this->endSection() ?>

<?= $this->section('pageName') ?>
Login Page <?= APP_NAME ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-lg-5">
      <div class="card">
          <div class="card-body p-4">
              <div class="p-2">
                  <h5 class="mb-5 text-center">Sign in to continue to <?= APP_NAME ?>.</h5>
                  <form class="form-horizontal" action="index.html">

                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group mb-4">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" id="username" placeholder="Enter username">
                              </div>
                              <div class="form-group mb-4">
                                  <label for="userpassword">Password</label>
                                  <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customControlInline">
                                          <label class="custom-control-label" for="customControlInline">Remember me</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="text-md-right mt-3 mt-md-0">
                                          <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="mt-4">
                                  <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                              </div>
                              <div class="mt-4 text-center">
                                  <a href="<?= route_to('register') ?>" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a>
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