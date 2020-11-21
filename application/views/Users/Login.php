<div class="container-fluid">
  <div class="row h-100">
    <div class="col blue-background">
        <div class="row h-25 d-flex justify-content-center align-items-end">
            <div class="mx-5">
                <h2 class="font-size-2">Login</h2>
                <t class="mt-2 font-size-8">Jika sudah terdaftar, Gunakan akun yang sudah terdaftar untuk login</t>
            </div>
        </div>
        <div class="row h-75 d-flex justify-content-center align-items-center flex-column">
            <div class="w-75">
                <form action="" method="post">
                    <div class="p-2 bg-white">
                        <div class="form-group d-flex p-3 flex-column">
                            <label class="font-size-8" for="no-telp-input">No Telephone</label>
                            <input class="font-size-8" type="text" placeholder="08xxxxxxxxxx" id="notelpinput">
                        </div>
                        <div class="form-group d-flex p-3 flex-column">
                            <label class="font-size-8" for="password">Password</label>
                            <input class="font-size-8" type="password" placeholder="password" id="passwordinput">
                        </div>
                    </div>
                    <div class="m-5">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center align-items-center"">
        <img class="img-fluid p-5" src="<?= base_url() ?>assets/images/socializing.png" alt="" srcset="">
    </div>
  </div>
</div>