<?php include __DIR__ . '/templates/header.php'; ?>


<div class="content">
    <div class="post-view__container">
        <div class="post-view__info">
            <div class="poster-username">Username</div>
            <div class="post__date-time">Date/Time</div>

            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                        </a>
                        <!--                        </li>-->
                        <!--                        <li><a href="#">1</a></li>-->
                        <!--                        <li><a href="#">2</a></li>-->
                        <!--                        <li><a href="#">3</a></li>-->
                        <!--                        <li><a href="#">4</a></li>-->
                        <!--                        <li><a href="#">5</a></li>-->
                        <!--                        <li>-->
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">Next &raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="post__img">
                <img src="assets/img/meme.jpg">
            </div>
            <div class="post__title">title</div>
            <div class="post__description">description</div>

            <div class="input-group">
                <textarea name="user-comment" class="form-control" placeholder="Comment here..."></textarea>
                <span class="input-group-btn">
                    <button class="btn btn-lg" type="button">Submit</button>
                </span>
            </div><!-- /input-group -->

            <?php include __DIR__ . '/templates/comment-container.php'; ?>
        </div>
    </div>
</div>

<?php include __DIR__ . '/templates/footer.php'; ?>