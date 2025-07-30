@extends('components.mainBody')
@section('content')
    <section class="text-gray-600 body-font">
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
                            @if($setting_list->category == 1)
                                <a href="/setting/list/keyword/category/{{ $setting_list->category }}">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">#DRIFT</h3>
                                </a>
                            @elseif($setting_list->category == 2)
                                <a href="/setting/list/keyword/category/{{ $setting_list->category }}">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">#ONROAD</h3>
                                </a>
                            @elseif($setting_list->category == 3)
                                <a href="/setting/list/keyword/category/{{ $setting_list->category }}">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">#OFFROAD</h3>
                                </a>
                            @elseif($setting_list->category == 4)
                                <a href="/setting/list/keyword/category/{{ $setting_list->category }}">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">#CRAWLER</h3>
                                </a>
                            @endif
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $setting_list->setting_title }}</h2>
                            <p class="mt-1">{{ $setting_list->create_user_name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
