<?php if (0 === getCurrentUserId()) {} else {?>
<div class="input-group">
    <form method="post">
        <textarea name="text" class="form-control"></textarea>
        <span class="input-group-btn">
            <input class="btn btn-lg" name="comment-form" type='submit' value='COMMENT' />
            <input type="hidden" name="image_id" value="<?php echo $_GET["image"];?>"/>
            <input type="hidden" name="author" value="<?php echo getCurrentUserId(); ?>"/>
        </span>
    </form>
<!--        <span class="input-group-btn">-->
<!--            <input class="btn btn-lg" type="submit" name="insertComment"/>-->
<!--            <input type="hidden" name="comment" value="--><?php //echo $comment->id; ?><!--"/>-->
<!--        </span>-->


</div><!-- /input-group -->
<?php } ?>