<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT * FROM announcements";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"] . " - Title: " . $row["title"] . "<br>";
            }
        } else {
            echo "0 results";
        }    

        echo "Query executed successfully <br>";
    } catch (mysqli_sql_exception $e) {
        echo "Query failed: " . $e->getMessage();
    }

    mysqli_close($conn);
?>