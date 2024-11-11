<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex3.php" method="post">

        <label>Nom:</label>
        <input type="text" name="nom">

        <label>Prenom:</label>
        <input type="text" name="prenom">
        <label>Age:</label>
        <input type="number" name="age">

        <h4>langues pratiquées</h4>
        <select name="langue" multiple rows="2">
            <option>français</option>
            <option>anglais</option>
            <option>allemand</option>
            <option>espagnol</option>
        </select>

        <h4>Competences informatiques</h4>
        <input type="checkbox" name="competence" value="java">Java</input>
        <input type="checkbox" name="competence" value="XHTML">XHTML</input>
        <input type="checkbox" name="competence" value="PHP">PHP</input>
        <input type="checkbox" name="competence" value="SQL">SQL</input>
        <br>
        <input type="submit" name="effacer" value="effacer">
        <input type="submit" name="envoyer" value="envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['envoyer'])) {
            echo "Vous etes " . $_POST['prenom'];
            echo "Vous avez " . $_POST['nom'];
            echo "Vous avez " . $_POST['age'] . " ans";
            echo "Vous parlez " . $_POST['langue'];
            echo "Vous avez des competences:";
            // if($_POST['competence'] == )
            echo $_POST['competence'];
        }
    }
    ?>


</body>

</html>
