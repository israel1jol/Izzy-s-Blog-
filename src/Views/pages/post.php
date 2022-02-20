<?php $headers = explode(" ", $context->headers);  ?>

<div class="page-title"><?php echo $context->title ?></div>
<p class="lead">by Adigun Israel</p>
<br><br>
<article>
    <?php foreach($headers as $header): ?>
        <section>
            <h3 class="cs-3"><?php echo str_replace("-", " ", $header); ?></h3>
            <div></div>
        </section>
        <br>
    <?php endforeach ?>
</article>