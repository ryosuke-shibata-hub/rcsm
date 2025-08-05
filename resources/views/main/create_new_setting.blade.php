@extends('components.mainBody')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="">
                <h2 class="text-2xl text-gray-700 font-bold">New Setting</h2>
            </div>
            <div class="pt-2">
                <div class="p-8 rounded border border-gray-200">
                    @include('main.setting_new_create.new_machine_setting')
                    <div class="py-3"></div>
                    @include('main.setting_new_create.new_device_setting')
                    <div class="py-3"></div>
                    @include('main.setting_new_create.new_other_setting')
                </div>
            </div>
        </div>
    </div>
@endsection
