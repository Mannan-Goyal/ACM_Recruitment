<?php
session_start();
session_unset();
session_destroy();
?>
<script>
alert("You have been successfully logged out!");
window.location="../admin_login.html";
</script>