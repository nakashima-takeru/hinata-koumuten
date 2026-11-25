<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumbList">
            <li class="breadcrumbList__word"><a href="<?php echo esc_url(home_url("")); ?>">TOP</a></li>
            <?php if (is_single()) : ?>
                <?php
                $post_type = get_post_type();
                $post_type_object = get_post_type_object($post_type);
                $taxonomies = get_object_taxonomies($post_type);
                $terms = [];
                $term = null;

                foreach ($taxonomies as $taxonomy) {
                    $terms = get_the_terms($post->ID, $taxonomy);
                    if ($terms && !is_wp_error($terms)) {
                        $term = $terms[0];
                        break;
                    }
                }
                $parent = $term && $term->parent ? get_term($term->parent, $term->taxonomy) : null;
                ?>
                <?php if ($post_type_object->has_archive) : ?>
                    <li class="breadcrumbList__word"><a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>"><?php echo esc_html($post_type_object->label); ?></a></li>
                <?php endif; ?>
                <?php if ($parent) : ?>
                    <li class="breadcrumbList__word"><a href="<?php echo esc_url(get_term_link($parent)); ?>"><?php echo esc_html($parent->name); ?></a></li>
                <?php endif; ?>
                <?php if ($term) : ?>
                    <li class="breadcrumbList__word"><a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a></li>
                <?php endif; ?>
                <li class="breadcrumbList__word breadcrumbList__word--current is-black"><?php the_title(); ?></li>
            <?php elseif (is_post_type_archive()) : ?>
                <?php
                $post_type = get_post_type();
                $post_type_object = get_post_type_object($post_type);
                ?>
                <li class="breadcrumbList__word breadcrumbList__word--current is-black"><?php echo get_the_archive_title(); ?></li>
            <?php else : ?>
                <?php
                $page = get_post(get_the_ID());
                $slug = $page->post_name;
                $ancestors_ids = array_reverse(get_post_ancestors($post));
                ?>
                <?php foreach ($ancestors_ids as $ancestors_id) : ?>
                    <li class="breadcrumbList__word">
                        <a href="<?php echo esc_url(get_permalink($ancestors_id)); ?>">
                            <?php echo wp_kses_post(get_the_title($ancestors_id)); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="breadcrumbList__word breadcrumbList__word--current is-black"><?php the_title(); ?></li>
            <?php endif; ?>
        </ul>
    </div>
</div>