<?php
    $css_especifico = 'single';
    require_once('header.php');
?>

<main>
    <article>
        <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post(); 
        ?>

        <div class="single-imovel-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="container">
            <section class="chamada-principal">
                <?php the_title(); ?>
            </section>

            <section class="single-imovel-geral">
                <div class="single-imovel-descricao">
                    <?php the_content(); ?>
                </div>
            </section>
            
            <span class="single-imovel-data">
                <p>Adicionado: </p><?php the_date(); ?>
            </span>
            
        </div>
        
    <?php 
        }
    } 
    ?>
    </article>
</main>

<?php get_footer(); ?>