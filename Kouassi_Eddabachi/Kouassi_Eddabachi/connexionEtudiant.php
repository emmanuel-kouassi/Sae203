<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexionEtudiant.css">
    <title>Connexion Etudiant </title>
</head>
<body>
    <nav class="navbar">
         <a href="Fastnote.html"><img src="img/Fastnote.PNG"></a>
    </nav>
   
    <div id="container">
    
        <form action="" method="POST">
        <h1>Etudiant</h1>
        <h3> Entrez votre identifiant et votre mot de passe.</h3>  
        <p><strong>Identifiant</strong></p>
        <input type="text" name="Identifiant" placeholder="Identifiant" required >
        <p><strong>Mot de passe</strong></p>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
        <br>
        <br>
        <input type="submit" name="connexion" value="connexion">  
        <a class="retour" href="index.php">Retour</a>
    </form>
</body>
</html>