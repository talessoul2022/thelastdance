 </div>
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/chart/chart.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/easing/easing.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= ASSETS_URL?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= ASSETS_URL?>/js/main.js"></script>
    <?php
    foreach ($this->arrJS as $key => $value) {
        echo"<script type='text/javascript' src='".ASSETS_URL."/assets/javascript/view/{$value}'></script>";
    }
    ?>
</body>
</body>

</html>