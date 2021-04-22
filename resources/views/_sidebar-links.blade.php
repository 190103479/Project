<ul class="font-mono">
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{route('home')}}"
        >{{__('Home')}}</a></li>
    
    
    <li><a
            class="font-bold text-lg mb-4 block ml-10"
            href="{{route('profile',auth()->user())}}"
        >Profile</a></li>
    <li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="{{route('privacy')}}"
        >Privacy</a></li>
        <li><a
            class="font-bold text-lg mb-4 block m-10"
            href="{{route('contact')}}"
        >Contact</a></li>
        
    <form method="POST" action="/logout">
    @csrf 

    <button class="font-bold text-lg">Logout</button>
    </form>
    
    </li>
</ul>