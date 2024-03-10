<x-layout>
    @section('content')
        <section class="px-6 py-8 mt-8">
            <main class="max-w-lg mx-auto border border-gray-200 bg-gray-100 rounded-xl p-6">
                <h1 class="text-center font-bold text-xl">Register !!</h1>
                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="Name">
                            Name</label>
                        <input class="border border-gray-600 p-2 w-full"
                               type="text"
                               name="Name"
                               id="Name"
                               required>
                    </div>
                    <div class="mb-6 center">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="username">
                            username</label>
                        <input class="border border-gray-600 p-2 w-full"
                               type="text"
                               name="username"
                               id="username"
                               required>
                    </div>
                    <div class="mb-6 center">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="email">
                            email</label>
                        <input class="border border-gray-600 p-2 w-full"
                               type="email"
                               name="email"
                               id="email"
                               required>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="password">
                            password</label>
                        <input class="border border-gray-600 p-2 w-full"
                               type="password"
                               name="password"
                               id="password"
                               required>
                    </div>
                    <div class="mb-6">
                        <button class=" bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </main>

        </section>
    @endsection
</x-layout>
