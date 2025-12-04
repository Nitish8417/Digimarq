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
    display: grid;
    grid-template-columns: 25% 74%;
    gap: 1%;
}

.col-md-8, .col-md-4 {
    padding: 10px;
    display: flex
;
    flex-direction: column;
    gap: 20px;
}

/* Single Post Content */


header.post-entry-header {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
article.services {
    flex-direction: column;
    display: flex
;
    gap: 20px;
}

.entry-meta {
    font-size: 14px;
    color: #888;
}
.post-thumbnail {
    display: flex;
}
.post-thumbnail img {
    width: max-content;
    height: auto;
    border-radius: 0px;
    max-height: 350px;
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
    background: #1d2327;
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 14px;
}

.post-navigation a:hover {
    background: #1d2327;
}

/* Related Posts Sidebar */
.related-posts {
    border-radius: 0px;
    color: #fff;
}

.related-post-list {
    list-style: none;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.related-post-list li {
    display: flex;
    align-items: center;
    background-color: #ff613c;
    border-bottom: 1px solid;
    padding:10px 20px;
}

.related-post-list a {
    display: flex;
    align-items: center;
    width: 100%;
    text-decoration: none;
    height: 45px;
    justify-content: center;
    color: #fff;
    font-size: 16px;
}



.related-post-list .related-post-title {
    flex: 1;
}

.related-post-title a:hover {
    color: #e74c3c;
}
.entry-content {
    font-size: 16px;
    color: #444;
    line-height: 1.8;
    margin-bottom: 30px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

section#main .entry-content ul {
    padding: 15px 20px;
    border-left: 5px solid #e74c3b;
    list-style: inside;
    box-shadow: 0 0 5px #00000021;
    width: max-content;
    background-color: #fff;
    min-width: 50%;
}

.related-post-list .related-post-title {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
span.arrow svg.size-6 {
    width: 15px;
}
li.related-post-item:hover {
    background-color: #1d2327;
}

/* Responsive Design */
@media (max-width: 992px) {
    .row {
    display: flex;
    flex-direction: column-reverse;
    gap: 1%;
}

    .col-md-8,
    .col-md-4 {
                      width: -webkit-fill-available;
        padding: 0;
    }
    .post-thumbnail img {
    width: 100%;
   
}
    section#main .entry-content ul {
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

/**/
.oss-bss-banner {
    background-color: #1d2327;
    color: #ffffff;
    text-align: center;
    position: relative;
}
.oss-bss-banner .content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
.banner-icon {
    width: 100px;
    border-radius: 50%;
}

.oss-bss-banner h2 {
  font-size: 18px;
  margin: 20px 0;
  line-height: 1.5;
}





</style>

<section id="main" class="site-main services">
    <div class="container">
        <div class="row">
           

            <!-- Related Posts/Info Sidebar -->
            <div class="col-md-4">
                <aside class="related-posts">
                        <?php
                        // Display related posts (modify query as needed)
                        $related_posts = new WP_Query( array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
                            'post__not_in' => array( get_the_ID() ),
                            'category__in' => wp_get_post_categories( get_the_ID() )
                        ) );
                    
                        if ( $related_posts->have_posts() ) :
                            echo '<ul class="related-post-list">';
                            while ( $related_posts->have_posts() ) : $related_posts->the_post();
                                // Check if the current post matches the related post
                                $active_class = ( get_the_ID() === get_queried_object_id() ) ? ' active' : '';
                                ?>
                                <li class="related-post-item<?php echo $active_class; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                                            <div class="related-post-title font-16"><?php the_title(); ?><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                    </span></div>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                            echo '</ul>';
                            wp_reset_postdata();
                        else :
                            echo '<p>No related posts found.</p>';
                        endif;
                        ?>
                    </aside>
                    <div class="oss-bss-banner">
                      <div class="content">
                        <img src="https://saddlebrown-worm-782999.hostingersite.com/wp-content/uploads/2024/11/strategic-consulting.gif" alt="Icon" class="banner-icon">
                        <h2>Are you Looking for a Top <?php the_title(); ?></h2>
                        <a href="/contact" class="btn">Find here..</a>
                      </div>
</div>

            </div>
             <!-- Main Post Content -->
            <div class="col-md-8">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="post-entry-header">
                                <?php 
                                if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    </div>
                                <?php endif; ?>

                                <h1 class="entry-title p-25"><?php the_title(); ?></h1>
                               
                            </header>
                            
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>

                           
                             
                        </article>
                         
                    <?php
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
