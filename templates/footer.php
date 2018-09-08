<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">



                <div class="col-md-4 triggerAnimation animated fadeInUp" data-animate="fadeInUp">
                    <div class="  footer-widgets text-center ">
                        <h4>VISUALIZATIONS</h4>
                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <a href="#">SUPERFLOORPLANS.COM (GBP) BLUE7.IT (GBP)</a>
                                </p>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 triggerAnimation animated fadeInDown" data-animate="fadeInDown">
                    <div class=" footer-widgets text-center">
                        <h4>PROPERTIES (EXAMPLES)</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">MOLDOVA - INDUSTRIAL PARK</a>
                            </li>
                            <li>
                                <a href="#">GERMANY - APARTMENTHOUSE LEIPZIG</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 triggerAnimation animated fadeInRight" data-animate="fadeInRight">
                    <div class=" footer-widgets text-center">
                        <h4>FAQ</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    WE SEEK
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SUPPORT
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p class="text-center">© 2018, All Rights Reserved</p>

        </div>
    </div>

</footer>
 




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