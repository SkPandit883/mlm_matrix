{{-- Header Start --}}
  <div class="w-full h-14 md:h-28  md:flex flex-wrap justify-between border-b-2 border-gray-100">
      <a href="/" class="ml-2 h-14 md:h-28 md:w-1/4 w-1/5 flex justify-center items-center">
          <h1 class="text-1xl md:text-6xl text-red-500">N</h1>
          <h1 class="text-1xl md:text-6xl text-black-500">ews</h1>
          <h1 class="text-1xl md:text-6xl text-red-500 ml-2 ">P</h1>
          <h1 class="text-1xl md:text-6xl text-black-500">ortal</h1>
      </a>
      <div class="md:w-2/3 w-3/4  flex-row items-center">
            <img class="h-14 md:h-28 md:p-3"  src="https://www.onlinekhabar.com/wp-content/uploads/2021/05/Desktop-700X80.gif" alt="">
      </div>
  </div>
  <div class="w-full  flex-row items-center text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 shadow-lg ">
     <div x-data="{ open: false }" class="h-16 flex flex-col max-w-screen-xl px-1 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-1">
        <div class="p-4 flex flex-row items-center justify-between">
        {{-- <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a> --}}
        <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open }" class="md:bg-white bg-gray-500 flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-start md:flex-row z-10 lg:bg-white md:bg-gray-400">
            <a class="px-4 py-2 mt-2 text-md font-semibold text-gray-900   hover:border-b-2 hover:border-indigo-600" href="">गृहपृष्ठ</a>
            <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="">मुख्य खबर</a>
            {{-- @foreach($category as $item)
                <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="">dfdmf</a>
            @endforeach --}}
            {{-- <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="{{route('showCategoryNews','अर्थ/बैंकिङ')}}">अर्थ/बैंकिङ</a>
            <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="{{route('showCategoryNews','अन्तर्वार्ता')}}">अन्तर्वार्ता</a>
            <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="{{route('showCategoryNews','खेलकुद')}}">खेलकुद</a>
            <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="{{route('showCategoryNews','मनोरन्जन')}}">मनोरन्जन</a>
            <a class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800" href="{{route('showCategoryNews','विश्व')}}">विश्व</a> --}}
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="px-4 py-2 mt-2 text-md font-semibold bg-transparent  hover:border-b-2 hover:border-red-800">
                    <span>अन्य</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                </div>
                </div>
            </div>    
        </nav>
    </div>
  </div>

{{-- Header End --}}
