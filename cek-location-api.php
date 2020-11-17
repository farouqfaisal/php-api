<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>API 1 PHP</h1>
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

    <h1>API 2 PHP</h1>
    <form  id="cek-location-2" method="post">
      <label>name</label>
      <input type="text" name="name">
      <br>
      <br>
      <input type="submit" value="Search" />
    </form>

    <h1>API 1 PYTHON</h1>
    <form  id="cek-location-3" method="post">
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

    <h1>API 2 PYTHON</h1>
    <form  id="cek-location-4" method="post">
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
                url: 'http://localhost/php-api/location_api_1.php',
                data: $(this).serialize(),
                success: function(response)
                {
                  var jsonData = JSON.parse(response);
                  if (jsonData.message != 'data not found') {
                    alert('name = '+ jsonData.name + '\n' + 'status = '+ jsonData.status);
                  }else {
                    alert(jsonData.message +'!');
                  }
               }
           });
         });

         $('#cek-location-2').submit(function(e) {
             e.preventDefault();
             $.ajax({
                 type: "POST",
                 url: 'http://localhost/php-api/location_api_2.php',
                 data: $(this).serialize(),
                 success: function(response)
                 {
                   var jsonData = JSON.parse(response);
                   if (jsonData.message != 'data not found') {
                     alert('latitude = '+ jsonData.latitude + '\n' + 'longitude = '+ jsonData.longitude);
                   }else {
                     alert(jsonData.message +'!');
                   }
                }
            });
          });

          $('#cek-location-3').submit(function(e) {
              e.preventDefault();
              $.ajax({
                  type: "POST",
                  url: 'http://127.0.0.1:5000/python-api/location-api-1',
                  data: $(this).serialize(),
                  success: function(response)
                  {
                    jsonData = response;
                    if (jsonData.message != 'data not found') {
                      alert('name = '+ jsonData.name + '\n' + 'status = '+ jsonData.status);
                    }else {
                      alert(jsonData.message +'!');
                    }
                 }
             });
           });

           $('#cek-location-4').submit(function(e) {
               e.preventDefault();
               $.ajax({
                   type: "POST",
                   url: 'http://127.0.0.1:5000/python-api/location-api-2',
                   data: $(this).serialize(),
                   success: function(response)
                   {
                     jsonData = response;
                     if (jsonData.message != 'data not found') {
                       alert('latitude = '+ jsonData.latitude + '\n' + 'longitude = '+ jsonData.longitude);
                     }else {
                       alert(jsonData.message +'!');
                     }
                  }
              });
            });
    });
    
    </script>
  </body>
</html>
