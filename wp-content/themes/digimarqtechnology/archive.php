<?php
/**
 * The template for displaying blog archive pages
 *
 * @package digimarqtechnology
 */

get_header();
?>

<style>
.blog-archive {
    padding: 60px 0;
    background-color: var(--background-color);
}

.blog-archive .container {
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
}

.blog-archive-header {
    text-align: center;
    margin-bottom: 60px;
}

.blog-archive-header h1 {
    font-size: var(--font-size-heading);
    color: var(--primary-color);
    margin-bottom: 15px;
    font-weight: 700;
}

.blog-archive-header p {
    font-size: var(--font-size-base);
    color: var(--secondary-color);
    max-width: 700px;
    margin: 0 auto;
}

.blog-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.blog-post-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.blog-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
}

.blog-post-thumbnail {
    width: 100%;
    height: 220px;
    overflow: hidden;
    position: relative;
}

.blog-post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-post-card:hover .blog-post-thumbnail img {
    transform: scale(1.05);
}

.blog-post-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.blog-post-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 13px;
    color: var(--secondary-color);
}

.blog-post-date {
    display: flex;
    align-items: center;
    gap: 5px;
}

.blog-post-author {
    display: flex;
    align-items: center;
    gap: 5px;
}

.blog-post-category {
    display: inline-block;
    background: var(--background-button-color);
    color: #fff;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    margin-bottom: 15px;
    width: fit-content;
}

.blog-post-category:hover {
    opacity: 0.9;
}

.blog-post-title {
    margin-bottom: 15px;
}

.blog-post-title a {
    font-size: var(--font-size-mid);
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-post-title a:hover {
    color: var(--background-button-color);
}

.blog-post-excerpt {
    font-size: var(--font-size-base);
    color: var(--secondary-color);
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-post-read-more {
    display: inline-block;
    color: var(--background-button-color);
    text-decoration: none;
    font-weight: 600;
    font-size: var(--font-size-base);
    transition: all 0.3s ease;
    margin-top: auto;
}

.blog-post-read-more:hover {
    color: var(--primary-color);
    padding-left: 5px;
}

/* Pagination */
.blog-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 50px;
    padding: 30px 0;
}

.blog-pagination ul {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin: 0;
    padding: 0;
}

.blog-pagination li {
    margin: 0;
    padding: 0;
}

.blog-pagination .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 15px;
    background: #fff;
    color: var(--primary-color);
    text-decoration: none;
    border-radius: 5px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid #e0e0e0;
}

.blog-pagination .page-numbers:hover,
.blog-pagination .page-numbers.current {
    background: var(--background-button-color);
    color: #fff;
    border-color: var(--background-button-color);
}

.blog-pagination .page-numbers.dots {
    border: none;
    background: transparent;
    cursor: default;
}

.blog-pagination .page-numbers.dots:hover {
    background: transparent;
    color: var(--primary-color);
}

/* No Posts Message */
.no-posts {
    text-align: center;
    padding: 60px 20px;
}

.no-posts h2 {
    font-size: var(--font-size-mid);
    color: var(--primary-color);
    margin-bottom: 15px;
}

.no-posts p {
    font-size: var(--font-size-base);
    color: var(--secondary-color);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .blog-posts-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .blog-archive {
        padding: 40px 0;
    }

    .blog-archive-header {
        margin-bottom: 40px;
    }

    .blog-posts-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .blog-post-thumbnail {
        height: 200px;
    }

    .blog-pagination {
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .blog-archive .container {
        width: var(--container-width-xs);
    }

    .blog-post-content {
        padding: 20px;
    }

    .blog-post-meta {
        flex-wrap: wrap;
        gap: 10px;
    }
}
</style>

<main id="main" class="blog-archive">
    <div class="container">
        <header class="blog-archive-header">
            <?php
            if (is_category()) {
                echo '<h1>' . single_cat_title('', false) . '</h1>';
                $category_description = category_description();
                if ($category_description) {
                    echo '<p>' . $category_description . '</p>';
                }
            } elseif (is_tag()) {
                echo '<h1>' . single_tag_title('', false) . '</h1>';
                $tag_description = tag_description();
                if ($tag_description) {
                    echo '<p>' . $tag_description . '</p>';
                }
            } elseif (is_author()) {
                echo '<h1>' . get_the_author() . '</h1>';
                $author_description = get_the_author_meta('description');
                if ($author_description) {
                    echo '<p>' . $author_description . '</p>';
                }
            } elseif (is_date()) {
                echo '<h1>';
                if (is_year()) {
                    echo get_the_date('Y');
                } elseif (is_month()) {
                    echo get_the_date('F Y');
                } elseif (is_day()) {
                    echo get_the_date('F j, Y');
                }
                echo '</h1>';
            } else {
                echo '<h1>Blog</h1>';
                echo '<p>Latest articles and updates</p>';
            }
            ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="blog-posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog-post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('alt' => get_the_title())); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="blog-post-content">
                            <div class="blog-post-meta">
                                <span class="blog-post-date">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="blog-post-author">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <?php the_author(); ?>
                                </span>
                            </div>

                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                $category = $categories[0];
                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="blog-post-category">' . esc_html($category->name) . '</a>';
                            }
                            ?>

                            <h2 class="blog-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <?php if (has_excerpt()) : ?>
                                <div class="blog-post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php else : ?>
                                <div class="blog-post-excerpt">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </div>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="blog-post-read-more">
                                Read More →
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="blog-pagination">
                <?php
                echo paginate_links(array(
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="no-posts">
                <h2>No posts found</h2>
                <p>Sorry, no posts were found. Please check back later.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

