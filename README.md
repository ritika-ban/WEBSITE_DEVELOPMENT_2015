# website-create-PART-1
(Input variable and geolocation) 
<html>
<body>
    <input type="text" id=“source”=>Source input</input>
    <input type=“text” id=“destination”=>Destn input</input>
    <button onclick="test()">Submit</button>
    <script>
        
            
        function test()
        {
            var source= document.getElementById(“source”).value;
            var destination=document.getElementById(“destination”).value;
            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } 
            else {
                source.innerHTML = "Geolocation is not supported by this browser.";
                destination.innerHTML = "Geolocation is not supported by this browser.";
            }
          }
            function showPosition(position) {
               source.innerHTML = "Latitude: " + position.coords.latitude + 
               "<br>Longitude: " + position.coords.longitude; 
               
               destination.innerHTML = "Latitude: " + position.coords.latitude + 
               "<br>Longitude: " + position.coords.longitude; 
            }
            
       }
    </script>
</body>
</html>
