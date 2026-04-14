
<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];
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
    <input type="text" name="prenom" value="<?php echo $prenom; ?>">
</label>

<label>nom :
    <input type="text" name="nom" value="<?php echo $nom; ?>">
</label>

<label> email :
    <input type="email" name="email" value="<?php echo $email; ?>">
</label>

<label>age :
    <input type="number" name="age" value="<?php echo $age; ?>">
</label>

<label> filiere :
    <select name="filiere">
        <option value=""></option>
        <option value="info" <?php echo ($filiere === 'info') ? 'selected' : ''; ?>>Informatique</option>
        <option value="elec" <?php echo ($filiere === 'elec') ? 'selected' : ''; ?>>Électronique</option>
        <option value="meca" <?php echo ($filiere === 'meca') ? 'selected' : ''; ?>>Mécanique</option>
        <option value="autre" <?php echo ($filiere === 'autre') ? 'selected' : ''; ?>>Autre</option>
    </select>
</label>

<label>lettre de motivation :
    <textarea name="motivation" rows="6"><?php echo $motivation; ?></textarea>
</label>

<label>
    <input type="checkbox" name="reglement" value="1" <?php echo $reglement ? 'checked' : ''; ?>>
    J'ai lu et j'accepte le règlement du club.
</label>



<button type="submit">Envoyer ma candidature</button>

</form>

    
</body>
</html> 