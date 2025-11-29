<div x-show="openEditModal" x-transition
     class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

        <!-- Close button -->
        <button @click="openEditModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

        <form :action="`/student/update/${editStudent.id}`" method="POST">
            @csrf
            @method('PUT')

            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Student</h2>

            <div class="grid gap-4 mb-4 sm:grid-cols-2">

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                               focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        x-model="editStudent.name">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                    <input type="date" name="birthday"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                               focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        x-model="editStudent.birthday">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
                    <select name="classroom_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                               focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        x-model="editStudent.classroom_id">
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                               focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        x-model="editStudent.email">
                </div>

                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <textarea name="address" rows="3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                               focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        x-model="editStudent.address"></textarea>
                </div>
            </div>

            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 
                       focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Update Student
            </button>
        </form>
    </div>
</div>