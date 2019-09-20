
<?php get_header(); ?>

  <div id="banner">
    <h1>UW Madison Arboretum</h1>
    <h3>Restoring Land and Enriching Lives</h3>
  </div>

  <main>
    <a href="#" id="">
      <h2 class="section-heading">ALL POSTS</h2>
    </a>

    <section>

    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
        
        ?>

      <div class="card">
        <div class="card-image">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
          </a>
        </div>
        <div class="card-description">
          <a href="<?php the_permalink() ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <p><?php wp_trim_words(get_the_excerpt(), 30); ?></p>
          <a href="<?php the_permalink();?>" class="btn-readmore">Learn more</a>
        </div>
      </div>


      

      <!-- <div class="card">
        <div class="card-image">
          <a href="#">
            <img src="img/trailPic.JPG" alt="Card Image">
          </a>
        </div>
        <div class="card-description">
          <a href="#">
            <h3>The Post Title Here</h3>
          </a>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est omnis minima corrupti voluptate rem, nisi
            ipsa expedita voluptatem eaque vitae in esse voluptatibus, officia accusantium provident maxime iusto. Ut,
            adipisci?</p>
          <a href="#" class="btn-readmore">Learn more</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <a href="#">
            <img src="img/missionPic.JPG" alt="Card Image">
          </a>
        </div>
        <div class="card-description">
          <a href="#">
            <h3>The Post Title Here</h3>
          </a>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est omnis minima corrupti voluptate rem, nisi
            ipsa expedita voluptatem eaque vitae in esse voluptatibus, officia accusantium provident maxime iusto. Ut,
            adipisci?</p>
          <a href="#" class="btn-readmore">Learn more</a>
        </div>
      </div> -->

      <?php } wp_reset_query(); ?>
    </section>

   <?php get_footer(); ?>