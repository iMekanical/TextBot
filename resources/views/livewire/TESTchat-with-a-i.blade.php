<div class="p-4 max-w-xl mx-auto">
    <div class="mb-4">
        <textarea wire:model="userInput" class="w-full p-2 border rounded" rows="4" placeholder="Ask something..."></textarea>
    </div>

    <div class="mb-4">
        <label class="mr-2">Mode:</label>
        <select wire:model="mode" class="border p-1 rounded">
            <option value="curl">Curl</option>
            <option value="api">OpenAI SDK</option>
        </select>
    </div>

    <div class="mb-4">
        <button wire:click="send" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
    </div>

    @if($response)
        <div class="mt-4 p-4 bg-gray-100 border rounded">
            <strong>Response:</strong>
            <p>{{ $response }}</p>
        </div>
    @endif
</div>
