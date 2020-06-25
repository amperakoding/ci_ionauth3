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
          <?php echo form_open(uri_string()); ?>
          <div class="card-body">
            <?php echo $message; ?>
            <p><?php echo lang('edit_user_subheading'); ?></p>
            <hr>
            <div class="form-group row">
              <?php echo lang('edit_user_fname_label', 'first_name', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($first_name); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_lname_label', 'last_name', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($last_name); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_company_label', 'company', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($company); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_address_label', 'address', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($address); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_identity_label', 'identity', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($username); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_email_label', 'email', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($email); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_phone_label', 'phone', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($phone); ?>
              </div>
            </div>
            <?php if ($this->ion_auth->is_admin()) : ?>

              <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
              <?php foreach ($groups as $group) : ?>
                <label class="checkbox">
                  <?php
                  $gID = $group['id'];
                  $checked = null;
                  $item = null;
                  foreach ($currentGroups as $grp) {
                    if ($gID == $grp->id) {
                      $checked = ' checked="checked"';
                      break;
                    }
                  }
                  ?>
                  <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                  <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                </label>
              <?php endforeach ?>

            <?php endif ?>
            <div class="form-group row">
              <?php echo lang('edit_user_password_label', 'password', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($password); ?>
              </div>
            </div>
            <div class="form-group row">
              <?php echo lang('edit_user_password_confirm_label', 'password_confirm', array('class' => 'col-sm-3 text-left control-label col-form-label')); ?>
              <div class="col-sm-9">
                <?php echo form_input($password_confirm); ?>
              </div>
            </div>
            <?php echo form_hidden('id', $user->id); ?>
            <?php echo form_hidden($csrf); ?>
            <?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class' => 'btn btn-primary')); ?>

            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <?php $this->load->view('back/template/js') ?>

      <?php $this->load->view('back/template/footer') ?>