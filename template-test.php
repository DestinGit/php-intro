<?php
ob_start();

$pageTitle = "Mon site";

require "template/home.php";

$content = ob_get_clean();

require "template/layout.php";