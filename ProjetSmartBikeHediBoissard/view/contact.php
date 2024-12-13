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
        <section class="contact-form">
            <h1>Contactez-nous</h1>
            <p>Vous avez des questions ou souhaitez en savoir plus sur nos vélos ? Remplissez le formulaire ci-dessous :</p>
            <form action="contact_submit.php" method="POST">
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
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="cta-button">Envoyer</button>
            </form>

            <div class="contact-info">
                <h2>Nos coordonnées</h2>
                <p>Téléphone : +33 6 00 00 00 00</p>
                <p>Email : contact@smartbike.com</p>
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.990688200776!2d2.2944813156748775!3d48.85884497928733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fda7088d9b1%3A0x9d8dbb0f7d8533e5!2sTour%20Eiffel!5e0!3m2!1sen!2sfr!4v1696765561007!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
