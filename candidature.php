
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
      if (empty($prenom)) {
        $erreurs[] = "Le prenom est obligatoire.";
    }
    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Email invalide.";
    }
    if (!is_numeric($age) || $age < 16 || $age > 30) {
        $erreurs[] = "Age entre 16 et 30.";
    }
    if (empty($filiere)) {
        $erreurs[] = "Choisir une filière.";
    }
    if (strlen($motivation) < 30) {
        $erreurs[] = "Motivation min 30 caractères.";
    }
    if (!$reglement) {
        $erreurs[] = "Vous devez accepter le règlement.";
    }
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
    <?php if (!empty($erreurs)): ?>
    <ul class="erreurs">
        <?php foreach ($erreurs as $e): ?>
            <li><?php echo $e; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
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