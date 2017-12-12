<?php
get_header(); ?>

<?php
if (have_posts()): ?>

    <?php while (have_posts()): the_post();
        
        ?>
        <section class="main-content">
            <div class="wrap">
                <div class="content-container">
                    <?php the_content();?>
                </div>
            </div>
        </section>
        <?php
    endwhile; ?>
<?php endif; ?>

<?php

get_footer();