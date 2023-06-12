<div class="comment__section">
    <div class="post__thinking">
        <div class="post__img">
            <img src="{{asset('images/user-profile/'.$user->photo)}}" alt="">
        </div>
        <form wire:submit.prevent="insert_comment" class="thinking">
            <input wire:model.defer="comment" type="text" required class="thinking__input comment__input"
                placeholder="Write a public comment...">
            <div id="div_btn" type="submit" wire:click="insert_comment" class="comment__sender">
                <i class='bx bxs-send'></i>
            </div>
        </form>
    </div>
</div>