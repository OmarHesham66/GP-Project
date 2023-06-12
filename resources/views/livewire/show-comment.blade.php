<div>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-comment">
                    <h3 class="text-success">Comments</h3>
                    <hr />
                    @foreach($comments as $comment)
                    <ul class="comments">
                        <li class="clearfix">
                            <img src="{{asset('images/user-profile/'.$photo)}}" class="avatar" alt="">
                            <div class="post-comments">
                                <p class="meta">{{$comment->created_at}} <a href="#">{{$comment->user->name}}</a>
                                    <i class="pull-right"><a href="#"></a></i>
                                </p>
                                <p>
                                    {{$comment->text}}
                                </p>
                            </div>
                            {{-- @foreach ($replys as $reply)
                            <div class="post-comments">
                                <p class="meta">{{$reply->user->name}} Replies to <a
                                        href="#">{{$comment->user->name}}</a> says :
                                    <i class="pull-right"><a href="#"><small>Reply</small></a></i>
                                </p>
                                <p>
                                    {{$comment->text}}
                                </p>
                            </div>
                            @endforeach --}}
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="comment__section">
        <div class="post__thinking">
            <div class="post__img">
                <img src="{{asset('images/user-profile/'.$photo)}}" alt="">
            </div>
            <div class="thinking">
                <input type="text" name="text" wire:model="newComment" wire:keydown.enter="storeComment"
                    class="thinking__input comment__input" placeholder="Write a public comment...">
                <div class="comment__sender">
                    <i wire:click.prevent="storeComment" class='bx bxs-send'></i>
                </div>
            </div>
        </div>
    </div>
</div>












{{--<div>--}}
    {{-- <div class="comment__section">--}}
        {{-- <div class="post__thinking">--}}
            {{-- <div class="post__img">--}}
                {{-- <img src="{{asset('assets/img/perfil.png')}}" alt="">--}}
                {{-- </div>--}}

            {{-- <div class="thinking">--}}
                {{-- <input type="text" name="newComment" class="thinking__input comment__input" --}} {{--
                    wire:model="newComment" wire:keydown.enter="storeComment"
                    placeholder="Write a public comment...">--}}
                {{-- <div class="comment__sender">--}}
                    {{-- <button wire:click.prevent="storeComment" type="submit"
                        class='bx bxs-send'></button>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</div>--}}
