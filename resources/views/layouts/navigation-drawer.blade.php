<div class="h-100 bg-body-tertiary w-25">
    <h2 class="p-3">Chat Lists</h2>
        @foreach($users as $user)
        <x-chat-list-item :user="$user"></x-chat-list-item>
        @endforeach
</div>
