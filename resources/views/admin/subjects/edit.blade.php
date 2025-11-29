<div x-show="openEditModal" x-transition
     class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

        <button @click="openEditModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

        <form :action="`/subject/update/${editSubject.id}`" method="POST">
            @csrf
            @method('PUT')

            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Subject</h2>

            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" x-model="editSubject.name"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description" rows="3" x-model="editSubject.description"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg w-full p-2.5 
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
                </div>
            </div>

            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 
                       focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Update Subject
            </button>
        </form>
    </div>
</div>