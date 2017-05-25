<!-- Header Start -->
<?php $file_name=basename($_SERVER["SCRIPT_FILENAME"]);?>
<header id="header" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="https://static.myrealestatesite.co/prototype/assets/img/logo.png" alt=""></a>
    </div>
    <!-- Nav Start -->
    <nav id="nav">
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="<?php echo $file_name=="index.php" ? "active":"";?>"><a href="index.php">Home</a></li>
          <li class="<?php echo $file_name=="listings.php" ? "active":"";?>"><a href="listings.php">Listings</a></li>
          <li class="<?php echo $file_name=="about.php" ? "active":"";?>"><a href="about.php">About</a></li>
          <li class="<?php echo $file_name=="blog.php" ? "active":"";?>"><a href="blog.php">Blog</a></li>
          <li class="<?php echo $file_name=="contact.php" ? "active":"";?>"><a href="contact.php">Contact</a></li>
          <li class="<?php echo $file_name=="search.php" ? "active":"";?>"><a href="search.php">Search Properties</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>