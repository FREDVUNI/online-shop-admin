    <footer class="footer">
        <div class="container-fluid">
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, copyright &copy;
            <a href="https://www.FlylandGroup.com" target="_blank">FLYLAND GROUP</a>. 
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
  <script src="<?php echo base_url('assets/backend/');?>js/core/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/core/popper.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/bootstrap-notify.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/backend/');?>demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initDashboardPageCharts();

    });
  </script>
</html>