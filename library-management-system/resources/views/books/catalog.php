<?php $title = 'Catalog'; ob_start(); ?>
<h2>Catalog</h2>
<form class="form-inline" method="get" action="/catalog">
  <input type="text" name="q" class="input-xxlarge" placeholder="Search books by title, author, ISBN">
  <select name="category" class="input-medium">
    <option value="">All Categories</option>
    <option>Computer Science</option>
    <option>Mathematics</option>
    <option>Physics</option>
    <option>Literature</option>
  </select>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<hr>
<div class="row">
  <div class="span3">
    <h4>Filters</h4>
    <ul class="nav nav-pills nav-stacked">
      <li><a href="#">Available now</a></li>
      <li><a href="#">New arrivals</a></li>
      <li><a href="#">Popular</a></li>
    </ul>
  </div>
  <div class="span9">
    <div class="row">
      <div class="span3">
        <div class="thumbnail">
          <img src="https://covers.openlibrary.org/b/id/554106-M.jpg" alt="Book cover">
          <div class="caption">
            <h5>Clean Code</h5>
            <p>Robert C. Martin</p>
            <p><a href="#" class="btn btn-success">View</a> <a href="#" class="btn">Hold</a></p>
          </div>
        </div>
      </div>
      <div class="span3">
        <div class="thumbnail">
          <img src="https://covers.openlibrary.org/b/id/8228691-M.jpg" alt="Book cover">
          <div class="caption">
            <h5>Introduction to Algorithms</h5>
            <p>Cormen, Leiserson, Rivest, Stein</p>
            <p><a href="#" class="btn btn-success">View</a> <a href="#" class="btn">Hold</a></p>
          </div>
        </div>
      </div>
      <div class="span3">
        <div class="thumbnail">
          <img src="https://covers.openlibrary.org/b/id/10523368-M.jpg" alt="Book cover">
          <div class="caption">
            <h5>Designing Data-Intensive Applications</h5>
            <p>Martin Kleppmann</p>
            <p><a href="#" class="btn btn-success">View</a> <a href="#" class="btn">Hold</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); include BASE_PATH . '/resources/views/layouts/base.php'; ?>