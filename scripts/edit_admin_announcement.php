<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData, true);

    $id = isset($data["id"]) ? $data["id"] : '';
    $title = isset($data["title"]) ? $data["title"] : '';
    $description = isset($data["description"]) ? $data["description"] : '';
    $response = array();

    if(empty($id) || empty($title) || empty($description)) {
        $response['status'] = 'error';
        $response['message'] = 'ID, title, or description cannot be empty';
    } else {
        $stmt = $conn->prepare("UPDATE announcements SET title = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $description, $id);

        try {
            $stmt->execute();
            $response['status'] = 'success';
            $response['message'] = 'Announcement updated successfully!';
        } catch (mysqli_sql_exception $e) {
            $response['status'] = 'error';
            $response['message'] = 'Query failed: ' . $e->getMessage();
        }
    }

    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($response);
?>