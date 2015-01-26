<?php
/**
 * @package justphoto
 */

wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/theme-scripts.js', 'jquery', false, true );

$format = get_post_format();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-6 col-md-4 col-lg-4'); ?>>
    
        <div class="panel panel-default">
            
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
                $thumb_url = $thumb['0']; 
            ?>
            
            <?php if ( has_post_format( 'video' )): ?>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'justphoto' ) ); ?>
            <?php endif; ?>
            <?php if ( has_post_format( 'image' ) || has_post_format( 'link' ) ): ?>
            <a href="<?php echo $thumb_url; ?>" data-lightbox="gallery" data-title="<?php the_title(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?></a>

            <div class="panel-footer">
    
                <?php the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>

                    <small><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'justphoto' ) ); ?></small>
                
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'justphoto' ),
                        'after'  => '</div>',
                    ) );
                ?>

                <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                    <?php
                        /* translators: used between list items, there is a space after the comma */
                        $categories_list = get_the_category_list( __( '</span> <span class="label label-default">', 'justphoto' ) );
                        if ( $categories_list && justphoto_categorized_blog() ) :
                    ?>
                        <?php printf( __( '<span class="label label-default">%1$s', 'justphoto' ), $categories_list ); ?></span>
                    <?php endif; // End if categories ?>

                    <?php
                        /* translators: used between list items, there is a space after the comma */
                        $tags_list = get_the_tag_list( '', __( ', ', 'justphoto' ) );
                        if ( $tags_list ) :
                    ?>
                    <span class="tags-links">
                        <?php printf( __( 'Tagged %1$s', 'justphoto' ), $tags_list ); ?>
                    </span>
                    <?php endif; // End if $tags_list ?>
                <?php endif; // End if 'post' == get_post_type() ?>

                <?php edit_post_link( __( '<span class="glyphicon glyphicon-pencil"></span>', 'justphoto' ), '<span class="edit-link label label-default">', '</span>' ); ?>
                
            </div>
            <?php endif; ?>
    
        </div>

</article><!-- #post-## -->