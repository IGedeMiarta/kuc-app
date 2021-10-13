<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="/plugins/simplebar/js/simplebar.min.js"></script>
<script src="/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Vector map JavaScript -->
<script src="/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
<script src="/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
<script src="/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="/js/index2.js"></script>
<!-- App JS -->
<script src="/js/app.js"></script>
<script src="/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
