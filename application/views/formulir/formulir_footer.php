</div>
<a class="btn btn-md btn-danger btn-block text-white" href="<?= base_url() ?>home"> <i class="fa fa-globe" aria-hidden="true"></i> Kembali ke Website Kelurahan Kota</a>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"> &copy; Copyright <strong><span>Sipedesv1.1</span></strong>. All Rights Reserved</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Tentang</a></li>
        <li class="list-inline-item"><a href="#">Ketentuan Layanan</a></li>
        <li class="list-inline-item"><a href="#">Kontak</a></li>
    </ul>
</footer>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="<?= base_url() ?>assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url() ?>assets/css/boostrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/holder.min.js"></script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>