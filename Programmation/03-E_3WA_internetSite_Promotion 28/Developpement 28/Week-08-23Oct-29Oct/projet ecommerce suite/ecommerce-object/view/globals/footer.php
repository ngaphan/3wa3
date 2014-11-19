<!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?= DIR_JS ?>jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= DIR_JS ?>bootstrap.min.js"></script>

    <?php if ($page == "shopitem") : ?>
        <script src="<?= DIR_JS ?>product.js"></script>
    <?php endif; ?>

</body>

</html>
