<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $DOMAIN='candahar.com/SmartHotel/public'; ?>
    <title>Smart Hotel Document API</title>
<!--
Neaty HTML Template
http://www.templatemo.com/tm-501-neaty
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">
                        <div class="tm-logo-div text-xs-center">
                            <div style="background-color: white">
                            <img src="http://candahar.com/img/logo_candahar.png" alt="Logo" width="50px">
                            <img src="https://www.qnesys.com/images/Logo%20Qnesys%20-%2020190514%20xx.png" alt="Logo" width="150px">
                            </div>
                            <h1 class="tm-site-name">Smart Hotel API <br><b>Documentation</b></h1>
                        </div>
                        <nav class="tm-main-nav" style="overflow-y: scroll; height: 60%;">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="#welcome" class="tm-nav-item-link">Selamat Datang</a>
                                    <hr style="background-color: white;">
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#database" class="tm-nav-item-link">STRUKTUR DATABASE</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#httpcode" class="tm-nav-item-link">HTTP CODE</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#token" class="tm-nav-item-link">TOKEN REQUEST HEADER</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#get" class="tm-nav-item-link">GET DATA REQUEST FORMAT</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#get-response" class="tm-nav-item-link">GET RESPONSE FORMAT</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#post" class="tm-nav-item-link">POST CONTENT TYPE</a>
                                    <hr style="background-color: white;">
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#login" class="tm-nav-item-link">Login</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#ads" class="tm-nav-item-link">Ads</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#adsiptvlocationtype" class="tm-nav-item-link">Ads IPTV Location Type</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#adsiptvlocation" class="tm-nav-item-link">Ads IPTV Location</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#division" class="tm-nav-item-link">Division</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#division_privilege" class="tm-nav-item-link">Division Privilege</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#user" class="tm-nav-item-link">Data Management User</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#provinsi" class="tm-nav-item-link">Provinsi</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#kabupaten" class="tm-nav-item-link">Kabupaten</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#kelurahan" class="tm-nav-item-link">Kelurahan</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#hotel" class="tm-nav-item-link">Hotel</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#around-hotel" class="tm-nav-item-link">Around Hotel</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#information" class="tm-nav-item-link">Information</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#event" class="tm-nav-item-link">Event</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#ssid" class="tm-nav-item-link">SSID</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#public_tv" class="tm-nav-item-link">Public TV</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#facilities-category" class="tm-nav-item-link">Facilities Category</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#hotel-facilities" class="tm-nav-item-link">Hotel Facilities</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#category-galery" class="tm-nav-item-link">Category Galery</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#galery" class="tm-nav-item-link">Galery</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#food-category" class="tm-nav-item-link">Food Category</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#food" class="tm-nav-item-link">Food</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#service" class="tm-nav-item-link">Service</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#guest" class="tm-nav-item-link">Guest</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#check_io" class="tm-nav-item-link">Check In/Out</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#cart" class="tm-nav-item-link">Cart</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#guestaccess" class="tm-nav-item-link">Guest Room Access</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#room-category" class="tm-nav-item-link">Room Category</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#room" class="tm-nav-item-link">Room</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#room-hardware" class="tm-nav-item-link">Room Hardware / Room Utitilies</a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!-- Left column: logo and menu -->

                    <!-- Right column: content -->
                    <div class="tm-right-column">
                        <figure>
                            <img src="https://trello-backgrounds.s3.amazonaws.com/SharedBackground/2134x1600/44237c0b29296aee2e302c0044fe436c/photo-1504639725590-34d0984388bd.jpg" alt="Header image" class="img-fluid">
                        </figure>

                        <div class="tm-content-div">
                            <!-- Welcome section -->
                            <section>
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                              <script>
                              $.ajax('http://candahar.com/SmartHotel/public/api/Provinsi',{
                                  'data': {
                              		"select":"*",
                                  	"where":"",
                                  	"where_in":"",
                                  	"like":"",
                                  	"order":"",
                                  	"limit":"",
                                  	"offset":"",
                                  	"custom_condition":""
                              	}, //{action:'x',params:['a','b','c']}
                                  'ifModified': true,
                              	  'type': 'GET',
                                  'processData': true,
                                  'contentType': 'text/plain',//'application/json' //typically 'application/x-www-form-urlencoded', but the service you are calling may expect 'text/json'... check with the service to see what they expect as content-type in the HTTP header
                              });

//                               var xhr = new XMLHttpRequest();
// xhr.open('GET', 'http://candahar.com/SmartHotel/public/api/Provinsi', true);
// xhr.withCredentials = true;
// xhr.setRequestHeader('Content-Type', 'application/json')
// xhr.send({
//      "select":"*",
//      "where":"",
//      "where_in":"",
//      "like":"",
//      "order":"",
//      "limit":"",
//      "offset":"",
//      "custom_condition":""
// });

// xhr.onreadystatechange = function() {
// if (xhr.readyState === 2) {// do something}
// }
//
// }
                              </script>
                            </section>
                            <section id="welcome" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Selamat Datang</h2>
                                </header>
                                <div class="row">
                                  <div class="well col-md-12">
                                    <p>Selamat datang di dokumentasi Smart Hotel API untuk mengambil collection postman silahkan klik link dibawah ini, untuk melihat dokumentasi API pilih sidebar sesuai kebutuhan</p>
                                    <center><h3 class="text-center"><a download="smart_hotel.postman_collection.json" href="smart_hotel.postman_collection.json">POSTMAN COLLECTION</a></h3></center>
                                  </div>
                                </div>
                            </section>
                            <section id="database" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Struktur Database</h2>
                                </header>
                                <div class="row">
                                  <div class="col col-md-12">
                                    <img src="img/Untitled.png" width="100%">
                                    <center><p>*simpan gambar lalu zoom untuk melihat lebih jelasnya</p></center>
                                  </div>
                                </div>
                            </section>
                            <section id="httpcode" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">HTTP CODE</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">RESPONSE</b>
                                      <p>Beberapa code yang dihandle dan digunakan dalam API</p>
                                      <hr>
                                      101 - Protocol Websocket
                                  		<br>200 - OK & Format sesuai maupun tidak sesuai
                                  		<br>403 - Token Miss Match / Invalid Header
                                  		<br>408 - Server Timeout
                                  		<br>500 - Internal
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="token" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">TOKEN REQUEST HEADER</h2>
                                </header>
                                <div class="row">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <b class="btn btn-primary">POST</b> <b class="btn btn-danger">DELETE</b>
                                      <p>Setiap api akan diminta API-Token kecuali [POST] Login, [GET] User, [GET] CheckIO</P>
                                      <hr>
                                      <b>[KHUSUS PENGELOLA DATA]</b><br>API-Token: (dari POST api/Login mengirimkan parameter username & password)
                                      <br><br>
                                      <b>[KHUSUS TAMU]</b><br> API-Token: (dari POST api/GuestAccess mengirimkan parameter id_guest & id_check_io_access)
                                    </div>
                                </div>
                            </section>
                            <section id="get" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">GET DATA REQUEST FORMAT</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b>
                                      <p>Setiap melakukan request yang diawal dengan awalan Get, contoh GetAds, GetUser, silahkan gunakan sesuai format dibawah ini</p>
                                      <hr>
                                      <h4>Request Header: </h4>
                                      <hr>
                                      <table border="1" width="100%">
                                      <tr>
                                        <th>Content-Type</th>
                                        <th>Useable</th>
                                      </tr>
                                      <tr>
                                        <td>application/x-www-form-urlencoded</td>
                                        <td><span class="btn btn-warning btn-block">ONLY custom_condition</span></td>
                                      </tr>
                                      <tr>
                                        <td>application/json</td>
                                        <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                      </tr>
                                      <tr>
                                        <td>multipart/form-data</td>
                                        <td><span class="btn btn-warning btn-block">ONLY custom_condition</span></td>
                                      </tr>
                                      </table>
                                      <br>
                                      <table border="1" width="100%">
                                      <tr>
                                        <th>API-Token</th>
                                        <th>Required?</th>
                                      </tr>
                                      <tr>
                                        <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      </table>
                                      <hr>
                                      <h4>Request Body: </h4>
                                      <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                      <hr>
                                      <table border="1" width="100%">
                                      <tr>
                                        <th>Key</th>
                                        <th>Example / Value</th>
                                        <th>Required?</th>
                                      </tr>
                                      <tr>
                                        <td>select</td>
                                        <td>"*"</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>where</td>
                                        <td>{"field":"id_user","operator":"=","value":"7"}</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>where_in</td>
                                        <td>{"field":"id_user","value":"7"}</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>like</td>
                                        <td>{"field":"name","value":"Aryo Cahyo"}</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>order</td>
                                        <td>[{"field":"nama_produk","type":"ASC"}]</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>limit</td>
                                        <td>50</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>offset</td>
                                        <td>10</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      <tr>
                                        <td>custom_condition</td>
                                        <td>"hotel_name Like '%K%' "</td>
                                        <td><span class="btn btn-success btn-block">YES</span></td>
                                      </tr>
                                      </table>
                                      <hr>


