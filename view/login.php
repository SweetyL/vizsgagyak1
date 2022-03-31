<?php
if(empty($_SESSION['id'])){
    ?>
<div class="container">
    <h1 class="text-center">Admin login</h1>
    <div class="container border col-lg-3">
        <form action="index.php?page=login&action=login" method="post">
            <legend>Adja meg a jelszót</legend>
            <input type="password" id="pass" name="pass" class="form-control" required>
            <button type="submit" class="btn btn-info">Küldés</button>
        </form>
</div>
<?php
}
?>