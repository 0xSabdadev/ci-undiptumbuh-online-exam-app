<?php if( $this->ion_auth->is_admin() ) : ?>
<div class="row">
    <?php foreach($info_box as $info) : ?>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-<?=$info->box?>">
            <div class="inner">
                <h3>
                    <?=$info->total;?>
                </h3>
                <p>
                    <?=$info->text;?>
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-<?=$info->icon?>"></i>
            </div>
            <a href="<?=base_url().strtolower($info->title);?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <div class="col-md-6">
        <!-- USERS LIST -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600;"><i class="fa fa-jedi text-danger"></i> Kelompok 6 PBP-A
                </h3>

                <div class="box-tools pull-right">
                    <span class="label label-danger">5 Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body box-centered  ">
                <ul class="users-list clearfix">
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-0.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Farid Reza</a>
                        <span class="users-list-date">24060120135555</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-1.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Jason Riskova</a>
                        <span class="users-list-date">24060120120002</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-2.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Nadiatus Salam</a>
                        <span class="users-list-date">24060120120006</span>
                    </li>

                </ul>
                <ul class="users-list clearfix">
                    <li style="margin-left: 80px;">
                        <img src="<?= base_url() ?>assets/dist/img/usr-3.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Ilma Dzakiah</a>
                        <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-4.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Aulia Putri</a>
                        <span class="users-list-date">13 Jan</span>
                    </li>
                </ul>
                <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
            </div>
            <!-- /.box-footer -->
        </div>
        <!--/.box -->
    </div>
    <div class="col-md-6">
        <!-- Calendar -->
        <div class="box box-solid bg-green-gradient">
            <div class="box-header">
                <i class="fa fa-calendar"></i>

                <h3 class="box-title">Calendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i></button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Add new event</a></li>
                            <li><a href="#">Clear events</a></li>
                            <li class="divider"></li>
                            <li><a href="#">View calendar</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                            class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i
                            class="fa fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Progress bars -->
                        <div class="clearfix">
                            <span class="pull-left">Task #1</span>
                            <small class="pull-right">90%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                        </div>

                        <div class="clearfix">
                            <span class="pull-left">Task #2</span>
                            <small class="pull-right">70%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="clearfix">
                            <span class="pull-left">Task #3</span>
                            <small class="pull-right">60%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                        </div>

                        <div class="clearfix">
                            <span class="pull-left">Task #4</span>
                            <small class="pull-right">40%</small>
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
<?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>
<div class="row">
    <div class="col-lg-12 col-md-10">
        <div class="callout callout-warning">
            <h4>Welcome to Lecturer Administration!</h4>
            <p>Lecturers have special access rights to process student exam data and create or administer a set of exams
                (including adding questions, managing quizzes and scheduling them, and generating quiz tokens for the
                classes/courses they handle).</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h4 class="fw-bold" style="font-size: 24px;">
                            <?=$dosen->nip?>
                        </h4>
                        <p>NIP</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shield-halved"></i>
                    </div>
                    <a href="#" class="small-box-footer"> &nbsp;</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h4 class="fw-bold" style="font-size: 18px;">
                            <?=$dosen->nama_matkul?>
                        </h4>
                        <p>Course</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="#" class="small-box-footer"> &nbsp;</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <?php $ts=0; ?>
                        <?php if($ts==0): ?>
                        <h4 class="fw-bold" style="font-size: 24px;">
                            None
                        </h4>
                        <?php else: ?>
                        <?php foreach ($kelas as $k) : ?>
                        <h4 class="fw-bold" style="font-size: 24px;">
                            <?=$k->nama_kelas;?>
                        </h4>
                        <?php $ts++; ?>
                        <?php endforeach;?>
                        <?php endif; ?>
                        <p>Class</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-landmark"></i>
                    </div>
                    <a href="#" class="small-box-footer"> &nbsp;</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Questions</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Exams</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>

        <!-- <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600;"><i class="fa fa-user-tie text-primary mr-2"></i>Account
                    Information</h3>
            </div>
            <table class="table table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <td>
                        <?=$dosen->nama_dosen?>
                    </td>
                </tr>
                <tr>
                    <th>NIP</th>
                    <td>
                        <?=$dosen->nip?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?=$dosen->email?>
                    </td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td>
                        <?=$dosen->nama_matkul?>
                    </td>
                </tr>
                <tr>
                    <th>Class List</th>
                    <td>
                        <ol class="pl-4">
                            <?php foreach ($kelas as $k) : ?>
                            <li>
                                <?=$k->nama_kelas?>
                            </li>
                            <?php endforeach;?>
                        </ol>
                    </td>
                </tr>
            </table>
        </div> -->
    </div>
    <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-weight: 600;"><i class="fa fa-jedi text-danger"></i> Kelompok 6 PBP-A
                </h3>

                <div class="box-tools pull-right">
                    <span class="label label-danger">5 Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body box-centered  ">
                <ul class="users-list clearfix">
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-0.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Farid Reza</a>
                        <span class="users-list-date">24060120135555</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-1.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Jason Riskova</a>
                        <span class="users-list-date">24060120120002</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-2.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Nadiatus Salam</a>
                        <span class="users-list-date">24060120120006</span>
                    </li>

                </ul>
                <ul class="users-list clearfix">
                    <li style="margin-left: 80px;">
                        <img src="<?= base_url() ?>assets/dist/img/usr-3.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Ilma Dzakiah</a>
                        <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                        <img src="<?= base_url() ?>assets/dist/img/usr-4.png" alt="User Image" width="80" height="80">
                        <a class="users-list-name" href="#">Aulia Putri</a>
                        <span class="users-list-date">13 Jan</span>
                    </li>
                </ul>
                <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
</div>

<?php else : ?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Account Information</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NIM</th>
                    <td>
                        <?=$mahasiswa->nim?>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>
                        <?=$mahasiswa->nama?>
                    </td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <?=$mahasiswa->jenis_kelamin === 'M' ? "Male" : "Female" ;?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?=$mahasiswa->email?>
                    </td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>
                        <?=$mahasiswa->nama_jurusan?>
                    </td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td>
                        <?=$mahasiswa->nama_kelas?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?php endif; ?>