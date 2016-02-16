<?php include_once('header.html'); ?>
  
  <!-- SUB BANNER -->
  <section class="sub-bnr bnr-2" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h4>team (3 columns)</h4>
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">team</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- WHO WE ARE -->
    <section class="team team-list team-wrap padding-top-70 padding-bottom-70">
      <div class="container"> 
        
        <!-- Work Filter -->
        <!--
        <ul class="filter team-filter">
          <li class="tab-title filter-item"><a class="active" href="#." data-filter="*">All</a></li>
          <li class="filter-item"><a href="#." data-filter=".gd">graphic designers</a></li>
          <li class="filter-item"><a href="#." data-filter=".html">html coders</a></li>
          <li class="filter-item"><a href="#." data-filter=".market">marketing</a></li>
        </ul>
        -->
        <div class="">
          <ul class="row items">
            
            <!-- Member -->
            <li class="col-md-6 item market">
              <article class="text-left">
                <div class="row">
                  <div class="col-md-6"> <img class="img-responsive" src="images/team-img-2-1.jpg" alt=""> </div>
                  <div class="col-md-6">
                    <h5>Adam Zuckerman</h5>
                    <span>Director/Project Developer</span>
                    <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. turpis vel hendrerit interdum, dui ligula ultricies puru</p>
                    <ul class="social">
                      <!--<li><a href="#."><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#."><i class="fa fa-google"></i></a></li>-->
                      <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </li>
            
            <!-- Member -->
            <li class="col-md-6 item gd market">
              <article class="text-left">
                <div class="row">
                  <div class="col-md-6"> <img class="img-responsive" src="images/team-img-2-2.jpg" alt=""> </div>
                  <div class="col-md-6">
                    <h5>Jason Sun</h5>
                    <span>Director/CRM Architect</span>
                    <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. turpis vel hendrerit interdum, dui ligula ultricies puru</p>
                    <ul class="social">
                      <!--<li><a href="#."><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#."><i class="fa fa-google"></i></a></li>-->
                      <li><a href="https://www.linkedin.com/in/jason-sun-1204122"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </li>
            
          </ul>
        </div>
      </div>
    </section>
  </div>
  
<?php include('footer.html') ?>
</body>

<script type="text/javascript">
 $( document ).ready(function() {
    $("li#nav_team").attr('class', 'active');
}); 
</script>

</html>