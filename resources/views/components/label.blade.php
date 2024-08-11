@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-gray-800 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
