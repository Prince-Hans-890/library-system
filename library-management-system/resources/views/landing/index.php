<?php $title = $title ?? 'Library'; ob_start(); ?>
<div class="hero-unit">
  <h1>Welcome to the College Library</h1>
  <p>Discover, learn, and succeed with access to thousands of resources.</p>
  <p>
    <a class="btn btn-primary btn-large" href="/catalog">Browse Catalog</a>
    <a class="btn btn-success btn-large" href="/login">Login</a>
  </p>
</div>
<div class="row">
  <div class="span4">
    <h3>Books</h3>
    <p>Over 25,000 titles across disciplines.</p>
  </div>
  <div class="span4">
    <h3>Members</h3>
    <p>10,000+ active students and faculty.</p>
  </div>
  <div class="span4">
    <h3>Branches</h3>
    <p>3 campuses with modern facilities.</p>
  </div>
</div>
<?php $content = ob_get_clean(); include BASE_PATH . '/resources/views/layouts/base.php'; ?>