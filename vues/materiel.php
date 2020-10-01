<?php

if (empty($_POST['lName'])) {
    $lName = "";
}
if (empty($_POST['fName'])) {
    $fName = "";
}
if (empty($_POST['dateD'])) {
    $dateD = "";
}
if (empty($_POST['dateR'])) {
    $dateR = "";
}

//var_dump($_POST);

?>
<main>
    <div class="container mt-5">
        <div class="row">
            <h2>Liste du matériel</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>N° ICT</th>
                        <th>Description matériel</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>297069 </td>
                        <td>HP Elitedesk 800 G2 TWR / Specs : I5-6500, 32GB Ram, Nvidia Gtx 550 & Intel HD Graphics 530</td>
                    </tr>
                    <tr>
                        <td>YYYYYY </td>
                        <td>oui je suis du texte</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>