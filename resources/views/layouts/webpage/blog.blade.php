<section id="blog" class="blog">
  <div class="container">
    <div class="section-title">
      <h2>My Blog</h2>
      <p>Discover My Thoughts and Ideas</p>
    </div>
    <div class="row">
      <!-- Blog Posts -->
      <div class="col-lg-8">
        <div class="row">
          <!-- Example Blog Post -->
          @foreach($blog as $blogs)
          <div class="col-md-6 blog-post" data-category="{{$blogs->category->name}}">
            <div class="card">
              <img src="{{'storage/'. $blogs->blog_image}}" class="card-img-top" alt="Blog Post 1">
              <div class="card-body">
                <h5 class="card-title">{{$blogs->title}}</h5>
                <p class="card-text">{{$blogs->content}}</p>
              </div>
            </div>
          </div>
          @endforeach
          <!-- End Example Blog Post -->
        </div>
      </div>
      <!-- End Blog Posts -->
      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="sidebar">
          <h3>Featured Categories</h3>
          <ul class="list-unstyled">
            @php
            $displayedCategories = []; 
            @endphp
            @foreach($blog as $items)
                @if (!in_array($items->category->name, $displayedCategories))
                    <li><a href="#" class="category-filter" data-category="{{$items->category->name}}">{{$items->category->name}}</a></li>
                    @php
                    $displayedCategories[] = $items->category->name; 
                    @endphp
                @endif
            @endforeach
          </ul>
          <h3>Recent Posts</h3>
          <ul class="list-unstyled">
            @foreach($blog as $items)
            <li><a href="#">{{$items->content}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <!-- End Sidebar -->
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const categoryLinks = document.querySelectorAll('.category-filter');
    const blogPosts = document.querySelectorAll('.blog-post');

    categoryLinks.forEach(function(link) {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedCategory = this.getAttribute('data-category');

        blogPosts.forEach(function(post) {
          if (selectedCategory === 'All' || post.getAttribute('data-category') === selectedCategory) {
            post.style.display = 'block';
          } else {
            post.style.display = 'none';
          }
        });
      });
    });
  });
</script>
