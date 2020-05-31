</div>
<footer class="footer footer-black  footer-white ">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="#" target="_blank">Aboo</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">About Us</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made by <i class="fa fa-heart heart"></i> Aboo
                </span>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
            $('#datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        }
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
</body>

</html>