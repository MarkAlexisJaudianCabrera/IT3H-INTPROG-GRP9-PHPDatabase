<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cfs-cont">
        <h2 class="cfs-h2-signup-title">Sign Up Form Beta</h2>

        <div class="cfs-cont-formbox">
            <?php if (isset($message)) echo "<p>$message</p>"; ?>
            <br>
            <form method="post" action="">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <br>
                <button class="submit-btn" type="submit">Submit</button>
            </form>
            <br>
            <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])): ?>
                <h3>Session Data  Retrieved:</h3>
                <br>
                <p><b>Name:</b> <u><?php echo htmlspecialchars($_SESSION['name']); ?></u></p>
                <p><b>Email:</b> <u><?php echo htmlspecialchars($_SESSION['email']); ?></u></p>
            <?php endif; ?> 
        </div>

    </div>
</body>
</html>