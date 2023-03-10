<?php
/*
    Template Name:Consultation
    */

//Chargement du header
get_header();

$image1 = get_field("image1");
$image2 = get_field("image2");
$num_emotion = 0;
$num_explication_emotion = 0;
$num_moteur = 0;
$num_explication_moteur = 0;
$num_cognitif = 0;
$num_explication_cognitif = 0;
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
    <!--SECTION 1 EMOTION-->
    <?php if (have_rows('blocages_emotion')) : ?>
        <section class="cst_section1 cst">
            <h2>Blocages émotionnels</h2>
            <div>
                <?php while (have_rows('blocages_emotion')) : the_row(); ?>
                    <article>
                        <h3><?php the_sub_field('question'); ?></h3>

                        <?php
                        $image = get_sub_field('image');
                        $num_emotion += 1;
                        ?>
                        <img src="<?php echo $image['url']; ?>" height="<?php echo ($image["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image["alt"]) ?>">
                        <div>
                            <p>Selectionnez votre profil</p>
                            <div>
                                <button aria-label="Voir les explications du blocage lorsqu'on est un adulte" onclick="document.getElementById('explications_emotion_adulte<?php echo $num_emotion; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                <button aria-label="Voir les explications du blocage lorsqu'on est un enfant" onclick="document.getElementById('explications_emotion_enfant<?php echo $num_emotion; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                <button aria-label="Voir les explications du blocage lorsqu'on est un bébé" onclick="document.getElementById('explications_emotion_baby<?php echo $num_emotion; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php while (have_rows('blocages_emotion')) : the_row(); ?>
                <div class="explications">

                    <?php
                    $image_adulte = get_sub_field('image_adultes');
                    $num_explication_emotion += 1;
                    ?>
                    <!--Explications adulte-->
                    <div id="explications_emotion_adulte<?php echo $num_explication_emotion; ?>" class="white_content">
                        <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_emotion_adulte<?php echo $num_explication_emotion; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                        <h3><?php the_sub_field('question'); ?></h3>
                        <h4>Adulte</h4>
                        <div class="cst_content">
                            <img src="<?php echo $image_adulte['url']; ?>" height="<?php echo ($image_adulte["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_adulte["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_adulte["alt"]) ?>">
                            <div>
                                <p><?php the_sub_field('explications_adultes'); ?></p>
                                <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                            </div>
                        </div>
                    </div>

                    <?php $image_enfant = get_sub_field('image_enfant'); ?>
                    <!--Explications enfant-->
                    <div id="explications_emotion_enfant<?php echo $num_explication_emotion; ?>" class="white_content">
                        <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_emotion_enfant<?php echo $num_explication_emotion; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                        <h3><?php the_sub_field('question'); ?></h3>
                        <h4>Enfant</h4>
                        <div class="cst_content">
                            <img src="<?php echo $image_enfant['url']; ?>" height="<?php echo ($image_enfant["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_enfant["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_enfant["alt"]) ?>">
                            <div>
                                <p><?php the_sub_field('explications_enfants'); ?></p>
                                <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                            </div>
                        </div>
                    </div>

                    <?php $image_baby = get_sub_field('image_baby'); ?>
                    <!--Explications bébé-->
                    <div id="explications_emotion_baby<?php echo $num_explication_emotion; ?>" class="white_content">
                        <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_emotion_baby<?php echo $num_explication_emotion; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                        <h3><?php the_sub_field('question'); ?></h3>
                        <h4>Bébé</h4>
                        <div class="cst_content">
                            <img src="<?php echo $image_baby['url']; ?>" height="<?php echo ($image_baby["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_baby["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_baby["alt"]) ?>">
                            <div>
                                <p><?php the_sub_field('explications_baby'); ?></p>
                                <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                            </div>
                        </div>
                    </div>
                    <div id="fade" class="black_overlay"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!--FIN SECTION 1 EMOTION-->
        </section>

        <!--SECTION 2 MOTEURS ET POSTURAUX-->
        <?php if (have_rows('blocages_moteur')) : ?>
            <section class="cst_section1 cst" id="decouverte">
                <h2>Blocages moteurs ou posturaux</h2>
                <div>
                    <?php while (have_rows('blocages_moteur')) : the_row(); ?>
                        <article>
                            <h3><?php the_sub_field('question'); ?></h3>

                            <?php
                            $image = get_sub_field('image');
                            $num_moteur += 1;
                            ?>

                            <img src="<?php echo $image['url']; ?>" height="<?php echo ($image["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image["alt"]) ?>">
                            <div>
                                <p>Selectionnez votre profil</p>
                                <div>
                                    <button aria-label="Voir les explications du blocage lorsqu'on est un adulte" onclick="document.getElementById('explications_moteur_adulte<?php echo $num_moteur; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                    <button aria-label="Voir les explications du blocage lorsqu'on est un enfant" onclick="document.getElementById('explications_moteur_enfant<?php echo $num_moteur; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                    <button aria-label="Voir les explications du blocage lorsqu'on est un bébé" onclick="document.getElementById('explications_moteur_baby<?php echo $num_moteur; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php while (have_rows('blocages_moteur')) : the_row(); ?>
                    <div class="explications">

                        <?php
                        $image_adulte = get_sub_field('image_adultes');
                        $num_explication_moteur += 1;
                        ?>
                        <!--Explications adulte-->
                        <div id="explications_moteur_adulte<?php echo $num_explication_moteur; ?>" class="white_content">
                            <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_moteur_adulte<?php echo $num_explication_moteur; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                            <h3><?php the_sub_field('question'); ?></h3>
                            <h4>Adulte</h4>
                            <div class="cst_content">
                                <img src="<?php echo $image_adulte['url']; ?>" height="<?php echo ($image_adulte["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_adulte["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_adulte["alt"]) ?>">
                                <div>
                                    <p><?php the_sub_field('explications_adultes'); ?></p>
                                    <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                </div>
                            </div>
                        </div>

                        <?php $image_enfant = get_sub_field('image_enfant'); ?>
                        <!--Explications enfant-->
                        <div id="explications_moteur_enfant<?php echo $num_explication_moteur; ?>" class="white_content">
                            <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_moteur_enfant<?php echo $num_explication_moteur; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                            <h3><?php the_sub_field('question'); ?></h3>
                            <h4>Enfant</h4>
                            <div class="cst_content">
                                <img src="<?php echo $image_enfant['url']; ?>" height="<?php echo ($image_enfant["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_enfant["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_enfant["alt"]) ?>">
                                <div>
                                    <p><?php the_sub_field('explications_enfants'); ?></p>
                                    <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                </div>
                            </div>
                        </div>

                        <?php $image_baby = get_sub_field('image_baby'); ?>
                        <!--Explications bébé-->
                        <div id="explications_moteur_baby<?php echo $num_explication_moteur; ?>" class="white_content">
                            <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_moteur_baby<?php echo $num_explication_moteur; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                            <h3><?php the_sub_field('question'); ?></h3>
                            <h4>Bébé</h4>
                            <div class="cst_content">
                                <img src="<?php echo $image_baby['url']; ?>" height="<?php echo ($image_baby["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_baby["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_baby["alt"]) ?>">
                                <div>
                                    <p><?php the_sub_field('explications_baby'); ?></p>
                                    <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                </div>
                            </div>
                        </div>

                        <div id="fade" class="black_overlay"></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--FIN SECTION 2 MOTEURS ET POSTURAUX-->
            </section>

            <!--SECTION 3 COGNITIF-->
            <?php if (have_rows('blocages_cognitif')) : ?>
                <section class="cst_section1 cst" id="decouverte">
                    <h2>Blocages cognitifs</h2>
                    <div>
                        <?php while (have_rows('blocages_cognitif')) : the_row(); ?>
                            <article>
                                <h3><?php the_sub_field('question'); ?></h3>

                                <?php
                                $image = get_sub_field('image');
                                $num_cognitif += 1;
                                ?>
                                <img src="<?php echo $image['url']; ?>" height="<?php echo ($image["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image["alt"]) ?>">
                                <div>
                                    <p>Selectionnez votre profil</p>
                                    <div>
                                        <button aria-label="Voir les explications du blocage lorsqu'on est un adulte" onclick="document.getElementById('explications_cognitif_adulte<?php echo $num_cognitif; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Adulte</button>
                                        <button aria-label="Voir les explications du blocage lorsqu'on est un enfant" onclick="document.getElementById('explications_cognitif_enfant<?php echo $num_cognitif; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Enfant</button>
                                        <button aria-label="Voir les explications du blocage lorsqu'on est un bébé" onclick="document.getElementById('explications_cognitif_baby<?php echo $num_cognitif; ?>').style.display='block'; document.getElementById('fade').style.display='block'">Bébé</button>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php while (have_rows('blocages_cognitif')) : the_row(); ?>
                        <div class="explications">

                            <?php
                            $image_adulte = get_sub_field('image_adultes');
                            $num_explication_cognitif += 1;
                            ?>

                            <!--Explications adulte-->
                            <div id="explications_cognitif_adulte<?php echo $num_explication_cognitif; ?>" class="white_content">
                                <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_cognitif_adulte<?php echo $num_explication_cognitif; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                                <h3><?php the_sub_field('question'); ?></h3>
                                <h4>Adulte</h4>
                                <div class="cst_content">
                                    <img src="<?php echo $image_adulte['url']; ?>" height="<?php echo ($image_adulte["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_adulte["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_adulte["alt"]) ?>">
                                    <div>
                                        <p><?php the_sub_field('explications_adultes'); ?></p>
                                        <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                    </div>
                                </div>
                            </div>

                            <?php $image_enfant = get_sub_field('image_enfant'); ?>
                            <!--Explications enfant-->
                            <div id="explications_cognitif_enfant<?php echo $num_explication_cognitif; ?>" class="white_content">
                                <h3><?php the_sub_field('question'); ?></h3>
                                <h4>Enfant</h4>
                                <div class="cst_content">
                                    <img src="<?php echo $image_enfant['url']; ?>" height="<?php echo ($image_enfant["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_enfant["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_enfant["alt"]) ?>">
                                    <div>
                                        <p><?php the_sub_field('explications_adultes'); ?></p>
                                        <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                    </div>
                                </div>
                                <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_cognitif_enfant<?php echo $num_explication_cognitif; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                            </div>

                            <?php $image_baby = get_sub_field('image_baby'); ?>
                            <!--Explications bébé-->
                            <div id="explications_cognitif_baby<?php echo $num_explication_cognitif; ?>" class="white_content">
                                <h3><?php the_sub_field('question'); ?></h3>
                                <h4>Bébé</h4>
                                <div class="cst_content">
                                    <img src="<?php echo $image_adulte['url']; ?>" height="<?php echo ($image_baby["sizes"]["medium_large-height"]) ?>" width="<?php echo ($image_baby["sizes"]["medium_large-width"]) ?>" alt="<?php echo ($image_baby["alt"]) ?>">
                                    <div>
                                        <p><?php the_sub_field('explications_adultes'); ?></p>
                                        <button aria-label="Prendre rendez-vous avec Fabienne Bollard" onclick="location.href='<?php the_field('links_rdv', 'option'); ?>'"><i></i>Prendre rendez-vous</button>
                                    </div>
                                </div>
                                <a title="Fermer la fenêtre d'explications" href="javascript:void(0)" onclick="document.getElementById('explications_cognitif_baby<?php echo $num_explication_cognitif; ?>').style.display='none';document.getElementById('fade').style.display='none'">&#10094;&nbsp;Retour</a>
                            </div>

                            <div id="fade" class="black_overlay"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </section>
                <aside class="cst_aside">
                    <!--Soulignment-->
                    <span></span>
                </aside>
</main>

<?php
//Chargement du footer
get_footer();
?>