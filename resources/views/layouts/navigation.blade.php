<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('index') }}" class="font-black uppercase text-2xl">
                        {{ __('Regex') }}
                        <!--<x-application-logo class="block h-10 w-auto fill-current text-gray-600" />-->
                    </a>
                </div>
            </div>

            <div class="flex w-full" style="justify-content: flex-end">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-3 mx-3 pt-2 px-4 rounded uppercase">
                    <span class="flex svg-icon">
                        <svg class="fill-current w-5 pr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path></svg>
                        Favorites
                    </span>
                </a>
                <a href="{{ route('image.upload') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-3 mx-3 pt-2 px-4 rounded uppercase">
                    Upload
                </a>
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-3 mx-3 pt-2 px-4 rounded uppercase">
                    Login
                </a>
            </div>
        </div>
</nav>
