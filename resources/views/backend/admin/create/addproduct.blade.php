<x-guest-layout>

    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <h3 class="text-2xl font-medium pb-4">Product Information</h3>
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.products.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
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
                                <input type="text" name="color" id="color" value="{{ old('color') }}"
                                    class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="color">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('color')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div>
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price<span
                                        class="text-red-600"> *</span> </label>
                                <input type="number" name="price" id="price" value="{{ old('price') }}"
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
                                <input type="text" name="sale_price" id="sale_price" value="{{ old('sale_price') }}"
                                    class="@error('sale_price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Sale Price">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('sale_price')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class=""><label for="brand_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand<span
                                        class="text-red-600"> *</span> </label>
                                <select id="brand_id"
                                    class="@error('brand_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="brand_id">
                                    <option value="0">Select Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" class=""> {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('brand_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
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
                            {{-- <div>
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                  Sub Category <span class="text-red-600"> *</span> </label>
                                <select id="category"
                                    class="py-2.5 @error('category') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="category">
                                    <option value="0" class="rounded-md p-1">Select Sub-Category</option>
                                    @foreach ($sub_categories as $category)
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
                            </div> --}}
                            <div>
                                <label for="quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity<span
                                        class="text-red-600"> *</span> </label>
                                <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"
                                    class="@error('quantity') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Quantity">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>

                                <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">size</label>
                                <select data-te-select-init  id="size" multiple name="size[]" class="bg-gray-50 @error('size') border-red-800 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{-- <option value="0">Select Size</option> --}}
                                    @foreach (App\Enums\ProductSize::cases() as $size)
                                    <option value="{{ $size->value }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                                <label data-te-select-label-ref>Select Size</label>
                                @error('size')
                                <div class="text text-sm text-red-600">{{ $message }}</div>
                                @enderror

                            </div>
                            <div>
                                <label for="weight"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight<span
                                        class="text-red-600"> *</span> </label>
                                <input type="text" name="weight" id="weight" value="{{ old('weight') }}"
                                    class="@error('weight') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Weight">
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('weight')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="images"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Image<span class="text-red-600"> *</span> </label>
                                <input type="file" id="images" name="images[]"multiple
                                    class="@error('images') is-invalid @enderror ">

                                @error('images')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="flex items-end justify-start gap-4">
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                            type="checkbox" id="featured" name="featured" />Featured
                                    </label>
                                </div>
                                <div class="">
                                    <label class="flex gap-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-4"
                                            type="checkbox" id="status" name="status" />Status
                                    </label>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="px-4 py-6">
                    <h2 class="text-3xl">Product Attribute (1)</h2>
                    <div id="attributes" class="my-4">
                        <div class="attribute grid gap-6 mb-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="attribute_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    color</label>
                                <input type="text" name="attributes[0][color]"
                                    class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="form-group">
                                <label for="attribute_price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Price</label>
                                <input type="number" step="0.01" name="attributes[0][price]"
                                    class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="form-group">
                                <label for="attribute_size"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Quantity</label>
                                <input type="text" name="attributes[0][quantity]"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    {{-- <button type="button"id="add_attribute"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                        Attributes</button> --}}

                    {{-- 89336249 --}}

                </div>
                <div class="px-4 py-6">
                    <h2 class="text-3xl">Product Attribute (2)</h2>
                    <div id="attributes" class="my-4">

                        <div class="attribute grid gap-6 mb-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="attribute_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    color</label>
                                <input type="text" name="attributes[1][color]"
                                    class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="form-group">
                                <label for="attribute_price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Price</label>
                                <input type="number" step="0.01" name="attributes[1][price]"
                                    class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="form-group">
                                <label for="attribute_size"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                    Quantity</label>
                                <input type="text" name="attributes[1][quantity]"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    {{-- <button type="button"id="add_attribute"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                        Attributes</button> --}}

                    {{-- 89336249 --}}

                </div>
                <div class="mb-6 px-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="description">Description <span class="text-red-600"> *</span> </label>
                    <textarea
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        rows="4" name="description" id="description">{{ old('description') }}</textarea>
                </div>

                <button type="submit"
                    class="text-white m-4 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Product</button>


                    {{-- <script>
                        let attributeIndex = 1;
                        let addAttributeButton = document.getElementById("add_attribute");
                        let attributesContainer = document.getElementById("attributes");

                        addAttributeButton.addEventListener("click", function() {
                            let attribute = document.createElement("div");
                            attribute.classList.add("attribute");
                            attribute.innerHTML = `
                            <div id="attributes" class="my-4">
                                                <div class="attribute grid gap-6 mb-6 md:grid-cols-2">
                                                    <div class="form-group">
                                                        <label for="attribute_name"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product color</label>
                                                        <input type="text" name="attributes[${attributeIndex}][color]" class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="attribute_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                                        <input type="number" step="0.01" name="attributes[${attributeIndex}][price]"
                                                            class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="attribute_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Quantity</label>
                                                        <input type="text" name="attributes[${attributeIndex}][quantity]" class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                                    </div>
                                                </div>
                                            </div>`;
                            attributesContainer.appendChild(attribute);
                            attributeIndex++;
                        });
                    </script>
                 --}}

                </form>


            </div>
        </div>
    </div>
    </div>












</x-guest-layout>
