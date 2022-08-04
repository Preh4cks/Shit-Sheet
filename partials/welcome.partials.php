<?php while (have_rows('welcome_content')) : the_row(); ?>
<?php     if(get_row_layout() == 'header_section'): ?>
    <h1><?= get_sub_field('heading'); ?></h1>
    <p><?= get_sub_field('sub_heading'); ?></p>
<?php     endif; ?>
<?php endwhile; ?>
