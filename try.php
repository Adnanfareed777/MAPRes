
<?php
if(isset($_POST['Submit1']))
{


    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
    {
        $xml = simplexml_load_file($filepath);
        foreach ($xml->Acetylation as $acetyl){
            echo $acetyl->PID."<br>";

        }

    }
    else
    {
        echo "Error !!";
    }
}
?>
