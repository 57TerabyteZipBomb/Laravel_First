<x-dash-layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <!-- Alpine modal control -->
                <div x-data="{ openAddModal: false }">
                    <!-- Toolbar -->
                    <div class="flex justify-between items-center p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div>
                            <button @click="openAddModal = true" class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 
                                       focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 
                                       dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 
                                           11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Classroom
                            </button>
                        </div>
                    </div>

                    <!-- Modal Overlay -->
                    <div x-show="openAddModal" x-transition
                        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

                            <!-- Close button -->
                            <button @click="openAddModal = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
                                ✕
                            </button>

                            <!-- Include the student-add partial -->
                            @include('admin.classroom.add')

                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Students</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classrooms as $classroom)
                                <tr
                                    class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $classroom->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <details class="group">
                                            <summary
                                                class="cursor-pointer text-primary-600 dark:text-primary-400 font-semibold hover:underline">
                                                Students ({{ $classroom->students->count() }})
                                            </summary>
                                            <div class="mt-2 ml-4 text-gray-700 dark:text-gray-300">
                                                @forelse ($classroom->students as $student)
                                                    <p class="border-b border-gray-200 dark:border-gray-700 py-1">
                                                        {{ $student->name }}
                                                    </p>
                                                @empty
                                                    <p class="italic text-gray-400">No students yet</p>
                                                @endforelse
                                            </div>
                                        </details>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</x-dash-layout>