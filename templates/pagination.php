<!-- <?php var_dump( getTotalImageCount(), getTotalPageCount()); ?> -->
<?php if(getTotalPageCount() > 1) { ?>
<nav aria-label="Page navigation">
    <ul class="pagination">
<!--        <li>-->
<!--            <a href="#" aria-label="Previous">-->
<!--                <span aria-hidden="true">&laquo;</span>-->
<!--            </a>-->
<!--        </li>-->
        <?php
        for ($i = 1; $i <= getTotalPageCount(); $i++){
            echo '<li><a href="?page=' . $i . '">' . $i .'</a></li>';
        }
        ?>

<!--            <a href="#" aria-label="Next" increment by one getcurrent Offset>-->
<!--                <span aria-hidden="true">&raquo;</span>-->
<!--            </a>-->
<!--        </li>-->
    </ul>
</nav>
<?php } ?>