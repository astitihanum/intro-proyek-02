<div class="container-fluid">
  <div class="row h-100">
    <div class="col blue-background">
        <div class="row h-25 d-flex justify-content-center align-items-end">
            <div class="mx-5">
                <h2 class="font-size-2">Register</h2>
                <t class="mt-2 font-size-8">Daftar dengan memasukkan data diri anda</t>
            </div>
        </div>
        <div class="row h-75 d-flex justify-content-center align-items-center flex-column">
            <div class="w-75">
                <form action="" method="post">
                    <div class="p-2 my-2 bg-white">
                        <div class="form-group d-flex p-2 flex-column">
                            <label class="font-size-8" for="no-telp-input">No Telephone</label>
                            <input class="font-size-8" type="text" placeholder="08xxxxxxxxxx" id="notelpinput">
                        </div>
                        <div class="form-group d-flex p-2 flex-column">
                            <label class="font-size-8" for="password">Password</label>
                            <input class="font-size-8" type="password" placeholder="password" id="passwordinput">
                        </div>
                        <div class="form-group d-flex p-2 flex-column">
                            <label class="font-size-8" for="confirm-password">Password</label>
                            <input class="font-size-8" type="password" placeholder="confirm password" id="confirmpasswordinput">
                        </div>
                    </div>
                    <div class="m-5">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
    <div class="col h-100 d-flex justify-content-center align-items-center">
        <img class="img-fluid p-5" src="<?= base_url() ?>assets/images/socializing.png" alt="" srcset="">
    </div>
  </div>
</div>