<b>MORE EXAMPLE</b>
<hr>
<pre>
{
    "select":"*",
    "where":"",
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

SELECT FORMAT EXAMPLE
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

WHERE FORMAT EXAMPLE 1
<hr>
{
    "select":"id_user, name, username",
    "where":
      {
        "field":"id_user",
        "operator":"=",
        "value":"7"
      }
    ,
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

WHERE FORMAT EXAMPLE 2
<hr>
{
    "select":"id_user, name, username",
    "where": [
      {
        "field":"id_user",
        "operator":"=",
        "value":"7"
      },
      {
        "field":"username",
        "operator":"=",
        "value":"asep"
      }
    ],
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

WHERE IN FORMAT EXAMPLE 1
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":
      {
        "field":"id_user",
        "value":[1,2,3]
      }
    ,
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

WHERE IN FORMAT EXAMPLE 2
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":
    [
      {
        "field":"id_user",
        "value":[1,2,3]
      },
      {
        "field":"name",
        "value":["septian","ramadhan"]
      }
    ]
    ,
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

LIKE FORMAT EXAMPLE 1
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":
    {
      "field":"name",
      "value":"sept"
    },
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

LIKE FORMAT EXAMPLE 2
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":
    [
      {
        "field":"name",
        "value":"sept"
      },
      {
        "field":"name",
        "value":"rama"
      }
    ],
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
}

ORDER FORMAT EXAMPLE 1
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":""
    "order":
    {
      "field":"created_at",
      "type":"DESC"
    },
    "limit":"",
    "offset":"",
    "custom_condition":""
}

ORDER FORMAT EXAMPLE 2
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":""
    "order":
    [
      {
        "field":"created_at",
        "type":"DESC"
      },
      {
        "field":"updated_at",
        "type":"ASC"
      }
    ],
    "limit":"",
    "offset":"",
    "custom_condition":""
}

LIMIT & OFFSET FORMAT EXAMPLE
<hr>
{
    "select":"id_user, name, username",
    "where":"",
    "where_in":"",
    "like":""
    "order":"",
    "limit":5,
    "offset":1,
    "custom_condition":""
}

CUSTOM CONDITION FORMAT EXAMPLE
<hr>
NOTE: custom_condition jika mengisi custom condition maka format where/where in/like/order/limit/offset tidak dijalankan
{
    "select":"*",
    "where":"",
    "where_in":"",
    "like":""
    "order":"",
    "limit":100,
    "offset":0,
    "custom_condition":"id_user = 7 AND username = root"
}

</pre>

                                      <div>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="get-response" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">GET DATA RESPONSE FORMAT</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b>
                                      <p>Contoh lebih terkait response code dan Get Data</p>
                                      <hr>



<b>RESPONSE</b>
<pre>
Example (200)
<hr>
{
  "status": "true",
  "success": 1,
  "failed": 0,
  "message": "Data was found 2",
  "primary_key": "id_user",
  "type": "list",
  "data": [
      {
          "id_user": 1,
          "name": "Septian Ramadhan",
          "username": "asep",
          "password": "$2y$10$xxRtge17h0vSIPL.ullOFuBIKAo6iykukgAxxFtIRA9IciXPbhq4O",
          "created_at": "2020-07-29T20:48:44.000000Z",
          "updated_at": "2020-07-29T21:25:28.000000Z"
      },
      {
          "id_user": 2,
          "name": "Septian Ramadhan",
          "username": "mrseramadhan",
          "password": "$2y$10$7cQ03RclqTy6VJ68gsOYSu08l4oclPE2tpGQSaHyuUQ6JD.Eq2tvu",
          "created_at": "2020-07-29T22:16:36.000000Z",
          "updated_at": "2020-07-29T22:16:36.000000Z"
      }
  ],
  "count": 2
}

OR ACCEPTED FORMAT (200)
<hr>
{
  "status": "true",
  "success": 1,
  "failed": 0,
  "message": "Data was found 1",
  "primary_key": "id_user",
  "type": "object",
  "data":
      {
          "id_user": 2,
          "name": "Septian Ramadhan",
          "username": "mrseramadhan",
          "password": "$2y$10$7cQ03RclqTy6VJ68gsOYSu08l4oclPE2tpGQSaHyuUQ6JD.Eq2tvu",
          "created_at": "2020-07-29T22:16:36.000000Z",
          "updated_at": "2020-07-29T22:16:36.000000Z"
      },
  "count": 1
}

OR NOT ACCEPTED FORMAT (200)
<hr>
{
    "status": "false",
    "success": 0,
    "failed": 2,
    "message": "Format not accepted, field \"password\" not found",
    "primary_key": "token",
    "type": "",
    "data": "",
    "count": 0
}

Example Invalid Header (403)
<hr>
{
    "status": "false",
    "success": 0,
    "failed": 1,
    "message": "Invalid header format",
    "primary_key": "",
    "type": "",
    "data": "",
    "count": 0
}

Example API-Token Missmatch (403)
<hr>
{
    "status": "false",
    "success": 0,
    "failed": 1,
    "message": "Token missmatch",
    "primary_key": "",
    "type": "",
    "data": "",
    "count": 0
}

