<script>function changePath(o) {
        ~["en"].indexOf(path[1]) ? window.location.href = "/en" == o ? oldUrl : "/" : window.location.href = "/" == o ? oldUrl : o + oldUrl
    }

    var oldUrl = window.location.pathname, path = oldUrl.split("/")</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/owl.carousel.min.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/main.js"></script><!--<script src="js/bootstrap-formhelpers.min.js"></script>--></body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/owl.carousel.min.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/config.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/waypoints.min.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/animate-css.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/main.js"></script>
<? wp_footer(); ?>
</html>