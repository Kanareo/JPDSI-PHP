<?php require_once dirname(__FILE__) .'/../config.php';?>
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
<div style="min-height:40.7em;padding:4em">
    <form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">
        <p><label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /></p>
        <p><label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /></p>
        <p><label for="id_y">Oprocentowanie roczne: </label>
        <input id="id_y" type="text" name="p" value="<?php if (isset($p)) print($p); ?>" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Oblicz" /></p>
    </form>	

    <?php
    if (isset($messages)) {
            if (count($messages) > 0) {
                    echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
                    foreach ( $messages as $key => $msg ) {
                            echo '<li>'.$msg.'</li>';
                    }
                    echo '</ol>';
            }
    }
    ?>

    <?php if (isset($result)){ ?>
    <div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
    <?php echo 'Kwota miesięczna do zapłaty: '.$result; ?>
    </div>
<?php } ?>
</div>
<div>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="btn btn-action">Wyloguj</a>
</div>
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>