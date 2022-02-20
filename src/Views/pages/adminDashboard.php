<div>
    <div class="cs-3">Welcome back!</div>
    <br>
    <div>
        <div class="justify-flex">
            <h2 class="cs-2">Your articles</h2>
            <a href="/admin/newArticle">New</a>
        </div>
        <hr>
        <?php foreach($context as $post):  ?>
            <br>
            <a class="display-5" href="<?php echo "/post?id=".$post->id ?>"><?php echo $post->title; ?></a>
            <br>
        <?php endforeach; ?>
    </div>
</div>