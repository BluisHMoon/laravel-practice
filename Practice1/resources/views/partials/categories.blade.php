<h3 class="sidebar-title">Categories</h3>
<div class="sidebar-item categories">
    <ul>
        @foreach ($categories as $category)
            <li><a href="#">{{ $category->title }} <span>({{ $category->posts_count }})</span></a></li>
        @endforeach
    </ul>
</div><!-- End sidebar categories-->
