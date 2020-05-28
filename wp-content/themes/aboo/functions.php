<?php
require_once get_template_directory()."/core/bootstrap.php";
function main(){
    aboo_include("/includes/scripts.php");
    aboo_include("/includes/template-tags.php");
    aboo_include("/includes/template-functions.php");
    aboo_include("/includes/customizer.php");
    aboo_include("/includes/post-types.php");
}
main();