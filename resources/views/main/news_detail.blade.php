@extends('components.mainBody')
@section('content')
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-md px-4 md:px-8">
    <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">{{ $data->title }}</h1>

    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">
        {{ $data->news_detail }}
    </p>

    <p class="text-gray-500 sm:text-lg text-right">
        {{ $data->create_date }}
    </p>
  </div>
</div>
@endsection
