<?php

get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="card-body menu-bonjour-container text_hp">
                <?php
                if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                    the_post_thumbnail();
                }
                ?>
                <p><strong><?php the_title() ?></strong></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>">Voir la recette</a>
            </div>
        <?php endwhile ?>
    </div>
<?php endif; ?>
<?php
get_footer();