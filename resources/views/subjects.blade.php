<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="overflow-x-auto rounded-2xl shadow-lg">
        <table class="min-w-full border-collapse text-sm text-left text-white">
            <thead>
                <tr class="bg-gray-800">
                    <th class="px-6 py-3 border-b border-gray-700">No</th>
                    <th class="px-6 py-3 border-b border-gray-700">Name</th>
                    <th class="px-6 py-3 border-b border-gray-700">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700 bg-gray-900">
                @foreach ($subjects as $subject)
                    <tr class="hover:bg-gray-700 transition">
                        <td class="px-6 py-3">{{ $loop->iteration }}</td>
                        <td class="px-6 py-3">{{ $subject->name }}</td>
                        <td class="px-6 py-3">
                            <details>
                                <summary> description </summary>
                                {{ $subject->description }}
                            </details>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>