
 
 
<footer class="footer1">
<div class="container">

<div class="row"> 
            
                <div class="col-lg-3 col-md-3"> 
                <ul class="list-unstyled clear-margins"> 
                        
                        	<li class="widget-container widget_nav_menu"> 
                    
                                <h1 class="title-widget">VISUALIZATIONS</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> SUPERFLOORPLANS.COM (GBP) BLUE7.IT (GBP)</a></li> 
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div> 
                
                
                
                <div class="col-lg-3 col-md-3"> 
            
                <ul class="list-unstyled clear-margins"> 
                        
                        	<li class="widget-container widget_nav_menu"> 
                    
                                <h1 class="title-widget">PROPERTIES </h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  MOLDOVA - INDUSTRIAL PARK</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  GERMANY - APARTMENTHOUSE LEIPZIG</a></li> 
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div> 
                
                
                
                <div class="col-lg-3 col-md-3"> 
            
                <ul class="list-unstyled clear-margins"> 
                        
                        	<li class="widget-container widget_nav_menu"> 
                    
                                <h1 class="title-widget">FAQ</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> WE SEEK</a></li>
 				<li><a href="#"><i class="fa fa-angle-double-right"></i> SUPPORT</a></li> 

                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div> 
                
                
                <div class="col-lg-3 col-md-3"> 
                
                   
                    
                        <ul class="list-unstyled clear-margins"> 
                        
                        	<li class="widget-container widget_recent_news"> 
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">Blue7 it!</h2>
                                <p><b>Email id:</b> <a href=" ">info@blue7.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(9AM to 6PM):</b>  +00-11111111, +00-11111111  </p>
    
    <p><b>Corp Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>12345678, </p>
    <p> 000-11111111, 11111111</p>
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="nomargin">
                                    
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
	            <a href="https://twitter.com/"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
	            <a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
	            <a href=""><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                    		</li>
                          </ul>
                       </div>
                </div>
</div>
</footer>
 

<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

                    © 2018 BLUE7.IT, All rights reserved
                    

				</div>

            </div> 
         

	</div>

</div>
 

<!-- Include jquery.min.js plugin -->
<script src="assets/js/jquery-2.1.0.min.js">
</script>


<!-- Include JavaScript Plugins -->
<script src="assets/js/plugins.js">
</script>

<!-- Include JavaScript Functions -->
<script src="assets/js/functions.js">
</script>

<!-- Include jquery.parallax.js Plugins -->
<script src="assets/js/jquery.parallax.js">
</script>

<!-- Include wow.js Plugins -->
<script src="assets/js/wow.min.js">
</script>

<script src="assets/js/jquery.content_slider.min.js">
</script>
<script src="assets/js/jquery.mousewheel.js">
</script>

<!-- account login -->
<script>
    $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});

</script>

<!-- select elem of spec categ-->
<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/common_scripts.js"></script>
	<!-- <script src="js/menu.js"></script> -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/wizard_func_1.js"></script>

<script type="text/javascript">
    /*----------- wow animation with support of wow.js and animation.css ----------------*/
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false // trigger animations on mobile devices (true is default)
    });
    wow.init();
</script>

 <script>
    $(document).on('click', '#close-preview', function () {
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
                $('.image-preview').popover('show');
            },
            function () {
                $('.image-preview').popover('hide');
            }
        );
    });

    $(function () {
        // Create the close button
        var closebtn = $('<button/>', {
            type: "button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class", "close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger: 'manual',
            html: true,
            title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
            content: "There's no image",
            placement: 'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function () {
            $('.image-preview').attr("data-content", "").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function () {
            var img = $('<img/>', {
                id: 'dynamic',
                width: 250,
                height: 200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
                img.attr('src', e.target.result);
            //     $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
    });
</script>

</body>

</html>