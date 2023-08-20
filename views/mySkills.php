<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySkills</title>
</head>
<body>
<p>
    <h1>My Skills</h1>
    <ul>
        <?php foreach ($archive as $key => $value): ?>
            <li><?php echo "$key: $value"; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>