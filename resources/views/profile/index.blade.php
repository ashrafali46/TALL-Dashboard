@extends('layouts.admin')

@section('content')
    <div class="flex">
        @include('layouts._sidebar')

        <div class="p-4 w-4/5 bg-gray-100 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-10 py-8">
                <h1 class="flex text-3xl text-gray-600">
                    <a href="{{url('/')}}" class="text-3xl font-semibold">Dashboard</a>
                    > <span class="text-green-400">Profile</span>
                </h1>

                <div class="rounded w-full h-64 mt-6 relative" style="background-image: url('{{asset('images/Fluid-01.jpg')}}')">
                    <div class="absolute bottom-0 left-0 sm:ml-10 lg:ml-16 -mb-8">
                        <img src="{{asset('images/rix.jpg')}}" class="rounded-full w-16 h-16 border-4 border-white shadow-lg" alt="cover-image">
                    </div>
                    <div class="absolute flex bottom-0 right-0 mr-16 -mb-5">
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>design-tool-quill-2</title><g fill=""><path d="M23.159.006A23.885 23.885 0 0 0 4.628 13.663l-2.635 5.825a.722.722 0 0 0-.046.133L.154 22.467a1 1 0 1 0 1.692 1.067l4.518-7.208a.5.5 0 0 1 .845.532L6.02 18.747a.25.25 0 0 0 .306.365L9.764 17.7a12.375 12.375 0 0 0 5.844-4.836.25.25 0 0 0-.021-.3l-2.277-2.65a.251.251 0 0 1 .19-.414H17a.219.219 0 0 0 .2-.134 10.816 10.816 0 0 1 2.049-3.2L23.8 1.26a.75.75 0 0 0-.641-1.254z"></path></g></svg>
                        </a>
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg ml-4 flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>cog</title><g fill=""><path d="M22.5 9.5h-1.862a8.955 8.955 0 0 0-.763-1.84l1.317-1.316a1.5 1.5 0 0 0 0-2.122l-1.415-1.414a1.5 1.5 0 0 0-2.121 0l-1.318 1.317a8.9 8.9 0 0 0-1.838-.762V1.5A1.5 1.5 0 0 0 13 0h-2a1.5 1.5 0 0 0-1.5 1.5v1.863a8.919 8.919 0 0 0-1.84.762L6.343 2.808a1.5 1.5 0 0 0-2.121 0L2.807 4.222a1.5 1.5 0 0 0 0 2.122l1.317 1.317A8.952 8.952 0 0 0 3.362 9.5H1.5A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h1.862a8.961 8.961 0 0 0 .762 1.84l-1.318 1.317a1.5 1.5 0 0 0 0 2.122l1.414 1.414a1.545 1.545 0 0 0 2.122 0l1.318-1.318a8.922 8.922 0 0 0 1.84.764V22.5A1.5 1.5 0 0 0 11 24h2a1.5 1.5 0 0 0 1.5-1.5v-1.861a8.988 8.988 0 0 0 1.839-.763l1.318 1.318a1.5 1.5 0 0 0 2.121 0l1.414-1.414a1.5 1.5 0 0 0 0-2.122l-1.317-1.318a8.909 8.909 0 0 0 .763-1.84H22.5A1.5 1.5 0 0 0 24 13v-2a1.5 1.5 0 0 0-1.5-1.5zM12 17a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5z"></path></g></svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
