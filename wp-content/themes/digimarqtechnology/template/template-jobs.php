<?php
/*
Template Name: Jobs
*/
get_header(); ?>


<style>
    .jobs .awsm-job-wrap .awsm-job-listings {
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
        gap: 30px;
    }

    .jobs .awsm-job-wrap .awsm-job-listings a.awsm-job-item {
        margin: 0 !important;
        border-radius: 20px !important;
        width: 100%;
        padding: 0;
    }

    .jobs .awsm-job-wrap {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .jobs .awsm-job-wrap .awsm-grid-item {
        margin: 0;
        padding: 0 !important;
        width: 100%;
    }

    .awsm-grid-left-col {
        padding: 20px 0 0;
        background-color: #ff6f4e82;
        overflow: hidden;
        min-height: 85px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px 20px 0 0;
    }


    .awsm-job-specification-wrapper {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        margin: 0px 0 30px;
        padding: 0 20px 40px;
        background-color: #ff6f4e82;
        gap: 5px;
    }

    .awsm-job-more-container {
        padding: 0 20px 20px;
    }

    a.awsm-job-item .awsm-job-specification-item {
        color: #4c4c4c;
        display: flex;
        align-items: center;
        width: max-content;
    }

    span.awsm-job-specification-term {
        border: 1px solid;
        padding: 5px 20px;
        border-radius: 50px;
        color: #fff;
        font-size: 12px;
        width: max-content;
    }

    .awsm-job-item h2.awsm-job-post-title {
        margin: 0;
        font-size: var(--font-size-mid);
        margin-top: 0;
        margin-bottom: 0;
        font-family: var(--font-family-primary);
        font-weight: 400;
        line-height: 1.1;
        color: #fff;
    }

    .jobs span.awsm-job-more {
        color: var(--primary-color);
    }

    .awsm-filter-item-search .awsm-job-form-control {
        padding-right: 48px;
        min-height: 48px;
        border-radius: 0;
    }
</style>
<?php echo get_template_part('blocks/content', 'careers'); ?>
<section>
    <div class="container">
        <div class="jobs">
            <?php echo do_shortcode('[awsmjobs]'); ?>
        </div>
    </div>
</section>

  


<?php get_footer(); ?>