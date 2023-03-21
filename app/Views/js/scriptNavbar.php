<script > 

var ocultarInfoUsuario = document.getElementById('sidebarCollapse')

ocultarInfoUsuario.addEventListener('click', function (event) {

  var element = document.getElementById("sidebar","content");
  element.classList.toggle("active");
 
  // if (!data) {
  //   return event.preventDefault() // stops modal from being shown
  // }
})


// $(document).ready(function() {
//     $('#sidebarCollapse').on('click', function() {
//       $('#sidebar, #content').toggleClass('active');
//       $('.collapse.in').toggleClass('in');
//       $('a[aria-expanded=true]').attr('aria-expanded', 'false');
//       document.getElementById("bodyContent").style.width="100%";
//     });
// });
</script>