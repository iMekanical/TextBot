<div>
<div class="rounded-2xl border p-10 border-zinc-900 dark:border-white/50 bg-zinc-900 dark:bg-zinc-900" style="padding:1.5rem;">
<div wire:poll="refreshTextMessages" class="px-6 py-16 overflow-x-auto border-zinc-900 text-xs text-green box">
<span class="text-sm text-green-600 dark:text-green-500">
@foreach($textMessages as $textMessage)
<strong>Provider:</strong>
{{ $textMessage->provider }},
<strong>From:</strong>
{{ $textMessage->From }},
<strong>To:</strong>
{{ $textMessage->To }},
<strong>Time Received:</strong>
{{ $textMessage->time_message_received }}<br><br>
<strong>Message:</strong>
{{ $textMessage->Body }}<br><br>

<strong>Provider:</strong>
{{ $textMessage->provider }},
<strong>From:</strong>
{{ $textMessage->To }},
<strong>To:</strong>
{{ $textMessage->From }},
<strong>Time Received:</strong>
{{ $textMessage->time_message_received }}<br><br>
<strong>Message:</strong>
{{ $textMessage->Response }}<br><br>




@endforeach

<h2 class="cursor text-green-600 dark:text-green-600">Awaiting Direction...</h2>
</span>

</div>
</div>
<br><br>
<flux:button variant="primary" color="green" wire:click="send">ANALYZE</flux:button>

<br><br>
<flux:callout variant="success" icon="bolt" >
@if(empty($response))
    <flux:callout.heading class="text-zinc-900 dark:text-zinc-900 ">RESPONSE</flux:callout.heading>

    <flux:callout.text>
        <br><br>
        <flux:callout.link href="#">Send Text Response (broken for now)</flux:callout.link>
    </flux:callout.text>
@else
<br><br><br>
<flux:callout.heading>PROMPT WRAPPER</flux:callout.heading>
<flux:callout.text>
{{ $response['promptWrapper'] }}<br>
</flux:callout.text>
<flux:callout.heading>RECEIVED TEXT</flux:callout.heading>
<flux:callout.text>
{{ $response['promptBody'] }}<br>
</flux:callout.text>
<flux:callout.heading>RESPONSE</flux:callout.heading>
<flux:callout.text>
{{ $response['ai'] }}
</flux:callout.text>
@endif
</flux:callout>
</div>









