<?php 
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT id, name FROM teams";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["id"] == $team_id) {
                echo "<option value='" . $row["id"] . "' selected>" . $row["name"] . "</option>";
            } else {
                echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
            }
        }
    }

    mysqli_close($conn);
?>