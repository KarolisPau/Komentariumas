<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="pr-2">
                        API memiu generavimas
                            <form action="{{ route("bandymas") }}" method="get" enctype="multipart/form-data">
                                @csrf
                                <x-label for="title" :value="__('Nuotraukos pasirinkimas')" class="mt-2"/>
                                <div class="form-group">
                                    <select class="form-control appearance-none" name="memepic"> 
                                    @foreach($items as $item)                   
                                    <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <x-label for="title" :value="__('Titulinis užrašas')" class="mt-2"/>
                                <x-input id="title" class="mt-1 w-full" type="text" name="title" required autofocus />

                                <x-label for="header" :value="__('Antraštė')" class="mt-2" />
                                <x-input id="header" class="mt-1 w-full" type="text" name="header" required autofocus />

                                <x-label for="footer" :value="__('Poraštė')" class="mt-2"/>
                                <x-input id="footer" class="mt-1 w-full" type="text" name="footer" required autofocus />

                                </br>
                                <div class="w-full justify-center">
                                <x-button-blue class="mt-2" href="memesave">Kurti</x-button-blue>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>