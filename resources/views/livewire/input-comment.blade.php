<div class="comment__section">
    <div class="post__thinking">
        <div class="post__img">
            <img src="{{asset('assets/img/favicon.png')}}" alt="">
        </div>
        <form wire:submit.prevent="insert_comment" class="thinking">
            <input wire:model.defer="comment" type="text" class="thinking__input comment__input"
                placeholder="Write a public comment...">
            <div id="div_btn" type="submit" wire:click="insert_comment" class="comment__sender">
                <i class="ri-send-plane-2-fill"></i>
            </div>
        </form>
    </div>
</div>
