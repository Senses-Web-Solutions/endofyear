@extends('layouts.app')

@section('content')

<div class="relative isolate pt-14">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-15 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="py-24 sm:py-24 lg:pb-16">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="mx-auto text-center">
                <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 text-left">
                    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                        aria-hidden="true">
                        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="mx-auto max-w-2xl text-center">
                        <h2
                            class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            Contact Teamleaf</h2>
                        <p class="mt-2 text-lg/8 text-gray-600">
                            We're here to help you with any questions or concerns you may have.
                        </p>
                    </div>



                    <form action="{{ route('contact.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="name"
                                    class="block text-sm/6 font-semibold text-gray-900">Name</label>
                                <div class="mt-2.5">
                                    <input type="text" name="name" id="name"
                                        autocomplete="family-name"
                                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                </div>
                            </div>

                            @error('name')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block text-sm/6 font-semibold text-gray-900">Email</label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email"
                                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                </div>
                            </div>

                            @error('email')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block text-sm/6 font-semibold text-gray-900">Message</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4"
                                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                                </div>
                            </div>

                            @error('message')
                                <div class="text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="flex gap-x-4 sm:col-span-2">
                                <div class="flex h-6 items-center">
                                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                    <button type="button"
                                        class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                        role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                                        <span class="sr-only">Agree to policies</span>
                                        <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true"
                                            class="size-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <label class="text-sm/6 text-gray-600" id="switch-1-label">
                                    By selecting this, you agree to our
                                    <a href="#"
                                        class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                                </label>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit"
                                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="mt-10 text-green-500 text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>

</div>

@endsection
