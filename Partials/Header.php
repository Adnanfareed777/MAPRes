<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAPRes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }


        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
        .col-76 {
            float: left;
            width: 60%;
            margin-top: 6px;
        }
        .col-77 {

            width: 14%;
            margin-top: 6px;
        }
        .col-78{
            float: left;
            width: 95%;
            margin-top: 6px;
        }

.container{
    margin-top: 10px;
}
#center{
    display: flex;
    justify-content: center;
    margin-top: 6px;
}


        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./Home.php">MAPRes</a>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./Home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Help.php">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./AboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./ContactUS.php">Contact Us</a>
            </li>
        </ul>

</nav>
</body>
</html>