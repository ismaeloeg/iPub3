<div>
    <!--<h1 class="text-5xl text-blue-500 font-bold">Hola me llamo Nuria</h1>-->
    <div class="grid grid-cols-2 gap-1 p-6 bg-amber-100 rounded-4xl w-1/4">
        @foreach($users as $user)
            <h1>{{$user->name}}</h1>
        @endforeach

    </div>
</div>
