<?php include "./Partials/Header.php";?>
    <!doctype html>
    <html lang="en">

    <body>
    <div class="container">
        <form action="DataSet.php" enctype="multipart/form-data" onsubmit="return validate();" method="post">
            <div class="alert alert-danger" style="display: none" id="show">
                <p id="nameerror"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Analysis Title</label>
                </div>
                <div class="col-75">
                    <input type="text" id="analysistitle" name="analysistitle" placeholder="Title" >
                </div>
            </div>
            <div class="alert alert-danger" style="display: none" id="show1">
                <p id="anaerror"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Analyst Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="analystname" name="analystname" placeholder="Name">
                </div>
            </div>
            <div class="alert alert-danger" style="display: none" id="show">
                <p id="error_para"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Analysis Description</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="description" placeholder="Write something.." style="height:200px" d></textarea>
                </div>
            </div>
            <div class="alert alert-danger" style="display: none" id="show2">
                <p id="moderror"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Modification Sites</label>
                </div>
                <div class="col-75">
                    <input type="text" id="modification" name="modification" placeholder="A,B,C" >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname"></label>
                </div>
                <div class="col-75">
                    <input type="checkbox" id="checkbox1" onClick="autoFill()"name="aminoacid" >Use Standard Amino Acid

                </div>
            </div>
            <div class="alert alert-danger" style="display: none" id="show3">
                <p id="aminoerror"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Amino Acid Set</label>
                </div>
                <div class="col-75">
                    <input type="text" id="aminoacidset" name="aminoacidset" placeholder="A,B,C" >
                </div>
            </div>
            <div class="alert alert-danger" style="display: none" id="show4">
                <p id="fileerror"></p>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Browse DataSet</label>
                </div>
                <div class="col-76">
                    <input type="file" id="file" name="file" >
                </div>

            </div>
            <div class="row" id="center">
                <input type="submit" value="Create Project" name="submit">
            </div>
        </form>
    </div>
    </body>
    <script type="text/javascript">
        function autoFill(){
            document.getElementById('aminoacidset').value = "A,R,N,D,B,C,Q,E,Z,G,H,I,L,K,M,F,P,S,T,W,Y,V";
        }
        function validate()
        {
            var error="";
            var title = document.getElementById( "analysistitle");
            var Ananame = document.getElementById( "analystname");
            var modification = document.getElementById( "modification");
            var amino = document.getElementById( "aminoacidset");
            if( title.value == "" )
            {
                error = "Analsis Title is Compulsory";
                document.getElementById("show").style.display="block";
                document.getElementById( "nameerror" ).innerHTML = error;
                var file = $("file").value;
                return false;
            }
            if( Ananame.value == "" )
            {
                error = "Analyst Name is Compulsory";
                document.getElementById("show1").style.display="block";
                document.getElementById( "anaerror" ).innerHTML = error;
                return false;
            }
            if( modification.value == "" )
            {
                error = "Modification Sites are required";
                document.getElementById("show2").style.display="block";
                document.getElementById( "moderror" ).innerHTML = error;
                return false;
            }
            if( amino.value == "" )
            {
                error = "Please fill the Amino Acid Set";
                document.getElementById("show3").style.display="block";
                document.getElementById( "aminoerror" ).innerHTML = error;
                return false;
            }
            if( document.getElementById("file").files.length == 0 ){
                error = "No file is Selected";
                document.getElementById("show4").style.display="block";
                document.getElementById( "fileerror" ).innerHTML = error;
                return false;
            }
            return true;
        }
    </script>
    </html>

<?php include "./Partials/Footer.php";?>