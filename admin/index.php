<?php  

session_start();
ob_start();

include 'veritabani.php';

if($_SESSION['admin'] !='yes'){
    include 'signin.php';
} else {
    define('guvenlik',true);
    include 'head.php';
    $sayfa = isset( $_GET['sayfa']);
    $sayfa = $_GET['sayfa'];
    switch($sayfa){
        case 'home':
            include 'main.php';
            break;
        case 'button':
            include 'button.php';
            break;
        case 'calendar':
            include 'calendar.php';
            break;
        case 'charts':
            include 'charts.php';
            break;
        case 'gallery':
            include 'gallery.php';
            break;
        case 'faq':
            include 'faq.php';
            break;
        case 'grid':
            include 'grid.php';
            break;
        case 'icons':
            include 'icons.php';
            break;
        case 'inbox':
            include 'inbox.php';
            break;
        case 'input':
           include 'input.php';
           break;
        case 'maps':
            include 'maps.php';
            break;
        case 'tables':
            include 'tables.php';
            break;
        case 'typography':
            include 'typography.php';
            break;
        case 'validation':
            include 'validation.php';
            break;
        case 'cikis':
            
            ?><script>
                alert('basarıyla cikis yaptiniz.');
                window.location.href ='index.php';
            </script>
            <?php 
            session_destroy();//oturumu sonlandirma
            break;
        default :
            include 'main.php';
            break;
    }	
    include 'foot.php';

}
//session_destroy();

?>