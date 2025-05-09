<x-layout.app>


    <main class="h-screen w-screen bg-(--color-container)">

        <section class="flex items-center justify-center h-2/10">
            <img src="{{ asset('images/assets/logo.png') }}" alt="Logo">
        </section>

        <section class="flex flex-col w-3/4 mx-auto h-4/6">
            <div class="flex justify-between">
                <div>
                    <h2 class="font-(family-name:--space) font-bold text-xl">Links</h2>
                    <div class="w-8 h-0.5 mt-0.5 bg-(--orange)"></div>
                </div>

                <div class="flex gap-3 bg-(--scure) text-(--orange) rounded-3xl p-3.5 hover:text-white transition-all duration-100 font-(family-name:--outfit) font-bold">
                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" class="" xmlns="http://www.w3.org/2000/svg" color="white">
                        <path d="M8 12H12M16 12H12M12 12V8M12 12V16" stroke="#ED712E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#ED712E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                    </svg>

                    <a href="">Adicionar Link</a>
                </div>
            </div>

            <ul class="flex flex-col gap-3 w-full  max-h-4/6 ">
                @foreach ($links as $link)

                    <li class="mt-10 pl-6 flex gap-7 items-center">
                        <svg width="34px" height="48px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="white">
                            <path d="M12 21L12 3M12 3L20.5 11.5M12 3L3.5 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>


                        <svg width="34px" height="48px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="white">
                            <path d="M12 3L12 21M12 21L20.5 12.5M12 21L3.5 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>

                        <div class="bg-(--scure) w-3/4 flex gap-10 p-4 rounded-3xl">
                            <div class="bg-red-500 w-16 h-16 rounded-xl"></div>

                            <div class="w-2/3 font-(family-name:outfit)  font-semibold">
                                <div class="flex gap-4">
                                    <h4 class=" text-base" >{{ $link->name }}</h4>
                                    <span class="badge badge-info text-xs">{{ $link->streaming }}</span>
                                </div>
                                <p class="font-normal text-sm text-(--gray)">{{ $link->link }}</p>
                            </div>

                            <div class="flex items-center gap-7">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="white">
                                    <path d="M20 9L18.005 20.3463C17.8369 21.3026 17.0062 22 16.0353 22H7.96474C6.99379 22 6.1631 21.3026 5.99496 20.3463L4 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path><path d="M21 6L15.375 6M3 6L8.625 6M8.625 6V4C8.625 2.89543 9.52043 2 10.625 2H13.375C14.4796 2 15.375 2.89543 15.375 4V6M8.625 6L15.375 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                </svg>

                                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="white">
                                    <path d="M14.3632 5.65156L15.8431 4.17157C16.6242 3.39052 17.8905 3.39052 18.6716 4.17157L20.0858 5.58579C20.8668 6.36683 20.8668 7.63316 20.0858 8.41421L18.6058 9.8942M14.3632 5.65156L4.74749 15.2672C4.41542 15.5993 4.21079 16.0376 4.16947 16.5054L3.92738 19.2459C3.87261 19.8659 4.39148 20.3848 5.0115 20.33L7.75191 20.0879C8.21972 20.0466 8.65806 19.8419 8.99013 19.5099L18.6058 9.8942M14.3632 5.65156L18.6058 9.8942" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </li>


            @endforeach
            </ul>


        </section>

        @include('components.nav')

    </main>


</x-layout.app>
