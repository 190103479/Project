<x-master>
    <div class="container mx-auto flex justify-center">
        <x-panel>
            <x-slot name="heading">Confirm Password</x-slot>

                {{ __('Please confirm your password before continuing.') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

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
                               required
                               autocomplete="current-password"
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Confirm Password
                        </button>
                    </div>

                    <div>
                        <button type="submit"
                                class="border-2 border-green-600 rounded px-6 py-2 text-green-600 hover:bg-green-600 hover:text-white transition-colors duration-300"
                        >
                            Submit
                        </button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                    </div>
                </form>
        </x-panel>
    </div>
</x-master>