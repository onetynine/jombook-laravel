@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} 

{!! $attributes->merge(['class' => 'w-full px-2 py-1 border-gray-300 dark:border-indigo-100 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-md']) !!}>
