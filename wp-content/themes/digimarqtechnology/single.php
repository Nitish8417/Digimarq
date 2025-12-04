<?php
/**
 * The template for displaying single posts with related content
 *
 * @package YourThemeName
 */

get_header(); // Includes the header.php file
?>

<style>

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.col-md-8,
.col-md-4 {
    padding: 10px;
}

/* Single Post Content */
.entry-header {
    margin-bottom: 20px;
}

.entry-title {
    font-size: 28px;
    color: #222;
    font-weight: bold;
    margin-bottom: 10px;
}

.entry-meta {
    font-size: 14px;
    color: #888;
}

.post-thumbnail img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 20px;
}

.entry-content {
    font-size: 16px;
    color: #444;
    line-height: 1.8;
    margin-bottom: 30px;
}

.entry-footer {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #ddd;
}

.post-categories,
.post-tags {
    margin-bottom: 10px;
}

.post-categories a,
.post-tags a {
    text-decoration: none;
    color: #e74c3c;
    background: #f9f9f9;
    padding: 5px 10px;
    margin: 3px;
    display: inline-block;
    border-radius: 3px;
    font-size: 14px;
}

.post-categories a:hover,
.post-tags a:hover {
    background: #e74c3c;
    color: #fff;
}

/* Navigation Between Posts */
.post-navigation {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
}

.post-navigation .prev-post a,
.post-navigation .next-post a {
    text-decoration: none;
    color: #fff;
    background: #007bff;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 14px;
}

.post-navigation a:hover {
    background: #0056b3;
}

/* Related Posts Sidebar */
.related-posts {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.related-posts h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

.related-post-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.related-post-list li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
}

.related-post-thumbnail {
    width: 70px;
    height: 70px;
    margin-right: 15px;
    overflow: hidden;
    border-radius: 5px;
    flex-shrink: 0;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.related-post-thumbnail img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.related-post-title a {
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.related-post-title a:hover {
    color: #e74c3c;
}

/* Responsive Design */
@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }

    .col-md-8,
    .col-md-4 {
        width: 100%;
    }

    .post-navigation {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .post-navigation .prev-post,
    .post-navigation .next-post {
        text-align: center;
    }
}


</style>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <!-- Main Post Content -->
            <div class="col-md-8">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php 
                                if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    </div>
                                <?php endif; ?>

                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <div class="entry-meta">
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                    <span class="post-author"><?php the_author_posts_link(); ?></span>
                                </div>
                            </header>
                            
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>

                            <footer class="entry-footer">
                                <div class="post-categories">
                                    <?php the_category( ', ' ); ?>
                                </div>
                                <div class="post-tags">
                                    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
                                </div>
                            </footer>
                        </article>
                          <div class="post-navigation">
                                <div class="prev-post"><?php previous_post_link( '%link', 'Previous Post: %title' ); ?></div>
                                <div class="next-post"><?php next_post_link( '%link', 'Next Post: %title' ); ?></div>
                          </div>
                    <?php
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>

           
        </div>
    </div>
</main>

<?php get_footer(); ?>
