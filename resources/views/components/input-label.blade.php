@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-rose-900']) }}>
    {{ $value ?? $slot }}
</label>
