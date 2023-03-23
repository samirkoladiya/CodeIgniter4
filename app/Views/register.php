<div class="container mt-5">
	<div class="row">
    <div class="col-md-6">
      <h2 class="my-3">Register</h2>
      <?php echo form_open('register', ['onsubmit' => 'return validate_register_form();']); ?>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onfocus="hide_validation_error('name');">
          <p id="error_name" class="error_message"></p>
        </div>
        <div class="form-group mt-2">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" onfocus="hide_validation_error('email');">
          <p id="error_email" class="error_message"></p>
        </div>
        <div class="form-group mt-2">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" onfocus="hide_validation_error('password');">
          <p id="error_password" class="error_message"></p>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Register</button>
      <?php echo form_close(); ?>
      <script>
        function validate_register_form()
        {
          var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
          var name = $.trim($('#name').val());
          var email = $.trim($('#email').val());
          var password = $.trim($('#password').val());
          var count = 0;

          if( name=='' )
          {
            show_validation_error('name', 'Please enter name');
            count++;
          }

          if( email=='' )
          {
            show_validation_error('email', 'Please enter email');
            count++;
          }

          if(email!='' && !email_regex.test(email)){
            show_validation_error('email', 'Please enter valid email');
            count++;
          }

          if( password=='' )
          {
            show_validation_error('password', 'Please enter password');
            count++;
          }

          if( count > 0 )
          {
            return false;
          }
        }
      </script>
    </div>
  </div>
</div>