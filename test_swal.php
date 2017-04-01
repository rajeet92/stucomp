<script src="swal/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="swal/sweetalert.css">

<button onclick="pop()">click me</button>
<script>
function pop(){
    swal({
  title: "Error!",
  text: "Here's my error message!",
  type: "error",
  confirmButtonText: "Cool"
});
}    
</script>