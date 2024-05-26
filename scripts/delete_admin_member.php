<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    // Get the raw POST data
    $rawData = file_get_contents("php://input");

    // Decode the JSON data
    $data = json_decode($rawData, true);

    $id = isset($data["id"]) ? $data["id"] : '';
    $response = array();

    $stmt = $conn->prepare("DELETE FROM members WHERE id = ?");
    $stmt->bind_param("i", $id);

    try {
        $stmt->execute();
        $response['status'] = 'success';
        $response['message'] = 'Member deleted successfully!';
    } catch (mysqli_sql_exception $e) {
        $response['status'] = 'error';
        $response['message'] = 'Query failed: ' . $e->getMessage();
    }

    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($response);
?>