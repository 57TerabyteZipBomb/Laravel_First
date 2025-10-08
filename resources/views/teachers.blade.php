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
                    <th class="px-6 py-3 border-b border-gray-700">Subject</th>
                    <th class="px-6 py-3 border-b border-gray-700">Phone</th>
                    <th class="px-6 py-3 border-b border-gray-700">Email</th>
                    <th class="px-6 py-3 border-b border-gray-700">Address</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700 bg-gray-900">
                @foreach ($teachers as $teacher)
                    <tr class="hover:bg-gray-700 transition">
                        <td class="px-6 py-3">{{ $loop->iteration }}</td>
                        <td class="px-6 py-3">{{ $teacher->name }}</td>
                        <td class="px-6 py-3">{{ $teacher->subject->name ?? '—' }}</td>
                        <td class="px-6 py-3">{{ $teacher->phone }}</td>
                        <td class="px-6 py-3">{{ $teacher->email }}</td>
                        <td class="px-6 py-3">{{ $teacher->address }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>