<footer class="footer">
  <div class="container-fluid">
    <ul class="nav">
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          Creative Tim
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          About Us
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link">
          Blog
        </a>
      </li>
    </ul>
    <div class="copyright">
      ©
      <script>
        document.write(new Date().getFullYear())
      </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
      <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
    </div>
  </div>
</footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary active" data-color="primary"></span>
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line text-center color-change">
                <span class="color-label">LIGHT MODE</span>
                <span class="badge light-badge mr-2"></span>
                <span class="badge dark-badge ml-2"></span>
                <span class="color-label">DARK MODE</span>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    Documentation
                </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>
<!--   Core JS Files   -->
<script src="<?= URL_PATH ?>/Assets/js/core/jquery.min.js"></script>
<script src="<?= URL_PATH ?>/Assets/js/core/popper.min.js"></script>
<script src="<?= URL_PATH ?>/Assets/js/core/bootstrap.min.js"></script>
<script src="<?= URL_PATH ?>/Assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Chart JS -->
<script src="<?= URL_PATH ?>/Assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= URL_PATH ?>/Assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= URL_PATH ?>/Assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= URL_PATH ?>/Assets/demo/demo.js"></script>
<script src="<?= URL_PATH ?>/Assets/js/script.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "black-dashboard-free"
        });
</script>
</body>

</html>