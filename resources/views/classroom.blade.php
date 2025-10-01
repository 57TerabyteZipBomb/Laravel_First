<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <div class="overflow-x-auto rounded-2xl shadow-lg">
        <table class="min-w-full border-collapse text-sm text-left text-white">
            <thead>
                <tr class="bg-gray-800">
                    <th class="px-6 py-3 border-b border-gray-700">No</th>
                    <th class="px-6 py-3 border-b border-gray-700">Name</th>
                    <th class="px-6 py-3 border-b border-gray-700">Students</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700 bg-gray-900">
                @foreach ($classrooms as $classroom)
                    <tr class="hover:bg-gray-700 transition">
                        <td class="px-6 py-3">{{ $loop->iteration }}</td>
                        <td class="px-6 py-3">{{ $classroom->name }}</td>
                        <td class="px-6 py-3">
                            <details>
                                <summary> Students </summary>
                                @foreach ($classroom->students as $student)
                                    {{ $student->name }} <br>
                                @endforeach
                            </details>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>