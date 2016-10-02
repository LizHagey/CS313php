<!DOCTYPE html>
<html>
<head>
    <title>Survey</title>
    <link rel="stylesheet" type="text/css" href="weekThree/main.css"/>
</head>

<body>
    <main>
    <h1>Survey</h1>
   
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="survey">

        <div id="data">
            <label>What is your favorite food:</label>
            <input type="text" name="food" value="<?php echo htmlspecialchars($food);?>"/>

            <label>Where were you born:</label>
            <input type="text" name="born" value="<?php echo htmlspecialchars($born)?>"/>
            
            <label>What's your favorite movie:</label>
            <input type="text" name="movie" value="<?php echo htmlspecialchars($movie)?>"/>

            <label>What is your favorite color:</label>
            <input type="text" name="color" value="<?php echo htmlspecialchars($color)?>"/>
                       
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="hidden" name="action"
                           value="survey">
            <input type="submit" value="View Results"/><br>
        </div>

    </form>
    </main>
</body>
</html>

