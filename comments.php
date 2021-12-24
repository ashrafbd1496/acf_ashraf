<?php
/**
 * The template for displaying comments

 */
if ( post_password_required() ) {
    return;
}
?>
<div id="comments" class="comments-area">
    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Comment;', 'comments title', 'acf_ashraf' ), get_the_title() );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Cooment;',
                        '%1$s Comments',
                        $comments_number,
                        'comments title',
                        'acf_ashraf'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>
        <ul class="comment-list">
            <li class="comment">
            <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
            </li>     
        </ul>
        <?php the_comments_pagination( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'acf_ashraf' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'acf_ashraf' ) . '</span>',
        ) );
    endif; // Check for have_comments().
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'acf_ashraf' ); ?></p>
    <?php
    endif;

    $comment_args = array(
    
        'title_reply' => __( 'Leave a Comment', 'acf_ashraf'  ),
        'comment_field' => '<p>' .
            '<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>' .
            '</p>',
        'comment_notes_after'       => '',
        'comment_notes_before'       => ''
       

        );
     comment_form( $comment_args );
    ?>

</div><!-- #comments -->