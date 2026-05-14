<?php
header('Content-Type: application/json');
require_once '../includes/auth.php';
require_login();
require_once '../db.php';

// Accept JSON payload
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['module_name']) || !isset($data['duration_minutes'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

$user_id = $_SESSION['user_id'];
$module_name = $data['module_name'];
$duration_minutes = $data['duration_minutes'];
$date_practiced = date('Y-m-d');

try {
    // Check if there is already an entry for today for this module
    $stmt = $pdo->prepare("SELECT id, duration_minutes FROM progress WHERE user_id = ? AND module_name = ? AND date_practiced = ?");
    $stmt->execute([$user_id, $module_name, $date_practiced]);
    $row = $stmt->fetch();

    if ($row) {
        // Update existing entry
        $new_duration = $row['duration_minutes'] + $duration_minutes;
        $update = $pdo->prepare("UPDATE progress SET duration_minutes = ? WHERE id = ?");
        $update->execute([$new_duration, $row['id']]);
    } else {
        // Insert new entry
        $insert = $pdo->prepare("INSERT INTO progress (user_id, module_name, duration_minutes, date_practiced) VALUES (?, ?, ?, ?)");
        $insert->execute([$user_id, $module_name, $duration_minutes, $date_practiced]);
    }

    echo json_encode(['success' => true]);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?>
