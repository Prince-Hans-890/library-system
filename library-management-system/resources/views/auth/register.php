<?php $title = 'Register'; ob_start(); ?>
<h2>Student Registration</h2>
<form method="post" action="/register" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="<?= htmlspecialchars($csrf_token) ?>">
  <div class="row">
    <div class="span6">
      <label>Name</label>
      <input type="text" name="name" class="span5" required>
      <label>Email</label>
      <input type="email" name="email" class="span5" required>
      <label>Roll Number</label>
      <input type="text" name="roll_no" class="span5" required>
      <label>Department</label>
      <input type="text" name="department" class="span5" required>
      <label>Semester</label>
      <input type="number" name="semester" class="span5" min="1" max="12" required>
    </div>
    <div class="span6">
      <label>Phone</label>
      <input type="text" name="phone" class="span5">
      <label>Address</label>
      <textarea name="address" class="span5"></textarea>
      <label>Upload ID Document</label>
      <input type="file" name="document" class="span5" accept="image/*,application/pdf" required>
      <div class="captcha">
        <img src="/public/images/captcha-placeholder.png" alt="captcha" style="height:40px;background:#eee">
        <input type="text" name="captcha" placeholder="Enter text" class="span3" required>
      </div>
    </div>
  </div>
  <label class="checkbox">
    <input type="checkbox" required> I accept the terms and conditions
  </label>
  <button type="submit" class="btn btn-success">Submit Registration</button>
</form>
<?php $content = ob_get_clean(); include BASE_PATH . '/resources/views/layouts/base.php'; ?>