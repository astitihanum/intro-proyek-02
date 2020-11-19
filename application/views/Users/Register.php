<div class="container-fluid">
  <div class="row full-height">
    <div class="col-4 blue-background">
        <div class="row h-25 d-flex justify-content-center align-items-end">
            <div class="mx-5">
                <h2>Register</h2>
                <t class="mt-2">Daftar dengan memasukkan data diri anda</t>
            </div>
        </div>
        <div class="row h-75 d-flex justify-content-center align-items-center flex-column">
            <div class="w-75">
                <form action="" method="post">
                    <div class="p-2 bg-white">
                        <div class="form-group d-flex p-2    flex-column">
                            <label for="no-telp-input">No Telephone</label>
                            <input type="text" placeholder="08xxxxxxxxxx" id="notelpinput">
                        </div>
                        <div class="form-group d-flex p-2 flex-column">
                            <label for="password">Password</label>
                            <input type="password" placeholder="password" id="passwordinput">
                        </div>
                        <div class="form-group d-flex p-2 flex-column">
                            <label for="confirm-password">Password</label>
                            <input type="password" placeholder="confirm password" id="confirmpasswordinput">
                        </div>
                    </div>
                    <div class="m-5">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
    <div class="col full-height">
        <div class="h-100 d-flex justify-content-center align-items-center">
            <img class="h-75" src="<?= base_url() ?>assets/images/socializing.png" alt="" srcset="">
        </div>
    </div>
  </div>
</div>