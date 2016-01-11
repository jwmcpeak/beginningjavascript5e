<?php
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
?>

<html>
  <head>
    <title>Chapter 14: IFrame Validator</title>
  </head>
  <body>
    <?php
      if (!isset($_GET["username"]) && !isset( $_GET["email"])) {
          echo "PHP is working correctly. Congratulations!";
      } else {            
    ?>
    <script>
      top.handleResponse('<?php echo json_encode(processRequest()); ?>');
    </script>
    <?php
     }
    ?>
  </body>
</html>