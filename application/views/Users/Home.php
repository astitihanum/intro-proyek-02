<div class="container-fluid">
    <div class="row">
        <div class="bg-blueme p-5 w-100 h-75">
            <div class="row h-100 p-5">
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <img class="w-50" src="<?= base_url()?>assets/images/title-home.png">
                    </div>
                    <div class="btn-wrap m-3">
                        <form class="container text-center" action="<?= site_url("users/handleHomebtn"); ?>" method="post">
                            <button type="submit" name="request" value="register" class="btn btn-primary rounded-pill  m-2 px-5">Register</button>
                            <button type="submit" name="request" value="login" class="btn btn-secondary rounded-pill m-2 px-5">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <img class="w-75 img-fluid" src="<?= base_url()?>assets/images/socializing.png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>