<?php get_header(); ?>

<main class="home-main">
    <div class="container">
       
        <ul class="imoveis-listagem text-justify">
<?php
            $args = array('post_type' => 'imovel');
            $loop = new WP_Query($args);
            if($loop->have_posts()){
                while($loop->have_posts()){
                    $loop->the_post();
?>
            <li class="imoveis-listagem-item col-xs-12 col-md-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </a>
            </li>
            <?php
        }
    }
?>
        </ul>
    </div>
</main>

<?php get_footer(); ?>