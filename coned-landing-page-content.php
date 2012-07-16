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
    <div id="coned-layerslider">
        <div id="dim">

                    <div id="layerslider">
                        
                        <div class="ls-layer" rel="slidedelay: 3000; slidedirection: top;" style="background: url('/common/coned_images/paper-texture-light.jpg') #F7F7F7;">
                            <img class="ls-s3" src="common/coned_images/slider/test-banner.png" alt="sublayer" style="left: 30px; top: 0px">
                            <img class="ls-s7" src="common/coned_images/slider/people.png" alt="sublayer" style="left: 250px; top: 90px">
                            <p class="ls-s0" alt="sublayer" style="left: 400px, top: 0px;color:red;font-weight:bold;">test</p>
                        </div>
                        <div class="ls-layer" rel="slidedelay: 3000; slidedirection: top;" style="background: url('/common/coned_images/paper-texture-light.jpg') #F7F7F7;">
                            <img class="ls-s3" src="common/coned_images/slider/laptop-guy.png" alt="sublayer" style="left: 0px; top: 0px">
                            <img class="ls-s7" src="common/coned_images/slider/extended-banner-transp.png" alt="sublayer" style="left: 330px; top: -500px">
                            <img class="ls-s0" src="common/coned_images/slider/banner-explore-now.png" alt="sublayer" style="left: 70%; top:330px;">
                            <p class="ls-s0" alt="sublayer" style="left: 400px, top: 0px;color:red;font-weight:bold;">test</p>
                        </div>
                
                    </div>
                    
                </div>
        </div>
        <!-- <script src="../layerslider/jQuery/jquery-1.6.2.min.js" type="text/javascript"></script> -->
        <script src="common/layerslider/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
        <script src="common/layerslider/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#layerslider').layerSlider({
                    //skinsPath : '../layerslider/skins/',
                    globalBGColor : '#F7F7F7'
                });
            });
        </script>
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

