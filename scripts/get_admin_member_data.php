<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    $name = '';
    $team_id = '';

    if(!empty($id)) {
        $stmt = $conn->prepare("SELECT * FROM members WHERE id = ?");
        $stmt->bind_param("i", $id);

        try {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row["name"];
                $team_id = $row["team_id"];
            }
        } catch (mysqli_sql_exception $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }

    mysqli_close($conn);
?>