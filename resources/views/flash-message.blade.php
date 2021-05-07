
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block bg-green-300 text-center">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="closeAlert(event)">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
  
 @if ($errors->any())
<div class="alert alert-danger bg-red-300 text-center" role="alert" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="closeAlert(event)">×</button>
    Veiksmas nepavyko patikrinkite formos duomenis
</div> 
@endif

<script>
function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
</script>