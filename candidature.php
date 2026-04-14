
<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $prenom     = $_POST['prenom']     ?? '';
    $nom        = $_POST['nom']        ?? '';
    $email      = $_POST['email']      ?? '';
    $age        = $_POST['age']        ?? '';
    $filiere    = $_POST['filiere']    ?? '';
    $motivation = $_POST['motivation'] ?? '';
    $reglement  = isset($_POST['reglement']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form  method="post">

<label>prenom :
    <input type="text" name="prenom" >
</label>

<label>nom :
    <input type="text" name="nom" >
</label>

<label> email :
    <input type="email" name="email" >
</label>

<label>age :
    <input type="number" name="age" >
</label>

<label> filiere :
    <select name="filiere">
        <option value=""></option>
        <option value="info" >Informatique</option>
        <option value="elec">Électronique</option>
        <option value="meca" >Mécanique</option>
        <option value="autre" >Autre</option>
    </select>
</label>

<label>lettre de motivation :
    <textarea name="motivation" rows="6"></textarea>
</label>

<label>
    <input type="checkbox" name="reglement" value="1" >
    J'ai lu et j'accepte le règlement du club.
</label>



<button type="submit">Envoyer ma candidature</button>

</form>
    
</body>
</html> 