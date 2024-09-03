  $(document).ready(function() {
    $('#mc-embedded-subscribe-form2').submit(function(e){
      e.preventDefault(); // Prevent the default form submission
      $('#exampleModal').modal('show');
    });
  });
