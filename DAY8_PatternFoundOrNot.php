<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Matching</title>
</head>
<body>
    <form method="POST" action="">
        <p><label for="">Enter String</label>
        <input type="text" name="string" required></p>
        <p><label for="">Enter Pattern</label>
        <input type="text" name="pattern" required></p>
        <button type="submit" name="submit">Search my Pattern in String</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $string = $_POST['string'];
        $pattern = $_POST['pattern'];
        $patternToCheck = '/' . $pattern . '/';
        if(preg_match($patternToCheck, $string)) {
            echo "<h3>Pattern '$pattern' found in '$string'\n</h3>";
        } else {
            echo "<h3>Pattern '$pattern' not found in '$string'\n</h3>";
}
    }
    ?>
</body>
</html>
