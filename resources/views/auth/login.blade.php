<x-master>
<div class="container mx-auto flex justify-center font-mono">
<div class="px-12 py-8 bg-white-200 border border-black-300 rounded-lg">
<div class="col-md-8">
<div class="font-bold text-lg mb-4"> {{__('Login')}}</div>

<form method="POST"
                  action="{{ route('login' ) }}"
            >
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="email"
                           id="email"
                           autocomplete="email"
                           value="{{ old('email') }}"
                           required
                    >

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           autocomplete="current-password"
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <div>
                        <input class="mr-1"
                               type="checkbox"
                               name="remember"
                               id="remember" {{ old('remember') ? ' checked' : '' }}
                        >

                        <label class="text-xs text-gray-700 font-bold uppercase"
                               for="remember"
                        >
                            Remember Me
                        </label>
                    </div>

                    @error('remember')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <button type="submit"
                            class="border-2 border-green-600 rounded px-6 py-2 text-green-600 hover:bg-green-600 hover:text-white transition-colors duration-300"
                    >
                        Submit
                    </button>

                    <a href="{{ route('password.request' ) }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                </div>

                </form>
      
    </div>
    </div>
    </div>
</x-master>
