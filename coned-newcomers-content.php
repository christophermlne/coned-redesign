<link rel="stylesheet" href="../layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" href="common/layerslider/assets/css/style.css" type="text/css">

<?php include('incs.php'); ?>

<!--div id="big-audience-nav">
   <nav>
        <ul>
            <li class="active-tab"><a href="#">Prospective Students</a></li><li><a href="coned-newcomers.php">Newcomers</a></li><li><a href="#">Current Students</a></li>
        </ul>
    </nav>
</div-->

<section id="coned-title">
	<div class="crumbs">
		<ul>
			<li><a href="#">Home <span>/</span></a></li>
			<li><a href="#">Programs and Courses <span>/</span> </a></li>
			<li><a href="#">Programs </a></li>
		</ul>
	</div>
	<h1>Welcome to Canada</h1>
</section>

<div id="coned-landing-content" class="not-landing">
		
	<section id="coned-cluster-featured"><!--Imagery to come--></section>
	
	<section class="newcomers-intro">
		<div class="intro-text"><p>Pellentesque habitant morbi tristique senectus et netus et malesuada 
	fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada 
	est. Mauris placerat eleifend leo.</p></div>
		
		<div class="call-out"><h3>Information Sessions</h3><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br> <br><a href="#">Click here to sign up for</a></p></div>


	</section>

	  <section id="way-find">
			<section id="way-find-item">
				<h2>Job Preperation</h2>
				<div class="way-find-desc">
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				 </div>
				<div class="way-find-links">
					<h3>Title for the links</h3>
					<p>this is the description</p>
				<ul class="list-2">
					<li><a href="#">Canadian Securities<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Financial Planning<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Accounting and Finance - Other Related<br /><span class="desc">this is the small text</span></a></li>
				 </ul></div>
			</section>
			<section id="way-find-item">
				<h2>Language Training</h2>
				<div class="way-find-desc">
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					<p>Pellenstas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
					<p>Pellenstas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
					</div>
				<div class="way-find-links">
				<ul class="list-2">
					<li><a href="#">Canadian Securities<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Financial Planning<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Accounting and Finance - Other Related<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Canadian Payroll Association - Payroll Certification Programs<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Tax Accounting<br /><span class="desc">this is the small text</span></a></li>
					<li><a href="#">Accounting and Finance - Other Related<br /><span class="desc">this is the small text</span></a></li>
				</ul></div>
			</section>
</div>


<aside id="coned-aside" class="not-landing">

	<?php include('search.php'); ?>

	<ul id="coned-sidebar-see-also">
		<li><a href="#">General Info</a></li>
		<li><a href="#">Fees</a></li>
		<li><a href="#">Important Dates</a></li>
		<li><a href="#">Information Sessions</a></li>
		<li><a href="#">Policies</a></li>
		<li><a href="#">How to Register</a></li>
		<li><a href="#">Contact Us</a></li>
	</ul>

	<?php include('news.php'); ?>

	<script>
	$(document).ready(function() {
		$('#news_slider').bjqs({
			'animation' : 'slide',
			'width' : 280,
			'height' : 135
		});
	  });
	</script>

	<?php include('twitter.php'); ?>

</aside>

