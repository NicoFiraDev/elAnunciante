<footer class="bg-dark text-white text-center py-2">
  <p class="m-0">Copyright &copy; <?php echo date("Y"); ?> - <span>
    <a class="text-decoration-none text-white" href="https://www.digimarketingsolutions.co" target="_blank">Digi Marketing Solutions</a>
  </span></p>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="./vendors/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./vendors/js/popper.min.js"></script>
<script type="text/javascript" src="./vendors/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./vendors/js/jquery.waypoints.min.js" ></script>
<script type="text/javascript">
  $('.js--sticky-nav').waypoint(function(direction){
    if (direction == 'down'){
      $('.js--nav').addClass('fixed-top');
      $('.js--nav').addClass('shadow-lg');
    } else {
      $('.js--nav').removeClass('fixed-top');
      $('.js--nav').removeClass('shadow-lg');
    }
  });
</script>
</body>
</html>
