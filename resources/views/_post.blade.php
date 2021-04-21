<div class=" bg-white flex p-4 border-green-400  {{$loop->last ? '' : 'border-b border-b-black-400'}} "> 

<div class="mr-2 flex-shrink-0 ">
<a href="{{ $post->user->path() }}">
<img src="{{$post->user->avatar}}" width="50" alt="" class="rounded-full  mr-2">
</a>
</div>

<div>
<h5 class="font-bold mb-4 font-mono">
<a href="{{ $post->user->path() }}">
{{$post->user->name}}
</a>
</h5>
<p class="text-sm font-mono">
   {{$post->body}}
</p>
@if($post->image)
            <img
                src="{{ $post->getImage() }}"
                 alt="Post image"
                 class="rounded-l mb-4"
            >
        @endif
        
</div>
</div>