<div class="card post-card">
    <div class="card-header font-weight-bold post-header d-flex flex-row align-items-center">
    <i class="fas fa-user-circle"></i> {{ $post->user->getData() }}/{{ $post->created_at->format('Y/m/d H:i') }}
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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>記事を削除する</a>
                        </div>
                    </div>
                </div>
                <!-- dropdown -->

                <!-- modal -->
                <div id="modal-delete-{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('post.destroy', ['post' => $post]) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            削除します。よろしいですか？
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                            <button type="submit" class="btn btn-danger">削除</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
            @endif
    </div>
    <div class="card-footer post-footer">
        {!! nl2br(e($post->memo)) !!}
    </div>
    <ul class="comment">
    <li><a href="{{ route('post.show',['post' => $post]) }}" class="btn-comment">コメント：{{ $post->comments->count() }}件</a></li>
    </ul>
</div>
