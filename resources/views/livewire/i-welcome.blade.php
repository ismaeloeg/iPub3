<div class="flex flex-wrap justify-center gap-10 ">
    @foreach($users->reverse() as $user)
        <div class="bg-amber-100 rounded-4xl w-48 h-68 ">
            <div
                class="bg-blue-50 border-2 border-black rounded-full w-40 h-40 mx-auto items-center justify-center text-white flex flex-col mt-3">
                <p>
                    @if($user->avatar)
                        <img src="{{$user->avatar}}" alt="Avatar" class=" rounded-full">
                    @else
                        <img src="{{asset('images/default_avatar.png')}}" alt="Avatar" class="">
                    @endif
                </p>
            </div>
            <div class="flex flex-col items-center mt-5 font-bold">
                <h1>{{$user->name}}</h1>
            </div>
        </div>

    @endforeach
</div>

