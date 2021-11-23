<div class="card post-card">
    <div class="card-header font-weight-bold post-header d-flex flex-row align-items-center">
    <i class="fas fa-user-circle"></i> {{ $post->user->getData() }}　/　{{ $post->created_at->format('Y/m/d H:i') }}
    @if( Auth::id() === $post->user_id )
    <!-- dropdown -->
        <div class="ml-auto card-text">
            <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                    <i class="fas fa-ellipsis-v"></i>
                </button></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('post.edit', ['post' => $post]) }}">
                        <i class="fas fa-pen mr-1"></i>記事を更新する</a>
                </div>
            </div>
        </div>
        <!-- dropdown -->
    @endif
    </div>
    <div class="card-body">
        <ul class="defaultlist list4">
            @foreach( $form->posttimeget( $post->id ) as $study )
                <li>{{ $study->item->item }}　-　{{ $study->time }}分</li>
            @endforeach
        </ul>
    </div>
    <div class="card-footer post-footer">
        {!! nl2br(e($post->memo)) !!}
    </div>
</div>
