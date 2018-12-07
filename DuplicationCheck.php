<?php
/**
 * Created by PhpStorm.
 * User: Adnan Fareed
 * Date: 12/4/2018
 * Time: 8:28 PM
 */
?>
<?php include "./Partials/Header.php";?>
    <div class="container" style="border: dashed">
        <h1>Browse PTM Table</h1>
        <div class="row">
            <div class="col-25">
                <label for="subject">Browse DataSet</label>
            </div>
            <div class="col-76">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            </div>


        </div>
    </div>
    <div class="container" style="border: dashed">
        <h2>Select Data for DuplictionSearch</h2>
        <div class="row" style="border: solid">
            <h3>Attribute Values</h3>
        </div>
        <div class="row" >
            <div class="col-25">
                <input type="checkbox" id="fname" name="firstname" > ProteinID
            </div>
        </div>
        <div class="row" >
            <div class="col-25">
                <input type="checkbox" id="fname" name="firstname" > Sequence
            </div>
        </div>
        <div class="row" >
            <div class="col-25">
                <input type="checkbox" id="fname" name="firstname" > Position
            </div>
        </div>
        <div class="row" >
            <div class="col-25">
                <input type="checkbox" id="fname" name="firstname" > AminoAcid
            </div>
        </div>
        <div class="row">
            <div class="col-78">
                <input type="submit" class="btn btn-primary" value="Analyse">
            </div>
        </div>
    </div>

    </div>
<?php include "./Partials/Footer.php";?>