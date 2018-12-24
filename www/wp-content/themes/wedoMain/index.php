<? 
$templateUri = get_template_directory_uri();
$templateUriA = $templateUri."/assets";
$templateDir = get_template_directory();
$URI=$_SERVER['REQUEST_URI']; 

// var_dump($templateUri);
// die();

if ($URI == "/") {
    include_once $templateDir . "/content/main.php";
} else {
    $pageName = substr($URI,-strlen($URI),strlen($URI)-1);
    $FullPageName = $templateDir . "/content" . $pageName . ".php";
    if (file_exists($FullPageName)) {
        include_once $FullPageName;
    } 
}

?>

