<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web App</title>
</head>
<body>
    <h1>Hello, welcome to the Simple PHP Web App!</h1>
    <p>Enter your name below:</p>

    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>