<?php if(isset($context["error"])): ?>
        <div>An error has occured please retry last process. <?php echo $context["error"]; ?></div>
    <?php  endif; ?>
    <?php if(isset($context["success"])): ?>
        <div>Your last process was a success.</div>
    <?php  endif; ?>
<div class="cs-3 t-center">Create a new Article</div>
<form action="/admin/newArticle" method="post">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" autocomplete="FALSE" autocapitalize="TRUE" autofocus="true" id="" placeholder="Title..." class="form-control">
    </div>
    <div class="form-group">
        <label for="">Headers</label>
        <input type="text" name="headers" id="" autocomplete="FALSE" autocapitalize="TRUE" placeholder="Headers..." class="form-control">
    </div>
    <div class="form-group">
        <label for="">Body</label>
        <textarea name="body" id="" cols="30" rows="10" placeholder="Body..." class="form-body"></textarea>
    </div>

    <br><br>
    <input type="submit" class="btn btn-primary" value="Create">
</form>