<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
        <img
            alt="rcsm"
            class="object-cover object-center w-28 h-28 block bg-black rounded-4xl"
            src='/storage/sitelogo.png'
        >
      <span class="ml-3 text-xl">RCSettingMaster</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="/">Top</a>
      <a class="mr-5 hover:text-gray-900" href="/setting/list/all">All Setting</a>
      <a class="mr-5 hover:text-gray-900" href="/news/all">Wthat's News</a>
      <a class="mr-5 hover:text-gray-900" href="/infomation">Infomation</a>
      <label for="Search">
        <div class="relative">
            <form action="/setting/list/search" method="GET">
                <input
                type="text"
                name="freeWord"
                id="Search"
                class="mt-0.5 p-1 w-full rounded pe-10 shadow-sm sm:text-sm"
                />
                <input type="hidden" name="category" value="freeWord" />

                <span class="absolute inset-y-0 right-2 grid w-8 place-content-center">
                    <button
                        type="submit"
                        aria-label="Submit"
                        class="rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                        />
                        </svg>
                    </button>
                </span>
            </form>
        </div>
    </label>
    </nav>
    <form action="/setting/create" method="GET">
        <button type="submit" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">CreateSetting
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </form>

  </div>
</header>
