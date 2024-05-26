<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData, true);

    $id = isset($data["id"]) ? $data["id"] : '';
    $name = isset($data["name"]) ? $data["name"] : '';
    $team_id = isset($data["team_id"]) ? $data["team_id"] : '';
    $response = array();

    if(empty($id) || empty($name) || empty($team_id)) {
        $response['status'] = 'error';
        $response['message'] = 'ID, name, or team_id cannot be empty';
    } else {
        $stmt = $conn->prepare("UPDATE members SET name = ?, team_id = ? WHERE id = ?");
        $stmt->bind_param("sii", $name, $team_id, $id);

        try {
            $stmt->execute();
            $response['status'] = 'success';
            $response['message'] = 'Member updated successfully!';
        } catch (mysqli_sql_exception $e) {
            $response['status'] = 'error';
            $response['message'] = 'Query failed: ' . $e->getMessage();
        }
    }

    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($response);
?>