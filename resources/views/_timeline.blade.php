<div class="border border-black-300 rounded-lg mr-60 mb-60 ">
 @forelse($posts as $post)
 @include('_post')
 @empty
 <p class="p-4">No posts yet...</p>
 @endforelse




</div>