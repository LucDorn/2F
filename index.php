<body>
    <form action="./mailSender.php" method="post">
        <h2>Registreren</h2>

        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label for="email">email</label>
        <input type="email" id="email" name="email" required>

        <label for="information">info voor klacht</label>
        <input type="text" id="information" name="information" required>

        <button type="submit">Registreer</button>
    </form>
</body>