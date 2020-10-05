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
    <form action="index.php?uc=materiel" method="POST">
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
            <div class="col" style="width: 100%;margin-top: 2%;"><input id="startDate" type="date" name="dateD" style="text-align: right;" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="margin-top: 3%;">Date retour prévu</h3>
            </div>
            <div class="col" style="width: 100%;margin-top: 2%;"><input id="endDate" type="date" name="dateR" style="text-align: right;" value="<?php echo $dateRClean; ?>" min="<?php echo date('Y-m-d'); ?>"></div>
        </div>
        <div class="row">
            <div class="col">
                <h3 style="margin-top: 3%;">Matériel</h3>
            </div>
            <div class="col">
                <button class="btn btn-info mt-1" type="button" onclick="loadMatList()">+</button>
                <div class="mt-1" id="idMatList" style="max-height: 200px; width:100% ; overflow: auto;">

                </div>
            </div>
        </div>

        <div class="row-md-12 text-center">
            <input type="submit" class="btn btn-primary lm-6">
        </div>
    </form>
</div>
<script>
    var ouvrirFermer = 0;

    function loadMatList() {
        ouvrirFermer++;
        if (ouvrirFermer == 1) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("idMatList").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "modeles/materielAjax.txt", true);
            xhttp.send();
        }
        else if(ouvrirFermer == 0){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("idMatList").innerHTML =
                        this.responseText;
                }
            };
            xhttp.closedir("GET", "modeles/materielAjax.txt", true);
            xhttp.send();
        }
        else{
            ouvrirFermer == 0
        }



    }
</script>