  <footer>
        <section class="ft_widgets">
            
               <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>
                  
        </section>
        
        <section>
            <p id="copyright">mi tema @ 2017</p>
        </section>
    </footer>

<?php wp_footer();?>	
</body>
</html>