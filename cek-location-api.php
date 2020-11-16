<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>API 1</h1>
    <form  id="cek-location-1" method="post">
      <label>latitude</label>
      <input type="number" name="latitude">
      <br>
      <label>longitude</label>
      <input type="number" name="longitude">
      <br>
      <label>status</label>
      <select name="status">
        <option value="merah">merah</option>
        <option value="kuning">kuning</option>
        <option value="hijau">hijau</option>
      </select>
      <br>
      <br>
      <input type="submit" value="Search" />
    </form>

    <h1>API 2</h1>
    <form  id="cek-location-2" method="post">
      <label>name</label>
      <input type="text" name="name">
      <br>
      <br>
      <input type="submit" value="Search" />
    </form>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cek-location-1').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'http://localhost/php-api/get_location_api_1.php',
                data: $(this).serialize(),
                success: function(response)
                {
                  var jsonData = JSON.parse(response);
                  if (jsonData != 'data not found!') {
                    alert('name = '+ jsonData.name + '\n' + 'status = '+ jsonData.status);
                  }else {
                    alert(jsonData);
                  }
               }
           });
         });

         $('#cek-location-2').submit(function(e) {
             e.preventDefault();
             $.ajax({
                 type: "POST",
                 url: 'http://localhost/php-api/get_location_api_2.php',
                 data: $(this).serialize(),
                 success: function(response)
                 {
                   var jsonData = JSON.parse(response);
                   if (jsonData != 'data not found!') {
                     alert('latitude = '+ jsonData.latitude + '\n' + 'longitude = '+ jsonData.longitude);
                   }else {
                     alert(jsonData);
                   }
                }
            });
          });
    });
</script>
  </body>
</html>
