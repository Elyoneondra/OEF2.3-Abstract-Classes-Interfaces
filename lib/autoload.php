<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/groepswerk/02/0/Model/Config.php";

$config = new Config( $path = "/groepswerk/02/0" );
$_application_folder = $config->getApplicationFolder();
$_root_folder = $config->getRootFolder();

//load Models
require_once $_root_folder . "/Model/AbstractImageInfo.php";
require_once $_root_folder . "/Model/City.php";
require_once $_root_folder . "/Model/Nature.php";
require_once $_root_folder . "/Model/User.php";

//load Services
require_once $_root_folder . "/Service/Authentication.php";
require_once $_root_folder . "/Service/ImageLoader.php";
require_once $_root_folder . "/Service/Container.php";
require_once $_root_folder . "/Service/DBManager.php";
require_once $_root_folder . "/Service/MessageService.php";
require_once $_root_folder . "/Service/UploadService.php";
require_once $_root_folder . "/Service/DownloadService.php";
require_once $_root_folder . "/Service/ViewService.php";

//Interface
require_once $_root_folder . "/Service/ImageStorageInterface.php";
require_once $_root_folder . "/Service/PdoImageStorage.php";
require_once $_root_folder . "/Service/JsonFileImageStorage.php";

session_start();

$Container = new Container( $config );

//rename van veel gebruikte services
$Auth = $Container->getAuthentication();
$DBM = $Container->getDBM();
$MS = $Container->getMessageService();
$VS = $Container->getViewService();

$_SESSION["head_printed"] = false;

//redirect naar NO ACCESS pagina als de gebruiker niet ingelogd is en niet naar
//een publiek toegankelijke pagina gaat (login, registratie of no_access)
if ( ! isset($_SESSION['usr']) AND ! $login_form AND ! $register_form AND ! $no_access )
{
    header("Location: " . $config->getApplicationFolder() . "/no_access.php");
}
