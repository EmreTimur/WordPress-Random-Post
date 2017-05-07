//Tek Yazı Listeleme
<?php $rastgele = get_posts('numberposts=1&orderby=rand'); foreach( $rastgele as $post ) :?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h3><?php the_title(); ?></h3>
     </a>
 <?php endforeach; ?>
 
 
 //Çoklu Rastgele Yazı Listeleme
 <?php $rastgele = get_posts('numberposts=5&orderby=rand'); foreach( $rastgele as $post ) :?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h3><?php the_title(); ?></h3>
     </a>
 <?php endforeach; ?>
