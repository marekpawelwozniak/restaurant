<?php get_header(); ?>
<section class="container">
    <div class="inner-header text-center">
        <h1 class="">Witaj w naszej restauracji</h1>
        <h2 class="h4">Od prawie 30 lat istniejemy w branży gastronomicznej, a od 2012 roku działamy pod marką Zajazd u Dziadka.</h2>
        <p class="p-5">Lokal otwarty jest 7 dni w tygodniu i zachwyci Państwa nie tylko nowoczesnym, przytulnym wnętrzem, ale także wyśmienitymi daniami kuchni polskiej oraz europejskiej.
        Rezerwacje stolików oraz składanie zamówień pod numerem telefonu: <strong>567567567</strong></p>
    </div>
</section>
<section class="container">
    <div class="col-12 text-center">
        <?php if(get_field("under_header_section")){ ?>
            <div class="p-5"><?php the_field("under_header_section"); ?></div>
        <?php } ?>
        <?php if(get_field("under_header_image")){ ?>
            <img class="w-100 p-3" src="<?php echo get_field("under_header_image")['url']; ?>">
        <?php } ?>
    </div>
</section>
<section class="container">
    <h2 class="text-center animate__animated animate__bounce p-5" >Nasze potrawy</h2>
    <?php
    if( have_rows('meals') ): ?>
        <div class="d-flex p-5y flex-wrap justify-content-center">
            <?php while( have_rows('meals') ) : the_row(); ?>
                <div class="col-xl-4 col-lg-6 col-md-12 d-flex callout-subtitle animate__animated animate__zoomInDown">
                    <div class="inner p-3">
                    <?php if(get_sub_field("image")){ ?>
                        <img class="w-100 " data-bs-toggle="modal" src="<?php echo get_sub_field('image')['url']; ?>" alt=""  data-bs-target="#exampleModal-<?php echo get_row_index(); ?>">
                    <?php } ?>
                    <div class="inner-text d-flex justify-content-center p-3">
                        <?php if(get_sub_field("description")){ ?>
                            <h3><?php the_sub_field('description'); ?>
                                <span><?php the_sub_field('price'); ?></span>
                            </h3>
                        <?php } ?>
                    </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-<?php echo get_row_index(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                            </div>
                            <img class="w-100" data-bs-toggle="modal" src="<?php echo get_sub_field('image')['url']; ?>">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
