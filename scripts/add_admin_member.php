<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    // Get the raw POST data
    $rawData = file_get_contents("php://input");

    // Decode the JSON data
    $data = json_decode($rawData, true);

    $name = isset($data["name"]) ? $data["name"] : '';
    $teamId = isset($data["team_id"]) ? $data["team_id"] : '';

    $response = array();

    // Validate data
    if(empty($name) || empty($teamId)) {
        $response['status'] = 'error';
        $response['message'] = 'Name and team cannot be empty';
    } else {
        $stmt = $conn->prepare("INSERT INTO members (name, team_id) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $teamId);
        
        try {
            $stmt->execute();
            $response['status'] = 'success';
            $response['message'] = 'Member added successfully!';
        } catch (mysqli_sql_exception $e) {
            $response['status'] = 'error';
            $response['message'] = 'Query failed: ' . $e->getMessage();
        }
    }

    // Send the response
    header('Content-Type: application/json');
    echo json_encode($response);

    mysqli_close($conn);
?>