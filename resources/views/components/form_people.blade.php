<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastros > Pessoas >Novo cadastro') }}
        </h2>
    </x-slot>



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
    <section class="py-3">
        <div class="container px-4 mx-auto">
            <div class="p-8 dark:bg-gray-800 bg-white rounded-xl">
                <div class="flex flex-wrap items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">


                    <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0">
                        <h4 class="text-2xl font-bold tracking-wide dark:text-gray-300 text-gray-900 mb-1">Personal info</h4>
                        <p class="text-sm dark:text-gray-300 text-gray-900">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="w-full sm:w-auto px-4">
                        <div>
                            <a class="inline-block py-2 px-4 mr-3 text-xs text-center font-semibold leading-normal text-gray-400 bg-gray-600 hover:bg-gray-700 rounded-lg transition duration-200" href="#">Cancel</a>
                            <a class="inline-block py-2 px-4 text-xs text-center font-semibold leading-normal text-blue-50 bg-blue-500 hover:bg-blue-600 rounded-lg transition duration-200" href="#">Save</a></div>
                    </div>
                </div>
                <form action="">
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Name*</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <div class="flex flex-wrap items-center -mx-3">
                                    <div class="w-full sm:w-1/2 px-3 mb-3 sm:mb-0">
                                        <input required class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-1" type="text" placeholder="John">
                                    </div>
                                    <div class="w-full sm:w-1/2 px-3">
                                        <input required class="block py-4 px-3 w-full text-sm dark:text-gray-300 text-black placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dark:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-2" type="text" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Email address</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <input class=" block py-4 px-3 w-full text-sm dark:text-gray-300 text-gray-900 placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-black dar:hover:border-white focus:border-green-500 rounded-lg" id="formInput1-3" type="text" placeholder="johndoe@trizzle.ui">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-6 sm:mb-0">
                            <span class="block text-sm font-medium dark:text-gray-300 text-gray-900">Photo</span>
                            <span class="text-xs text-gray-400">Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="flex flex-wrap sm:flex-nowrap max-w-xl">
                                <div class="flex-shrink-0 w-20 h-20 mb-4 mr-4 rounded-full">
                                    <img src="trizzle-assets/images/avatar-photo-form.png" alt="">
                                </div>
                                <div class="w-full py-8 px-4 text-center border-dashed border border-gray-400 hover:border-white focus:border-green-500 rounded-lg">
                                    <div class="relative group h-14 w-14 mx-auto mb-4">
                                        <div class="flex items-center justify-center h-14 w-14 bg-blue-500 group-hover:bg-blue-600 rounded-full">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.71 5.71002L9 3.41002V13C9 13.2652 9.10536 13.5196 9.29289 13.7071C9.48043 13.8947 9.73478 14 10 14C10.2652 14 10.5196 13.8947 10.7071 13.7071C10.8946 13.5196 11 13.2652 11 13V3.41002L13.29 5.71002C13.383 5.80375 13.4936 5.87814 13.6154 5.92891C13.7373 5.97968 13.868 6.00582 14 6.00582C14.132 6.00582 14.2627 5.97968 14.3846 5.92891C14.5064 5.87814 14.617 5.80375 14.71 5.71002C14.8037 5.61706 14.8781 5.50645 14.9289 5.3846C14.9797 5.26274 15.0058 5.13203 15.0058 5.00002C15.0058 4.86801 14.9797 4.7373 14.9289 4.61544C14.8781 4.49358 14.8037 4.38298 14.71 4.29002L10.71 0.290018C10.6149 0.198978 10.5028 0.127613 10.38 0.0800184C10.1365 -0.0199996 9.86346 -0.0199996 9.62 0.0800184C9.49725 0.127613 9.3851 0.198978 9.29 0.290018L5.29 4.29002C5.19676 4.38326 5.1228 4.49395 5.07234 4.61577C5.02188 4.73759 4.99591 4.86816 4.99591 5.00002C4.99591 5.13188 5.02188 5.26245 5.07234 5.38427C5.1228 5.50609 5.19676 5.61678 5.29 5.71002C5.38324 5.80326 5.49393 5.87722 5.61575 5.92768C5.73757 5.97814 5.86814 6.00411 6 6.00411C6.13186 6.00411 6.26243 5.97814 6.38425 5.92768C6.50607 5.87722 6.61676 5.80326 6.71 5.71002ZM19 10C18.7348 10 18.4804 10.1054 18.2929 10.2929C18.1054 10.4804 18 10.7348 18 11V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8947 17.2652 18 17 18H3C2.73478 18 2.48043 17.8947 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V11C2 10.7348 1.89464 10.4804 1.70711 10.2929C1.51957 10.1054 1.26522 10 1 10C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11V17C0 17.7957 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7957 20 17V11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10Z" fill="#E8EDFF"></path>
                                            </svg>
                                        </div>
                                        <input class="absolute top-0 left-0 h-14 w-14 opacity-0" id="formInput1-4" type="file" name="filephoto">
                                    </div>
                                    <p class="font-semibold leading-normal mb-1">
                                        <span class="text-blue-500">Click to upload a file</span>
                                        <span class="text-gray-300">Input</span>
                                    </p>
                                    <span class="text-xs text-gray-300 font-semibold">PNG, JPG, GIF or up to 10MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                            <span class="text-sm font-medium dark:text-gray-300 text-gray-900">Country</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl">
                                <div class="relative block px-3 w-full text-sm text-gray-600 dark:text-gray-100 placeholder-gray-600 font-medium border border-gray-400 hover:border-black dark:hover:border-white focus-within:border-green-500 rounded-lg">
                                    <select class="w-full py-4 bg-transparent focus:outline-none" id="formInput1-6" name="">
                                        <option class="bg-gray-500" value="1">United States</option>
                                        <option class="bg-gray-500" value="1">United States2</option>
                                        <option class="bg-gray-500" value="1">United States3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                        <div class="w-full sm:w-1/3 px-4 mb-5 sm:mb-0">
                            <span class="block mt-2 text-sm font-medium text-black dark:text-gray-100">Bio</span>
                            <span class="text-xs text-black dark:text-gray-400">Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="w-full sm:w-2/3 px-4">
                            <div class="max-w-xl"><textarea class="block h-56 py-4 px-3 w-full text-sm text-black dark:text-gray-100 placeholder-gray-600 font-medium outline-none bg-transparent border border-gray-400 hover:border-white focus:border-green-500 rounded-lg resize-none" id="formInput1-9" type="text" placeholder="Lorem ipsum dolor sit amet"></textarea></div>
                        </div>
                    </div>
                </form>
            </div>
         </div>
            </section>
        </div>


</x-app-layout>
