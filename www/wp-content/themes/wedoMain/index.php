<? 
$templateUri = get_template_directory_uri();
$templateUriAssets = $templateUri."/assets";
$templateDir = get_template_directory();
$URI=$_SERVER['REQUEST_URI']; 

// var_dump($templateUri);
// die();

if ($URI == "/") {
    include_once $templateDir . "/content/main.php";
} else {
    $pageName = substr($URI,-strlen($URI),strlen($URI)-1);
    $fullPageName = $templateDir . "/content" . $pageName . ".php";
    if (file_exists($fullPageName)) {
        include_once $fullPageName;
    } 
}

?>

