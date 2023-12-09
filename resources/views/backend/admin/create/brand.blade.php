<x-guest-layout>

    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.brands.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Apple/Rolex">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="logo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Logo <span class="text-red-600"> *</span> </label>
                                <input type="file" id="logo" name="logo"
                                    class="@error('logo') is-invalid @enderror ">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="">
                                <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    <input
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                        type="checkbox" id="top_brand" name="top_brand" />Top Brand
                                 </label>
                            </div>
                        </div>
                        
                        <button type="submit"
                            class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            </button>
                    </form>
                </div>
            </div>


</x-guest-layout>
