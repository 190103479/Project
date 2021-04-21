<x-app>
<header class="mb-6">

<div class="relative">
<img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1" alt="" class="mb-2 object-cover h-48 w-full"  style="height:250px; width: 100%; border-radius: 50px;">

<img src="{{$user->avatar}}" 
class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
alt=""
style="left:50%"
width="150">
</div>

<div class="flex justify-between items-center mb-6">

<div style="max-width:270px" class="w-40 md:w-64">
<h2 class="ml-12 font-bold text-2xl mb-0 font-mono">{{ $user->name }}</h2>
<p class="font-mono text-sm ml-12">Joined {{ $user->created_at->diffForHumans() }}</p>

</div>

<div class="mr-12">
@can('edit',$user)
<a href="{{ $user->path('edit')}}" class="font-mono rounded-full border border-black-300 shadow py-2 px-5 text-black text-xs">Edit</a>
@endcan
</div>

</div>
<p class="ml-12 text-sm font-mono">{{ $user->description }}</p>




</header>

@include('_timeline',[
'posts'=>$posts
])

</x-app>
