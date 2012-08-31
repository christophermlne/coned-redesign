<?php include('incs.php'); ?>

<link rel="stylesheet" href="../layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" href="common/layerslider/assets/css/style.css" type="text/css">
<div id="big-audience-nav">
   <nav>
		<ul>
			<li class="active-tab"><a href="/">Prospective Students</a></li><li><a href="coned-newcomers.php">Newcomers</a></li><li><a href="coned-current-stu.php">Current Students</a></li>
		</ul>
	</nav>
</div>

<section id="coned-title">
	<h1>Continuing &amp; Professional Studies</h1>
</section>

<?php include 'crumbs.php'; ?>

<div id="coned-messaging-area">
	<!-- Slider -->
	<div id="slider_container">
		<div id="landing_slider">
			<ul class="bjqs">
				<li><img src="common/coned_images/slider/01.jpg" alt="Part-time learning, full-time success"></li>
				<li><a href="http://www.sheridancollege.ca/Programs%20and%20Courses/Continuing%20Education/conedprograms.aspx?id=0"><img src="common/coned_images/slider/02.jpg" alt="Motorcycle training"></a></li>
				<li><a href="http://www.sheridancollege.ca/Admissions/Apply/Continuing%20Education/Motorcycle%20Training.aspx"><img src="common/coned_images/slider/03.jpg" alt="Online learning"></a></li>
			</ul>
		</div>
	</div>
</div>

<div id="coned-search-bar">
	<h1><span>Explore</span> Continuing Education</h1>
	<form action="">
		<fieldset>
			<input type="text" placeholder="Find Programs &amp; Courses" class="coned-search-field">
			<button type="button" name="Submit" class="coned-search-submit"><span>Search</span></button>
		</fieldset>
	</form>
	<a href="#" id="close-search">Close</a>
</div>


