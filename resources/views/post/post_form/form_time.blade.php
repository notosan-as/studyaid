
    <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
                <div>
                    <div class="font-weight-bold">
                    {{ $post->user->getData() }}
                    </div>
                    <div class="font-weight-lighter">
                    {{ $post->created_at->format('Y/m/d H:i') }}
                    </div>
                </div>

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

        <div class="card-body pt-0 pb-2">
            <ul class="list-group list-group-flush">
                @foreach( $form->posttimeget( $post->id ) as $study )
                <li class="list-group-item">・{{ $study->item->item }}  / 　{{ $study->time }}分</li>
                @endforeach
            </ul>
        </div>

        <div class="card-body pt-0 pb-2">
            <div class="card-text">
                {!! nl2br(e($post->memo)) !!}
            </div>
        </div>
    </div>
