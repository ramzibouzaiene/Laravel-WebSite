@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Who is Ramzi?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perspiciatis, totam accusamus fugit, suscipit perferendis alias sequi fuga sit eligendi accusantium
                quod nesciunt voluptate. Nihil aperiam necessitatibus laborum delectus perspiciatis culpa illum esse
                eum animi voluptas, doloribus magnam nobis quo placeat quibusdam. At voluptatem quis voluptates repellat
                voluptate deleniti maxime consectetur in impedit obcaecati mollitia, sequi praesentium ab fugiat itaque
                totam iste nam ipsa quod! Suscipit asperiores est aperiam, culpa corporis optio obcaecati veritatis nemo
                aut velit quasi nobis dignissimos incidunt odio ad officia ab consequuntur cumque porro maxime esse ex
                odit sit. Veniam optio repellendus velit sint mollitia explicabo earum.
            </p>

            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam consequuntur, excepturi aliquam quae consequatur omnis accusamus voluptatum error nesciunt perferendis.
            </p>

            <div class="mb-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Cupiditate corporis aut architecto. Excepturi, quia iusto,
                corporis officiis nisi incidunt quis distinctio dolorem fuga voluptatem porro
                inventore ab enim est nulla voluptas esse, recusandae ducimus minus asperiores
                laboriosam dignissimos. Esse quas temporibus quisquam, eligendi veritatis vero qui
                voluptates unde recusandae magnam.
            </div>

            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-2 rounded
                hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>

    </section>

@endsection
