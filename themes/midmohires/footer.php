<!-- footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
          <!-- Footer Widget 1 -->
            <style>
              .centerItem{
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: auto;
                margin-bottom: auto;
              }
            </style>
            <?php dynamic_sidebar('Footer Widget 1'); ?>
            <!-- Footer Widget 2 -->
            <?php dynamic_sidebar('Footer Widget 2'); ?>
            <!-- Footer Widget 3 -->
            <?php dynamic_sidebar('Footer Widget 3'); ?>
            <!-- Footer Widget 4 -->
            <?php dynamic_sidebar('Footer Widget 4'); ?>
        </div>
    </div>
</footer>
<!-- footer end -->
<hr>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="">
                    <p class="mb-0">© 2020 Mid-Mo Hires. Design by Zimmer Communications.</p>
                </div>
            </div>
        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<?php wp_footer(); ?>

</body>
</html>
