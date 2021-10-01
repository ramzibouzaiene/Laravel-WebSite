@extends('layouts.default')


@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-4xl uppercase " >Learn To <span class="text-pink-500">Code</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">With Ramzi</h3>
        </div>


        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>

    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officiis accusantium neque autem? Quaerat ratione at illum. Ad consequatur autem maiores tenetur a adipisci minus aut deleniti atque, minima accusamus!
            </p>
            <a href="{{ route('about') }}" class="bg-pink-500 text-center py-2 px-4 rounded
            hover:bg-purple-500 transition">Learn More</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
                <h3 class="text-4xl font-bold mb-6">What can you learn?</h3>
                <div class="flex flex-wrap -mx-2"></div>
            <div class="w-full sm:w-1/2 mb-3 px-2">
                <div class="p-4 bg-gray-500 h-full rounded-lg">
                    <h3 class="text-xl font-bold mb-3">Game Development</h3>
                    <p class="text-gray-200 mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet aperiam dignissimos. Voluptatum aspernatur corporis velit labore molestias aut reprehenderit!
                    </p>
                    <a href="{{ url('https://www.freecodecamp.org/news/what-is-game-development/') }}" target="_blank" rel="noopener noreferrer"
                    class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn Now!</a>
                </div>
            </div>

            <div class="w-full sm:w-1/2 mb-3 px-2">
                <div class="p-4 bg-gray-500 h-full rounded-lg">
                    <h3 class="text-xl font-bold mb-3">Web Development</h3>
                    <p class="text-gray-200 mb-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti explicabo deserunt hic tempore sapiente natus ullam voluptatum quod aut nobis.
                    </p>
                    <a href="{{ url('https://www.freecodecamp.org/news/what-is-web-development-how-to-become-a-web-developer-career-path/') }}" target="_blank" rel="noopener noreferrer"
                    class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn Now!</a>
                </div>

            </div>

        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where To Learn?</h3>
            <h3 class="text-xl mb-6">Learn To Code From Youtube:</h3>
            <div class="-mx-2 sm:flex">
                <a href="{{ url('https://www.youtube.com/c/Freecodecamp') }}" target="_blank" rel="noopener noreferrer"
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-2 sm:mb-0">
                    <span class="mr-2">⌨</span>Learn <strong>Web</strong> Development
                </a>

                <a href="{{ url('https://www.youtube.com/user/Unity3D') }}" target="_blank" rel="noopener noreferrer"
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2">
                    <span class="mr-2">🎮</span>Learn <strong>Game</strong> Development
                </a>
            </div>
        </div>
    </section>
@endsection
