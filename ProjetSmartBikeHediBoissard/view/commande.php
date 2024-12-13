<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBike</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <main>
        <section class="commande-form">
            <h1>Acheter un de nos Vélos SmartBike =)</h1>
            
            <form action="commande_submit.php" method="POST">
                <div class="form-group">
                    <label for="bike">Vélo :</label>
                    <select id="bike" name="bike" required>
                        <option value="">-- Sélectionnez un vélo --</option>
                        <option value="bike1">BikeOne</option>
                        <option value="bike22">Bike22</option>
                        <option value="bike5">Bike5</option>
                        <option value="bikeFirst">BikeFirst</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="surname">Prénom :</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="cta-button">Envoyer</button>
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
