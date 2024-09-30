<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
</head>
<body>
    <h1>Word Count in a String</h1>
    <form action="" method="post">
        <textarea name="text" rows="10" cols="50" placeholder="Enter your text here..."></textarea><br>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $text = trim($_POST['text']);
        
        $wordCount = str_word_count($text);
        
        echo "<h1>Word Count Result</h1>";
        echo "<p><strong>Word Count: $wordCount</strong></p>";
    }
    ?>
</body>
</html>
