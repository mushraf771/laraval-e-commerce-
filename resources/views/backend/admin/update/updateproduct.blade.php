<x-guest-layout>

    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <h3 class="text-2xl font-medium pb-4">Product Information</h3>
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.products.update',$product->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Mobile/Laptops">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('name')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    color <span class="text-red-600"> *</span> </label>
                                <input type="text" name="color" id="color" value="{{ old('color', $product->color) }}"
                                    class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="color">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('color')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col gap-4">
                                <div>
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price<span
                                            class="text-red-600"> *</span> </label>
                                    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                                        class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="price">
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('price')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="sale_price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sale
                                        Price<span class="text-red-600"> *</span> </label>
                                    <input type="text" name="sale_price" id="sale_price"
                                        value="{{ old('sale_price', $product->sale_price) }}"
                                        class="@error('sale_price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Sale Price">
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('sale_price')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div>
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Category <span class="text-red-600"> *</span> </label>
                                <select id="category"
                                    class="py-2.5 @error('category') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="category" >
                                    <option value="0">Select category</option>
                           
                                                @foreach($categories as $category)
                                                @if ($product->subcategory_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                </select>
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('category')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class=""><label for="brand_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand<span class="text-red-600"> *</span> </label>
                            <select id="brand_id"
                                class="@error('brand_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="brand_id">
                                <option value="0">Select a brand</option>
                                                @foreach($brands as $brand)
                                                    @if ($product->brand_id == $brand->id)
                                                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                    @else
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endif
                                                @endforeach
                            </select>
                            <div class="invalid-feedback active">
                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('brand_id') <span>{{ $message }}</span> @enderror
                            </div>
                        </div>

                            <div>
                                <label for="quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity<span
                                        class="text-red-600"> *</span> </label>
                                <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}"
                                    class="@error('quantity') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Quantity">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="weight"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight<span
                                        class="text-red-600"> *</span> </label>
                                <input type="text" name="weight" id="weight" value="{{ old('weight', $product->weight) }}"
                                    class="@error('weight') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Weight">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('weight')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex items-end justify-start gap-4">
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                            type="checkbox" id="featured" name="featured"
                                            {{ $product->status == 1 ? 'checked' : '' }}
                                            />Featured
                                    </label>
                                </div>
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                            type="checkbox" id="status" name="status" 
                                            {{ $product->featured == 1 ? 'checked' : '' }}
                                            />Status
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="mb-6">

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="description">Description <span class="text-red-600"> *</span> </label>
                            <textarea
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                rows="4" name="description" id="description">{{ old('description', $product->description) }}</textarea>
                        </div>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                            and Next</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
