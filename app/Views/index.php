<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="shortcut icon" href="<?= base_url('') ?>/apaxy/images/favicon.ico">
  <title><?= $title ?> | <?= APP_NAME ?></title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('') ?>/pingendo/wireframe.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha256-nbyata2PJRjImhByQzik2ot6gSHSU4Cqdz5bNYL2zcU=" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
<?= (session()->has('message'))? session()->message : '' ?>
  <div class="collapse bg-dark" id="navbarHeader" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-7 py-4">
          <h4>About</h4>
          <p class="text-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-md-3 offset-md-1 py-4">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-secondary">Follow on Twitter</a>
            </li>
            <li>
              <a href="#" class="text-secondary">Like on Facebook</a>
            </li>
            <li>
              <a href="#" class="text-secondary">Email me</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-light bg-secondary">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> <?= APP_NAME ?></b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="<?= route_to('home') ?>">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?= route_to('contact') ?>">Contact</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?= route_to('about') ?>">About</a> </li>
        </ul>
        <?php if(session()->has('user_id')){ ?>
        <a href="<?= route_to('dashboard') ?>" class="btn navbar-btn ml-md-2 btn-warning">Dashboard</a>
        <a href="<?= route_to('logout') ?>" class="btn navbar-btn ml-md-2 btn-primary">Logout</a>
        <?php } else { ?> 
        <a href="<?= route_to('login') ?>" class="btn navbar-btn ml-md-2 btn-warning">Login</a>
        <a href="<?= route_to('register') ?>" class="btn navbar-btn ml-md-2 btn-primary">Register</a>
        <?php } ?> 
      </div>
    </div>
  </nav>
  <div class="text-center py-5">
    <div class="container">
      <div class="row my-5 justify-content-center">
        <div class="col-md-9">
          <h1>Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <a href="#" class="btn btn-primary m-2">Main call to action</a>
          <a href="#" class="btn btn-secondary m-2">Secondary action</a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-light mb-0 py-0 pt-4 pb-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="">Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4 pb-4">
    <div class="container">
      <div class="row">
        <form action="">
          <div class="col-md-12">
            <div class="form-group" > <label>Nama Smartphone</label> 
              <input type="nama_hp" class="form-control" placeholder="Xiaomi Note 6">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group"> <label>Gejala Kerusakan</label> 
              <select id="gejala" class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width:540px">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
              </select>
              <div class="row">
                <div class="col-md-12"><button type="submit" class="btn btn-primary mt-3">Submit</button></div>
              </div>
            </div>
          </div>
        </form>
        <div class="col-md-6">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"> Cras justo odio </a>
            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group</h5>
              </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> <small>Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group </h5>
              </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p> <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© <?= date('Y') ?> <?= APP_NAME ?>. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script>
  $(document).ready(function() {
    $( "#gejala" ).select2({
      theme: "bootstrap",
      placeholder: "Pilih Gejala Kerusakan",
      allowClear: true
    });
  });
  </script>
</body>

</html>