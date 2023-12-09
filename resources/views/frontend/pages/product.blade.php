<x-app-layout>
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Product</p>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Vhifon</p>
    </div>
    <!-- ./breadcrumb -->
    <!-- product-detail -->
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-6 ">
        <div class="releative items-center">
            {{-- <div role="status" class="absolute -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2">
                <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
            </div> --}}
            <div class="abcd" id="abcd">
                <img id="main" src="../assets/images/products/product1.jpg" alt="product" class="w-full mainImg">
                {{-- <video id="mainvid" src="../assets/videos/a.mp4" alt="video"class="w-full hidden" ></video> --}}
            </div>
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img onmouseover="changeimage('../assets/images/products/product2.jpg')"
                    src="../assets/images/products/product2.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product3.jpg')"
                    src="../assets/images/products/product3.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product4.jpg')"
                    src="../assets/images/products/product4.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product5.jpg')"
                    src="../assets/images/products/product5.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product6.jpg')"
                    src="../assets/images/products/product6.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product2.jpg')"
                    src="../assets/images/products/product2.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product3.jpg')"
                    src="../assets/images/products/product3.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product4.jpg')"
                    src="../assets/images/products/product4.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product5.jpg')"
                    src="../assets/images/products/product5.jpg" alt="product2"class="w-full cursor-pointer border ">
                <img onmouseover="changeimage('../assets/images/products/product6.jpg')"
                    src="../assets/images/products/product6.jpg" alt="product2"class="w-full cursor-pointer border ">
                {{-- <video  onclick="videochange()" src="../assets/videos/a.mp4" alt="product2"class="w-full cursor-pointer border "></video> --}}
            </div>

        </div>
        <div class="customWrap ">
            <h2 class="text-3xl font-medium uppercase mb-2">Italian L Shape Sofa</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">In Stock</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Brand: </span>
                    <span class="text-gray-600">Apex</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">Sofa</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">BE45VGRT</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">$45.00</p>
                <p class="text-base text-gray-400 line-through">$55.00</p>
            </div>
            <p class="mt-4 text-gray-600 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eius eum
                reprehenderit dolore vel mollitia optio consequatur hic asperiores inventore suscipit, velit
                consequuntur, voluptate doloremque iure necessitatibus adipisci magnam porro.</p>

            <div class="mt-4 mb-2 flex gap-4 items-center ">
                <h3 class="text-sm text-gray-800 uppercase   font-medium">Size </h3>
                <div class="flex items-center gap-2">
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-xs" class="hidden">
                        <label for="size-xs"
                            class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XS</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-sm" class="hidden">
                        <label for="size-sm"
                            class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">S</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-m" class="hidden">
                        <label for="size-m"
                            class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">M</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-l" class="hidden">
                        <label for="size-l"
                            class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">L</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-xl" class="hidden">
                        <label for="size-xl"
                            class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XL</label>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex gap-4 items-center ">
                <h3 class="text-sm text-gray-800 uppercase font-medium">Color</h3>
                <div class="flex items-center gap-2">
                    <div class="color-selector">
                        <input type="radio" name="color" id="red" class="hidden">
                        <label for="red"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fc3d57;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="black" class="hidden">
                        <label for="black"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #000;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="white" class="hidden">
                        <label for="white"
                            class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fff;"></label>
                    </div>

                </div>
            </div>
            <div class="my-4 flex gap-4 items-center">
                <h3 class="text-sm text-gray-800 uppercase ">Quantity</h3>
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                    <div class="h-8 w-8 text-base flex items-center justify-center">4</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                </div>
            </div>
            <div class="mt-2 flex gap-4 items-center">
                <a href="#"
                    class="bg-primary border border-primary text-white px-4 md:px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
                    <i class="fa-solid fa-bag-shopping"></i> Add to cart
                </a>
                <a href="#"
                    class="border border-gray-300 text-gray-600 px-4 md:px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-primary  hover:border-primary transition">
                    <i class="fa-solid fa-heart"></i> Wishlist
                </a>
            </div>
            <hr class="my-2 bg-gray-200 text-gray-200" />
            <div class="flex gap-3 mt-4">
                <a href="#"
                    class="text-gray-400 hover:text-primary transition  h-8 w-8 rounded-full border border-gray-300 hover:border-primary flex items-center justify-center">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#"
                    class="text-gray-400 hover:text-primary transition  h-8 w-8 rounded-full border border-gray-300 hover:border-primary flex items-center justify-center">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#"
                    class="text-gray-400 hover:text-primary transition  h-8 w-8 rounded-full border border-gray-300 hover:border-primary flex items-center justify-center">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
        <!-- description -->
        <div class="container pb-8 md:pb-12 ">
            <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
            <div class="w-full pt-6">
                <div class="text-gray-600">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur necessitatibus deleniti
                        natus
                        dolore cum maiores suscipit optio itaque voluptatibus veritatis tempora iste facilis non aut
                        sapiente dolor quisquam, ex ab.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quae accusantium voluptatem
                        blanditiis sapiente voluptatum. Autem ab, dolorum assumenda earum veniam eius illo fugiat
                        possimus
                        illum dolor totam, ducimus excepturi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quia modi ut expedita! Iure
                        molestiae
                        labore cumque nobis quasi fuga, quibusdam rem? Temporibus consectetur corrupti rerum
                        veritatis
                        numquam labore amet.</p>
                </div>

                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                        <th class="py-2 px-4 border border-gray-300 ">Blank, Brown, Red</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                        <th class="py-2 px-4 border border-gray-300 ">Latex</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Weight</th>
                        <th class="py-2 px-4 border border-gray-300 ">55kg</th>
                    </tr>
                </table>
            </div>

        </div>
        <!-- ./description -->
        <!-- description -->
        <div class="container pb-8 md:pb-12 ">
            <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
            <div class="w-full pt-6">
                <div class="text-gray-600">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur necessitatibus deleniti
                        natus
                        dolore cum maiores suscipit optio itaque voluptatibus veritatis tempora iste facilis non aut
                        sapiente dolor quisquam, ex ab.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quae accusantium voluptatem
                        blanditiis sapiente voluptatum. Autem ab, dolorum assumenda earum veniam eius illo fugiat
                        possimus
                        illum dolor totam, ducimus excepturi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quia modi ut expedita! Iure
                        molestiae
                        labore cumque nobis quasi fuga, quibusdam rem? Temporibus consectetur corrupti rerum
                        veritatis
                        numquam labore amet.</p>
                </div>

                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                        <th class="py-2 px-4 border border-gray-300 ">Blank, Brown, Red</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                        <th class="py-2 px-4 border border-gray-300 ">Latex</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Weight</th>
                        <th class="py-2 px-4 border border-gray-300 ">55kg</th>
                    </tr>
                </table>
            </div>

        </div>
        <!-- ./description -->

    </div>
    <!-- ./product-detail -->
    <section class=""  id="">@include('frontend/components/releatedproduct')</section>

    <section class=""  id="">
        <div class="mt-4 container max-auto flex flex-col justify-start">
    <div class=" my-3">
        <h2 class="font-bold text-lg">Brands You Like</h2>
        <p class="text-sm">sponsored <i class="fa-solid fa-circle-info text-md text-gray-600"></i></p>
    </div>
    <div class="flex gap-6 w-full  min-h-[150px]">
        <div class="w-1/3 flex flex-start items-center gap-6 border border-red-800">
            <img src="f" alt=""class="border border-red-700 w-2/6 h-[100%]">
            <div class="">
                <h2 class="">han bhai</h2>
                <p class="">chal oye</p>
            </div>
        </div>
        <div class="w-1/3 flex flex-start items-center gap-6 border border-red-800">
            <img src="f" alt="" class="border border-red-700 w-2/6 h-[100%]">
            <div class="">
                <h2 class="">han bhai</h2>
                <p class="">chal oye</p>
            </div>
        </div>
        <div class="w-1/3 flex flex-start items-center gap-6 border border-red-800">
            <img src="f" alt="" class="border border-red-700 w-2/6 h-[100%]">
            <div class="">
                <h2 class="">han bhai</h2>
                <p class="">chal oye</p>
            </div>
        </div>

    </div>

</div>
    </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/extm.min.js') }}"></script>
    <script src="{{ asset('assets/js/my.js') }}"></script>
</x-app-layout>
