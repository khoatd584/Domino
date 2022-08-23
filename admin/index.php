<?php
require_once 'db/connection.php';
?>
<?php
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<?php include './module/header-admin.php' ?>
<?php include './module/menu-admin.php' ?>
<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'show':
            require_once 'module/show.php';
            break;

        case 'edit':
            require_once 'module/edit.php';
            break;

        case 'creat':
            require_once 'module/creat.php';
            break;

        case 'delete':
            require_once 'module/delete.php';
            break;
        default:
            require_once 'module/show.php';

            break;
    }
} else {
    require_once 'module/show.php';
}

?>