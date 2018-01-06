<?php get_header(); ?>

 <section id="main">
        <div id="no-slide">
        
     <?php include(TEMPLATEPATH. '/slideshow.php');?><!-- incluye en el documento el archivo nombrado-->           </div>
        
            
        <section id="articles_list">
              
              
           <?php query_posts("paged=$paged");?>
           <!--manejo de los posts o artículos -->
           <?php if (have_posts()) : while (have_posts()) : the_post();?><!--pregunta a wordpres si hay post y si hay lo ejecuta -->
           
            <article>
                  <div class="thumb"><a href="<?php the_permalink();?>">
                     <!--agregr links dinámicos -->
                      <?php if (has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); }?>
                  </a></div>
                   
                   <hgroup>
                       <h2><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></h2><!--permalink sirve para agregr el dinmismo en los links ; the_title sirve para agragar el título a nuestros articulos de manera dinámica -->
                   </hgroup>
                   <div class="date"><?php the_date();?><!--agrega la fecha de modificacion del artículo --> en <?php the_category();?></div>
                   <div class="extract"><?php  the_excerpt();?><!-- agrega el texto del artículo desde wordpress--></div>
               </article>
               
           
           
           <!-- codigo que se ejecuta cuando se encuentran artículos-->
            <?php endwhile; else: ?>
            
            <h1>no se encontrron articulos</h1>
            <!-- codigo que se ejecuta si no encuentra un artículo -->
            <?php endif;?>
              
              <div id="pagination">
                  <p>
                  <?php previous_posts_link('<- Post Anteriores ')?>
                  <?php next_posts_link('Post Siguientes ->')?>
                  
                  </p>
              </div>
              
               
               
           </section> 
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>