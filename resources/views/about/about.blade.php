@include('master.navbar')
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <!-- Tambahkan script Google Maps API -->
    <script src=https://maps.app.goo.gl/6p6M5MqyEVVyQDu86
            async defer></script>
    <style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        /* Atur tinggi peta */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="p-4 p-md-5 mb-4 mx-3 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">About Us</h1>
          <p class="lead my-3">Sampaikan Permasalahan Tenaga Kerja di kantor kami. Pelayanan setiap hari kerja Senin-Jumat, jam pelayanan 08.00-16.00 Wita</p>
        </div>
      </div>
    <div class="p-4 p-md-5 mb-4 mx-3 text-white rounded bg-dark">
        <div class="col mx-auto">
          <iframe class="mx-auto" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.674455318389!2d117.15108799999999!3d-0.496344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f731137ab4d%3A0x12c81c0cf5e1bfc6!2sDinas%20Tenaga%20Kerja%20Samarinda!5e0!3m2!1sid!2sid!4v1703653728223!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" center="-0.496344,117.151087"></iframe>        </div>
      </div>

    


      <div class="container px-4 py-5 bg-dark text-white" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Contact Us</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
           
            <div>
                <h5><i class="bi bi-geo-alt-fill"></i>Alamat Kantor</h5>
                <p>Jl. Basuki Rahmat No. 78 Kel. Pelabuhan Kec. Samarinda Kota - Kaltim 75112.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            
            <div>
                <h5><i class="bi bi-envelope-fill"></i> Email</h5>
                <p>disnaker.smd@gmail.com</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            
            <div>
              <h5><i class="bi bi-telephone-fill"></i> Nomor Telp</h5>
              <p>(0541) 743595</p>
            </div>
          </div>
        </div>
      </div>
    
       


    <script>
        // Fungsi untuk menginisialisasi peta
        function initMap() {
            // Koordinat lokasi Anda (ganti dengan koordinat yang sesuai)
            var myLatLng = {lat: -0.49581, lng: 117.15117};

            // Buat objek peta
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng
            });

            // Buat marker di lokasi Anda
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Our Location'
            });
        }
    </script>
</body>
</html>
