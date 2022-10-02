<style>
	body{
		background: #F3F3F3 !important;
    }
    #infoMessage {
            margin-top: 0px;
            margin-bottom: 15px;
    }
	.card {
            margin-top: 40px;
        }
    .bx-shadow {
        box-shadow: 0px 2px 2px #e6e6e6;
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .card {
            margin-top: 40px;
        }
    }
    @media (max-width: 575px) {
        .card {
            margin-top: 30px;
        }
    }
</style>
<section id="login-main">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0 justify-content-center align-items-center">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        <div class="card bdr-none col-xl-9 col-lg-10 col-md-11 col-sm-12 mx-auto bx-shadow">
                            <div class="card-body px-lg-4 px-md-4 px-sm-1 pb-lg-3 pb-md-3 pt-lg-4 pb-md-4 muli-normal">
                                <h2 class=" mb-5" style="font-size: 24.36px;">Reset Password</h2>
								<?php if( $this->session->flashdata('success') ) : ?>
									<p class="text-green text-center"><?=$this->session->flashdata('success');?></p>
								<?php endif; ?>
								<div id="infoMessage" class="text-red text-center"><?php echo $message;?></div>
                                <div>
                                    <div class="form-body">
									<?php echo form_open("auth/forgot_password");?>
                                        <input type="text" name="identity" id="identity" class="form-control form-control-lg input-lg has-icon-left"
                                            id="reset_identity" name="reset_identity"
                                            placeholder="Masukkan alamat e-mail official Undip/username/NIP/NIM anda"
                                            required style="font-size: 15.4px;background-image: url('<?=base_url()?>assets/dist/img/envelope.png');">
                                        <p class="text-muted grey muli-normal mb-5"
                                            style="padding-top: 10px;font-size: 14px;"><span class="text-danger">*
                                            </span>Perhatian kami akan mengirimkan e-mail konfirmasi reset password
                                            ke alamat
                                            alternatif terdaftar anda.</p>
                                        <div class="form-actions text-center mt-4 mb-3"
                                            style="border-top: 1px solid #c1c1c1;">
                                            <div class="mt-4">
                                                <a href="" role="button" class="btn btn-primary">
                                                    <i class="fa fa-thin fa-key "></i><input  type="submit" name="Forgot Password" class="bdr-none muli-normal text-light" style="background:transparent;" onclick="addCollapse()">
                                                </a>
                                                <a href="<?=base_url()?>" role="button" class="btn btn-danger">
                                                    <i class="fa fa-undo"></i> Kembali
                                                </a>
                                            </div>
                                        </div>
									<?php echo form_close();?>
                                    </div>
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