<?php include "./Partials/Header.php";?>
    <div class="container">
        <h2>DataSet :</h2>
        <div class="table-wrapper-scroll-y">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>PID</th>
                <th>AminoAcid</th>
                <th>Position</th>
                <th>Sequence</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>14321_Human</td>
                <td>S</td>
                <td>50</td>
                <td>MANBDREALKHGEUYWQNALOYTDSKKSK</td>
            </tr>
            <tr>
                <td>12143_RAT</td>
                <td>A</td>
                <td>2</td>
                <td>JHSGSGTETEDGDFDFDGHCDGFDGHDFHBCHGFDHCBVFHFHHDGFDG</td>
            </tr>
            <tr>
                <td>14333_Arth</td>
                <td>Y</td>
                <td>140</td>
                <td>ANSGERESVSCFDGSYRTEREFDHFTERDFDFRERERDFDRERER</td>
            </tr>
            </tbody>
        </table>
        </div>
        <h2>View :</h2>

        <div class="center-div">
            <button type="button" class="btn btn-primary">Protein DataSet</button>
            <button type="button" class="btn btn-primary">Peptide DataSet</button>
            <button type="button" class="btn btn-primary">Sites Data Set</button>
        </div>
        <h2>MAPRes :</h2>
        <a href="Preprocessing.php" class="btn btn-primary btn-block" role="button">Data Preprocessing</a>
        <a href="Estimation.php" class="btn btn-primary btn-block" role="button">Run Association Rule Minig Process</a>
    </div>
<?php include "./Partials/Footer.php";?>

