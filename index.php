<!DOCTYPE html>
<?php
/**
 * Include the necessary files
 */
require 'includes/configure_static.php';
require 'includes/functions.php';
require 'includes/addscript.class.php';
require 'doaction/chat.php';
require 'doaction/info.php';
?>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
    /**
     * Add the common js and css files
     */
    clsAddScript::addJS('jquery');
    clsAddScript::addJS('bootstrap');

    clsAddScript::addCSS('bootstrap');
?>

<?php 

    /**
     * The router is here
     */
     $action = getValue('action'); 
     
     /**
     * Get the page in strPage
     */
     
     switch ($action) {
        case 'chat':
            $page = new Chat();
            break;
        
        case 'cookies':
            $page = new Info();
            break;
        
        case 'info':
            $page = new Info();
            break;

        default:
            $page = new Info();
            break;
    }
     
    /**
     * Render the view
     */
     $page->execute();
     $strPage = $page->renderBody();

?>
<html>
    <!-- Add head section, this includes all js and css files -->
    <?php require 'parts/head.php'; ?>
    
    <!-- Add start of body section -->
    <?php require 'parts/startBody.php'; ?>
    
        <a class="btn btn-success" href="chat">Start Chat</a>
        <a class="btn btn-success" href="info">Info</a>
        <a class="btn btn-success" href="cookies">Cookies</a>
        
        <?php echo $strPage; ?>
        
    <!-- Add end of body section -->
    <?php require 'parts/endBody.php'; ?>
</html>

