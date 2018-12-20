<?php include "./Partials/Header.php";
if(isset($_POST['submit']))
{
    $filepath = "files/" . $_FILES["file"]["name"];


}


?>
    <div class="container">
        <h2>DataSet :</h2>
        <div  id="scrol">
        <table >
            <thead>
            <tr>
                <th>PID</th>
                <th>AminoAcid</th>
                <th>Position</th>
                <th>Sequence</th>
            </tr>
            </thead>
            <tbody>


                <?php
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                     $xml = simplexml_load_file($filepath);
                     global $xml;
                    foreach ($xml->Acetylation as $acetyl) {
                        ?>
                <tr>

                        <td><?php echo $acetyl->PID ?></td>
                        <td><?php echo $acetyl->AminoAcid ?></td>
                        <td><?php echo $acetyl->Position ?></td>
                        <td><?php echo $acetyl->Sequence ?></td>
                </tr>
                        <?php
                    }
                }
                        ?>


            </tbody>
        </table>
        </div>
        <h2>View :</h2>

        <div class="center-div">
            <button type="button" class="btn btn-primary">Protein DataSet</button>
            <a href="peptide.php"><button type="button" class="btn btn-primary">Peptide DataSet</button></a>
            <button type="button" class="btn btn-primary">Sites Data Set</button>
        </div>
        <h2>MAPRes :</h2>
        <a href="Preprocessing.php" class="btn btn-primary btn-block" role="button">Data Preprocessing</a>
        <a href="Estimation.php" class="btn btn-primary btn-block" role="button">Run Association Rule Minig Process</a>
    </div>
<?php include "./Partials/Footer.php";?>