</pre>

                                      <div>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="post" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">POST CONTENT TYPE</h2>
                                </header>
                                <div class="row">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b>
                                      <p>Content-Type yang digunakan pada header, ketika mengirimkan request</p>
                                      <hr>
                                      <table border="1" width="100%">
                                        <tr>
                                          <th>Content-Type</th>
                                          <th>Fungsi</th>
                                        </tr>
                                        <tr>
                                          <td>application/x-www-form-urlencoded</td>
                                          <td>Mengirimkan data tanpa file</td>
                                        </tr>
                                        <tr>
                                          <td>application/json</td>
                                          <td>Mengirimkan data tanpa file</td>
                                        </tr>
                                        <tr>
                                          <td>multipart/form-data</td>
                                          <td>Mengirimkan dengan file</td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                            </section>
                            <section id="login" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Login</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/Login</strong>
                                      <p>Digunakan untuk mengambil token, untuk penguna internal atau pengelola data mengunakan username dan password, untuk tamu mengunakan id_guest dan id_check_io_access</p>
                                      <hr>
                                        <h4>Request Header: </h4>
                                        <hr>
                                        <table border="1" width="100%">
                                        <tr>
                                          <th>Content-Type</th>
                                          <th>Useable</th>
                                        </tr>
                                        <tr>
                                          <td>application/x-www-form-urlencoded</td>
                                          <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                        </tr>
                                        <tr>
                                          <td>application/json</td>
                                          <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                        </tr>
                                        <tr>
                                          <td>multipart/form-data</td>
                                          <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                        </tr>
                                        </table>
                                        <hr>
                                        <h4>Request Body: </h4>
                                        <hr>
                                        <table border="1" width="100%">
                                        <tr>
                                          <th>Key</th>
                                          <th>Example / Value</th>
                                          <th>Required?</th>
                                        </tr>
                                        <tr>
                                          <td>username</td>
                                          <td>(GET dan pilih dari username <strong><?=$DOMAIN?>/api/User</strong>)</td>
                                          <td><span class="btn btn-success btn-block">YES</span></td>
                                        </tr>
                                        <tr>
                                          <td>password</td>
                                          <td>(POST dari dengan mengunakan id_user ke <strong><?=$DOMAIN?>/api/User</strong> jika lupa password)</td>
                                          <td><span class="btn btn-success btn-block">YES</span></td>
                                        </tr>
                                        </table>
                                        <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
{
  "status": "true",
  "success": 1,
  "failed": 0,
  "message": "Success to create new token, Data was found 1",
  "primary_key": "token",
  "type": "string",
  "count": 1,
  "data": "nsnBr17E8kxX08nIPP620zIRtQ23TdrS141IYpur35"
}
</pre>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="ads" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Ads (Master Iklan)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetAds</strong>
                                      <p>adalah Master Iklan, digunakan untuk mengambil list data, digunakan user dari Qynesis, data ini digunakan sebagai referensi utama untuk iklan per-hotel</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": ", Data was found 1",
    "primary_key": "id_ads",
    "type": "list",
    "count": 1,
    "data": [
        {
            "id_ads": 1,
            "id_hotel": 2,
            "nama_produk": "Kue",
            "file_type": "png",
            "timer": "100",
            "position": "Test",
            "type": "Common",
            "range_time": "",
            "active": 1,
            "created_at": "2020-08-27 14:16:42",
            "updated_at": "2020-08-27 14:16:42"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostAds</strong>
                                    <p>digunakan untuk menambah/mengubah data master ads, digunakan user dari Qynesis</p>
                                    <hr>
                                    <h4>Request Header: </h4>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>Content-Type</th>
                                      <th>Useable</th>
                                    </tr>
                                    <tr>
                                      <td>application/x-www-form-urlencoded</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>multipart/form-data</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    </table>
                                    <br>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table>
                                    <hr>
                                    <h4>Request Body: </h4>
                                    <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th rowspan="2" style="text-align: center;">Key</th>
                                      <th rowspan="2" style="text-align: center;">Data Type</th>
                                      <th rowspan="2" style="text-align: center;">Example / Value</th>
                                      <th colspan="2" style="text-align: center;">Required?</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">Create</th>
                                      <th style="text-align: center;">Update</th>
                                    </tr>
                                    <tr>
                                      <td>id_ads</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>nama_produk</td>
                                      <td>STRING (50)</td>
                                      <td>Soaper SKIN</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>file_type</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>timer</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>position</td>
                                      <td>STRING (200)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>type</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>type</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>range_time</td>
                                      <td>INT (30)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>active</td>
                                      <td>INT (30)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>created_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP after Create)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    <tr>
                                      <td>updated_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP every Update)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    </table>

                                  </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="card" style="padding: 20px;">
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteAds</strong>
                                   <p>digunakan untuk menghapus data master ads, digunakan user dari Qynesis</p>
                                   <hr>
                                   <h4>Request Header: </h4>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>Content-Type</th>
                                     <th>Useable</th>
                                   </tr>
                                   <tr>
                                     <td>application/x-www-form-urlencoded</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>application/json</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>multipart/form-data</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   </table>
                                   <br>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>API-Token</th>
                                     <th>Required?</th>
                                   </tr>
                                   <tr>
                                     <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
                                   <hr>
                                   <h4>Request Body: </h4>
                                   <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th style="text-align: center;">Key</th>
                                     <th style="text-align: center;">Data Type</th>
                                     <th style="text-align: center;">Example / Value</th>
                                     <th style="text-align: center;">Required?</th>
                                   </tr>
                                   <tr>
                                     <td>id_ads</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="adsiptvlocationtype" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Ads IPTV Location Type (Master Location IPTV)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetAdsIPTVLocationType</strong>
                                      <p>adalah Master Location IPTV, digunakan untuk mengambil list data, digunakan user statis IPTV, data ini digunakan sebagai master posisi iklan pada IPTV android</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 5",
    "primary_key": "id_ads_location_type",
    "type": "list",
    "count": 5,
    "data": [
        {
            "id_ads_location_type": 1,
            "ads_location_type": "Sebelum",
            "created_at": "2020-08-27T23:15:58.000000Z",
            "updated_at": "2020-08-27T23:15:39.000000Z"
        },
        {
            "id_ads_location_type": 2,
            "ads_location_type": "Posisi Bawah",
            "created_at": "2020-08-27T16:16:17.000000Z",
            "updated_at": "2020-08-27T16:16:17.000000Z"
        },
        {
            "id_ads_location_type": 3,
            "ads_location_type": "Posisi Kiri",
            "created_at": "2020-08-27T16:16:31.000000Z",
            "updated_at": "2020-08-27T16:16:31.000000Z"
        },
        {
            "id_ads_location_type": 4,
            "ads_location_type": "Dashboard Corner Bar",
            "created_at": "2020-08-27T16:16:53.000000Z",
            "updated_at": "2020-08-27T16:16:53.000000Z"
        },
        {
            "id_ads_location_type": 5,
            "ads_location_type": "Inside Dashboard Corner Bar",
            "created_at": "2020-08-27T16:17:08.000000Z",
            "updated_at": "2020-08-27T16:17:08.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostAdsIPTVLocationType</strong>
                                    <p>digunakan untuk menambah data IPTV Location Type, digunakan user statis IPTV</p>
                                    <hr>
                                    <h4>Request Header: </h4>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>Content-Type</th>
                                      <th>Useable</th>
                                    </tr>
                                    <tr>
                                      <td>application/x-www-form-urlencoded</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>multipart/form-data</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    </table>
                                    <br>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table>
                                    <hr>
                                    <h4>Request Body: </h4>
                                    <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th rowspan="2" style="text-align: center;">Key</th>
                                      <th rowspan="2" style="text-align: center;">Data Type</th>
                                      <th rowspan="2" style="text-align: center;">Example / Value</th>
                                      <th colspan="2" style="text-align: center;">Required?</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">Create</th>
                                      <th style="text-align: center;">Update</th>
                                    </tr>
                                    <tr>
                                      <td>id_ads_location_type</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>ads_location_type</td>
                                      <td>STRING (50)</td>
                                      <td>Inside Dashboard Corner Bar</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>created_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP after Create)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    <tr>
                                      <td>updated_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP every Update)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    </table>

                                  </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="card" style="padding: 20px;">
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteAdsIPTVLocationType</strong>
                                   <p>digunakan untuk hapus data IPTV Location Type, digunakan user statis IPTV</p>
                                   <hr>
                                   <h4>Request Header: </h4>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>Content-Type</th>
                                     <th>Useable</th>
                                   </tr>
                                   <tr>
                                     <td>application/x-www-form-urlencoded</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>application/json</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>multipart/form-data</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   </table>
                                   <br>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>API-Token</th>
                                     <th>Required?</th>
                                   </tr>
                                   <tr>
                                     <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
                                   <hr>
                                   <h4>Request Body: </h4>
                                   <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th style="text-align: center;">Key</th>
                                     <th style="text-align: center;">Data Type</th>
                                     <th style="text-align: center;">Example / Value</th>
                                     <th style="text-align: center;">Required?</th>
                                   </tr>
                                   <tr>
                                     <td>id_ads_location_type</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="adsiptvlocation" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Ads IPTV Location (Position per-IPTV)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetAdsIPTVLocation</strong>
                                      <p>adalah Position Location per-IPTV, digunakan untuk mengambil list data, digunakan user statis IPTV, data ini digunakan sebagai location iklan per-IPTV pada IPTV android</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_ads_location",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_ads_location": 1,
            "id_ads_location_type": 1,
            "id_ads": 1,
            "created_at": "2020-08-27T17:04:43.000000Z",
            "updated_at": "2020-08-27T17:04:43.000000Z"
        },
        {
            "id_ads_location": 2,
            "id_ads_location_type": 2,
            "id_ads": 1,
            "created_at": "2020-08-27T17:04:56.000000Z",
            "updated_at": "2020-08-27T17:04:56.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostAdsIPTVLocation</strong>
                                    <p>digunakan untuk menambah/mengubah data IPTV Location Type, digunakan user statis IPTV</p>
                                    <hr>
                                    <h4>Request Header: </h4>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>Content-Type</th>
                                      <th>Useable</th>
                                    </tr>
                                    <tr>
                                      <td>application/x-www-form-urlencoded</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>multipart/form-data</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    </table>
                                    <br>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table>
                                    <hr>
                                    <h4>Request Body: </h4>
                                    <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                    <hr>
                                    <table border="1" width="100%">
                                    <tr>
                                      <th rowspan="2" style="text-align: center;">Key</th>
                                      <th rowspan="2" style="text-align: center;">Data Type</th>
                                      <th rowspan="2" style="text-align: center;">Example / Value</th>
                                      <th colspan="2" style="text-align: center;">Required?</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">Create</th>
                                      <th style="text-align: center;">Update</th>
                                    </tr>
                                    <tr>
                                      <td>id_ads_location</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_ads_location_type</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetAdsIPTVLocationType</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_ads</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetAds</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>created_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP after Create)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    <tr>
                                      <td>updated_at</td>
                                      <td>timestamp</td>
                                      <td>(AUTO STAMP every Update)</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    </table>

                                  </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="card" style="padding: 20px;">
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteAdsIPTVLocation</strong>
                                   <p>digunakan untuk menghapus data IPTV Location Type, digunakan user statis IPTV</p>
                                   <hr>
                                   <h4>Request Header: </h4>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>Content-Type</th>
                                     <th>Useable</th>
                                   </tr>
                                   <tr>
                                     <td>application/x-www-form-urlencoded</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>application/json</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   <tr>
                                     <td>multipart/form-data</td>
                                     <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                   </tr>
                                   </table>
                                   <br>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th>API-Token</th>
                                     <th>Required?</th>
                                   </tr>
                                   <tr>
                                     <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
                                   <hr>
                                   <h4>Request Body: </h4>
                                   <p>Jika tidak diperlukan maka isi value dengan string kosong ""</p>
                                   <hr>
                                   <table border="1" width="100%">
                                   <tr>
                                     <th style="text-align: center;">Key</th>
                                     <th style="text-align: center;">Data Type</th>
                                     <th style="text-align: center;">Example / Value</th>
                                     <th style="text-align: center;">Required?</th>
                                   </tr>
                                   <tr>
                                     <td>id_ads_location</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="provinsi" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Provinsi</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Provinsi</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_provinsi",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_provinsi": "1",
            "provinsi": "BANTEN",
            "created_at": "2020-08-11T07:12:32.000000Z",
            "updated_at": "2020-08-11T07:12:32.000000Z"
        },
        {
            "id_provinsi": "2",
            "provinsi": "DKI JAKARTA",
            "created_at": "2020-08-11T07:12:32.000000Z",
            "updated_at": "2020-08-11T07:12:32.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="kabupaten" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Kabupaten</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Kabupaten</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_kabupaten",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_kabupaten": "1",
            "id_provinsi": "1",
            "kabupaten": "CILEGON",
            "created_at": "2020-08-11T07:13:57.000000Z",
            "updated_at": "2020-08-11T07:13:57.000000Z"
        },
        {
            "id_kabupaten": "2",
            "id_provinsi": "1",
            "kabupaten": "LEBAK",
            "created_at": "2020-08-11T07:13:57.000000Z",
            "updated_at": "2020-08-11T07:13:57.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="kabupaten" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Kelurahan</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Kelurahan</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_kelurahan",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_kelurahan": "1",
            "id_kabupaten": "1",
            "id_kecamatan": "1",
            "id_provinsi": "1",
            "kelurahan": "BAGENDUNG",
            "created_at": "2020-08-11T07:20:41.000000Z",
            "updated_at": "2020-08-11T07:20:41.000000Z"
        },
        {
            "id_kelurahan": "2",
            "id_kabupaten": "1",
            "id_kecamatan": "1",
            "id_provinsi": "1",
            "kelurahan": "BENDUNGAN",
            "created_at": "2020-08-11T07:20:41.000000Z",
            "updated_at": "2020-08-11T07:20:41.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="hotel" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Hotel</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Hotel</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_hotel",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_hotel": "2",
            "id_corporation": "1",
            "hotel_name": "Ritz Calton",
            "hotel_address": "Jl. DR. Ide Anak Agung Gde Agung Kav.E.1.1 No. 1, Kuningan, Daerah Khusus Ibukota Jakarta 12950",
            "hotel_phone": "(021) 25518888",
            "pos_code": "12950",
            "code_provinsi": "1",
            "code_kabupaten": "1",
            "code_kelurahan": "1",
            "npwp": "123456789",
            "pkp_npkp": "1",
            "map_coordinate": "-6.227588, 106.824310",
            "pict_map": "Lobby-5.jpg",
            "logo_hotel": "ritz-carlton-primary-black.png",
            "wallpaper": "50550471-Grand Room - Hendro Edit-1.jpg",
            "created_at": "2020-08-06T10:13:07.000000Z",
            "updated_at": "2020-08-06T10:14:37.000000Z"
        },
        {
            "id_hotel": "3",
            "id_corporation": "1",
            "hotel_name": "Ritz Calton",
            "hotel_address": "Jl. DR. Ide Anak Agung Gde Agung Kav.E.1.1 No. 1, Kuningan, Daerah Khusus Ibukota Jakarta 12950",
            "hotel_phone": "(021) 25518888",
            "pos_code": "12950",
            "code_provinsi": "1",
            "code_kabupaten": "1",
            "code_kelurahan": "1",
            "npwp": "123456789",
            "pkp_npkp": "1",
            "map_coordinate": "-6.227588, 106.824310",
            "pict_map": "Lobby-5.jpg",
            "logo_hotel": "ritz-carlton-primary-black.png",
            "wallpaper": "50550471-Grand Room - Hendro Edit-1.jpg",
            "created_at": "2020-08-06T10:15:35.000000Z",
            "updated_at": "2020-08-06T10:15:35.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Hotel</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_corporation" = "1",
"hotel_name" = "Mawar",
"hotel_address" = "Jl. Darmawangsa",
"hotel_phone" = 08999999999999
"pos_code" = 15414
"code_provinsi" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Provinsi</strong>)
"code_kabupaten" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Kabupaten</strong>)
"code_kelurahan" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Kelurahan</strong>)
"npwp" = 3645454564564564564564
"pkp_npkp" = 1
"map_coordinate" = "-6.227588, 106.824310"
"pict_map" = (Upload File Foto)
"logo_hotel" = (Upload File Logo)
"wallpaper" = (Upload File Wallpaper)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Hotel</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_hotel" = "3"
"id_corporation" = "1",
"hotel_name" = "Mawar",
"hotel_address" = "Jl. Darmawangsa",
"hotel_phone" = 08999999999999
"pos_code" = 15414
"code_provinsi" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Provinsi</strong>)
"code_kabupaten" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Kabupaten</strong>)
"code_kelurahan" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Kelurahan</strong>)
"npwp" = 3645454564564564564564
"pkp_npkp" = 1
"map_coordinate" = "-6.227588, 106.824310"
"pict_map" = (Upload File Foto)
"logo_hotel" = (Upload File Logo)
"wallpaper" = (Upload File Wallpaper)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Hotel</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_hotel" : "3"
}

