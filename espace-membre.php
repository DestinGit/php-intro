<?php //session_start();
require 'login-check.php';

// Affichage HTML
require 'fragments/head.php';

?>

<?php
$message = $_SESSION["flash"] ?? null;
unset($_SESSION["flash"]);
?>

<?php
if(isset($message)) :?>
    <div><?= $message; ?></div>
<?php endif; ?>

<?php
require 'fragments/footer.php';
?>
