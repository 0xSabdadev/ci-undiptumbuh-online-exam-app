<style>
    body {
        background-image: url('<?=base_url()?>assets/dist/img/bg-won.png') !important;
    }
    #infoMessage {
            margin-top: 10px;
            margin-bottom: -15px;
    }
    .bx-shadow {
        box-shadow: 0px 6px 8px #888888;
    }
    .card {
        margin-top: 40px;
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .card {
            margin-top: 220px;
        }
    }
    @media (max-width: 575px) {
        .card {
            margin-top: 70px;
        }
    }
</style>
<section id="loginz">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0 justify-content-center align-items-center">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div id="login-main" class="card col-xl-4 col-lg-8 col-md-10 col-sm-12 mx-auto bx-shadow">
                        <div class="card-body login-box-body px-lg-5 px-md-5 px-sm-1 pb-lg-3 pb-md-3 pt-lg-4 pb-md-4 ">
                            <div class="text-center mt-3">
                                <img src="<?=base_url()?>assets/dist/img/logo-undip.png" alt="logo-undip" width="150"
                                    height="115" loading="lazy">
                            </div>
                            <p class="card-title mt-1 text-center muli fw-bold text-udp-grey fs-3"
                                style="margin-bottom: -4px;">Single Sign
                                On
                                (SSO)</p>
                            <p class="card-title mb-3 text-center muli text-udp-grey fs-3">Undip Tumbuh</p>
                            <p class="text-center muli text-udp-grey-2 line-on-side" style="font-size:13px ;">
                                &nbsp; Silakan
                                Masuk &nbsp; </p>
                            <div class="marqii" style="margin-bottom: -10px;">
                                <marquee onmouseover="this.stop();" onmouseout="this.start();">
                                    <fontsninja-text class="muli-marquee">
                                        Berita : </fontsninja-text><a href="https://sso.undip.id" target="_blank"
                                        class="text-danger muli-marquee"><u><b>
                                                <fontsninja-text>TRYOUT UNDIP
                                                </fontsninja-text>
                                            </b>
                                            <fontsninja-text>
                                                dapat diakses di sini .</fontsninja-text>
                                        </u></a>
                                    <fontsninja-text> atau link
                                        : </fontsninja-text><a href="https://sso.undip.id" target="_blank"
                                        class="text-danger muli-marquee"><u>
                                            <fontsninja-text>
                                                https://sso.undip.id</fontsninja-text>
                                        </u></a>
                                </marquee>
                            </div>
                            <div id="infoMessage" class="text-center">
                                <?php echo $message;?>
                            </div>
                            <div class="mt-4">
                                <?= form_open("auth/cek_login", array('id'=>'login'));?>
                                <div class="form-group">
                                    <input type="text" name="identity" id="identity"
                                        class="form-control p_input has-icon-left" placeholder="E-mail official Undip"
                                        required
                                        style="background-image: url('<?=base_url()?>assets/dist/img/usr.png');">
                                    <!-- <div class="invalid-feedback"><i class='bx bx-info-circle'></i>Please fill
                                        with
                                        correct email or username.</div> -->
                                    <!-- <?= form_input($identity);?> -->
                                    <span class="form-control-feedback"></span>
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group mt-4">
                                    <input type="password" name="password" id="password"
                                        class="form-control p_input has-icon-left" placeholder="Password" required
                                        style="background-image: url('<?=base_url()?>assets/dist/img/key.png');">
                                    <!-- <div class="invalid-feedback"><i class='bx bx-info-circle'></i>Please fill with
                                        correct password.</div> -->
                                    <!-- <?= form_input($password);?> -->
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group mt-2 d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="remember" type="checkbox" name="remember"
                                                class="form-check-input"> Remember me
                                        </label>
                                        <!-- <label>
                                            <?= form_checkbox('remember', '', FALSE, 'id="remember"');?> Remember Me
                                            </label> -->
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" id="submit"
                                        class="btn btn-outline-primary enter-btn w-100 py-3"><i
                                            class="fa fa-light fa-unlock me-2"></i>LOGIN</button>
                                </div>
                                <div class="text-center mt-3 mb-5">
                                    <a role="button" href="<?=base_url()?>auth/forgot_password"
                                        class="btn btn-danger btn-block enter-btn w-100 py-2"><i
                                            class="fa fa-light fa-rotate-left me-2"></i>Reset Password</a>
                                </div>
                                <!-- <div class="form-check" style="margin-bottom:-5px ;">
                                    <label class="form-check-label text-left">
                                        <input type="checkbox" class="form-check-input" onclick="passShow()" />
                                        Show password
                                    </label>
                                </div> -->
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</section>
	
<script type="text/javascript">
	let base_url = '<?=base_url();?>';
</script>
<script src="<?=base_url()?>assets/dist/js/app/auth/login.js"></script>
