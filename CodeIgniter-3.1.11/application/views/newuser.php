<!DOCTYPE html>
<html>
<head>
<title>welcome</title>
</head>
<body>

    <?php echo form_open('Retrievedata/insertrow'); ?>
        <label for="forename">Name:</label>
        <input type="text" size="20" id="name" name="name" />
        </br>
        <label for="age">Age:</label>
        <input type="text" size="3" id="age" name="age"/>
        </br>
        <input type="submit" value="CreateRecord"/>
    <?php echo form_close(); ?>
</body>
</html>
