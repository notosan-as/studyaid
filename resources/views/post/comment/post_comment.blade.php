
<div class="card-body pt-0">
    @include('error_card_list')
        <div class="card-text">
            <form method="POST" action="{{ route('comment.store') }}">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <br>
            <h5>コメント</h5>
            @forelse($post->comments as $comment)
            <p class="note note-warning">
            <strong>
                {{ $comment->user->name }} /
                {{ $comment->created_at->format('Y.m.d H:i') }} /
            </strong><br>
                {!! nl2br(e($comment->comment)) !!}
            </p>
            @empty
                <p>コメントはまだありません。</p>
            @endforelse

            <div class="form-group">
                <h5>コメントを投稿する</h5>
                <textarea name="comment" required class="form-control" rows="4" placeholder="ここに本文を入力してね">{{ old('body') }}</textarea>
            </div>
            <div class="btn-mypage">
                <button type="submit" class="btn btn-post">コメントする</button>
            </div>
            </form>
        </div>
</div>
