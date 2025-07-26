@extends('components.mainBody')
@section('content')
@include('components.parts.newsList')
    <section class="text-gray-600 body-font">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <p class="mb-2 text-center font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>
                <h2
                    class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                        Revolutionary way to build the web
                </h2>
                <p
                    class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                    This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.
                </p>
            </div>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($settingList as $setting_list)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden"
                            href="/setting/detail/{{ $setting_list->setting_id }}"
                        >
                            <img
                                alt="ecommerce"
                                class="object-cover object-center w-full h-full block"
                                src={{ $setting_list->setting_img_main }}
                                alt={{ $setting_list->setting_img_main }}
                            >
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $setting_list->setting_title }}</h2>
                            <p class="mt-1">{{ $setting_list->create_user_name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pt-16">
                <a
                    href="#"
                    role="link"
                    class="bg-[linear-gradient(#262626,#262626),linear-gradient(#3b82f6,#3b82f6)] bg-[length:100%_2px,0_2px] bg-[position:100%_100%,0_100%] bg-no-repeat text-neutral-950 transition-[background-size,color] duration-500 hover:bg-[0_2px,100%_2px] hover:text-[#3b82f6]">
                    and more ...
                </a>
            </div>
        </div>
    </section>
@endsection
