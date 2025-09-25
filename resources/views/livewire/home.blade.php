<div>
    {{--Header--}}
    <div class="bg-gray-800 text-white p-5 rounded mb-5  shadow-2xl flex flex-row justify-between items-center">
        <h1 class="text-3xl font-bold">
            Bienvenido, {{$user->name ?? 'Invitado' }}
        </h1>
        <img src="{{$user-> avatar}} " class="w-20 rounded-full">
    </div>

    {{--MAIN--}}

    <div class="bg-gray-700 p-5 rounded shadow-lg text-white ">
        <p>Esta es tu página Home. Aquí puedes agregar el contenido principal.</p>

    </div>


</div>
