<div class="container-fluid">
    <div class="row h-100">
        <div class="bg-blueme w-100 h-75">
            <div class="row h-100">
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <img class="w-50" src="<?= base_url()?>assets/images/title-home.png">
                    </div>
                    <div class="btn-wrap m-3">
                        <form action="<?= site_url("users/handelHomebtn"); ?>" method="post">
                            <button type="submit" name="request" value="register" class="btn rounded-pill btn-primary m-2 px-5">Register</button>
                            <button type="submit" name="request" value="login" class="btn rounded-pill btn-secondary m-2 px-5">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <img class="w-75" src="<?= base_url()?>assets/images/socializing.png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>