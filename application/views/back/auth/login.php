<?php $this->load->view('back/template/meta') ?>

<body>
  <div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
      <div class="auth-box bg-dark border-top border-secondary">
        <div class="text-center p-t-20 p-b-20">
          <span class="db"><img src="<?php echo base_url('assets/template/backend/assets/images/') ?>logo.png" alt="logo" /></span>
        </div>

        <!-- Form -->
        <p class="text-light text-center"><?php echo lang('login_subheading'); ?></p>

        <?php echo $message; ?>

        <?php echo form_open("admin/auth/login", array('class' => 'form-horizontal m-t-20', 'id' => 'loginform')); ?>
        <div class="row">
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
              </div>
              <?php echo form_input($identity); ?>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
              </div>
              <?php echo form_input($password); ?>
            </div>
          </div>
        </div>
        <div class="row text-light">
          <?php echo lang('login_remember_label', 'remember'); ?> <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
        </div>
        <div class="row border-top border-secondary">
          <div class="col-12">
            <div class="form-group">
              <div class="p-t-20">
                <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> <?php echo lang('login_forgot_password'); ?></button>
                <button class="btn btn-success float-right" type="submit"><?php echo lang('login_submit_btn'); ?></button>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>

      <!-- Forgot Password -->
      <div id="recoverform">
        <div class="text-center">
          <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
        </div>
        <div class="row m-t-20">
          <!-- Form -->
          <form class="col-12" action="index.html">
            <!-- email -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
              </div>
              <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- pwd -->
            <div class="row m-t-20 p-t-20 border-top border-secondary">
              <div class="col-12">
                <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                <button class="btn btn-info float-right" type="button" name="action">Recover</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php $this->load->view('back/template/js') ?>
  <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
    });
    $('#to-login').click(function() {

      $("#recoverform").hide();
      $("#loginform").fadeIn();
    });
  </script>

</body>

</html>