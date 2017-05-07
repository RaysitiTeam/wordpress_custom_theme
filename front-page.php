<?php 
/*Front page template*/
get_header();
?>

<article class="container">
    <div class="row">
        This is the Front Page content
        The Blog info is amazing, It will echo out all about our custom Blog
        <ul>
            <li>
                <p><strong>To get the Template URL Link: </strong><?php echo bloginfo('template_url');?></p>
                <p><pre>bloginfo('template_url');</pre></p>
                <p id="myReactApp"></p>
            </li>            
        </ul>
    </div>
</article>

<?php
get_footer();
?>