<?php // Search display ?>
<div id="coned-search-results">
	
	<section id="coned-search-results-display">
		<h2>Search Results for: &ldquo;<span>query</span>&rdquo;</h2>
		<img src="common/coned_images/deco/arrow-up.png" class="arrow">

		<section class="results programs">
			<header>
				<h1>Programs</h1>
				<!-- <p>Showing 7 Results for &ldquo;<span>Busine</span>&rdquo;</p> -->
			</header>
			<ul class="list">
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=126">Business</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=109">Business - Accounting</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=153">Business - Marketing Major</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=127">Business - General</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=271">Business Analysis</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=308">Business Writing</a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/InterestItemDisplayView?storeId=10051&amp;catalogId=10051&amp;progId=253">Small Business Bookkeeping</a>
				</li>
				
			</ul>
		</section>
		<section class="results courses">
			<header>
				<h1>Courses</h1>
				<!-- <p>Showing 20 Results for &ldquo;<span>Busine</span>&rdquo;</p> -->
			</header>		
			
			<section id="coned-faceted-nav">
				<a id="filters"><h4><span class="filter-down left"></span> Refine Results <span class="filter-down right"></span></h4></a>
				<section class="form-wrapper">
					<nav class="toggle-nav">
						<ul class="black-white">
							<li><a id="showLD" class="av-gallery first-child selected" rel="IN-CLASS">In Class</a></li><li><a class="av-gallery last-child" rel="ONLINE" id="hideLD">Online</a></li>
						</ul>
					</nav>

					<form id="in-class">
					
						<fieldset id="locations"  class="inActive">
							<span title="Available only when In-Class delivery mode is selected!" class="toolTip" style="">
								<div class="toolTipWrapper" style="left: -16px; top: 97.5833px; display: none;">
									<div class="toolTipTop"></div>
									<div class="toolTipMid">Available only when In-Class delivery mode is selected!</div>
									<div class="toolTipBtm"></div>
								</div>
							</span>
							<legend>Location</legend>
							<label for="cbLoc_0"><input type="checkbox" name="cbLoc" title="DAVIS$(BRAM)" value="DAVIS$(BRAM)" id="cbLoc_0">DAVIS (BRAM)</label>
							<label for="cbLoc_1"><input type="checkbox" name="cbLoc" title="STC$(OAK)" value="STC$(OAK)" id="cbLoc_1">STC (OAK)</label>
							<label for="cbLoc_2"><input type="checkbox" name="cbLoc" title="TRAFALGAR$(OAK)" value="TRAFALGAR$(OAK)" id="cbLoc_2">TRAFALGAR (OAK)</label>
							<label for="cbLoc_3"><input type="checkbox" name="cbLoc" title="ST.$JOSEPH" (miss)="" value="ST.$JOSEPH" id="cbLoc_3">ST. JOSEPH (MISS)</label>
						</fieldset>

						<fieldset id="days"  class="inActive">
							<legend>Days</legend>
							<div class="day-group">
								<label for="rbDays_0"><input type="checkbox" value="MON" title="MONDAY" name="rbDays" id="rbDays_0">Monday</label>
								<label for="rbDays_1"><input type="checkbox" value="TUE" title="TUESDAY" name="rbDays" id="rbDays_1">Tuesday</label>
								<label for="rbDays_2"><input type="checkbox" value="WED" title="WEDNESDAY" name="rbDays" id="rbDays_2">Wednesday</label>
								<label for="rbDays_3"><input type="checkbox" value="THU" title="THURSDAY" name="rbDays" id="rbDays_3">Thursday</label>
							</div>
							<div class="day-group">
								<label for="rbDays_4"><input type="checkbox" value="FRI" title="FRIDAY" name="rbDays" id="rbDays_4">Friday</label>
								<label for="rbDays_5"><input type="checkbox" value="SAT" title="SATURDAY" name="rbDays" id="rbDays_5">Saturday</label>
								<label for="rbDays_6"><input type="checkbox" value="SUN" title="SUNDAY" name="rbDays" id="rbDays_6">Sunday</label>
							</div>
						</fieldset>
						<!-- <ul><li class="itemFilter"><a id="clearFilter">CLEAR ALL</a></li><li><a href="#"></a></li><li class="itemFilter"><a id="itemId_0">IN-CLASS</a></li></ul> -->
						<fieldset id="reset">
							<input type="reset" value="Clear All">
						</fieldset><!-- reset -->
						</section><!-- form wrapper -->

					</form>
				</section><!-- coned-faceted-nav -->

			<ul class="list">
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=77307">
					Age Wave, Demographics and Business Impact<span class="online">AVAILABLE ONLINE</span><br /><span class="code">BUSM70014</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=77334">
					Business Analysis Introduction<br /><span class="code">MGMT70012</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=80167">
					Business Case Development, Acceptance Testing and Quality Assurance<br /><span class="code">MGMT70013</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=47306">
					Business Communication<br /><span class="code">COMM12423</span></a>
					<!-- <div class="expanded-li">hello world</div> -->
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=79312">
					Business Facilitation and Communication<br /><span class="code">MGMT70014</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=10834">
					Business Law - Distance Learning<span class="online">AVAILABLE ONLINE</span><br /><span class="code">BUSM70002</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=43804">
					Business Mathematics 1<span class="online">AVAILABLE ONLINE</span><br /><span class="code">MATH16269</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=43804">
					Business Mathematics 1<br /><span class="code">MATH16269</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=80168">
					Business Process Modeling and Improvement<br /><span class="code">MGMT70015</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=79313">
					Business Requirement Management<br /><span class="code">MGMT70016</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=11610">
					Business Statistics, Advanced<br /><span class="code">MATH36901</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=48551">
					Business Writing Strategies-Distance Learning<span class="online">AVAILABLE ONLINE</span><br /><span class="code">COMM70003</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=10862">
					Business of Insurance<br /><span class="code">BUSM79806</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=71051">
					Computer Applications for Business<br /><span class="code">APPL19402</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=11517">
					Corporate and Business Law<br /><span class="code">LAWS26947</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=88751">
					Desktop Publishing for Business<span class="online">AVAILABLE ONLINE</span><br /><span class="code">BUSM70022</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=53212">
					Ethical Issues in Business - Distance Learning<span class="online">AVAILABLE ONLINE</span><br /><span class="code">BUSM70012</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=43017">
					Law for Business Managers<br /><span class="code">LAWS70001</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=89118">
					Small Business Management<span class="online">AVAILABLE ONLINE</span><br /><span class="code">MGMT70034</span></a>
				</li>
				<li>
					<a target="_blank" href="http://sculptor.sheridanc.on.ca/webapp/wcs/stores/servlet/ProductDisplay?catalogId=10051&amp;storeId=10051&amp;productId=54304">
					Supervisory Skills for Business and Industry - Distance Learning<span class="online">AVAILABLE ONLINE</span><br /><span class="code">BUSM79004</span></a>
				</li>
			</ul>
			
		</section>
		
	</section>
	

