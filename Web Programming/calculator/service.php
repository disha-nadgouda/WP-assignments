<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Get parameters
if (!isset($_GET['op']) || !isset($_GET['x']) || !isset($_GET['y'])) {
    echo json_encode(["error" => "Please provide op, x, and y parameters"]);
    exit;
}

$op = $_GET['op'];
$x = floatval($_GET['x']);
$y = floatval($_GET['y']);
$result = null;

switch ($op) {
    case 'add':
        $result = $x + $y;
        break;
    case 'sub':
        $result = $x - $y;
        break;
    case 'mul':
        $result = $x * $y;
        break;
    case 'div':
        if ($y == 0) {
            echo json_encode(["error" => "Cannot divide by zero"]);
            exit;
        }
        $result = $x / $y;
        break;
    default:
        echo json_encode(["error" => "Invalid operation. Use add, sub, mul, div"]);
        exit;
}

echo json_encode(["result" => $result]);
?>
