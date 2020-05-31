<div class="top-area">
          <div class="title-top-area">
              <p>Browse Available Books</p>
          </div>
          <div class="browse-titles">
              <a href="<?php echo site_url('/allBooks');?>" class="<?php echo (uri_string() == 'allBooks')?'active':'' ?>">All Books</a>
              <a href="<?php echo site_url('/mostRecent');?>" class="<?php echo (uri_string() == 'mostRecent')?'active':'' ?>">Most Recent</a>
              <a href="<?php echo site_url('/mostPopular');?>" class="<?php echo (uri_string() == 'mostPopular')?'active':'' ?>">Most Popular</a>
              <a href="<?php echo site_url('/freeBooks');?>" class="<?php echo (uri_string() == 'freeBooks')?'active':'' ?>">Free Books</a>
              <div class="search-button ">
                  <form action="<?php echo site_url('/searchBooks'); ?>" method="post">
                    <input type="text" name="search" id="search" placeholder="Enter Keywords" Required>
                    <input type="submit" value="enviar" id="btn-search" hidden >
                  </form>
              </div>
          </div> 
      </div>
      