<x-app-layout>
    
    <div class="pt-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
    
                    @foreach($plakatai as $plakatas) 
                       <x-posterShow class="" :title=" $plakatas->title " :img=" $plakatas->img " :id="$plakatas->id"/>
                    @endforeach
                    
                </div>
                <div class="p-3 bg-white border-b border-gray-200">
                    <x-label for="comment" :value="__('Komentavimas')" class="mt-2"/>
                    <form action="{{ route("Komentuoti", $plakatas->id) }}" method="post" >
                        @csrf
                    <x-input id="comment" class="mt-1 w-full" type="text" name="comment" placeholder="Rašyti komentarą..." required/>
                    <x-button-blue>Siūsti </x-button-blue>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-yellow-50 border-b border-gray-200">

                    @foreach($komentarai as $komentaras) 
                      <x-comment :comment="$komentaras->comment" :name="$komentaras->name" />
                    @endforeach

                    @if ($komentarai->isEmpty())
                    <h2> Komentarų nėra :( </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
