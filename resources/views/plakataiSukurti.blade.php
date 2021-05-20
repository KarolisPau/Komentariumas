<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="pr-2">
                        Plakato sukūrimo forma
                            {{-- <form action="{{ route("sukurtiPlakata") }}" method="post" enctype="multipart/form-data">
                                @csrf --}}
                                <x-label for="title" :value="__('Titulinis užrašas')" class="mt-2"/>
                                <x-input id="title" class="mt-1 w-full" type="text" name="title" required autofocus />

                                <x-label for="header" :value="__('Antraštė')" class="mt-2" />
                                <x-input id="header" class="mt-1 w-full" type="text" name="header" required autofocus />

                                <x-label for="footer" :value="__('Poraštė')" class="mt-2"/>
                                <x-input id="footer" class="mt-1 w-full" type="text" name="footer" required autofocus />

                                <x-label for="file" :value="__('Failas negali viršyti 2mb ir turi būti .gif arba .jpg formatas ')" class="mt-2"/>
                                <input type="file" id="file" name="file" class="text-lg border-none border-0 bg-red-300 mt-3" :value="__('Paveiklsiukas')"/> 
                                </br>
                                <div class="w-full justify-center">
                                <x-button class="mt-2">Kurti</x-button>
                                </div>
                            
                    </div>

                    <div id="outerContainer"> 
                       <div id="container">
                        <div id="item">
                  
                        </div>
                      </div>
                    </div>
                    
                
                    
                    @livewire('rodyti-foto')
                    
                {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
      var dragItem = document.querySelector("#item");
      var container = document.querySelector("#container");
  
      var active = false;
      var currentX;
      var currentY;
      var initialX;
      var initialY;
      var xOffset = 0;
      var yOffset = 0;
  
      container.addEventListener("touchstart", dragStart, false);
      container.addEventListener("touchend", dragEnd, false);
      container.addEventListener("touchmove", drag, false);
  
      container.addEventListener("mousedown", dragStart, false);
      container.addEventListener("mouseup", dragEnd, false);
      container.addEventListener("mousemove", drag, false);
  
      function dragStart(e) {
        if (e.type === "touchstart") {
          initialX = e.touches[0].clientX - xOffset;
          initialY = e.touches[0].clientY - yOffset;
        } else {
          initialX = e.clientX - xOffset;
          initialY = e.clientY - yOffset;
        }
  
        if (e.target === dragItem) {
          active = true;
        }
      }
  
      function dragEnd(e) {
        initialX = currentX;
        initialY = currentY;
  
        active = false;
      }
  
      function drag(e) {
        if (active) {
        
          e.preventDefault();
        
          if (e.type === "touchmove") {
            currentX = e.touches[0].clientX - initialX;
            currentY = e.touches[0].clientY - initialY;
          } else {
            currentX = e.clientX - initialX;
            currentY = e.clientY - initialY;
          }
  
          xOffset = currentX;
          yOffset = currentY;
  
          setTranslate(currentX, currentY, dragItem);
        }
      }
  
      function setTranslate(xPos, yPos, el) {
        el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
      }
    </script>
</x-app-layout>