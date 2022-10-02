<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<?php if( $this->ion_auth->is_admin() ) : ?>
				<img src="<?=base_url()?>assets/dist/img/usersys-min.png?<?php echo time(); ?>" class="img-circle" alt="User Image">
				<?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>
				<img src="<?=base_url()?>assets/dist/img/usersys-lecturer.png?<?php echo time(); ?>" class="img-circle" alt="User Image">
				<?php else : ?>
					<img src="<?=base_url()?>assets/dist/img/usr-2.png?<?php echo time(); ?>" class="img-circle" alt="User Image">
				<?php endif; ?>
			</div>
			<div class="pull-left info">
				<?php if( $this->ion_auth->is_admin() ) : ?>
				<p><?=$user->username?><small class="label pull-right bg-yellow ml-3">Admin</small></p>
				<?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>
				<p><?=$user->first_name?><small class="label bg-blue ml-3">Lecturer</small></p>
				<?php else : ?>
				<p><?=$user->first_name?><small class="label bg-green ml-3">Student</small></p>
				<?php endif; ?>
				<small><?=$user->email?></small>
			</div>
		</div>
		
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN MENU</li>
			<!-- Optionally, you can add icons to the links -->
			<?php 
			$page = $this->uri->segment(1);
			$master = ["jurusan", "kelas", "matkul", "dosen", "mahasiswa"];
			$relasi = ["kelasdosen", "jurusanmatkul"];
			$users = ["users"];
			?>
			<li class="<?= $page === 'dashboard' ? "active" : "" ?>"><a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<?php if($this->ion_auth->is_admin()) : ?>
			<li class="treeview <?= in_array($page, $master)  ? "active menu-open" : ""  ?>">
				<a href="#"><i class="fa fa-folder-open"></i> <span>Databases</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						<small class="label pull-right bg-red mr-4">Master</small>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?=$page==='jurusan'?"active":""?>">
						<a href="<?=base_url('jurusan')?>">
							<i class="fa fa-database"></i> 
							 Department
						</a>
					</li>
					<li class="<?=$page==='kelas'?"active":""?>">
						<a href="<?=base_url('kelas')?>">
							<i class="fa fa-database"></i>
							 Class
						</a>
					</li>
					<li class="<?=$page==='matkul'?"active":""?>">
						<a href="<?=base_url('matkul')?>">
							<i class="fa fa-database"></i>
							 Course
						</a>
					</li>
					<li class="<?=$page==='dosen'?"active":""?>">
						<a href="<?=base_url('dosen')?>">
							<i class="fa fa-database"></i>
							 Lecturer
						</a>
					</li>
					<li class="<?=$page==='mahasiswa'?"active":""?>">
						<a href="<?=base_url('mahasiswa')?>">
							<i class="fa fa-database"></i>
							 Student
						</a>
					</li>
				</ul>
			</li>
			<li class="treeview <?= in_array($page, $relasi)  ? "active menu-open" : ""  ?>">
				<a href="#"><i class="fa fa-link"></i> <span>Relations</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
						<small class="label pull-right bg-purple mr-4">2</small>
						<small class="label pull-right bg-red ">Master</small>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?=$page==='kelasdosen'?"active":""?>">
						<a href="<?=base_url('kelasdosen')?>">
							<i class="fa fa-graduation-cap"></i>
							Class - Lecturer
						</a>
					</li>
					<li class="<?=$page==='jurusanmatkul'?"active":""?>">
						<a href="<?=base_url('jurusanmatkul')?>">
							<i class="fa fa-graduation-cap"></i>
							Department - Course
						</a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('Lecturer') ) : ?>
			<li class="<?=$page==='soal'?"active":""?>">
				<a href="<?=base_url('soal')?>" rel="noopener noreferrer">
					<i class="fa fa-file-text"></i> <span>Questions Bank</span>
				</a>
			</li>
			<?php endif; ?>
			<?php if( $this->ion_auth->in_group('Lecturer') ) : ?>
			<li class="<?=$page==='ujian'?"active":""?>">
				<a href="<?=base_url('ujian/master')?>" rel="noopener noreferrer">
					<i class="fa fa-pencil"></i> <span>Exam</span>
				</a>
			</li>
			<?php endif; ?>
			<?php if( $this->ion_auth->in_group('Student') ) : ?>
			<li class="<?=$page==='ujian'?"active":""?>">
				<a href="<?=base_url('ujian/list')?>" rel="noopener noreferrer">
					<i class="fa fa-pencil"></i> <span>Exam</span>
				</a>
			</li>
			<?php endif; ?>
			<?php if( !$this->ion_auth->in_group('Student') ) : ?>
			<li class="header">REPORTS</li>
			<li class="<?=$page==='hasilujian'?"active":""?>">
				<a href="<?=base_url('hasilujian')?>" rel="noopener noreferrer">
					<i class="fa fa-file"></i> <span>Exam Results</span>
				</a>
			</li>
			<?php endif; ?>
			<?php if($this->ion_auth->is_admin()) : ?>
			<li class="header">ADMINISTRATOR</li>
			<li class="<?=$page==='users'?"active":""?>">
				<a href="<?=base_url('users')?>" rel="noopener noreferrer">
					<i class="fa fa-users"></i> <span>Users Management</span>
				</a>
			</li>
			<li class="<?=$page==='settings'?"active":""?>">
				<a href="<?=base_url('settings')?>" rel="noopener noreferrer">
					<i class="fa fa-cogs"></i> <span>Settings</span>
				</a>
			</li>
			<?php endif; ?>
		</ul>

	</section>
	<!-- /.sidebar -->
</aside>