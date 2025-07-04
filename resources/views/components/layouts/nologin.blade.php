<x-layouts.app.nologinsidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.nologinsidebar>
