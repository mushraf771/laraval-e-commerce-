<x-guest-layout>
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.product-images.update',$product_image->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="product_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   Product<span class="text-red-600">*</span> </label>
                                <select id="product_id"
                                    class="py-2.5 @error('product_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="product_id">
                                    {{-- <option value="0">Select product_id</option> --}}
                                    {{-- @foreach ($products  as $product)
                                        <option value="{{ $product->id }}" class="p-1 w-full "> {{ $product->name }}
                                        </option>
                                    @endforeach --}}
                                    <option value="0">Select a product</option>
                                                @foreach($products as $product)
                                                
                                                    @if ($product_image->product_id == $product->id)
                                                        <option value="{{ $product->id }}" selected>{{ $product->name }}</option>
                                                    @else
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endif
                                                @endforeach
                                </select>
                                <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i> @error('product_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="full"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Thumbnail <span class="text-red-600"> *</span> </label>
                                <input type="file" id="thumbnail" name="thumbnail" value="{{ Storage::url($product_image->thumbnail) }}"
                                    class="@error('thumbnail') is-invalid @enderror ">
                                @error('thumbnail')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                {{-- @if ($product->images) --}}
                               
                            {{-- @endif --}}
                                <label for="full"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Full Image<span class="text-red-600"> *</span> </label>
                                <input type="file" id="full" name="full"value="{{ Storage::url($product_image->full) }}"
                                    class="@error('full') is-invalid @enderror ">
                                    
                                @error('full')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="container grid grid-cols-4 gap-4">
                            
                            {{-- @foreach($a as $image) --}}
                                <div class="p-2">
                                    Full Image
                                    <div class="p-2">
                                        <div class="card-body">
                                            <img src="{{Storage::url($product_image->full) }}" id="brandLogo" class="img-fluid" alt="img">
                                            <a class="card-link float-right text-danger" href="">
                                                <i class="fa fa-fw fa-lg fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    Thumbnail
                                    <div class="p-2">
                                        <div class="card-body">
                                            <img src="{{Storage::url($product_image->thumbnail) }}" id="brandLogo" class="img-fluid" alt="img">
                                            <a class="card-link float-right text-danger" href="">
                                                <i class="fa fa-fw fa-lg fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endforeach --}}
                        </div>
                        
                        <button type="submit"
                            class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            </button>
                    </form>
                </div>
            </div>


</x-guest-layout>
