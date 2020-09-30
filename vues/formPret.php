<?php
$lName = null;
$fName = null;
$dateD = null;
$dateR = null;

$lNameClean = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_STRING);
if ($lNameClean) {
    $lName = $lNameClean;
}

$fNameClean = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_STRING);
if ($fNameClean) {
    $fName = $fNameClean;
}

$dateDClean = filter_input(INPUT_POST, 'dateD');
if ($dateDClean) {
    $dateD = $dateDClean;
}

$dateRClean = filter_input(INPUT_POST, 'dateR');
if ($dateRClean) {
    $dateR = $dateRClean;
}

$_SESSION['lName'] = $lName;
$_SESSION['fName'] = $fName;
$_SESSION['dateD'] = $dateD;
$_SESSION['dateR'] = $dateR;

?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 style="text-align: center;">Emprunt</h1>
        </div>
    </div>
    <form action="vues/materiel.php" method="POST">
        <div class="row">
            <div class="col">
                <h3 style="text-align: left;margin-top: 3%;"> Nom emprunteur</h3>
            </div>
            <div class="col"><input type="text" name="lName" style="width: 100%;margin-top: 4%;" value="<?php echo $lNameClean; ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="text-align: left;margin-top: 3%;"> Prénom emprunteur</h3>
            </div>
            <div class="col"><input type="text" name="fName" style="width: 100%;margin-top: 4%;" value="<?php echo $fNameClean; ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="margin-top: 3%;">Date</h3>
            </div>
            <div class="col" style="width: 100%;margin-top: 2%;"><input type="date" name="dateD" style="text-align: right;" value="<?php echo $dateDClean; ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="margin-top: 3%;">Date retour prévu</h3>
            </div>
            <div class="col" style="width: 100%;margin-top: 2%;"><input type="date" name="dateR" style="text-align: right;" value="<?php echo $dateRClean; ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="margin-top: 3%;">Matériel</h3>
            </div>
            <div class="col" style="text-align: left;margin-top: 2%;"><input class="btn btn-primary" type="submit" value="+"></div>
        </div>
    </form>
</div>
<?php



?>