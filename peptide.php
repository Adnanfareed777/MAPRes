<?php include "./Partials/Header.php";
$filepath =$_REQUEST['filepath'];

//move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$xml = simplexml_load_file($filepath);

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
                    $peptide =array() ;
                    foreach ($xml->Acetylation as $acetyl) {
                        ?>
                        <tr>
                            <?php $pid =(string)$acetyl->PID?>
                            <td><?php echo $pid ?></td>
                            <?php $aminoacid=$acetyl->AminoAcid?>
                            <td><?php echo  $aminoacid?></td>
                            <?php $pos=(int)$acetyl->Position?>
                            <td><?php echo $pos ?></td>
                            <?php $seqence =(string)$acetyl->Sequence ?>
                            <td><?php echo substr($seqence,$pos-9,20)?></td>
                            <?php $peptide[] =array('pid'=>$pid,'aminoacid'=>$aminoacid,'position'=>$pos,'sequence'=>$seqence)?>

                        </tr>
                        <?php

                }
                ?>


                </tbody>
            </table>
        </div>
        <h2>View :</h2>

        <div class="center-div">
            <a href="DataSet.php"><button type="button" class="btn btn-primary">Protein DataSet</button></a>
            <a href="peptide.php"><button type="button" class="btn btn-primary">Peptide DataSet</button></a>

        </div>
        <h2>MAPRes :</h2>

        <a href="Estimation.php?filepath=<?php echo $filepath?>"><button type="button" class="btn btn-primary btn-block">Run Association Rule Minig Process</button></a><br>
        <a href="Preprocessing.php" class="btn btn-primary btn-block" role="button">Data Preprocessing</a>
    </div>
<?php include "./Partials/Footer.php";?>