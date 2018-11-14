<?php include "./Partials/Header.php";?>
<div class="container">
<form action="DataSet.php">
    <div class="row">
        <div class="col-25">
            <label for="fname">Analysis Title</label>
        </div>
        <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Title">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="lname">Analyst Name</label>
        </div>
        <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Name">
        </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label for="subject">Analysis Description</label>
        </div>
        <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="fname">Modification Sites</label>
        </div>
        <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="A,B,C">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="fname"></label>
        </div>
        <div class="col-75">
            <input type="checkbox" id="fname" name="firstname" placeholder="A,B,C">Use Standard Amino Acid
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="subject">Amino Acid Set</label>
        </div>
        <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="A,B,C">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="subject">Browse DataSet</label>
        </div>
        <div class="col-76">
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        </div>


    </div>
    <div class="row" id="center">
        <input type="submit" value="Create Project">
    </div>
</form>

</div>
<?php include "./Partials/Footer.php";?>