<div id="coned-search-results">
    
    <section id="coned-search-results-display">
        <h2>Search Results for: &ldquo;<span>query</span>&rdquo;</h2>
        <img src="http://placehold.it/40x20" class="arrow">
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
            <?php /* hiding this part
            
            <section id="coned-faceted-nav">
                <h4>Refine Results: </h4>
                <div class="form-wrapper">
                    <form>
                 
                        <fieldset id="delMode">
                            <!-- <legend>Method</legend> -->
                            <label for="cblDelMode_0"><input type="checkbox" name="cblDelMode$0" id="cblDelMode_0">Online</label>
                            <!-- <label for="cblDelMode_1"><input type="checkbox" name="cblDelMode$1" id="cblDelMode_1">Online (SHERIDAN)</label> -->
                            <label for="cblDelMode_2"><input type="checkbox" name="cblDelMode$2" id="cblDelMode_2">In Class</label>
                        </fieldset>
                        
                        <fieldset id="campus">
                            <legend>Campus</legend>
                            <label for=""><input type="checkbox" id="DAVIS (BRAM)"      class="clsLoc">Davis (BRAM)</label>
                            <label for=""><input type="checkbox" id="STC (OAK)"         class="clsLoc">STC (OAK)</label>
                            <label for=""><input type="checkbox" id="TRAFALGAR (OAK)"   class="clsLoc">Trafalgar Road (OAK)</label>
                            <label for=""><input type="checkbox" id="ST. JOSEPH (MISS)" class="clsLoc">St. Joseph (MISS)</label>
                        </fieldset>
                        
                        <fieldset id="days">
                            <legend>Days</legend>
                            <label for="rbDays_0"><input type="radio" value="MON" name="rbDays" id="rbDays_0">Monday</label>
                            <label for="rbDays_1"><input type="radio" value="TUE" name="rbDays" id="rbDays_1">Tuesday</label>
                            <label for="rbDays_2"><input type="radio" value="WED" name="rbDays" id="rbDays_2">Wednesday</label>
                            <label for="rbDays_3"><input type="radio" value="THU" name="rbDays" id="rbDays_3">Thursday</label>
                            <label for="rbDays_4"><input type="radio" value="FRI" name="rbDays" id="rbDays_4">Friday</label>
                            <label for="rbDays_5"><input type="radio" value="SAT" name="rbDays" id="rbDays_5">Saturday</label>
                            <label for="rbDays_6"><input type="radio" value="SUN" name="rbDays" id="rbDays_6">Sunday</label>
                        </fieldset>
                        
                    </form>
                </div>
            </section>
            */ ?>
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
                        <img src="/common/coned_images/clusters/arts_design.png" alt="Arts and Design">
                        <h3>Arts &amp; Design</h3>
                        <p class="cluster-description">
                            One of North America's leading institutes of design and technology. Sheridan offers a wide variety of 
                            creative classes including photography, painting, drawing, artisan media, digital media or interior decorating.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="coned-cluster-page.php" id="business">
                        <img src="/common/coned_images/clusters/business.png" alt="Business">
                        <h3>Business</h3>
                        <p class="cluster-description">
                            Sheridan offers wide arrange of business courses ranging in accounting, financial services, management, marketing and admintration.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="communication-language">
                        <img src="/common/coned_images/clusters/communication_language.png" alt="Communications and Language">
                        <h3>Communications &amp Language</h3>
                        <p class="cluster-description">
                            Enhance existing language skills or learn a new one! We offer numerous courses at a variety of levels in English as well as languages such as French, Italian, or Spanish.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="computer-studies">
                        <img src="/common/coned_images/clusters/computer_studies.png" alt="Computer Studies">
                        <h3>Computer Studies</h3>
                        <p class="cluster-description">Explore the rapidly changing world of technologies in our Computer Studies programs. Acquire new marketable skills in information systems and technology.</p>
                    </a>
                </li>
                <li>
                    <a href="#" id="education-liberal-studies">
                        <img src="/common/coned_images/clusters/education_liberal_studies.png" alt="Education and Liberal Studies">
                        <h3>Education &amp Liberal Studies</h3>
                        <p class="cluster-description">
                            Explore the field of early childhood education and working with the emotional and educational development of children through to the field of adult education. Turn your passion for education into a career.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="environmental-studies">
                        <img src="/common/coned_images/clusters/environmental_studies.png" alt="Environmental Studies">
                        <h3>Environmental Studies</h3>
                        <p class="cluster-description">
                            Increase your awareness of environmental issues and become part of the solution. Enhance the landscape through our Horticulture studies 
                            program or learn more about water distribution and wastewater collection through our Water Supply, Distribution and Wastewater Collection programs.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="health-wellness">
                        <img src="/common/coned_images/clusters/health_wellness.png" alt="Health and Wellness">
                        <h3>Health &amp Wellness</h3>
                        <p class="cluster-description">
                            Choose from a variety of exciting health care professions and services such as Personal Support Worker, Fitness Trainer, 
                            Human Performance Training, Esthetics and Teaching Yoga.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="justice-studies">
                        <img src="/common/coned_images/clusters/justice_studies.png" alt="Justice Studies">
                        <h3>Justice Studies</h3>
                        <p class="cluster-description">
                            Explore a career servicing the public and act as an essential part of your local community with a position in justice, 
                            safety, and law enforcement.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="manufacturing-tech-trades">
                        <img src="/common/coned_images/clusters/manufacturing_tech_trades.png" alt="Manufacturing and Technical Trades">
                        <h3>Manufacturing &amp Technical Trades</h3>
                        <p class="cluster-description">
                            Sheridan's Manufacturing Technology and Trades offerings can assist those currently employed or seeking careers in the manufacturing, quality assurance, home 
                            inspection, building systems and engineering sectors to gain essential, in-demand skills.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="online-learning">
                        <img src="/common/coned_images/clusters/online_programs.png" alt="Online Learning">
                        <h3>Online Learning</h3>
                        <p class="cluster-description">
                            Learn Anytime.. Anywhere. Sheridan offers over 200 courses online that are completely flexible and allow you to learn on your time, whenever you want. 
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" id="leisure">
                        <img src="/common/coned_images/clusters/motorcycle.png" alt="Motorcycle Training">
                        <h3>Motorcycle Training</h3>
                        <p class="cluster-description">
                            Sheridan's certified, professional instructors are dedicated to teaching new and experienced riders.
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
