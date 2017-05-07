<?php
/*Main Template File*/
    get_header();
?>
	<div class="container row">
		<h1><?php echo get_the_title() . "Pramod"; ?></h1>
        <h2>Pramod</h2>
        <main class="main_content">
            <?php 
                //Start the loop
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
            <?php
                if(is_front_page()):
                    echo is_front_page();
                endif;
            ?>
        </main>
	</div>


<?php 
    get_footer();
?>
