<br><br>
<div class="bg-sweet">
    <div class="cs-3 tw">If life gives me lemons, I would rather use the electrolytes to make a bulb.</div>
    <span class="cs-2">dotHatake</span>
</div>

<br>
<br>

<h1 class="display-5">Recents</h1>
<hr>
<ul>
    <?php foreach($context as $key): ?>
        <li class="box">
           <div class="post-title"> <?php echo $key->title; ?> </div>
           <div class="container-fluid">
            <p class="lead">In this article i cover:</p>
            <?php
                    $headers = explode(" ", $key->headers);
                    foreach($headers as $header) {
                        echo "<span class='cs-2'>".str_replace("-", " ", $header)."</span>"."<br>";
                    }
            ?>
           </div>
         <a href="/post?id=<?php echo $key->id; ?>" class="btn btn-primary">Read More</a>  
        </li>
    <?php endforeach; ?>

</ul>