<div x-show="openDeleteModal" x-transition
    class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl w-full max-w-md shadow-lg relative">

        <button @click="openDeleteModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Delete Teacher?</h2>

        <p class="text-gray-600 dark:text-gray-300 mb-6">
            Are you sure you want to delete this teacher? This action cannot be undone.
        </p>

        <div class="flex justify-end space-x-3">
            <button @click="openDeleteModal = false"
                class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">
                Cancel
            </button>

            <form :action="'/teachers/' + deleteTeacherId" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>