<div>

    @foreach ($convo as $convoItem)
        {{ $convoItem['username'] }}: {{ $convoItem['message'] }} <br>
    @endforeach
    <br>
    <form wire:submit='submitMessage'>
        <x-text-input wire:model='message' />
        <button type="submit">Send</button>
    </form>

</div>
