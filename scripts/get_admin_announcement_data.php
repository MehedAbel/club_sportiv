<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    // Get the announcement ID from the URL parameters
    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    $title = '';
    $description = '';

    if(!empty($id)) {
        // Prepare a SQL statement to fetch the announcement data
        $stmt = $conn->prepare("SELECT * FROM announcements WHERE id = ?");
        $stmt->bind_param("i", $id);

        try {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Store the announcement data in variables
                $title = $row["title"];
                $description = $row["description"];
            }
        } catch (mysqli_sql_exception $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }

    mysqli_close($conn);
?>