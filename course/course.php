<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to Card</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <div class="container">
        <h1>Isi Formulir</h1>
        <form method="POST" action="">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($_POST['name']); ?></h2>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
                <p><strong>Pesan:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <style>
        .card {
    margin-top: 20px;
    padding: 20px;
    background-color: #f1f1f1;
    border: 2px solid #4CAF50; /* Border untuk card */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
}

.card h2 {
    margin: 0;
    color: #333;
}

.card p {
    color: #555;
}

    </style>

</html>
