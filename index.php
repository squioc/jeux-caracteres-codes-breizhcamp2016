<?php
ob_start();
header("Content-type: text/plain");

echo "Hello World";
ob_end_flush();