</div>                        

<div id="coned-landing-content">
	<section id="coned-clusters">
		<h2>Browse by Area of Interest</h2>
		<div class="wrapper">

			<ul>
				<li>
					<a href="#" id="arts-and-design">
						<img src="common/coned_images/clusters/arts_design.png" alt="Arts and Design">
						<h3>Arts &amp; Design</h3>
						<p class="cluster-description">
							Explore your creative talents and sharpen your design skills.
						</p>
					</a>
				</li>
				<li>
					<a href="coned-cluster-page.php" id="business">
						<img src="common/coned_images/clusters/business.png" alt="Business">
						<h3>Business</h3>
						<p class="cluster-description">
							Home your knowledge in all areas of business with top-notch instructors and options for accreditation in many disciplines.
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="communication-language">
						<img src="common/coned_images/clusters/communication_language.png" alt="Communications and Language">
						<h3>Communications &amp; Language</h3>
						<p class="cluster-description">
							Boost your writing skills, learn a new language, explore your love of literature or get inspired with our popular creative writing series. 
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="computer-studies">
						<img src="common/coned_images/clusters/computer_studies.png" alt="Computer Studies">
						<h3>Computer Studies</h3>
						<p class="cluster-description">Build your skills and your career options with state-of-the-art courses all aspects of computer studies.</p>
					</a>
				</li>
				<li>
					<a href="#" id="education-liberal-studies">
						<img src="common/coned_images/clusters/education_liberal_studies.png" alt="Education and Liberal Studies">
						<h3>Education &amp; Liberal Studies</h3>
						<p class="cluster-description">
							Turn your passion for teaching into a satisfying career in many areas of both child and adult education.
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="environmental-studies">
						<img src="common/coned_images/clusters/environmental_studies.png" alt="Environmental Studies">
						<h3>Environmental Studies</h3>
						<p class="cluster-description">
							Learn to make the environment healthier and more beautiful with courses that address environmental issues and solutions.
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="health-wellness">
						<img src="common/coned_images/clusters/health_wellness.png" alt="Health and Wellness">
						<h3>Health &amp; Wellness</h3>
						<p class="cluster-description">
							Want to help others stay healthy? Progams in different aspecsts of health and wellness are available.
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="justice-studies">
						<img src="common/coned_images/clusters/justice_studies.png" alt="Justice Studies">
						<h3>Justice Studies</h3>
						<p class="cluster-description">
							Start an exciting career in justice with courses in community safety, law clerk certification, policing and criminal psychology.
						</p>
					</a>
				</li>
				<li>
					<a href="#" id="manufacturing-tech-trades">
						<img src="common/coned_images/clusters/manufacturing_tech_trades.png" alt="Manufacturing and Technical Trades">
						<h3>Manufacturing &amp; Technical Trades</h3>
						<p class="cluster-description">
							Fast track your future with cutting-edge training for in-demand jobs.

						</p>
					</a>
				</li>
				<li>
					<a href="#" id="online-learning">
						<img src="common/coned_images/clusters/online_programs.png" alt="Online Learning">
						<h3>Online Learning</h3>
						<p class="cluster-description">
							Learn anytime, anywhere. Sheridan offers over 200 courses online that are flexible and allow you to learn on your time, whenever you want. 

						</p>
					</a>
				</li>
				<li>
					<a href="#" id="leisure">
						<img src="common/coned_images/clusters/motorcycle.png" alt="Motorcycle Training">
						<h3>Motorcycle Training</h3>
						<p class="cluster-description">
							Get ready to ride with both M1 and M2 classes.
						</p>
					</a>
				</li>
			</ul>

		</div>
	</section>




	<aside id="coned-aside">

		<ul id="coned-sidebar-see-also">
		
			<li><a href="#">General Info</a></li>
			<li><a href="#">Fees</a></li>
			<li><a href="#">Important Dates</a></li>
			<li><a href="#">Information Sessions</a></li>
			<li><a href="#">Policies</a></li>
			<li><a href="#">How to Register</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">A-Z Course Listing</a></li>
		</ul>

		 <?php include('news.php'); ?>
			
		  <script>
			$(document).ready(function() {
				$('#news_slider').bjqs({
				  'animation' : 'slide',
				  'width' : 200,
				  'height' : 180
				});
			  });
		</script>

		<?php include('twitter.php'); ?>
  
	</aside>

<div class="clearfix"></div>
</div>
