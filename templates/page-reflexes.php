<?php
/*
    Template Name:Reflexes
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");

$image_1 = get_field("image_section1");
$image_2 = get_field("image_section2");
$file = get_field('pdf');
$image_3 = get_field("image_section3");
?>

<header>
    <div>
        <div>
            <h1><?php the_field("title_page"); ?></h1>
            <?php the_field("tagline_page"); ?>
        </div>
        <div>
            <img src="<?php echo ($image1["sizes"]["medium_large"]); ?>" height="<?php echo ($image1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image1["alt"]) ?>">
            <img src="<?php echo ($image2["sizes"]["medium_large"]); ?>" height="<?php echo ($image2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image2["alt"]) ?>">
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrow.svg" width="17" height="20" alt="flèche vers le bas" loading="lazy">

    <!--cercle-->
    <div class="cercle1"></div>
    <div class="cercle2"></div>
    <div class="cercle3"></div>
</header>
<main>
    <section class="rfx_section1">
        <h3><?php the_field("title_section1"); ?></h3>
        <div>
            <div><?php the_field("paragraphe_section1"); ?></div>
        </div>
        <div>
            <div>
                <img src="<?php echo ($image_1["sizes"]["medium_large"]); ?>" height="<?php echo ($image_1["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_1["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_1["alt"]) ?>" loading="lazy">
                <?php the_field("list_section1"); ?>
            </div>
        </div>

        <!--cercle-->
        <div></div>
    </section>
    <section class="rfx_section2 rfx_section">
        <h3><?php the_field("title_section2"); ?></h3>
        <div>
            <img src="<?php echo ($image_2["sizes"]["medium_large"]); ?>" height="<?php echo ($image_2["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_2["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_2["alt"]) ?>" loading="lazy">
            <div><?php the_field("paragraphe_section2"); ?></div>
        </div>

        <!--cercle-->
        <div></div>
        <div></div>
    </section>
    <section class="rfx_section3 rfx_section">
        <h3><?php the_field("title_section3"); ?></h3>
        <div>
            <div><?php the_field("paragraphe_section3"); ?></div>
            <img src="<?php echo ($image_3["sizes"]["medium_large"]); ?>" height="<?php echo ($image_3["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_3["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_3["alt"]) ?>" loading="lazy">
        </div>

        <!--cercle-->
        <div></div>
        <div></div>
    </section>
    <section class="rfx_section4">
        <h3><?php the_field("title_section4"); ?></h3>
        <div><?php the_field("paragraphe_section4"); ?></div>
    </section>
    <aside class="rfx_aside">
        <p><?php the_field("cta"); ?></p>
        <button aria-label="Télécharger le pdf" onclick="window.open('<?php echo $file['url'] ?>', '_blank')"><i></i><?php the_field("cta_telechargement"); ?></button>
    </aside>
</main>

<?php
//Chargement du footer
get_footer();
?>