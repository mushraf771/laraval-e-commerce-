<x-guest-layout>
    
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.sub-categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Category <span class="text-red-600"> *</span> </label>
                                <select id="category"
                                    class="py-2.5 @error('category') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="category">
                                    <option value="0" class="rounded-md p-1">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" class="p-1 rounded-md">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('categories')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    Image <span class="text-red-600"> *</span> </label>
                                <input type="file" id="image" name="image"
                                    class="@error('image') is-invalid @enderror ">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- <div>
                                <label for="parent"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parent
                                    Category <span class="text-red-600"> *</span> </label>
                                <select id=parent
                                    class="@error('parent_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="parent_id">
                                    <option value="1">Select a parent category</option>
                                    @foreach ($categories as  $category)
                                        <option value="{{ $category->id }}" class=""> {{ $category->name }} {{ $category->id }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    {{ $message }}
                                @enderror
                            </div> --}}   
                            <div class="flex items-end justify-start gap-4">
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                            type="checkbox" id="featured" name="featured" />Featured Category
                                     </label>
                                </div>
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4" type="checkbox" id="menu"
                                            name="menu" />Show in Menu
                                     </label>
                                </div>

                            </div>
                            
                        </div>
                        <div class="mb-6">
                           
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="description">Description <span class="text-red-600"> *</span> </label>
                                <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="4" name="description" id="description">{{ old('description') }}</textarea>
                        </div>
                         <button type="submit" class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Category</button>
                    </form>
                </div>
            </div>

            
</x-guest-layout>
