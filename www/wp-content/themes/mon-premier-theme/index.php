<?php

get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
                    <div class="card-body menu-bonjour-container text_hp">
                        <p><strong><?php the_title() ?></strong></p>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir l'article complet</a>
                    </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>
<?php
get_footer();