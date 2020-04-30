<script>
$(function() {

 $('.datepicker').datepicker({
	 autoclose:true,
	 format: 'yyyy/mm/dd'
	 });
});

    function valinumber(evt) {
      var theEvent = evt || window.event;
    
      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }

    function valialphabet(evt)
      {
         
       
        
          var keyCode = (evt.which) ? evt.which : evt.keyCode
          
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
        
   
        
        
          
      }

    function valialphanumeric(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        
        if((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57)) {
            return true;
        } else {
            return false;
        }
        
    }
	
	
$("#notifications").fadeTo(4000, 500).slideUp(500, function(){
    $("#notifications").slideUp(500);
});

function adhar_front_getFile() {
  document.getElementById("adhar_front_photo").click();
}

function adhar_front(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  
  document.getElementById("adhar_front").innerHTML = fileName[fileName.length - 1];
 
  event.preventDefault();
}
function adhar_back_getFile() {
  document.getElementById("adhar_back_photo").click();
}

function adhar_back(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  
  document.getElementById("adhar_back").innerHTML = fileName[fileName.length - 1];
 
  event.preventDefault();
}
function vehicle_pic_getFile() {
  document.getElementById("vehicle_photo").click();
}

function vehicle_pic(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  
  document.getElementById("vehicle_pic").innerHTML = fileName[fileName.length - 1];
 
  event.preventDefault();
}
</script>