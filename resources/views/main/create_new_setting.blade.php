@extends('components.mainBody')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="">
                @include('error.create_new_setting_validate')
            </div>
            <div class="">
                <h2 class="text-2xl text-gray-700 font-bold">New Setting</h2>
            </div>
            <div class="pt-2">
                <div class="p-8 rounded border border-gray-200">
                    <form action="/setting/new/create" method="POST">
                        @csrf
                        @include('main.setting_new_create.post_user')
                        <div class="py-3"></div>
                        @include('main.setting_new_create.new_machine_setting')
                        <div class="py-3"></div>
                        @include('main.setting_new_create.new_device_setting')
                        <div class="py-3"></div>
                        @include('main.setting_new_create.new_other_setting')
                        <div class="text-center py-5">
                            <button class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Create!!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
