<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Your existing database connection and fetching code

require_once '../app/config/dbconfig.php';
require_once '../app/controllers/UserController.php';



try {
    // Prepare a query to fetch users
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if any users were returned
    if ($users) {
        echo json_encode(['status' => 'success', 'data' => $users]);
    } else {
        echo json_encode(['status' => 'success', 'data' => []]);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}

// // Basic routing example
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $controller = new UserController();

// if ($uri === '/api/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
//     header('Content-Type: application/json');
//     echo json_encode($controller->getUsers());
// } else {
//     http_response_code(404);
//     echo json_encode(['message' => 'Not Found']);
// }
