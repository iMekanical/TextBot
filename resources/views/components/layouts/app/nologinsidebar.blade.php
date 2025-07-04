<!DOCTYPE html>
<html lang="" class="dark">
<head>
@include('partials.head')
<style>
    .box {
  padding: 0 50px 0 10px;
        height: 100%;
  width: 100%;
}

.box h2 {
  display: flex;
  gap: 2px;
}

@keyframes cursor-blink {
  0% {
    opacity: 0;
  }
}

.box h2::after {
  content: "";
  width: 10px;
  height: 20px;
  background: greenyellow;
  display: inline-block;
  animation: cursor-blink 1.5s steps(2) infinite;
}
</style>
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">      

  <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900" data-show-stashed-sidebar="true">
<flux:radio.group x-data variant="segmented" x-model="$flux.appearance" position="top" align="end">
    <flux:radio value="light" icon="sun" />
    <flux:radio value="dark" icon="moon" />
</flux:radio.group>

<a href="" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
<x-app-logo /></a>

            <a href="" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <flux:badge color="indigo">  
<!-- Automatically generates initials from name -->
<flux:profile name="Brittany Johnson" />
 </flux:badge>
       
            </a>

            <a href="" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
<!-- Specify color... -->
<flux:profile name="Caleb Porzio" avatar:color="cyan" />
            </a>
            
            <a href="" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
<!-- Manually specify initials... -->
<flux:profile initials="CP" />
            </a>

<!-- Provide name only for avatar initial generation... -->
<flux:profile avatar:name="Caleb Porzio" />

            <a href="" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
         
                



<flux:navlist variant="outline">
<flux:navlist.group :heading="__('Platform')" class="grid">
<flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate></flux:navlist.item>
</flux:navlist.group>
</flux:navlist>
<flux:spacer />
<flux:navlist variant="outline">
<flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">dfalskfjasd;fl

</flux:navlist.item>




<flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">

</flux:navlist.item>
</flux:navlist>

<!-- Desktop User Menu -->
<flux:dropdown class="hidden lg:block" position="bottom" align="start">
<flux:profile/>

<flux:menu class="w-[220px]">
<flux:menu.radio.group>
<div class="p-0 text-sm font-normal">
<div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
<span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-sm">
<span
    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
>
        
</span>
</span>

<div class="grid flex-1 text-start text-sm leading-tight">
<span class="truncate font-semibold"></span>
<span class="truncate text-xs"></span>
</div>
</div>
</div>
</flux:menu.radio.group>

<flux:menu.separator />

<flux:menu.radio.group>
<flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate></flux:menu.item>
</flux:menu.radio.group>

<flux:menu.separator />
</flux:menu>
</flux:dropdown>
</flux:sidebar>




<!-- Mobile User Menu -->
<flux:header class="lg:hidden">

<flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

<flux:spacer />
  <div class="w-3xs mt-5 overflow-hidden" >
    <x-app-logo />
</div>

<flux:radio.group x-data variant="segmented" x-model="$flux.appearance" position="top" align="end">
    <flux:radio value="light" icon="sun" />
    <flux:radio value="dark" icon="moon" />
<flux:dropdown position="top" align="end">

<flux:profile/>

<flux:menu>
<flux:menu.radio.group>
<div class="p-0 text-sm font-normal">
<div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
<span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-sm">
    <span
        class="flex h-full w-full items-center justify-center rounded-sm bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
    >
        
    </span>

</span>

<div class="grid flex-1 text-start text-sm leading-tight">
<span class="truncate font-semibold"></span>
<span class="truncate text-xs"></span>
</div>
</div>
</div>
</flux:menu.radio.group>

<flux:menu.separator />
<flux:menu.radio.group>
<flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>

</flux:menu.item>
</flux:menu.radio.group>

<flux:menu.separator />

<flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">

</flux:menu.item>
</flux:menu>
</flux:dropdown>
</flux:radio.group>

</flux:header>

{{ $slot }}


@fluxScripts
</body>
</html>
