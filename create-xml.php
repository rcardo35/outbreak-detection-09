<?php
    // Start XML file, create parent node
    function parseToXML($htmlStr)
    {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }
    
    // Select all the rows in the markers table
    $mysqli = new mysqli("us-cdbr-east-02.cleardb.com", "ba1b3bebb866bc", "bc392e11", "heroku_c224005b36bf596");

    $stmt = $mysqli->query("SELECT * FROM map WHERE 1");
    if (!$stmt) {
        die($mysqli->error);
    }
    header("Content-type: text/xml");
    // Start XML file, echo parent node
    echo "<?xml version='1.0' ?>";
    echo '<markers>';
    $ind=0;
    // Iterate through the rows, printing XML nodes for each
    while ($row = @mysqli_fetch_assoc($stmt)){
        // Add to XML document node
        echo '<marker ';
        echo 'id="' . $row['id'] . '" ';
        echo 'name="' . parseToXML($row['name']) . '" ';
        echo 'address="' . parseToXML($row['address']) . '" ';
        echo 'lat="' . $row['lat'] . '" ';
        echo 'lng="' . $row['lng'] . '" ';
        echo 'type="' . $row['type'] . '" ';
        echo '/>';
        $ind = $ind + 1;
    }
    // End XML file
    echo '</markers>';
?>

