<?php $title = 'Login'; ob_start(); ?>
<div class="row">
  <div class="span6">
    <h2>Login</h2>
    <form method="post" action="/login">
      <input type="hidden" name="_token" value="<?= htmlspecialchars($csrf_token) ?>">
      <label>Email</label>
      <input type="email" name="email" class="span5" required>
      <label>Password</label>
      <input type="password" name="password" class="span5" required>
      <label class="checkbox">
        <input type="checkbox" name="remember"> Remember me
      </label>
      <div class="captcha">
        <span class="captcha-box">AB12C</span>
        <input type="text" name="captcha" placeholder="Enter text" class="span3" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <a href="/forgot-password" class="btn btn-link">Forgot Password?</a>
    </form>
  </div>
  <div class="span6">
    <h3>Welcome back!</h3>
    <p>Access your dashboard, manage loans, and explore new arrivals.</p>
  </div>
</div>
<?php $content = ob_get_clean(); include BASE_PATH . '/resources/views/layouts/base.php'; ?>