<?php
session_start();

// Dummy user data for demonstration purposes
$users = [
    ['username' => 'admin', 'password' => 'admin123']
];

header('Content-Type: application/json');

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$username = $data['username'];
$password = $data['password'];

$authenticated = false;

foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $authenticated = true;
        break;
    }
}

if ($authenticated) {
    $_SESSION['admin_logged_in'] = true;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid username or password.']);
}
?>
