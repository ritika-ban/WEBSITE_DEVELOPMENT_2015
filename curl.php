# website-create-PART-1

<?php 

$src = $_GET['src'];
$dest = $_GET['dest'];
$dat = $_GET['dat'];
$mon = $_GET['mon'];
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://api.railwayapi.com/between/source/".$src."/dest/".$dest."/date/".$dat."-".$mon."/apikey/hzjjt5094/"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);    
echo $output;		
?>