ATAU

{
  "id_hotel" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="around-hotel" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Around Hotel</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/AroundHotel</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 3",
    "primary_key": "id_around_hotel",
    "type": "list",
    "count": 3,
    "data": [
        {
            "id_around_hotel": "4",
            "id_hotel": "2",
            "name": "rumah",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "this is from rumah merchandise shop",
            "range": "100 meter",
            "grouping": "Merchandise",
            "created_at": "2020-08-10T22:27:02.000000Z",
            "updated_at": "2020-08-10T22:27:02.000000Z"
        },
        {
            "id_around_hotel": "5",
            "id_hotel": "2",
            "name": "rumah",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "this is from rumah merchandise shop",
            "range": "100 meter",
            "grouping": "Merchandise",
            "created_at": "2020-08-10T22:27:26.000000Z",
            "updated_at": "2020-08-10T22:27:26.000000Z"
        },
        {
            "id_around_hotel": "6",
            "id_hotel": "2",
            "name": "rumah",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "this is from rumah merchandise shop",
            "range": "100 meter",
            "grouping": "Merchandise",
            "created_at": "2020-08-11T05:38:16.000000Z",
            "updated_at": "2020-08-10T22:38:16.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/AroundHotel</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari <strong><?=$DOMAIN?>/api/Hotel</strong>),
"name" = "Stasiun Kereta Rajawali",
"picture" = (Upload file Foto),
"description" = "Stasiun kereta terdekat dari hotel ....... sehingga akses mudah"
"range" = "200 m"
"grouping" = "Public Transportation"
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/AroundHotel</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_around_hotel" = "2"
"id_hotel" = (GET dan pilih dari <strong><?=$DOMAIN?>/api/Hotel</strong>),
"name" = "Stasiun Kereta Rajawali",
"picture" = (Upload file Foto),
"description" = "Stasiun kereta terdekat dari hotel ....... sehingga akses mudah"
"range" = "200 m"
"grouping" = "Public Transportation"
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/AroundHotel</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_around_hotel" : "3"
}

ATAU

{
  "id_around_hotel" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="information" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Information</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 4",
    "primary_key": "id_information",
    "type": "list",
    "count": 4,
    "data": [
        {
            "id_information": "2",
            "id_hotel": "2",
            "description": "Welcome to our Hotel!! We give our best!",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:03:25.000000Z",
            "updated_at": "2020-08-06T12:04:02.000000Z"
        },
        {
            "id_information": "3",
            "id_hotel": "2",
            "description": "Welcome to our Hotel!! We give our best!",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:05:04.000000Z",
            "updated_at": "2020-08-06T12:05:04.000000Z"
        },
        {
            "id_information": "5",
            "id_hotel": "2",
            "description": "Welcome to our Hotel!! We give our best!",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:13:49.000000Z",
            "updated_at": "2020-08-06T12:13:49.000000Z"
        },
        {
            "id_information": "6",
            "id_hotel": "2",
            "description": "Welcome to our Hotel!! We give our best!",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:14:01.000000Z",
            "updated_at": "2020-08-06T12:14:01.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"description" = "Welcome to our Hotel!! We give our best!"
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_information" = "6"
"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"description" = "Welcome to our Hotel!! We give our best!"
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_information" : "3"
}

ATAU

{
  "id_information" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="event" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Event</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Event</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_event",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_event": "1",
            "id_hotel": "2",
            "event_name": "Circus",
            "description": "It will be carnival on center of city",
            "start_at": "2020-11-15 00:00:00",
            "end_at": "2021-01-15 00:00:00",
            "created_at": "2020-08-11T00:38:03.000000Z",
            "updated_at": "2020-08-11T00:38:03.000000Z"
        },
        {
            "id_event": "2",
            "id_hotel": "2",
            "event_name": "Circus",
            "description": "It will be carnival on center of city",
            "start_at": "2020-11-15 00:00:00",
            "end_at": "2021-01-15 00:00:00",
            "created_at": "2020-08-11T00:38:07.000000Z",
            "updated_at": "2020-08-11T00:38:07.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Event</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"event_name" = "Carnival"
"description" = "It will be carnival on center of city"
"start_at" = "2020-11-15"
"end_at" = "2021-01-15"
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Event</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_event" = 2
"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"event_name" = "Carnival"
"description" = "It will be carnival on center of city"
"start_at" = "2020-11-15"
"end_at" = "2021-01-15"
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Event</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_event" : "3"
}

ATAU

{
  "id_event" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="ssid" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">SSID (Hotspot)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/SSID</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_ssid_hotel",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_ssid_hotel": "2",
            "id_hotel": "2",
            "ssid": "test",
            "password": "$2y$10$oGyZsiHwWO.e4clcdlhCGO8tg8i9MqoX9ttG7n7tZSUpaN2oOl5o.",
            "created_at": "2020-08-11T01:01:51.000000Z",
            "updated_at": "2020-08-11T01:01:51.000000Z"
        },
        {
            "id_ssid_hotel": "3",
            "id_hotel": "2",
            "ssid": "Lantai 2",
            "password": "$2y$10$ap8CeZSyBlrhO0WAl8SNl.fyILDf.W/3UDxojk1rH686rZUlLaRaO",
            "created_at": "2020-08-11T01:02:06.000000Z",
            "updated_at": "2020-08-11T01:02:06.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/SSID</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"ssid" = "Lantai 2 Pusat"
"password" = "root12345"
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/SSID</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_ssid_hotel" = "2"
"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"ssid" = "Lantai 2 Pusat"
"password" = "root12345"
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/SSID</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_ssid_hotel" : "3"
}

ATAU

{
  "id_ssid_hotel" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="public_tv" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Public TV</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/PublicTV</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_public_tv",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_public_tv": "2",
            "id_hotel": "2",
            "urutan": "1",
            "detik": "360",
            "file_type": "jpg",
            "status": "1",
            "picture": "Public_Tv_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_public_tv": "3",
            "id_hotel": "2",
            "urutan": "2",
            "detik": "500",
            "file_type": "png",
            "status": "1",
            "picture": "Public_Tv_5ddbb31631b41e220db41b111a2eb318.jpg",
            "created_at": "2020-08-11T00:52:00.000000Z",
            "updated_at": "2020-08-11T00:52:56.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PublicTV</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"urutan" = "1"
"detik" = "500"
"file_type" = "png"
"status" = "1"
"picture" = (Upload file gambar)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/PublicTV</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_public_tv" = 2
"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"urutan" = "1"
"detik" = "500"
"file_type" = "png"
"status" = "1"
"picture" = (Upload file gambar)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/PublicTV</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_public_tv" : "3"
}

ATAU

{
  "id_public_tv" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="facilities-category" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Facilities Category</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_facilities_category",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_facilities_category": "3",
            "id_hotel": "2",
            "category_facilities_name": "SPA",
            "picture": "50550471-Grand Room - Hendro Edit-1.jpg",
            "created_at": "2020-08-06T12:21:39.000000Z",
            "updated_at": "2020-08-06T12:22:52.000000Z"
        },
        {
            "id_facilities_category": "5",
            "id_hotel": "2",
            "category_facilities_name": "SPA",
            "picture": "50550471-Grand Room - Hendro Edit-1.jpg",
            "created_at": "2020-08-06T12:23:39.000000Z",
            "updated_at": "2020-08-06T12:23:39.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"category_facilities_name"= "SPA"
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_facilities_category" = "3"
"id_hotel" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"category_facilities_name"= "SPA"
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_facilities_category" : "3"
}

ATAU

{
  "id_facilities_category" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="hotel-facilities" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Hotel Facilities</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/HotelFacilities</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 3",
    "primary_key": "id_facilities",
    "type": "list",
    "count": 3,
    "data": [
        {
            "id_facilities": "1",
            "id_facilities_category": "3",
            "facilities_name": "Ayudan SPA Massage",
            "description": "Dengan kenikmatan setiap jempol pengurut",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:27:16.000000Z",
            "updated_at": "2020-08-06T12:27:16.000000Z"
        },
        {
            "id_facilities": "2",
            "id_facilities_category": "3",
            "facilities_name": "Ayudan SPA Massage",
            "description": "Dengan kenikmatan setiap jempol pengurut",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:29:15.000000Z",
            "updated_at": "2020-08-06T12:29:15.000000Z"
        },
        {
            "id_facilities": "3",
            "id_facilities_category": "3",
            "facilities_name": "Ayudan SPA Massage",
            "description": "Dengan kenikmatan setiap jempol pengurut",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:30:03.000000Z",
            "updated_at": "2020-08-06T12:30:03.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/HotelFacilities</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_facilities_category" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>)
"facilities_name"= "Mawar SPA Massage"
"description" = "Dengan kenikmatan setiap jempol pengurut"
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_facilities" = "2"
"id_facilities_category" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/FacilitiesCategory</strong>)
"facilities_name"= "Mawar SPA Massage"
"description" = "Dengan kenikmatan setiap jempol pengurut"
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Information</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_facilities" : "3"
}

ATAU

{
  "id_facilities" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="category-galery" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Category Galery</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/CategoryGalery</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_category_galery",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_category_galery": "1",
            "category_galery_name": "Room",
            "created_at": "2020-08-11T05:53:30.000000Z",
            "updated_at": "2020-08-10T23:09:44.000000Z"
        },
        {
            "id_category_galery": "2",
            "category_galery_name": "Hotel",
            "created_at": "2020-08-10T23:09:15.000000Z",
            "updated_at": "2020-08-10T23:09:39.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/CategoryGalery</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"category_galery_name" = "Hotel"
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/CategoryGalery</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_category_galery" = "1"
"category_galery_name" = "Hotel"
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/CategoryGalery</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_category_galery" : "3"
}

ATAU

{
  "id_category_galery" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="galery" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Galery</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Galery</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 3",
    "primary_key": "id_galery",
    "type": "list",
    "count": 3,
    "data": [
        {
            "id_galery": "3",
            "id_category_galery": "1",
            "id_hotel": "2",
            "picture": "Galery_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-10T22:53:47.000000Z",
            "updated_at": "2020-08-10T22:53:47.000000Z"
        },
        {
            "id_galery": "4",
            "id_category_galery": "1",
            "id_hotel": "2",
            "picture": "Galery_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-10T22:53:53.000000Z",
            "updated_at": "2020-08-10T22:53:53.000000Z"
        },
        {
            "id_galery": "7",
            "id_category_galery": "1",
            "id_hotel": "2",
            "picture": "Galery_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-10T22:59:21.000000Z",
            "updated_at": "2020-08-10T22:59:55.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Galery</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_category_galery" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/CategoryGalery</strong>)
"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Galery</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_galery" = "1"
"id_category_galery" = (GET dan pilih dari id <strong><?=$DOMAIN?>/api/CategoryGalery</strong>)
"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>)
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Galery</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_galery" : "3"
}

ATAU

{
  "id_galery" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="food-category" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">FoodCategory</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/FoodCategory</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 3",
    "primary_key": "id_food_category",
    "type": "list",
    "count": 3,
    "data": [
        {
            "id_food_category": "5",
            "id_hotel": "3",
            "food_category": "Breakfast",
            "picture": "CATEGORYFOOD_10082020203942.jpg",
            "open_time": "07:00:00",
            "close_time": "17:00:00",
            "created_at": "2020-08-10T20:35:50.000000Z",
            "updated_at": "2020-08-10T20:39:42.000000Z"
        },
        {
            "id_food_category": "7",
            "id_hotel": "3",
            "food_category": "Breakfast",
            "picture": "CATEGORYFOOD_10082020203951.jpg",
            "open_time": "07:00:00",
            "close_time": "17:00:00",
            "created_at": "2020-08-10T20:39:51.000000Z",
            "updated_at": "2020-08-10T20:39:51.000000Z"
        },
        {
            "id_food_category": "8",
            "id_hotel": "3",
            "food_category": "Breakfast",
            "picture": "CATEGORYFOOD_10082020204027.jpg",
            "open_time": "07:00:00",
            "close_time": "17:00:00",
            "created_at": "2020-08-10T20:40:27.000000Z",
            "updated_at": "2020-08-10T20:40:27.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/FoodCategory</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>),
"food_category" = "Breakfast",
"open_time" = "07:00:00",
"close_time" = "12:00:00",
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/FoodCategory</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_food_category"= "2",
"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>),
"food_category" = "Breakfast",
"open_time" = "07:00:00",
"close_time" = "12:00:00",
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/FoodCategory</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_food_category" : "3"
}

ATAU

{
  "id_food_category" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="food" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Food</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Food</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_food",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_food": "3",
            "id_food_category": "5",
            "food_name": "Spagetti",
            "chef_name": "Alfonso The Mumbai",
            "description": "This is food from italia, delicious!",
            "picture": "FOOD_10082020210051.jpg",
            "price": "300000",
            "qty": "200",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
            "id_food": "4",
            "id_food_category": "5",
            "food_name": "Spagetti",
            "chef_name": "Alfonso The Mumbai",
            "description": "This is food from italia, delicious!",
            "picture": "FOOD_10082020210141.png",
            "price": "300000",
            "qty": "200",
            "created_at": "2020-08-10T21:01:24.000000Z",
            "updated_at": "2020-08-10T21:01:41.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Food</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_food_category"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/FoodCategory</strong>),
"food_name" = "Spagetti",
"chef_name" = "De Late Omus",
"description" = "This is food from italia, delicious!",
"price" = "300000",
"qty" = "100",
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Food</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_food"= "2",
"id_food_category"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/FoodCategory</strong>),
"food_name" = "Spagetti",
"chef_name" = "De Late Omus",
"description" = "This is food from italia, delicious!",
"price" = "300000",
"qty" = "100",
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Food</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_food" : "3"
}

ATAU

{
  "id_food" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="service" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Service</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Service</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_service",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_service": "2",
            "id_hotel": "2",
            "service_name": "Pijat Enak",
            "description": "Pijatan Lembut dari tempat enak, harus coba!",
            "id_division": "",
            "picture": "SERVICE_10082020211845.png",
            "price": "200000",
            "created_at": "2020-08-10T21:18:45.000000Z",
            "updated_at": "2020-08-10T21:18:45.000000Z"
        },
        {
            "id_service": "3",
            "id_hotel": "2",
            "service_name": "Pijat Enak",
            "description": "Pijatan Lembut dari tempat enak, harus coba!",
            "id_division": "",
            "picture": "SERVICE_10082020211909.png",
            "price": "150000",
            "created_at": "2020-08-10T21:18:51.000000Z",
            "updated_at": "2020-08-10T21:19:09.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Service</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>),
"service_name" = "Massage",
"description" = "Massage from spa facility with professional worker",
"price" = "150000",
"picture" = (Upload File Foto)
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Service</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_service"= "2"
"id_hotel"= (GET dan pilih dari id <strong><?=$DOMAIN?>/api/Hotel</strong>),
"service_name" = "Massage",
"description" = "Massage from spa facility with professional worker",
"price" = "150000",
"picture" = (Upload File Foto)
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Service</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_service" : "3"
}

ATAU

{
  "id_service" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="guest" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Guest</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Guest</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_guest",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_guest": "4",
            "nik": "123456789",
            "guest_name": "Septian Ramadhan",
            "address": "Villa Bintaro Indah C19/18",
            "pos_code": "15414",
            "code_provinsi": "",
            "code_kabupaten": "",
            "code_kelurahan": "",
            "phone": "08999999999999",
            "email": "itdev.septian@gmail.com",
            "gender": "M",
            "birthdate": "1995-03-06",
            "photo": "maxresdefault.jpg",
            "scan_ktp": "Untitled.png",
            "created_at": "2020-08-05T04:59:00.000000Z",
            "updated_at": "2020-08-05T05:01:31.000000Z"
        },
        {
            "id_guest": "5",
            "nik": "",
            "guest_name": "Guest_06082020125407",
            "address": "",
            "pos_code": "",
            "code_provinsi": "",
            "code_kabupaten": "",
            "code_kelurahan": "",
            "phone": "",
            "email": "",
            "gender": "F",
            "birthdate": "",
            "photo": "GUESTPHOTO200806010353000000.png",
            "scan_ktp": "KTP200806061735000000.png",
            "created_at": "2020-08-06T12:54:07.000000Z",
            "updated_at": "2020-08-06T18:17:35.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Guest</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data

"nik" =  "1231235434534543",
"guest_name"= "Septian Ramadhan",
"address"= "Villa Bintaro",
"pos_code"= 15414,
"code_provinsi"= 1,
"code_kabupaten"= 2,
"code_kelurahan"= 3,
"phone"= "+62 9999999999",
"email"= "mrseramadhan@gmail.com",
"gender"= M,
"birthdate"= "1995-03-06",
"photo"= (upload file photo),
"scan_ktp"= (upload file scan ktp),
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Guest</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data

"id_guest"= "4"
"nik" =  "1231235434534543",
"guest_name"= "Septian Ramadhan",
"address"= "Villa Bintaro",
"pos_code"= 15414,
"code_provinsi"= 1,
"code_kabupaten"= 2,
"code_kelurahan"= 3,
"phone"= "+62 9999999999",
"email"= "mrseramadhan@gmail.com",
"gender"= M,
"birthdate"= "1995-03-06",
"photo"= (upload file photo),
"scan_ktp"= (upload file scan ktp),
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Guest</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_guest" : "3"
}

ATAU

{
  "id_guest" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="check_io" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Check In/Out</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/CheckIO</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_check_io",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_check_io": "6",
            "id_hotel": "2",
            "id_room": "6",
            "id_guest": "4",
            "last_nik_used": "123456789",
            "last_name_used": "Septian Ramadhan",
            "last_email_used": "itdev.septian@gmail.com",
            "last_phone_used": "08999999999999",
            "datetime_checkin": "2020-08-11 11:31:00",
            "datetime_checkout": "2020-08-12 23:59:49",
            "order_via": "Receptionist",
            "created_at": "2020-08-10T18:45:09.000000Z",
            "updated_at": "2020-08-10T18:49:35.000000Z"
        },
        {
            "id_check_io": "7",
            "id_hotel": "2",
            "id_room": "6",
            "id_guest": "4",
            "last_nik_used": "123456789",
            "last_name_used": "Septian Ramadhan",
            "last_email_used": "itdev.septian@gmail.com",
            "last_phone_used": "08999999999999",
            "datetime_checkin": "2020-08-11 11:31:00",
            "datetime_checkout": "",
            "order_via": "Receptionist",
            "created_at": "2020-08-10T18:49:54.000000Z",
            "updated_at": "2020-08-10T18:49:54.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/CheckIO</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_hotel": (GET dan pilih dari id <?=$DOMAIN?>/api/Hotel),
"id_room": (GET dan pilih dari id <?=$DOMAIN?>/api/Room),
"id_guest": (GET dan pilih dari id <?=$DOMAIN?>/api/Guest),
"datetime_checkin": "2020-10-10 13:59:59",
"order_via"= "Receptionist",
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/CheckIO</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_check_io": "2"
"id_hotel": (GET dan pilih dari id <?=$DOMAIN?>/api/Hotel),
"id_room": (GET dan pilih dari id <?=$DOMAIN?>/api/Room),
"id_guest": (GET dan pilih dari id <?=$DOMAIN?>/api/Guest),
"datetime_checkout": "2020-10-11 23:00:00",
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/CheckIO</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_check_io" : "3"
}

ATAU

{
  "id_check_io" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="cart" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Cart</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Cart</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": ", Data was found 1",
    "primary_key": "id_cart",
    "type": "list",
    "count": 1,
    "data": [
        {
            "id_cart": "2",
            "id_check_io": "7",
            "active": "1",
            "is_done": "0",
            "created_at": "2020-08-10T19:42:33.000000Z",
            "updated_at": "2020-08-10T19:42:33.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/Cart</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_check_io": (GET dan pilih dari id <?=$DOMAIN?>/api/CheckIO),
"is_done": "0"
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Cart</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE
Content Type: multipart/form-data ATAU
Content Type: x-www-form-urlencoded

"id_cart": "2"
"id_check_io": (GET dan pilih dari id <?=$DOMAIN?>/api/CheckIO),
"is_done": "0"
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Cart</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_cart" : "3"
}

ATAU

{
  "id_cart" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="guestaccess" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Guest Room Access</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/GuestAccess</strong>
                                      <p>Digunakan untuk akses ketika sudah check in dan maksimal dalam 1 kamar yang sudah checkin adalah 4 orang</p>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_check_io_access",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_check_io_access": "10",
            "id_check_io": "1",
            "id_guest": "4",
            "active": "1",
            "created_at": "2020-08-06T11:54:10.000000Z",
            "updated_at": "2020-08-06T11:54:10.000000Z"
        },
        {
            "id_check_io_access": "11",
            "id_check_io": "1",
            "id_guest": "4",
            "active": "1",
            "created_at": "2020-08-06T11:55:06.000000Z",
            "updated_at": "2020-08-06T11:55:06.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/GuestAccess</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT

{
  "id_check_io":"1",
  "id_guest":"4",
}

ATAU

{
  "id_check_io":"1",
  "id_guest":"4",
  "active":"0"
}
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/GuestAccess</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE

{
  "id_check_io_access":"1",
  "id_check_io":"1",
  "id_guest":"4",
}

ATAU

{
  "id_check_io_access":"1",
  "id_check_io":"1",
  "id_guest":"4",
  "active":"0"
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/GuestAccess</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_check_io_access" : "3"
}

ATAU

{
  "id_check_io_access" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="room-category" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Room Category</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/RoomCategory</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_room_category",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_room_category": "11",
            "id_hotel": "2",
            "room_type": "Suite",
            "description": "Suite Room, is very comfortable, each room has a air conditioner, like homies dude",
            "status": "1",
            "price": "650000",
            "created_at": "2020-08-06T10:32:03.000000Z",
            "updated_at": "2020-08-06T10:32:03.000000Z"
        },
        {
            "id_room_category": "12",
            "id_hotel": "2",
            "room_type": "VIP",
            "description": "VP, for exclusive person yoo, like homies dude",
            "status": "1",
            "price": "1650000",
            "created_at": "2020-08-06T10:34:29.000000Z",
            "updated_at": "2020-08-06T10:39:35.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/RoomCategory</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT

{
  "id_hotel": (GET dan pilih dari id <?=$DOMAIN?>/api/Hotel),
  "room_type": "VIP",
  "description": "VP, for exclusive person yoo, like homies dude",
  "price": 165000
}

ATAU

{
  "id_hotel": (GET dan pilih dari id <?=$DOMAIN?>/api/Hotel),
  "room_type": "VIP",
  "description": "VP, for exclusive person yoo, like homies dude",
  "status": "1",
  "price": 165000
}
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/RoomCategory</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE

{
  "id_room_category": 12,
  "id_hotel": (GET dan pilih dari id <?=$DOMAIN?>/api/Hotel),
  "room_type": "VIP",
  "description": "VP, for exclusive person yoo, like homies dude",
  "status": "1",
  "price": 165000
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/RoomCategory</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_room_category" : "3"
}

ATAU

{
  "id_room_category" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="room" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Room</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/Room</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 3",
    "primary_key": "id_room",
    "type": "list",
    "count": 3,
    "data": [
        {
            "id_room": "6",
            "id_room_category": "11",
            "no_room": "201",
            "status": "0",
            "status_dnd": "",
            "created_at": "2020-08-06T10:48:10.000000Z",
            "updated_at": "2020-08-06T10:48:10.000000Z"
        },
        {
            "id_room": "7",
            "id_room_category": "11",
            "no_room": "202",
            "status": "0",
            "status_dnd": "",
            "created_at": "2020-08-06T10:48:18.000000Z",
            "updated_at": "2020-08-06T10:48:18.000000Z"
        },
        {
            "id_room": "8",
            "id_room_category": "11",
            "no_room": "203",
            "status": "0",
            "status_dnd": "",
            "created_at": "2020-08-06T10:48:21.000000Z",
            "updated_at": "2020-08-06T10:48:21.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/RoomCategory</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT

{
  "id_room_category": (GET dan pilih dari id <?=$DOMAIN?>/api/RoomCategory),
  "no_room": "204",
}

ATAU

{
  "id_room_category": (GET dan pilih dari id <?=$DOMAIN?>/api/RoomCategory),
  "no_room": "204",
  "status": "1"
}
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/Room</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE

{
  "id_room": 1,
  "id_room_category": (GET dan pilih dari id <?=$DOMAIN?>/api/RoomCategory),
  "no_room": "209",
  "status": "0"
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/Room</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_room" : "3"
}

ATAU

{
  "id_room" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section id="room-hardware" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Room Hardware / Room Utitilies</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/RoomHardware</strong>
                                      <hr>
                                      <center><h3 class="text-center"><a href="#get">GET REQUEST FORMAT</a></h3></center>
<pre>
RESPONSE
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_room_hardware",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_room_hardware": "3",
            "id_room": "6",
            "jenis_hardware": "AIR CONDITIONER",
            "nama_hardware": "AC Sharp E-235",
            "koneksi": "",
            "bluetooth_mac_address": "",
            "topic_mqtt": "",
            "mqtt_username": "",
            "mqtt_password": "",
            "ip_address": "",
            "status": "0",
            "created_at": "2020-08-06T11:37:46.000000Z",
            "updated_at": "2020-08-06T11:37:46.000000Z"
        },
        {
            "id_room_hardware": "4",
            "id_room": "6",
            "jenis_hardware": "LAMP",
            "nama_hardware": "CENTER LAMP",
            "koneksi": "",
            "bluetooth_mac_address": "",
            "topic_mqtt": "",
            "mqtt_username": "",
            "mqtt_password": "",
            "ip_address": "",
            "status": "0",
            "created_at": "2020-08-06T11:38:26.000000Z",
            "updated_at": "2020-08-06T11:38:26.000000Z"
        }
    ]
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/RoomHardware</strong>
                                      <hr>
<pre>
REQUEST FOR INSERT

{
  "id_room":  (GET dan pilih dari id <?=$DOMAIN?>/api/Room),
  "jenis_hardware": "LAMP",
  "nama_hardware": "CENTER LAMP",
  "koneksi": "",
  "bluetooth_mac_address": "",
  "topic_mqtt": "",
  "mqtt_username": "",
  "mqtt_password": "",
  "ip_address": "",
  "status": "0",
}

ATAU

{
  "id_room":  (GET dan pilih dari id <?=$DOMAIN?>/api/Room),
  "jenis_hardware": "LAMP",
  "nama_hardware": "CENTER LAMP",
}
</pre>


                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-warning">POST</b> <strong><?=$DOMAIN?>/api/RoomHardware</strong>
                                      <hr>
<pre>
REQUEST FOR UPDATE

{
  "id_room_hardware": 4,
  "id_room":  (GET dan pilih dari id <?=$DOMAIN?>/api/RoomHardware),
  "jenis_hardware": "LAMP",
  "nama_hardware": "CENTER LAMP",
  "koneksi": "",
  "bluetooth_mac_address": "",
  "topic_mqtt": "",
  "mqtt_username": "",
  "mqtt_password": "",
  "ip_address": "",
  "status": "0",
}
</pre>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-danger">DELETE</b> <strong><?=$DOMAIN?>/api/RoomHardware</strong>
                                      <hr>
<pre>
REQUEST
{
  "id_room_hardware": "3"
}

ATAU

{
  "id_room_hardware" : ["3","4","5"]
}
</pre>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <!-- About section -->
                            <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2020</span> Candahar Digital Technology</p>
                            </footer>
                        </div>

                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script>

            $(document).ready(function(){

                // Single page nav
                $('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });

                // Magnific pop up
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                });

                $('.tm-current-year').text(new Date().getFullYear());
            });
        </script>
</body>
</html>
