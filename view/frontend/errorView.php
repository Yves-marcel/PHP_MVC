<?php $title="Message d'erreur";?>
<?php ob_start();?>
<div class="error">
    <h3>
        <p>
        <?php
        if($error){
            echo $error;
        }
        ?>

        </p>
        
    </h3>
</div>
<?php $content=ob_get_clean(); ?>
<?php require_once("template.php"); ?>

