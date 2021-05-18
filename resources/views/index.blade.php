@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-gray-500 bg-gray-50 text-5xl uppercase front-bold text-shadow-md  mb-2 pb-1">
                Do you want to become a developer?
                </h1>

                <a href="/blog" class="text-center bg-gray-50 text-gray-700 px-4 font-bold text-xl uppercase">
                Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/08/18/25/startup-593329_960_720.jpg" width="700" alt="laptop">
        </div>
        
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better web developer?</h2>
        

            <p class="py-8 text-gray-500 text-xl">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quo.
            </p>

            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores harum facere nostrum, doloribus porro possimus odio perferendis iusto, ad libero nemo architecto dignissimos magnam. In.
            </p>
            <a href="/blog" class="uppercase bg-blue-400 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find out more</a>
        
        </div>
    </div>

    <div class="text-center p-15 bg-gray-600 text-white">

        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">Ux Design</span>
        <span class="font-extrabold block text-4xl py-1">Project Management</span>
        <span class="font-extrabold block text-4xl py-1">Digital Strategy</span>
        <span class="font-extrabold block text-4xl py-1">Backend Development</span>
    </div>

    <div class="text-center py-15">

        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold text-gray-600 py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima iusto fuga vitae quam, quidem consectetur similique quo fugiat asperiores, veritatis corporis vel qui. Similique, neque.
        </p>

    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">

        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-4 sm:m-auto w-4/5 block">

                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sequi soluta? Laboriosam commodi ex suscipit molestias porro non at a, modi, accusamus dolorem dolorum repellendus.
                </h3>

                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-2 px-5 mt-2 rounded-3xl">
                    Find out more
                </a>

            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2017/03/20/21/00/server-2160321_960_720.jpg" width="700" alt="laptop">
        </div>
    </div>
@endsection