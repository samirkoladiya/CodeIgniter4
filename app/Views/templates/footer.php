	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
    function hide_validation_error(_id)
    {
      $('#error_'+_id).hide();
    }
    function show_validation_error(_id, message)
    {
      $('#error_'+_id).show();
      $('#error_'+_id).html(message);
    }
  </script>
  </body>
</html>