<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData, true);

    $title = isset($data["title"]) ? $data["title"] : '';
    $description = isset($data["description"]) ? $data["description"] : '';
    $response = array();

    if(empty($title) || empty($description)) {
        $response['status'] = 'error';
        $response['message'] = 'Title or description cannot be empty';
    } else {
        $stmt = $conn->prepare("INSERT INTO announcements (title, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $description);

        try {
            $stmt->execute();
            $response['status'] = 'success';
            $response['message'] = 'Anunt adaugat cu succes!';
        } catch (mysqli_sql_exception $e) {
            $response['status'] = 'error';
            $response['message'] = 'Query failed: ' . $e->getMessage();
        }
    }

    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($response);
?>