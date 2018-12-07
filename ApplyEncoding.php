<?php include "./Partials/Header.php";?>
    <div class="container" style="border: dashed">
        <h1>Configuration</h1>
        <div class="row">
            <div class="col-25">
                <label for="subject">Browse DataSet</label>
            </div>
            <div class="col-76">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            </div>


        </div>

        <div class="row" style="border: solid">
            <h3>Select Attribute for Encoding</h3>
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
            <div class="col-25">
                <label for="subject">Browse Encoding Schema</label>
            </div>
            <div class="col-76">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            </div>


        </div>
        <div class="row">
            <div class="col-78">
                <input type="submit" class="btn btn-primary" value="Encodde">
            </div>
        </div>
    </div>

<?php include "./Partials/Footer.php";?>