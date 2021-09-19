@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
            Do you want to become a travel blogger?
        </h1>
         <a
             
            href="/blog"
            class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-l uppercase">
        
             Read More
        </a>




        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
<div>
    <img src="https://cdn.pixabay.com/photo/2016/11/22/22/21/adventure-1850912_960_720.jpg" width="700" alt="">
</div>


<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-3xl font-extrabold text-gray-600">
    want to be a travel blogger?
</h2>

<p class="py-8 text-gray-500 text-s">
Some people are able to make a full-time income from
one site – but they are in a very small minority.

</p>
<p class="font-extrabold text-gray-600 text-s pb-9">


No matter how you make your money, chances are that you will be part of the 98% 
that needs multiple sites in order to make a living
, rather than the 2% who can get by with one.



</p>
<a
   href="/blog"
   class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
   Find Out More

</a>

</div>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
    some people are able to make a full-time income 
    from one site – but they are in a very small minority.
    No matter how you make your money, chances are that
    you will be part of the 98% that needs multiple sites 
    in order to make a living, rather than the 2% who can get by with one.


    </p>

</div>


<div class="sm:grid grid-cols-2 w-4/5 m-auto">
<div class="flex bg-yellow-700 text-gray-100 pt-10">
    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

    <span class="uppercase text-xs">
        FRANCE

    </span>

    <h3 class="text-xl font-bold py-10">
    The symbol of Paris, the Eiffel Tower
    is a feat of ingenuity as much as it is a famous
    landmark. This structure of 8,000 metallic parts was 
    designed by Gustave Eiffel as a temporary exhibit for
    the World Fair of 1889.

    </h3>
    <a 
        href=""
        class="uppercase bg-transparent border-2
        border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Find Out More
    
    </a>

    </div>

  

</div>
<div>
    <img src="https://cdn.pixabay.com/photo/2016/03/09/09/45/eiffel-tower-1245970_960_720.jpg" width="700" alt="">
</div>

</div>




@endsection