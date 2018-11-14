<?php include "./Partials/Header.php";?>

<div class="container">
    <h2>Perform Association Rule Mining Using</h2>
    <label class="radio-inline"><input type="radio" name="optradio" checked>Positive Site</label>
    <label class="radio-inline"><input type="radio" name="optradio">Negative Site</label>
    <label class="radio-inline"><input type="radio" name="optradio">Both</label>
    <div class="row">
        <div class="col-25">
            <label for="fname">Min. Support Level</label>
        </div>
        <div class="col-77">
            <input type="text" id="fname" name="firstname">
        </div>
        <div class="col-25">
          <p style="margin-left: 15px; font-size: 30px">%</p>
        </div>
    </div>
    <div class="progress md-progress primary-color-dark">
        <div class="indeterminate" role="progressbar"></div>
    </div>
    <div class="row">
    <div class="col-78">
        <input type="submit" class="btn btn-primary" value="Run">
    </div>
    </div>
</div>
<div class="container">
    <div class="table-wrapper-scroll-y">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Association Rule</th>
                <th>LHS</th>
                <th>RHS</th>
                <th>Confidence</th>
                <th>Min. Support</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>&lt;A&gt;&lt;B&gt;&lt;A&gt;</td>
                <td>&lt;A&gt;</td>
                <td>&lt;C&gt;</td>
                <td>30</td>
                <td>5</td>
            </tr>
            <tr>
                <td>&lt;A&gt;&lt;B&gt;&lt;A&gt;</td>
                <td>&lt;A&gt;</td>
                <td>&lt;C&gt;</td>
                <td>30</td>
                <td>5</td>
            </tr>
            <tr>
                <td>&lt;A&gt;&lt;B&gt;&lt;A&gt;</td>
                <td>&lt;A&gt;</td>
                <td>&lt;C&gt;</td>
                <td>30</td>
                <td>5</td>
            </tr>
            <tr>
                <td>&lt;A&gt;&lt;B&gt;&lt;A&gt;</td>
                <td>&lt;A&gt;</td>
                <td>&lt;C&gt;</td>
                <td>30</td>
                <td>5</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-78">
            <input type="submit" class="btn btn-primary" value="Export As Xml">
        </div>
    </div>

    </div>

<?php include "./Partials/Footer.php";?>
