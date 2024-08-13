@php
    $user = filament()->auth()->user();
    $merchant = $user->merchant;
    $branch = $merchant->branch;
    $hasBranch = $merchant->branch()->exists();
@endphp

<x-filament-widgets::widget class="">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            {{-- <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert"> --}}
            @if (!$hasBranch)
                <span class="sr-only">Info</span>
                <div>
                    <p class="text-lg font-medium text-gray-900 dark:text-white">Welcome aboard!</p>
                    <p class="mt-2 text-base text-gray-700 dark:text-gray-400">To get started, please complete the
                        following
                        steps:</p>
                    <ul class="mt-3 list-disc list-inside text-sm text-gray-600 dark:text-gray-400">
                        <li>Create at least one branch for your business.</li>
                        <li>Add at least one product to your branch.</li>
                    </ul>
                    <p class="mt-3 text-xs text-gray-600 dark:text-gray-400">Your submission will be reviewed within a
                        few
                        working days. Once approved, your branch will be featured on our website, allowing customers to
                        book
                        with confidence. If you need assistance or have any questions,
                        feel free to reach out to our support team at support@jombook.my</p>

                </div>
                {{-- </div> --}}
            @else
                <span class="sr-only">Info</span>
                <div>
                    <p class="text-lg font-medium text-gray-900 dark:text-white">Jombook.my</p>
                    <p class="text-md text-gray-900 dark:text-white">Your No. 1 Solution to Host Reservation.
                    </p>
                    <p class="mt-3 text-xs text-gray-600 dark:text-gray-400">

                        <a href="https://yourdocumentationlink.com" target="_blank"
                            class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z" />
                            </svg>
                            <span> Documentation -</span>
                        </a>
                        <a href="https://yourdocumentationlink.com" target="_blank"
                            class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z" />
                            </svg>
                            <span> Terms & Conditions -</span>
                        </a>
                        <a href="https://yourdocumentationlink.com" target="_blank"
                            class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z" />
                            </svg>
                            <span> Roadmap</span>
                        </a>
                    </p>

                </div>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
