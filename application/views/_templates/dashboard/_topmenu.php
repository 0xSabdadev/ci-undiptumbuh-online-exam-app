<a href="<?=base_url('dashboard')?>" class="logo">
    <span class="logo-mini"><img src="<?=base_url()?>assets/dist/img/icon.png" alt="" width="30" height="30"></span>
    <span class="logo-lg fw-boldest"><img src="<?=base_url()?>assets/dist/img/icon.png" alt="" width="30"
            height="30">UNDIP <span style="color: #232481;">TUMBUH</span></span>
</a>

<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <?php if( $this->ion_auth->is_admin() ) : ?>
                    <img src="<?=base_url()?>assets/dist/img/usersys-min.png?<?php echo time(); ?>" class="user-image"
                        alt="User Image">
                    <?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>
                    <img src="<?=base_url()?>assets/dist/img/usersys-lecturer.png?<?php echo time(); ?>"
                        class="user-image" alt="User Image">
                    <?php else : ?>
                    <img src="<?=base_url()?>assets/dist/img/usr-2.png?<?php echo time(); ?>" class="user-image"
                        alt="User Image">
                    <?php endif; ?>
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Hi,
                        <?=$user->first_name?>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <?php if( $this->ion_auth->is_admin() ) : ?>
                        <img src="<?=base_url()?>assets/dist/img/usersys-min.png?<?php echo time(); ?>"
                            class="img-circle" alt="User Image">
                        <?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>
                        <img src="<?=base_url()?>assets/dist/img/usersys-lecturer.png?<?php echo time(); ?>"
                            class="img-circle" alt="User Image">
                        <?php else : ?>
                        <img src="<?=base_url()?>assets/dist/img/usr-2.png?<?php echo time(); ?>" class="img-circle"
                            alt="User Image">
                        <?php endif; ?>
                        <p>
                            <?=$user->first_name.' '.$user->last_name?>
                            <small>Member Since
                                <?=date('M, Y', $user->created_on)?>
                            </small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?=base_url()?>users/edit/<?=$user->id?>" class="btn btn-primary btn-flat">
                                <?=$this->ion_auth->is_admin() ? "Edit Profile" : "Edit Profile" ?>
                            </a>
                        </div>
                        <div class="pull-left" style="margin-left: 10px;">
                            <a href="#" id="logout" class="btn btn-danger btn-flat">Logout</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>