<?php while (have_rows('cheat_sheet_content')) : the_row(); ?>
<?php   if(get_row_layout() == 'hero_section'): ?>
        <main class="hero">
            <img src="<?= get_sub_field('logo')['url']; ?>" alt="<?= get_sub_field('logo')['title']; ?>" />
            <a href="<?= get_sub_field('url'); ?>">
                <h1><?= get_sub_field('title'); ?></h1>
            </a>
            <p><?= get_sub_field('description'); ?></p>
        </main>
<?php   elseif(get_row_layout() == 'category_section'): ?>
        <div class="category">
            <h2><?= get_sub_field('title'); ?></h2>
<?php       $items = get_sub_field('items');?>
<?php       foreach($items as $item): ?>
            <div class="item">
                <p><?= $item['description']; ?></p>
                <pre><code class="language-javascript"><?= $item['code']; ?></code></pre>
            </div>
<?php       endforeach;?>
        </div>
<?php   endif; ?>
<?php endwhile; ?>