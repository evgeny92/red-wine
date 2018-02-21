<div class="Categories">
    <h3>Categories</h3>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ url('blog/category', $category->slug_cat)  }}">{{ $category->name }} <span class="badge">{{ $category->post->count() }}</span></a>
            </li>
        @endforeach
    </ul>
</div>