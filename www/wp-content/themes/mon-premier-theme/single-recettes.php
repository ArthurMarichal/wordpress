<?php

get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="card-body menu-bonjour-container text_hp">
                <p><strong><?php the_title() ?></strong></p>
                <?php the_content() ?>
            </div>
        <?php endwhile ?>
    </div>
<?php endif; ?>
<?php
get_footer();