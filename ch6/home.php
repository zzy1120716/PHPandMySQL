<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/30
 * Time: 0:40
 */
require("page.inc");

$homepage = new Page();

$homepage -> content = "<p>Welcome to the home of TLA Consulting. Please take some time to get to know us.</p>
												<p>We specialize in serving your business needs and hope to hear form you soon.</p>";

$homepage -> Display();