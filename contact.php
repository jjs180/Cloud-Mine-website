<?php include_once('header.html'); ?>
  

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
              <br/>
            </div>
          </div>
          
          <!-- MAP -->
          <div class="col-md-6">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.7855431852513!2d-118.39228704933309!3d33.92091868054689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b6b2fff52631%3A0x2b195afcbcf58000!2s400+Continental+Blvd+6th+Floor%2C+El+Segundo%2C+CA+90245!5e0!3m2!1sen!2sus!4v1456034623931" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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
/*
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
*/
</script>

<script type="text/javascript">
 $( document ).ready(function() {
    $("li#nav_contact").attr('class', 'active');
}); 
</script>

</body>
</html>