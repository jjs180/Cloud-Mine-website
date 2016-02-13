<?php include_once('header.html'); ?>
  
  <!-- SUB BANNER -->
  <section class="sub-bnr bnr-2" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h4>contact</h4>
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li><a href="">Home</a></li>
          <li class="active">contact</li>
        </ol>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content">
    <section class="padding-bottom-70">
      <div class="contact-info padding-top-100 padding-bottom-100" data-stellar-background-ratio="0.5">
        <div class="container"> 
          
          <!-- Heading -->
          <div class="heading white text-center">
            <h4>our headquarters</h4>
            <span>We trust in longlasting partnerships with the most important brands on the market</span> </div>
          <ul class="row">
            
            <!-- australia -->
            <li class="col-sm-4">
              <article>
                <h5>australia</h5>
                <p>121 King Street, Melbourne
                <p>
                <p>Victoria 3000 Australia </p>
                <span class="margin-top-30"><i class="fa fa-phone-square"></i> 01234-345-67-67</span> <span class="primary-color"><i class="fa fa-envelope"></i> hello@uouapps.com</span> </article>
            </li>
            
            <!-- australia -->
            <li class="col-sm-4">
              <article>
                <h5>switzerland</h5>
                <p>121 King Street, Melbourne
                <p>
                <p>Victoria 3000 Australia </p>
                <span class="margin-top-30"><i class="fa fa-phone-square"></i> 01234-345-67-67</span> <span class="primary-color"><i class="fa fa-envelope"></i> hello@uouapps.com</span> </article>
            </li>
            <!-- australia -->
            <li class="col-sm-4">
              <article>
                <h5>new york</h5>
                <p>121 King Street, Melbourne
                <p>
                <p>Victoria 3000 Australia </p>
                <span class="margin-top-30"><i class="fa fa-phone-square"></i> 01234-345-67-67</span> <span class="primary-color"><i class="fa fa-envelope"></i> hello@uouapps.com</span> </article>
            </li>
          </ul>
        </div>
      </div>
      <div class="container"> 
        
        <!-- Heading -->
        <div class="heading text-left margin-top-70 margin-bottom-30">
          <h4>drop us a line</h4>
        </div>
        <div class="row">
          <div class="col-md-6"> 
            <!-- CONTACT FORM -->
            <div class="contact-form"> 
              <!-- Success Msg -->
              <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
              
              <!-- FORM -->
              <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                <ul class="row">
                  <li class="col-sm-12">
                    <label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" value="submit" class="btn btn-1" id="btn_submit" onClick="proceed();">Send Message <i class="fa fa-caret-right"></i></button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
          
          <!-- MAP -->
          <div class="col-md-6">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
<?php include('footer.html') ?>

<!-- Begin Map Script--> 
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script type="text/javascript">
/*==========  Map  ==========*/
var map;
function initialize_map() {
if ($('#map').length) {
	var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
	var mapOptions = {
		zoom: 17,
		center: myLatLng,
		scrollwheel: false,
		panControl: false,
		zoomControl: true,
		scaleControl: false,
		mapTypeControl: false,
		streetViewControl: false
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		tittle: 'Envato',
		icon: './images/map-locator.png'
	});
} else {
	return false;
}
}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>

<script type="text/javascript">
 $( document ).ready(function() {
    $("li#nav_contact").attr('class', 'active');
}); 
</script>

</body>
</html>