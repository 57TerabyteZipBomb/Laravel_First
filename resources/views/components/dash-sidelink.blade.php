<!-- resources/views/components/sidelink.blade.php -->
@props(['title', 'icon' => null, 'dropdown' => false, 'links' => [], 'badge' => null])

<li>
    @if($dropdown)
        <button type="button"
            class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 
            group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-{{ Str::slug($title) }}"
            data-collapse-toggle="dropdown-{{ Str::slug($title) }}">
            @if($icon)
            <!-- icon component here -->
                <x-icon :name="$icon" class="w-6 h-6 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
            @endif
            <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ $title }}</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 
                    0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <ul id="dropdown-{{ Str::slug($title) }}" class="hidden py-2 space-y-2">
            @foreach($links as $link)
                <li>
                    <a href="#"
                        class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg 
                        transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        {{ $link }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <a href="#"
            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white 
            hover:bg-gray-100 dark:hover:bg-gray-700 group">
            @if($icon)
                <x-icon :name="$icon" class="w-6 h-6 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
            @endif
            <span class="flex-1 ml-3 whitespace-nowrap">{{ $title }}</span>
            @if($badge)
                <span class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full 
                    text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
                    {{ $badge }}
                </span>
            @endif
        </a>
    @endif
</li>