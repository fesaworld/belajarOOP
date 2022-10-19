<?php

require_once('../class/Calculator.php');

$calculator = new Calculator($_POST['var1'], $_POST['var2'], $_POST['operator']);

$result = $calculator->calculate();

echo $result;