<?php $title = htmlspecialchars($post['titre']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['titre']) ?>
        <em>le <?= $post['date_creation_fr'] ?></em>
    </h3>
    
    <p>
        <?= nl2br(htmlspecialchars($post['contenu'])) ?>
    </p>
</div>

<h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong> <?= htmlspecialchars($comment['auteur']) ?> </strong> le <?= $comment['date_creation_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['commentaire'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
