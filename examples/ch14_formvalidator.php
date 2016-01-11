<?php
header("Content-Type: application/json");
header("Cache-Control: no-cache");

if (!isset($_GET["username"]) && !isset( $_GET["email"])) {
    echo "PHP is working correctly. Congratulations!";
    return;
}

// type for returned data
class ReturnObject {
    public $available;
    public $searchTerm;
    public function __construct() {
        
    }
}

// get query string as associative array
parse_str($_SERVER['QUERY_STRING'], $query); 

$values = array("username" => array("jmcpeak","pwilton"),
                "email"    => array("someone@zyx.com", "someone@xyz.com"));

function processRequest() {
    global $query, $values;

    $obj = new ReturnObject();
    $obj->available = TRUE;

    foreach($query as $key => $value) {
        $arrValues = $values[$key];

        $obj->searchTerm = $value;

        for ($ii = 0; $ii < count($arrValues); $ii++) {
            if (strtolower($arrValues[$ii]) == strtolower($value)) {
			    $obj->available = FALSE;
                break;
		    }
        }
    }

    return $obj;
}

echo json_encode(processRequest());

?>