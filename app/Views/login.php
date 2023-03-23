<div class="container mt-5">
	<div class="row">
    <?php
    if(session()->has('success_message'))
    {
      echo '<p class="lead success_message fw-bold">'.session()->get('success_message').'</p>';
    }
    if(session()->has('error_message'))
    {
      echo '<p class="lead error_message fw-bold">'.session()->get('error_message').'</p>';
    }
    ?>
    <div class="col-md-6">
      <h2 class="my-3">Login</h2>
      <?php echo form_open('login'); ?>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group mt-1">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>