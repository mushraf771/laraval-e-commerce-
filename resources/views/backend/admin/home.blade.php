<x-guest-layout>
    <section class=" m-2 w-full  p-2">
        <div class="mb-6">
            <span class="text-3xl ">Dashboard </span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Categories
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 65 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <div class="flex justify-between">
                    <a href="{{ route('dashboard.categories.create') }}" class="">
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Add Category
                        </button>
                    </a>
                    <a href="{{ route('dashboard.categories.index') }}" class="">
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            View All
                        </button>
                    </a>
                </div>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Products
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 77 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <a href="{{ route('dashboard.products.create') }}" class=""> <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Add Product
                        </button>
                    </a>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Banners
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 65 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <a href="{{ route('dashboard.banners.create') }}" class="">
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Add Banner
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-6">
            <span class="text-3xl ">Accounts</span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">


            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Customers
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 77 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>

                    <button type="button"
                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        View All
                    </button>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Profile
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">Edit</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <button type="button"
                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Edit Profile
                    </button>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Testimonials
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 15 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <a href="{{ route('dashboard.testimonials.create') }}" class="">
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            View All
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-6">
            <span class="text-3xl ">Orders</span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Pending Orders
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 15 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <a href="{{ route('dashboard.orders.create') }}" class="">
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            View All
                        </button>
                    </a>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Completed Orders
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 15 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <button type="button"
                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        View All
                    </button>
                </div>
            </div>
            <div class="shadow border">
                <div
                    class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class=" flex justify-between">
                        <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Canceled Orders
                        </h5>
                        <span class=""> <a href="#" class=" text-primary text-xs">( 77 )</a></span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-sm my-2 font-bold">
                            John Vicky
                        </h2>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            admin@gmail.com
                        </p>
                        <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                            03028976771
                        </p>
                    </div>
                    <button type="button"
                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        View All
                    </button>
                </div>
            </div>
            {{-- <div class="shadow border">
                    <div
                        class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
    
                        <div class=" flex justify-between">
                            <h5 class="mb-2 uppercase font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                Banners
                            </h5>
                            <span class=""> <a href="#" class=" text-primary text-xs">( 65 )</a></span>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-sm my-2 font-bold">
                                John Vicky
                            </h2>
                            <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                                admin@gmail.com
                            </p>
                            <p class="mb-2 text-base text-neutral-600 dark:text-neutral-200">
                                03028976771
                            </p>
                        </div>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Add Banner
                        </button>
                    </div>
                </div> --}}
        </div>

    </section>

</x-guest-layout>
