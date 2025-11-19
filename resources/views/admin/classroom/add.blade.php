<form action="{{ route('classroom.add') }}" method="POST">
    @csrf
    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Add Classroom</h2>

    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="text" name="name" id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 
                       focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
    </div>

    <br>

    <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 
               focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        Add Classroom
    </button>
</form>