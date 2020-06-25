<?php $this->load->view('back/template/meta') ?>

<body>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<?php $this->load->view('back/template/header') ?>
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<?php $this->load->view('back/template/sidebar') ?>
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-12 d-flex no-block align-items-center">
						<h4 class="page-title"><?php echo $title ?></h4>
						<div class="ml-auto text-right">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><?php echo $module ?></a></li>
									<li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a href="<?php echo base_url('admin/auth/create_user') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>
						<hr>
						<?php echo $message ?>
						<div class="table-responsive">
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th><?php echo lang('index_fname_th'); ?></th>
										<th><?php echo lang('index_lname_th'); ?></th>
										<th><?php echo lang('index_email_th'); ?></th>
										<th><?php echo lang('index_groups_th'); ?></th>
										<th><?php echo lang('index_status_th'); ?></th>
										<th><?php echo lang('index_action_th'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user) : ?>
										<tr>
											<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
											<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
											<td>
												<?php foreach ($user->groups as $group) : ?>
													<?php echo anchor("admin/auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
												<?php endforeach ?>
											</td>
											<td><?php echo ($user->active) ? anchor("admin/auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("admin/auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
											<td><?php echo anchor("admin/auth/edit_user/" . $user->id, 'Edit'); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<?php $this->load->view('back/template/js') ?>

			<link href="<?php echo base_url('assets/plugins/') ?>datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

			<script src="<?php echo base_url('assets/plugins/') ?>multicheck/datatable-checkbox-init.js"></script>
			<script src="<?php echo base_url('assets/plugins/') ?>multicheck/jquery.multicheck.js"></script>
			<script src="<?php echo base_url('assets/plugins/') ?>DataTables/datatables.min.js"></script>
			<script>
				/****************************************
				 *       Basic Table                   *
				 ****************************************/
				$('#zero_config').DataTable();
			</script>

			<?php $this->load->view('back/template/footer') ?>