<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Add Student</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Add Student</h1>

    <?php
    if (array_key_exists('insert', $_POST)) {
        $sName = $_POST['name'];
        $dBirthday = $_POST['birthday'];
        $iCityId = intval($_POST['city']);

        require 'func.inc.php';

        if (addStudent($sName, $dBirthday, $iCityId)) {
            displayMessage('Student added !', true);
        } else {
            displayMessage('Error adding student...', false);
        }
    }
    ?>

    <form class="form-horizontal" method="post" action="">
        <div class="form-group"><label for="name" class="col-sm-4 control-label">Name :</label>

            <div class="col-sm-8"><input type="text" id="name" name="name"
                                         class="form-control"/></div>
        </div>
        <div class="form-group"><label for="birthday" class="col-sm-4 control-label">Birthday :</label>

            <div class="col-sm-8"><input type="date" id="birthday"
                                         name="birthday"
                                         class="form-control"/></div>
        </div>
        <div class="form-group"><label for="city" class="col-sm-4 control-label">City :</label>

            <div class="col-sm-8"><input type="number" id="city" name="city" min="0"
                                         class="form-control"/></div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8"><input type="submit" name="insert" value="Insert"
                                                         class="btn btn-primary"/></div>
        </div>
    </form>
</div>
</body>
</html>