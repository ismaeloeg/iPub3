<div class="flex flex-wrap justify-center gap-10 ">
    {{--USUARIO SELECCIONADO--}}
    @if($selectedUser)
        <div wire:click="$set('selectedUser',null )" class="cursor-pointer text-xl">
            <div class="bg-amber-100 rounded-4xl w-68 h-98 p-3">
                <div
                    class="bg-blue-50 border-2 border-black rounded-full w-40 h-40 mx-auto items-center justify-center text-white flex flex-col mt-3">
                    <p>
                        <img src="{{ $user->avatar ?? asset('images/default_avatar.png') }}" alt="Avatar" class="rounded-full">

                    </p>
                </div>
                <div class="flex flex-col items-center mt-5 font-bold">
                    <p>{{$selectedUser->name}}</p>
                    <input type="password" wire:model="inputPin" placeholder="Introduzca PIN"
                           class="font-light w-3/4 m-1 border-2 rounded-4xl p-2">
                    <div>
                        <button wire:click="checkPin">Verificar PIN</button>

                        @if (session()->has('message'))
                            <p> {{session('message')}}</p>

                        @endif
                    </div>
                </div>
            </div>
        </div>


        {{--USUARIO NO SELECCIONADO--}}
    @else
        @foreach($users->reverse() as $user)
            <div wire:click="selectUser({{$user->id}})" class="bg-amber-100 rounded-4xl w-48 h-68 ">
                <div
                    class="bg-blue-50 border-2 border-black rounded-full w-40 h-40 mx-auto items-center justify-center text-white flex flex-col mt-3">
                    <img src="{{ $user->avatar ?? asset('images/default_avatar.png') }}" alt="Avatar" class="rounded-full">
                </div>
                <div class="flex flex-col items-center mt-5 font-bold">
                    <p>{{$user->name}}</p>

                </div>
            </div>

        @endforeach
    @endif
</div>

