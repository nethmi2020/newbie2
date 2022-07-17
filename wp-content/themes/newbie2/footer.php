
       
<div class="row">
    <div class="col md-41">
        <nav class="site-nav-footer">
            <?php
                $args=array(
                    'theme_location'=>'footer'

                );
                ?>
            </nav>
     <?php wp_nav_menu($args); ?>
    </div>
    <div class="col md-42">
        <h2 class="f-h2">Location</h2>
        <ul>
            <li>Monday:9.am-5.pm</li>
            <li>Saturday:10-pm-4pm</li>
            <li>Sunday:closed</li>
        </ul>
    </div>
    <div class="col md-43">
    <h2 class="f-h2">Service Area</h2>
        <ul>
            <li>City state,00001</li>
            <li>City state,00002</li>
            <li>City state,00003</li>
            <li>City state,00004</li>
            <li>City state,00005</li>
            <li>City state,00006</li>
        </ul>
    </div>
    <!-- <p class=""><?php bloginfo('name') ?> - &copy; <?php echo date('Y') ?></p> -->
</div>
      
             
        
    


<?php wp_footer();?> 
<script src="http://localhost/newbie2/wp-content/themes/newbie2/custom_scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>