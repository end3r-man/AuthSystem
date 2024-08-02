@props([
    'class' => null,
    'url' => null,
    'icon' => null,
    'tag' => 'button',
    'click' => null,
])

@php($tag = $url ? 'a':$tag)

@if ($click)
    @php($attributes = $attributes->merge(['wire:click' => $click]))
@endif

@if ($url)
  @php($attributes = $attributes->merge(['href' => $url]))
@endif

<{{ $tag }} wire:navigate {{ $attributes->merge(['class' => "inline-flex items-center justify-center text-4xl p-2 hover:bg-[#EEEEEE] hover:text-[#194350] rounded-md"]) }}>
    <iconify-icon icon="{{$icon}}"></iconify-icon>
</{{ $tag }}>