<?php
include_once "Main.php";

fputs(STDOUT, (new Main())->getFactorial(5));
