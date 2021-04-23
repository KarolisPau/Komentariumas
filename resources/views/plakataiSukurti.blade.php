<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="float-left w-1/2 pr-2">
                        Plakato sukūrimo forma
                            <form action="{{ route("imagePreview") }}" method="POST">
                                @csrf
                                <x-label for="title" :value="__('Titulinis užrašas')" class="mt-2"/>
                                <x-input id="title" class="mt-1 w-full" type="text" name="title" required autofocus />

                                <x-label for="header" :value="__('Antraštė')" class="mt-2" />
                                <x-input id="header" class="mt-1 w-full" type="text" name="header" required autofocus />

                                <x-label for="footer" :value="__('Poraštė')" class="mt-2"/>
                                <x-input id="footer" class="mt-1 w-full" type="text" name="footer" required autofocus />

                                <x-label for="inputfile" :value="__('Failas negali viršyti 2mb ir turi būti .gif arba .jpg formatas ')" class="mt-2"/>
                                <input type="file" id="inputfile" class="text-lg border-none border-0 bg-red-300 mt-3" :value="__('Paveiklsiukas')"/> 
                                </br>
                                <div class="w-full justify-center">
                                <x-button class="mt-2">Peržiūra</x-button>
                                </div>
                            </form>
                    </div>

                    
                
                    <div class="float-right w-1/2 mt-1">
                    <x-image-preview class="h-96 w-full mt-1 " :value="__('/images/tankas.jpg')"></x-image-preview>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>