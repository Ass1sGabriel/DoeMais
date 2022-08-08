<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">
    <div class="row">
      <nav class="footer-nav">
        <ul>
          <!-- <li><a href="" target="_blank">Algo</a></li>
          <li><a href="" target="_blank">Algo</a></li>
          <li><a href="" target="_blank">Algo</a></li> -->
        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          © <script>
            document.write(new Date().getFullYear())
          </script>Desenvolvido por DoeMais Tecnologias.
        </span>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('public/assets/js/core/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/assets/js/core/popper.min.js'); ?>"></script>
<!-- <script src="public/assets/js/core/bootstrap.min.js"></script> -->
<script src="<?php echo base_url('public/assets/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('public/assets/js/plugins/chartjs.min.js'); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('public/assets/js/plugins/bootstrap-notify.js'); ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('public/assets/js/paper-dashboard.min.js?v=2.0.1'); ?>" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('public/assets/demo/demo.js'); ?>"></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initChartsPages();
  });
</script>
</body>

</html>