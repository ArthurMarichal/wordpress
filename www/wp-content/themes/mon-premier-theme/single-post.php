<?php

get_header(); ?>

<?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <div class="card text_hp">
                <div class="card-body">
                    <h1 class="card-title"><?php the_title() ?></h1>
                    <p class="card-text"><?php the_content() ?></p>
                </div>
            </div>
        <?php endwhile ?>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>
<?php
get_footer();