<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h1>PDO CRUD</h1>

    <form action="create.php" method="post">
        <label for="bodem">Bodemformaat</label> <br>
        <select name="bodem" id="bodem"> 
            <option value="">Maak je keuze</option>
            <option value="20cm">20cm</option>
            <option value="25cm">25cm</option>
            <option value="30cm">30cm</option>
            <option value="35cm">35cm</option>
            <option value="40cm">40cm</option>
        </select><br><br>

        <label for="saus">Saus</label> <br>
        <select name="saus" id="saus"> 
            <option value="">Maak je keuze</option>
            <option value="tomatensaus">Tomatensaus</option>
            <option value="extratomatensaus">Extra Tomatensaus</option>
            <option value="spicytomatensaus">Spicy tomatensaus</option>
            <option value="bbq">BBQ saus</option>
            <option value="fraische">Crème fraische</option>
        </select><br><br>

        <p>Pizzatoppings</p>
        <input type="radio" id="vegan" name="pizzatoppings" value="vegan">
        <label for="vegan">vegan</label><br>
        <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
        <label for="vegetarisch">vegetarisch</label><br>
        <input type="radio" id="vlees" name="pizzatoppings" value="vlees">
        <label for="vlees">vlees</label><br><br>

        <p>Kruiden</p>
        <input type="checkbox" id="peterselie" name="peterselie" value="peterselie">
        <label for="peterselie"> Peterselie</label><br>
        <input type="checkbox" id="oregano" name="oregano" value="oregano">
        <label for="oregano"> Oregano</label><br>
        <input type="checkbox" id="chiliflakes" name="chiliflakes" value="chiliflakes">
        <label for="chiliflakes"> Chili flakes</label><br>
        <input type="checkbox" id="zwartepeper" name="zwartepeper" value="zwartepeper">
        <label for="zwartepeper"> Zwarte peper</label><br><br>

        <input type="submit" value="Bestel">
    </form>
</body>
</html>