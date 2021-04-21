<x-master>

<section class="px-8">
        <main class="container mx-auto">
        <div class="lg:flex lg:justify-between">
        @if(auth()->check())
          <div class="lg:w-1/6">
       @include('_sidebar-links')
          </div>
        @endif  

            <div class="lg:flex-1 lg:mx-30" >
            {{$slot}}
</div>


</div>
        
        </main>
        
        </section>
        <div class="font-mono" style="padding-bottom: 45px;  background-color: rgba(0, 0, 0, 0.7);">
            <div class="container mx-auto px-6 lg:px-20 py-6">
                <div class="flex justify-center text-gray-300 mb-1">
                    © 190103479  <span class="font-bold">Web Project</span> 2021 All right reserved.
                </div>
                <div class="flex font-light justify-center text-gray-500 text-sm">
                    <p>Designed by <span class="font-bold">Alisher Yegizov</span></p>
                </div>
            </div>
        </div>


</x-master>