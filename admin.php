<?php 
require_once("php/functions.php");
$user = check_user();
if ($user == false) {
    print("<script>location.href='login.php'</script>");
}
// error_log(print_r($user,true));
require_once("templates/header.php"); ?>

<div class="container py-3">
    <div style="min-height: 80vh;">
        <div class="card cbg2 my-3 py-3 px-3">
            <div class="card-body text-center">
                <h1 class="card-title display-3 text-center mb-0 text-kolping-orange">Admin Bereich</h1>
                <div class="card-text">
                    <button class="btn btn-primary my-3" type="button" onclick="window.location.href = 'admin/blog.php';">Blogs</button>
                    <button class="btn btn-primary" type="button" onclick="window.location.href = 'admin/termine.php';">Termine</button>
                    <?php if ($user['admin'] == "1"): ?>
                        <button class="btn btn-primary" type="button" onclick="window.location.href = 'admin/user.php';">User</button>
                        <button class="btn btn-primary" type="button" onclick="window.location.href = 'admin/wir.php';">Wir</button>
                        <button class="btn btn-primary" type="button" onclick="window.location.href = 'admin/angebote.php';">Angebote</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once("templates/footer.php"); ?>