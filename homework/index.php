<?php
echo renderTemplate("layout"), renderTemplate("menu"), renderTemplate("about");

function renderTemplate($page, $content="", $menu="") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}