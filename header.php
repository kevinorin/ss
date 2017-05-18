<!-- Header Start -->
<?php $file = basename($_SERVER['PHP_SELF']);?>
<header id="header" class="navbar navbar-default navbar-fixed-top"> <!-- IF you want to header transparent, add only this two classes with nav bar "header-trans navbar-transparent" -->
	<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="black-logo" src="assets/img/logo.png" alt="">
        <img class="white-logo" src="assets/img/logo-white.png" alt="">
      </a>
    </div>
    <!-- Nav Start -->
    <nav id="nav">
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="<?php echo $file=="index.php"?"active":"";?>"><a href="index.php">Home</a></li>
          <li class="<?php echo $file=="listings.php"?"active":"";?>"><a href="listings.php">Listings</a></li>
          <li class="<?php echo $file=="about.php"?"active":"";?>"><a href="about.php">About</a></li>
          <li class="<?php echo $file=="blog.php"?"active":"";?>"><a href="blog.php">Blog</a></li>
          <li class="<?php echo $file=="contact.php"?"active":"";?>"><a href="contact.php">Contact</a></li>
          <li class="<?php echo $file=="search.php"?"active":"";?>"><a href="search.php">Search Properties</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>