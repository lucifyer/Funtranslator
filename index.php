<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funny Translator</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
</head>
<body>

    <form action="curltranslator.php" method="GET">
        <label for="string">Enter your sentence in English<br></label>
        <input type="text" name="string" ><br>
        <label for="choice">Enter your choice</label>
        <select class="" name="choice">
            <option value="minion">Minion</option>
            <option value="shakespeare">Shakespeare</option>
        </select><br>
        <input type="submit" value="Translate">
    </form>

</body>
</html>
