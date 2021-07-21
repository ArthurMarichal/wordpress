<?php

get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php the_author() ?></h6>
                    <p class="card-text"><?php the_content() ?></p>
                    <a href="<?php the_permalink() ?>" class="card-link"></a>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>
<?php
get_footer();