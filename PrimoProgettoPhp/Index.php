<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolo di qualcosa</title>
</head>
<body>
    <form method="post">
        <input type="number" name="valoreInserito" id="valoreInserito">
        <button type="submit">Calcola</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valoreInserito = $_POST['valoreInserito'];
        if (is_numeric($valoreInserito)) {
            $risultato = $valoreInserito * $valoreInserito;
            echo '<p>Risultato: ' . htmlspecialchars($risultato) . '</p>';
        } else {
            echo '<p>Per favore inserisci un numero valido.</p>';
        }
    }
    ?>
    <script>
        
    </script>
</body>
</html>
