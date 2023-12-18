<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by nrzngr 2023</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->



<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url() ?>assets/vendor/global/global.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url() ?>assets/vendor/apexchart/apexchart.js"></script>

<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="<?= base_url() ?>assets/vendor/peity/jquery.peity.min.js"></script>
<!-- Dashboard 1 -->
<script src="<?= base_url() ?>assets/js/dashboard/dashboard-1.js"></script>

<script src="<?= base_url() ?>assets/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url() ?>assets/js/custom.min.js"></script>
<script src="<?= base_url() ?>assets/js/dlabnav-init.js"></script>
<script src="<?= base_url() ?>assets/js/demo.js"></script>
<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/styleSwitcher.js"></script>
<script>
    function cardsCenter() {

        /*  testimonial one function by = owl.carousel.js */



        jQuery('.card-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                800: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        })
    }

    function profil() {
        $.get("pegawai/dashboard.php", function (data) {
            $("#content").html(data);

        });
    }

    function dataGaji() {
        $.get("pegawai/dataGaji.php", function (data) {
            $("#content").html(data);

        });
    }

    function gantiPassword() {
        $.get("pegawai/formGantiPassword.php", function (data) {
            $("#content").html(data);

        });
    }


</script>

</body>

</html>