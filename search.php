<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
       <?php
    $s=get_search_query();
    $args = array(
                    's' =>$s
                );
        // The Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
            _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
            while ( $the_query->have_posts() ) {
               $the_query->the_post();
                     ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                     <?php
            }
        }else{
    ?>
         </div>
    </div>

    <div class="row">
        <div class="col-md-12 m-5">

            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                        <h1>Oops!</h1>
                        <h2>404 - The Content did not found</h2>
                    </div>
                    <a href="<?php echo site_url();?>">Go TO Homepage</a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <?php get_footer(); ?>
</div>