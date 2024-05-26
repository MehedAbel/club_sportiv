<?php 
    include "../../../scripts/get_admin_member_data.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="./edit_member.css">
    <script src="edit_member.js" defer></script>
    <title>Editeaza Membru</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php'; ?>
        <div class="container__content">
            <h1>Editeaza Membru</h1>
            <div class="container__content__admin_edit_member">
                <form action="" method="POST" class="container__content__admin_edit_member__form">
                    <div class="container__content__admin_edit_member__form__field">
                        <label for="name">Nume</label>
                        <input type="text" name="name" id="name" class="container__content__admin_edit_member__form__field__input_name" value="<?php echo htmlspecialchars($name); ?>">
                    </div>
                    <div class="container__content__admin_edit_member__form__field">
                        <label for="team">Echipa</label>
                        <select name="team" id="team" class="container__content__admin_edit_member__form__field__input_team">
                            <?php include '../../../scripts/get_admin_teams_options.php';?>
                        </select>
                    </div>
                    <button class="container__content__admin_edit_member__form__btn" type="submit">Editeaza</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>