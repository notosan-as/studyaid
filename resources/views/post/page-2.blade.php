<div class="container">
        <ul class="article-list">
            @foreach($posts as $post)

            <!-- 学習時間の投稿があるか判定 -->
            @if( in_array ( $post->id, array_column( $records, 'record_id' )))
                @include('post.post_form.form_time')
            @else
                @include('post.post_form.form_only')
            @endif

            @endforeach
        </ul>
        <div class="navigation"><a href="post/page-2.blade.php">続きを表示</a></div>
    </div>
