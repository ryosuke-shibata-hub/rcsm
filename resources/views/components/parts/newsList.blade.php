<div class="bg-white py-2 sm:py-4 lg:py-4">
    <div class="mx-auto max-w-screen-md px-4 md:px-8">
        <h2 class="mb-2 text-left text-2xl font-bold text-gray-800 lg:text-3xl">News</h2>
    <div class="text-right text-sm font-bold text-gray-800 mb-2">
        <span class="">
            <a href="/news/all">
                All news
            </a>
        </span>
    </div>
    @foreach($newsList as $news_list)
        <div class="mb-4 flex items-center justify-between border-t border-b py-2">

            <div class="flex flex-col gap-0.5">
                <span class="block font-bold text-sm">{{ $news_list->title }}</span>
            <div class="-ml-1 flex gap-0.5">
                </div>
                    <span class="block text-gray-500 text-xs">{{ $news_list->create_date }}</span>
                </div>
                <a
                    href="/news/detail/{{ $news_list->news_id }}"
                    class="inline-block rounded-lg border bg-white text-center text-xs font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 p-1">
                    LeranMore
                </a>
            </div>
        @endforeach
    </div>
</div>
