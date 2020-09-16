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
                                    <a href="#update28082020" class="tm-nav-item-link">UPDATE 28082020</a>
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
                                    <a href="#get-response" class="tm-nav-item-link">RESPONSE FORMAT</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#post" class="tm-nav-item-link">POST CONTENT TYPE</a>
                                    <hr style="background-color: white;">
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#login" class="tm-nav-item-link">Login</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#division" class="tm-nav-item-link">Division</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#division_privilege" class="tm-nav-item-link">Division Privilege</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#division_privilege_menu" class="tm-nav-item-link">Division Privilege Menu</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#user" class="tm-nav-item-link">Data Management User</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#menu" class="tm-nav-item-link">Menu</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#provinsi" class="tm-nav-item-link">Provinsi</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#kabupaten" class="tm-nav-item-link">Kabupaten</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#kecamatan" class="tm-nav-item-link">Kecamatan</a>
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
                                    <a href="#promotion" class="tm-nav-item-link">Promotion</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#gift" class="tm-nav-item-link">Gift</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#ssid" class="tm-nav-item-link">SSID</a>
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
                                    <a href="#public_tv" class="tm-nav-item-link">Public TV</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#tv_category" class="tm-nav-item-link">TV Category</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#tv_channel" class="tm-nav-item-link">TV Channel</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#channel_remote" class="tm-nav-item-link">Channel Remote</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#tv_channel_used" class="tm-nav-item-link">TV Channel Used</a>
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
                                    <a href="#guestaccess" class="tm-nav-item-link">Guest Room Access</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#cart" class="tm-nav-item-link">Cart</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#cart_item" class="tm-nav-item-link">Cart Item</a>
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
                            <section id="update28082020" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Update 28-08-2020</h2>
                                </header>
                                <div class="row">
                                  <div class="col col-md-12">
                                      <ul>
                                        <li>Fix where in ketika value bukan array</li>
                                        <li>Perubahan seluruh HTTP Request Method menjadi POST</li>
                                        <li>Contoh [GET]Hotel menjadi GetHotel dengan method POST</li>
                                        <li>Contoh [POST]Hotel menjadi PostHotel dengan method POST</li>
                                        <li>Contoh [DELETE]Hotel menjadi DeleteHotel dengan method POST</li>
                                        <li>Penambahan deskripsi pada dokumentasi API</li>
                                        <li>Penambahan informasi type data pada request body</li>
                                      </ul>
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
                                      <p>Beberapa API akan diberikan pengaman yaitu token</P>
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
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">RESPONSE FORMAT</h2>
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
                            <section id="division" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Division</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetDivision</strong>
                                      <p>adalah data divisi hotel, digunakan untuk mengambil data divisi hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai divisi hotel</p>
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
    "primary_key": "id_division",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_division": "1",
            "id_hotel": "1",
            "division_name": "Cleaning Service",
            "description": "This is cleaning division!",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
            "id_division": "2",
            "id_hotel": "1",
            "division_name": "Receptionist",
            "description": "This is receptionist division!",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostDivision</strong>
                                    <p>digunakan untuk menambah/mengubah data divisi hotel, mengunakan token user qnesys / hotel</p>
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
                                      <td>id_division</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>division_name</td>
                                      <td>STRING (50)</td>
                                      <td>Cleaning Service</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>This is cleaning service division.</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteDivision</strong>
                                   <p>digunakan untuk menghapus data divisi hotel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_division</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="division_privilege" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Division Privilege</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetDivisionPrivilege</strong>
                                      <p>adalah data master hak akses divisi, digunakan untuk mengambil data master hak akses divisi, mengunakan user qnesys/hotel, data ini digunakan informasi master hak akses divisi</p>
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
    "primary_key": "id_division_privilege",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_division_privilege": "1",
            "division_privilege_name": "Receptionist Privilege",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
            "id_division_privilege": "2",
            "division_privilege_name": "Cleaning Service Privilege",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostDivisionPrivilege</strong>
                                    <p>digunakan untuk menambah / mengubah master hak akses divisi, mengunakan token user qnesys / hotel</p>
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
                                      <td>id_division_privilege</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>division_privilege_name</td>
                                      <td>STRING (50)</td>
                                      <td>Receptionist Privilege</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteDivisionPrivilege</strong>
                                   <p>digunakan untuk menghapus data menu akses, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_division_privilege</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="division_privilege_menu" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Division Privilege Menu</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetDivisionPrivilegeMenu</strong>
                                      <p>adalah data menu hak akses divisi, digunakan untuk mengambil menu master hak akses divisi, mengunakan user qnesys/hotel, data ini digunakan informasi menu hak akses divisi</p>
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
    "primary_key": "id_division_privilege",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_division_privilege_menu": "1",
            "id_division_privilege": "1",
            "id_menu": "1",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
          "id_division_privilege_menu": "1",
          "id_division_privilege": "1",
          "id_menu": "2",
          "created_at": "2020-08-10T21:00:51.000000Z",
          "updated_at": "2020-08-10T21:00:51.000000Z"
        },
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostDivisionPrivilegeMenu</strong>
                                    <p>digunakan untuk menambah / mengubah menu hak akses divisi, mengunakan token user qnesys / hotel</p>
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
                                      <td>id_division_privilege_menu</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_menu</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_division_privilege</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteDivisionPrivilegeMenu</strong>
                                   <p>digunakan untuk menghapus data menu akses divisi, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_division_privilege_menu</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="user" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">User (Hotel / Qnesys)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetUser</strong>
                                      <p>adalah data user internal di bagian hotel maupun qnesis, digunakan untuk mengambil data user internal, data ini digunakan sebagai pengunaan login dan pengambilan token</p>
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
    "primary_key": "id_user",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_user": "1",
            "username": "MR_TESTING",
            "name": "Mr. Testing Orlando",
            "password": "ENCRYPT PASS",
            "id_division_privilege": "1",
            "id_division": "2",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
            "id_user": "2",
            "username": "MR_TESTING_2",
            "name": "Mr. Testing Array",
            "password": "ENCRYPT PASS",
            "id_division_privilege": "2",
            "id_division": "3",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostUser</strong>
                                    <p>digunakan untuk menambah/mengubah data user hotel, mengunakan token user qnesys / hotel</p>
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
                                      <td>id_user</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>username</td>
                                      <td>STRING (50) UNIQUE</td>
                                      <td>MR_TESTING</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>name</td>
                                      <td>STRING (100)</td>
                                      <td>Le golase</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>password</td>
                                      <td>STRING (150)</td>
                                      <td>zero12345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_division_privilege</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_division</td>
                                      <td>INT (11)</td>
                                      <td>2</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteUser</strong>
                                   <p>digunakan untuk menghapus data user internal, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_user</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="menu" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Menu</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetMenu</strong>
                                      <p>adalah data menu akses, digunakan untuk mengambil data menu akses, mengunakan user qnesys/hotel, data ini digunakan sebagai menu akses</p>
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
    "primary_key": "id_menu",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_menu": "1",
            "menu_name": "Receptionist",
            "id_menu_parent": "",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        },
        {
            "id_menu": "2",
            "menu_name": "Call Center",
            "id_menu_parent": "1",
            "created_at": "2020-08-10T21:00:51.000000Z",
            "updated_at": "2020-08-10T21:00:51.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostMenu</strong>
                                    <p>digunakan untuk menambah/mengubah data menu akses, mengunakan token user qnesys / hotel</p>
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
                                    <!-- <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table> -->
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
                                      <td>id_menu</td>
                                      <td>INT (11)</td>
                                      <td>2</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>menu_name</td>
                                      <td>STRING (50)</td>
                                      <td>Receptionist</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_menu_parent</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>This is menu to access receptionist</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteMenu</strong>
                                   <p>digunakan untuk menghapus data menu akses, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_menu</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dan pilih dari id <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
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
                                      <td>range_time</td>
                                      <td>INT (30)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>active</td>
                                      <td>INT (1)</td>
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
                                   <p>digunakan untuk menghapus data IPTV Location, digunakan user statis IPTV</p>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetProvinsi</strong>
                                      <p>adalah database provinsi di indonesia, untuk mengambil data ini tidak memerlukan header API-Token</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
<hr>
<h4>RESPONSE BODY</h4>
<hr>
<pre>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetKabupaten</strong>
                                      <p>adalah database kabupaten di indonesia, untuk mengambil data ini tidak memerlukan header API-Token</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
<hr>
<h4>RESPONSE BODY</h4>
<hr>
<pre>
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
                            <section id="kecamatan" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Kecamatan</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/GetKecamatan</strong>
                                      <p>adalah database kecamatan di indonesia, untuk mengambil data ini tidak memerlukan header API-Token</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
<hr>
<h4>RESPONSE BODY</h4>
<hr>
<pre>
{
    "status": "true",
    "success": 1,
    "failed": 0,
    "message": "Data was found 2",
    "primary_key": "id_kecamatan",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_kecamatan": 1,
            "kecamatan": "CILEGON",
            "id_kabupaten": 1,
            "id_provinsi": 1,
            "created_at": "2020-08-28T00:48:51.000000Z",
            "updated_at": "2020-08-28T00:48:51.000000Z"
        },
        {
            "id_kecamatan": 2,
            "kecamatan": "CITANGKIL",
            "id_kabupaten": 1,
            "id_provinsi": 1,
            "created_at": "2020-08-28T00:48:51.000000Z",
            "updated_at": "2020-08-28T00:48:51.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section id="kelurahan" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Kelurahan</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">GET</b> <strong><?=$DOMAIN?>/api/GetKelurahan</strong>
                                      <p>adalah database kelurahan di indonesia, untuk mengambil data ini tidak memerlukan header API-Token</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
<hr>
<h4>RESPONSE BODY</h4>
<hr>
<pre>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetHotel</strong>
                                      <p>adalah Hotel, digunakan untuk mengambil list data hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi hotel</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostHotel</strong>
                                    <p>digunakan untuk menambah/mengubah data Hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_corporation</td>
                                      <td>INT (11)</td>
                                      <td>-</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>hotel_name</td>
                                      <td>STRING (100)</td>
                                      <td>Hotel Patra</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>hotel_address</td>
                                      <td>STRING (100)</td>
                                      <td>Jl. Patra Area Raya</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>hotel_phone</td>
                                      <td>STRING (50)</td>
                                      <td>+621237128371</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>pos_code</td>
                                      <td>INT (6)</td>
                                      <td>151414</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>npwp</td>
                                      <td>INT (20)</td>
                                      <td>000000000000000000</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>pkp_npkp</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>map_coordinate</td>
                                      <td>STRING (50)</td>
                                      <td>-6.227588, 106.824310</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>pict_map</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>logo_hotel</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>wallpaper</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteHotel</strong>
                                   <p>digunakan untuk menghapus data hotel, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_hotel</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetAroundHotel</strong>
                                      <p>adalah informasi sekitar hotel, digunakan untuk mengambil list data sekitar hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai sekitar hotel</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
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
            "id_around_hotel": 4,
            "id_hotel": 2,
            "name": "Rumah Makan Padang",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "Rumah makan padang asli dari tanah sumatera",
            "range": "100 meter",
            "grouping": "Restaurant",
            "created_at": "2020-08-10T22:27:02.000000Z",
            "updated_at": "2020-08-10T22:27:02.000000Z"
        },
        {
            "id_around_hotel": 5,
            "id_hotel": 2,
            "name": "Ellie Shop",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "this is from rumah merchandise shop",
            "range": "100 meter",
            "grouping": "Merchandise",
            "created_at": "2020-08-10T22:27:26.000000Z",
            "updated_at": "2020-08-10T22:27:26.000000Z"
        },
        {
            "id_around_hotel": 6,
            "id_hotel": 2,
            "name": "Gas Station",
            "picture": "37856288_1709790769074264_7301614385120673792_n.jpg",
            "description": "Pom Bensin terdekat dari hotel",
            "range": "100 meter",
            "grouping": "Station",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostAroundHotel</strong>
                                    <p>digunakan untuk menambah/mengubah data sekitar hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_around_hotel</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>name</td>
                                      <td>STRING (50)</td>
                                      <td>Ellie Shop</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>STRING (150)</td>
                                      <td>Toko cendera mata terdekat dari hotel kami hanya 5 blok dari hotel</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>range</td>
                                      <td>STRING (50)</td>
                                      <td>150 meter</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>grouping</td>
                                      <td>STRING (50)</td>
                                      <td>Merchandise</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteAroundHotel</strong>
                                   <p>digunakan untuk menghapus data sekitar hotel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_around_hotel</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetInformation</strong>
                                      <p>adalah Informasi terkait hotel, digunakan untuk mengambil list data Information Hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi Hotel</p>
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
    "primary_key": "id_information",
    "type": "list",
    "count": 1,
    "data": [
        {
            "id_information": 2,
            "id_hotel": 2,
            "description": "Welcome to our Hotel!! We give our best!",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:03:25.000000Z",
            "updated_at": "2020-08-06T12:04:02.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostInformation</strong>
                                    <p>digunakan untuk menambah/mengubah data informasi hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_information</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>This is information about of us and our quality</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteInformation</strong>
                                   <p>digunakan untuk menghapus data information hotel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_information</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetEvent</strong>
                                      <p>adalah Event atau Acara, digunakan untuk mengambil list data Acara, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi Acara</p>
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
  "primary_key": "id_event",
  "type": "list",
  "count": 2,
  "data": [
      {
          "id_event": 1,
          "id_hotel": 2,
          "event_name": "Circus",
          "description": "It will be carnival on center of city",
          "start_at": "2020-11-15 00:00:00",
          "end_at": "2021-01-15 00:00:00",
          "created_at": "2020-08-11T00:38:03.000000Z",
          "updated_at": "2020-08-11T00:38:03.000000Z"
      },
      {
          "id_event": 2,
          "id_hotel": 2,
          "event_name": "Midnight Party",
          "description": "Coming Soon",
          "start_at": "2020-11-15 00:00:00",
          "end_at": "2021-01-15 00:00:00",
          "created_at": "2020-08-11T00:38:07.000000Z",
          "updated_at": "2020-08-11T00:41:46.000000Z"
      }
  ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostEvent</strong>
                                    <p>digunakan untuk menambah/mengubah data Acara / Event, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_event</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>event_name</td>
                                      <td>STRING (50)</td>
                                      <td>Midnight Party</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>It will be party in on center of city midnight</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>start_at</td>
                                      <td>datetime</td>
                                      <td>2020-03-01 19:00:00</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>end_at</td>
                                      <td>datetime</td>
                                      <td>2020-03-02 05:00:00</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteEvent</strong>
                                   <p>digunakan untuk menghapus data event atau acara, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_event</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="promotion" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Promotion</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetPromotion</strong>
                                      <p>adalah Promosi, digunakan untuk mengambil list data promosi, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi promosi</p>
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
  "primary_key": "id_promotion",
  "type": "list",
  "count": 2,
  "data": [
      {
          "id_promotion": 1,
          "promotion_name": "HUT RI 75",
          "description": "Ulang tahun kemerdekaan indonesia",
          "picture": "Flag.png",
          "start_at": "2020-11-15 00:00:00",
          "end_at": "2021-01-15 00:00:00",
          "created_at": "2020-08-11T00:38:03.000000Z",
          "updated_at": "2020-08-11T00:38:03.000000Z"
      },
      {
          "id_promotion": 2,
          "promotion_name": "Tahun Baru 2021",
          "description": "Acara malam tahun baru akan menghadirkan .....",
          "picture": "Pamplet.png",
          "start_at": "2020-12-30 00:00:00",
          "end_at": "2021-01-01 00:00:00",
          "created_at": "2020-08-11T00:38:03.000000Z",
          "updated_at": "2020-08-11T00:38:03.000000Z"
      },
  ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostPromotion</strong>
                                    <p>digunakan untuk menambah/mengubah data promotion / Event, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_promotion</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>promotion_name</td>
                                      <td>STRING (50)</td>
                                      <td>Hari Promosi</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>This is will be good</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>start_at</td>
                                      <td>datetime</td>
                                      <td>2020-03-01 19:00:00</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>end_at</td>
                                      <td>datetime</td>
                                      <td>2020-03-02 05:00:00</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeletePromotion</strong>
                                   <p>digunakan untuk menghapus data promosi, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_promotion</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="gift" class="tm-section">
                              <header>
                                  <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Gift</h2>
                              </header>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetGift</strong>
                                    <p>adalah Kado / Hadiah, digunakan untuk mengambil list data kado / hadiah, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi kado / hadiah</p>
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
"primary_key": "id_gift",
"type": "list",
"count": 2,
"data": [
    {
        "id_gift": 1,
        "gift_name": "Voucher Parkir Gratis 100 Member",
        "detail": "Parkir Gratis",
        "picture": "Logo.png",
        "start_periode": "2020-11-15 00:00:00",
        "end_periode": "2021-01-15 00:00:00",
        "created_at": "2020-08-11T00:38:03.000000Z",
        "updated_at": "2020-08-11T00:38:03.000000Z"
    },
    {
        "id_gift": 2,
        "gift_name": "Voucher Breakfast Gratis 50 Member",
        "detail": "Voucer Makan khusus sarapan pagi hari",
        "picture": "Logo2.png",
        "start_periode": "2020-11-15 00:00:00",
        "end_periode": "2021-01-15 00:00:00",
        "created_at": "2020-08-11T00:38:03.000000Z",
        "updated_at": "2020-08-11T00:38:03.000000Z"
    }
]
}
</pre>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="card" style="padding: 20px;">
                                  <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostGift</strong>
                                  <p>digunakan untuk menambah/mengubah data gift, mengunakan token user qnesys/hotel</p>
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
                                    <td>id_gift</td>
                                    <td>INT (11)</td>
                                    <td>1</td>
                                    <td><span class="btn btn-danger btn-block">NO</span></td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                  </tr>
                                  <tr>
                                    <td>gift_name</td>
                                    <td>STRING (50)</td>
                                    <td>Voucer .......</td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                  </tr>
                                  <tr>
                                    <td>detail</td>
                                    <td>TEXT</td>
                                    <td>This is will be good</td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                  </tr>
                                  <tr>
                                    <td>picture</td>
                                    <td>STRING (200)</td>
                                    <td>(Upload file gambar)</td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                  </tr>
                                  <tr>
                                    <td>start_periode</td>
                                    <td>datetime</td>
                                    <td>2020-03-01 19:00:00</td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                    <td><span class="btn btn-success btn-block">YES</span></td>
                                  </tr>
                                  <tr>
                                    <td>end_periode</td>
                                    <td>datetime</td>
                                    <td>2020-03-02 05:00:00</td>
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
                                 <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteGift</strong>
                                 <p>digunakan untuk menghapus data gift, mengunakan token user qnesys/hotel</p>
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
                                   <td>id_gift</td>
                                   <td>INT (11)</td>
                                   <td>1</td>
                                   <td><span class="btn btn-success btn-block">YES</span></td>
                                 </tr>
                                 </table>

                               </div>
                             </div>
                            </div>
                            </section>
                            <section id="ssid" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">SSID (Wifi)</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetSSID</strong>
                                      <p>adalah SSID Wifi, digunakan untuk mengambil list data SSID, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi Wi-Fi</p>
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
    "primary_key": "id_ssid_hotel",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_ssid_hotel": 2,
            "id_hotel": 2,
            "ssid": "TP-Link Lantai 1",
            "password": "hotelku12345",
            "created_at": "2020-08-11T01:01:51.000000Z",
            "updated_at": "2020-08-11T01:01:51.000000Z"
        },
        {
            "id_ssid_hotel": 3,
            "id_hotel": 2,
            "ssid": "TP-Link Lantai 2",
            "password": "hotelku12345",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostSSID</strong>
                                    <p>digunakan untuk menambah/mengubah data SSID, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_ssid_hotel</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>ssid</td>
                                      <td>STRING (50)</td>
                                      <td>TP-Link Lantai 2 Corner</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>password</td>
                                      <td>STRING (100)</td>
                                      <td>hotelku12345</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteSSID</strong>
                                   <p>digunakan untuk menghapus data SSID, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_ssid_hotel</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetPublicTV</strong>
                                      <p>adalah Data Public TV, digunakan untuk mengambil list data public tv, mengunakan user qnesys/hotel, data ini digunakan sebagai list data public tv</p>
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
    "primary_key": "id_public_tv",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_public_tv": 2,
            "id_hotel": 2,
            "urutan": 1,
            "detik": 360,
            "file_type": "jpg",
            "status": 1,
            "picture": "Public_Tv_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_public_tv": 3,
            "id_hotel": 2,
            "urutan": 2,
            "detik": 500,
            "file_type": "png",
            "status": 1,
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostPublicTV</strong>
                                    <p>digunakan untuk menambah/mengubah data public tv, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_public_tv</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>urutan</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>detik</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeletePublicTV</strong>
                                   <p>digunakan untuk menghapus data public tv, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_public_tv</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="tv_category" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">TV Channel Category</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetTvCategory</strong>
                                      <p>adalah kategori tv channel, digunakan untuk mengambil list kategori tv channel, mengunakan user qnesys/hotel, data ini digunakan sebagai list kategori tv channel</p>
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
    "primary_key": "id_tv_category",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_tv_category": 1,
            "description": "Child",
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_tv_category": 2,
            "description": "Adult",
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostTvCategory</strong>
                                    <p>digunakan untuk menambah/mengubah data kategori tv channel, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_tv_category</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>Child</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteTvCategory</strong>
                                   <p>digunakan untuk menghapus data kategori tv channel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_tv_category</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="tv_channel" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">TV Channel</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetTvChannel</strong>
                                      <p>adalah Data Tv Channel, digunakan untuk mengambil list data tv channel, mengunakan user qnesys/hotel, data ini digunakan sebagai list data tv channel</p>
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
    "primary_key": "id_tv_channel",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_tv_channel": 1,
            "id_tv_category": 1,
            "channel_name": "RCTI",
            "description": "Oke!!",
            "status": "1",
            "logo": "5ddbb31631b41e220db41b111a2eb318.jpg",
            "url": "rcti:://live.com"
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_tv_channel": 2,
            "id_tv_category": 2,
            "channel_name": "Space Toon",
            "description": "TV Masa Depan",
            "status": "1",
            "logo": "5ddbb31631b41e220db41b111a2eb318.jpg",
            "url": "spacetoon:://live.com"
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostTvChannel</strong>
                                    <p>digunakan untuk menambah/mengubah data tv channel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_tv_channel</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_tv_category</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetTvCategory</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>channel_name</td>
                                      <td>STRING (50)</td>
                                      <td>RCTI</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>Oke!!</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>logo</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>url</td>
                                      <td>STRING (200)</td>
                                      <td>rcti:://live.com</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteTvChannel</strong>
                                   <p>digunakan untuk menghapus data tv channel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_tv_channel</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="channel_remote" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Channel Remote</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetChannelRemote</strong>
                                      <p>adalah Channel Remote, digunakan untuk mengambil list data channel remote, mengunakan user qnesys/hotel, data ini digunakan data pehubung antara remote dan channel tv</p>
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
    "primary_key": "id_channel_remote",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_channel_remote": 1,
            "id_tv_channel": 1,
            "status": 1,
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_channel_remote": 2,
            "id_tv_channel": 2,
            "status": 1,
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostChannelRemote</strong>
                                    <p>digunakan untuk menambah/mengubah data channel remote, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_channel_remote</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_tv_channel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetTvChannel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteTvChannel</strong>
                                   <p>digunakan untuk menghapus data tv channel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_channel_remote</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="tv_channel_used" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">TV Channel Used</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetPublicTV</strong>
                                      <p>adalah Channel TV, digunakan untuk mengambil list data channel tv yang digunakan per-hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai data yang dipilih dan digunakan oleh hotel</p>
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
    "primary_key": "id_tv_channel_used",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_tv_channel_used": 1,
            "id_tv_channel": 1,
            "id_hotel": 2,
            "status": 1,
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
        {
            "id_tv_channel_used": 2,
            "id_tv_channel": 2,
            "id_hotel": 2,
            "status": 1,
            "created_at": "2020-08-11T00:51:28.000000Z",
            "updated_at": "2020-08-11T00:51:28.000000Z"
        },
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostTvChannelUsed</strong>
                                    <p>digunakan untuk menambah/mengubah data tv channel yang digunakan hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_tv_channel_used</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_tv_channel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetTvChannel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteTvChannelUsed</strong>
                                   <p>digunakan untuk menghapus data tv channel yang digunakan hotel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_tv_channel_used</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetFacilitiesCategory</strong>
                                      <p>adalah Kategori Fasilitas Hotel, digunakan untuk mengambil list data kategori fasilitas, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi kategori fasilitas hotel</p>
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
              "category_facilities_name": "SPORT",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostFacilitiesCategory</strong>
                                    <p>digunakan untuk menambah/mengubah data fasilitas hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_facilities_category</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA melalui <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>category_facilities_name</td>
                                      <td>STRING (100)</td>
                                      <td>Sport</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteFacilitiesCategory</strong>
                                   <p>digunakan untuk menghapus data fasilitas, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_facilities_category</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetFacilities</strong>
                                      <p>adalah Fasilitas Hotel, digunakan untuk mengambil list data fasilitas, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi fasilitas hotel</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
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
            "facilities_name": "Swimming Pool",
            "description": "The water always be cleaned",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:27:16.000000Z",
            "updated_at": "2020-08-06T12:27:16.000000Z"
        },
        {
            "id_facilities": "2",
            "id_facilities_category": "3",
            "facilities_name": "Gym",
            "description": "Stay Healthy and Calm",
            "picture": "Mayfair Suite Living Room-1.jpg",
            "created_at": "2020-08-06T12:29:15.000000Z",
            "updated_at": "2020-08-06T12:29:15.000000Z"
        },
        {
            "id_facilities": "3",
            "id_facilities_category": "3",
            "facilities_name": "Ayudan SPA Massage",
            "description": "Do relax in our massage",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostFacilities</strong>
                                    <p>digunakan untuk menambah/mengubah data fasilitas hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_facilities</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_facilities_category</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA melalui <strong><?=$DOMAIN?>/api/GetFacilitiesCategory</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>facilities_name</td>
                                      <td>STRING (100)</td>
                                      <td>Swimming Pool</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>The water always be clean</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteFacilities</strong>
                                   <p>digunakan untuk menghapus data fasilitas, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_facilities</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetCategoryGalery</strong>
                                      <p>adalah Informasi terkait kategori galery hotel, digunakan untuk mengambil list data kategori galery hotel, mengunakan user qnesys/hotel, data ini digunakan sebagai kategori galery hotel</p>
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
      "primary_key": "id_category_galery",
      "type": "list",
      "count": 2,
      "data": [
          {
              "id_category_galery": 1,
              "category_galery_name": "Room",
              "created_at": "2020-08-11T05:53:30.000000Z",
              "updated_at": "2020-08-10T23:09:44.000000Z"
          },
          {
              "id_category_galery": 2,
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostCategoryGalery</strong>
                                    <p>digunakan untuk menambah/mengubah data kategori galeri hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_category_galery</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>category_galery_name</td>
                                      <td>STRING (50)</td>
                                      <td>ROOM</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteCategoryGalery</strong>
                                   <p>digunakan untuk menghapus data kategori galeri hotel, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_category_galery</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetGalery</strong>
                                      <p>adalah Informasi terkait galery, digunakan untuk mengambil list data galery, mengunakan user qnesys/hotel, data ini digunakan sebagai galery</p>
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
    "primary_key": "id_galery",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_galery": 3,
            "id_category_galery": 1,
            "id_hotel": 2,
            "picture": "Galery_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-10T22:53:47.000000Z",
            "updated_at": "2020-08-10T22:53:47.000000Z"
        },
        {
            "id_galery": 4,
            "id_category_galery": 1,
            "id_hotel": 2,
            "picture": "Galery_37856288_1709790769074264_7301614385120673792_n.jpg",
            "created_at": "2020-08-10T22:53:53.000000Z",
            "updated_at": "2020-08-10T22:53:53.000000Z"
        }
    ]
}
</pre>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="card" style="padding: 20px;">
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostGalery</strong>
                                    <p>digunakan untuk menambah/mengubah data galeri, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_galery</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_category_galery</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetCategoryGalery</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteGalery</strong>
                                   <p>digunakan untuk menghapus data galeri, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_galery</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="food-category" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Food Category</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetFoodCategory</strong>
                                      <p>adalah Kategori makanan, digunakan untuk mengambil kategori makanan, mengunakan user qnesys/hotel, data ini digunakan sebagai kategori makanan</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
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
          "close_time": "12:00:00",
          "created_at": "2020-08-10T20:35:50.000000Z",
          "updated_at": "2020-08-10T20:39:42.000000Z"
      },
      {
          "id_food_category": "7",
          "id_hotel": "3",
          "food_category": "Lunch",
          "picture": "CATEGORYFOOD_10082020203951.jpg",
          "open_time": "12:00:00",
          "close_time": "16:00:00",
          "created_at": "2020-08-10T20:39:51.000000Z",
          "updated_at": "2020-08-10T20:39:51.000000Z"
      },
      {
          "id_food_category": "8",
          "id_hotel": "3",
          "food_category": "Dinner",
          "picture": "CATEGORYFOOD_10082020204027.jpg",
          "open_time": "19:00:00",
          "close_time": "23:00:00",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostFoodCategory</strong>
                                    <p>digunakan untuk menambah/mengubah data food category, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_food_category</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>food_category</td>
                                      <td>STRING (50)</td>
                                      <td>Breakfast atau Dinner dan lain lain</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING (200)</td>
                                      <td>(Upload file gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteCategoryFood</strong>
                                   <p>digunakan untuk menghapus data galeri, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_food_category</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetFood</strong>
                                      <p>adalah data makanan, digunakan untuk mengambil data makanan, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi makanan</p>
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
            "food_name": "Taco",
            "chef_name": "Alfonso The Mumbai",
            "description": "This is food from mexico, delicious!",
            "picture": "FOOD_10082020210141.png",
            "price": "200000",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostFood</strong>
                                    <p>digunakan untuk menambah/mengubah data food, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_food</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_food_category</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetFoodCategory</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>food_name</td>
                                      <td>STRING (50)</td>
                                      <td>Spagetti</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>price</td>
                                      <td>INT (11)</td>
                                      <td>300000</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>qty</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteFood</strong>
                                   <p>digunakan untuk menghapus data makanan, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_food</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetService</strong>
                                      <p>adalah data pelayanan, digunakan untuk mengambil data pelayanan, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi pelayanan</p>
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
            "service_name": "Pijat Tidak Enak",
            "description": "Pijatan Lembut dari tempat tidak enak, harus coba!",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostService</strong>
                                    <p>digunakan untuk menambah/mengubah data layanan, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
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
                                      <td>id_service</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetHotel</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>service_name</td>
                                      <td>STRING (50)</td>
                                      <td>Massage</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_division</td>
                                      <td>INT (11)</td>
                                      <td>(GET DATA dari <strong><?=$DOMAIN?>/api/GetDivision</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>Layanan urut untuk relaksasi otot</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>picture</td>
                                      <td>STRING(200)</td>
                                      <td>Layanan urut untuk relaksasi otot</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>price</td>
                                      <td>INT(11)</td>
                                      <td>100000</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteService</strong>
                                   <p>digunakan untuk menghapus data layanan, mengunakan token user qnesys / hotel</p>
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
                                     <td>id_service</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetGuest</strong>
                                      <p>adalah Tamu, digunakan untuk mengambil list data tamu, mengunakan user qnesys/hotel, data ini digunakan sebagai master data tamu</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostGuest</strong>
                                    <p>digunakan untuk menambah/mengubah data Tamu, mengunakan token user qnesys/hotel</p>
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
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>application/json</td>
                                      <td><span class="btn btn-danger btn-block">DISALLOW</span></td>
                                    </tr>
                                    <tr>
                                      <td>multipart/form-data</td>
                                      <td><span class="btn btn-success btn-block">ALLOW</span></td>
                                    </tr>
                                    </table>
                                    <!-- <br> -->
                                    <!-- <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table> -->
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
                                      <td>id_guest</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>nik</td>
                                      <td>INT (20)</td>
                                      <td>34324564565465</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>guest_name</td>
                                      <td>STRING(100)</td>
                                      <td>Guest2345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>address</td>
                                      <td>TEXT</td>
                                      <td>Guest2345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>pos_code</td>
                                      <td>INT(11)</td>
                                      <td>151414</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>code_provinsi</td>
                                      <td>INT(11)</td>
                                      <td>Get Data melalui <strong><?=$DOMAIN?>/api/GetProvinsi</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>code_kabupaten</td>
                                      <td>INT(11)</td>
                                      <td>Get Data melalui <strong><?=$DOMAIN?>/api/GetKabupaten</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>code_kelurahan</td>
                                      <td>INT(11)</td>
                                      <td>Get Data melalui <strong><?=$DOMAIN?>/api/GetKelurahan</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>code_kecamatan</td>
                                      <td>INT(11)</td>
                                      <td>Get Data melalui <strong><?=$DOMAIN?>/api/GetKecamatan</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>phone</td>
                                      <td>STRING (50)</td>
                                      <td>+62 xxxxxxxxxxxxxxx</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>email</td>
                                      <td>STRING (50)</td>
                                      <td>test@gmail.com</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>gender</td>
                                      <td>STRING (1)</td>
                                      <td>M / F</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>birthdate</td>
                                      <td>DATE</td>
                                      <td>1995-06-03</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>photo</td>
                                      <td>STRING(200)</td>
                                      <td>(Upload Gambar)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>scan_ktp</td>
                                      <td>STRING(200)</td>
                                      <td>(Upload Gambar)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteGuest</strong>
                                   <p>digunakan untuk menghapus data guest, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_guest</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetCheckIO</strong>
                                      <p>adalah data yang check in pada kamar, digunakan untuk mengambil list check in / out pada kamar, mengunakan user qnesys/hotel, data ini digunakan sebagai informasi check in / out</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostCheckIO</strong>
                                    <p>digunakan untuk menambah/mengubah data check in/out, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_check_io</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetHotel</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_room</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetRoom</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_guest</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetGuest</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>last_nik_used</td>
                                      <td>STRING(50)</td>
                                      <td>123456789101112</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>last_name_used</td>
                                      <td>STRING(100)</td>
                                      <td>Guest2345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>last_email_used</td>
                                      <td>STRING(50)</td>
                                      <td>test@gmail.com</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>last_phone_used</td>
                                      <td>STRING(50)</td>
                                      <td>Guest2345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>datetime_checkin</td>
                                      <td>datetime</td>
                                      <td>2020-08-20 18:30:00</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>datetime_checkout</td>
                                      <td>datetime</td>
                                      <td>2020-08-21 18:30:00</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>order_via</td>
                                      <td>STRING(50)</td>
                                      <td>Receptionist</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteCheckIO</strong>
                                   <p>digunakan untuk menghapus data check in / out, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_check_io</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetCart</strong>
                                      <p>adalah Keranjang Belanja, digunakan untuk mengambil data keranjang/pesanan service atau barang per-check in, mengunakan user tamu, data ini hanya digunakan saat melakukan pengumpulan pengunaan jasa dan barang</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostCart</strong>
                                    <p>digunakan untuk menambah/mengubah data cart, mengunakan token user tamu</p>
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
                                      <td>id_cart</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_check_io</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetCheckIO</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>active</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>is_done</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">YES</span></td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteCart</strong>
                                   <p>digunakan untuk keranjang, mengunakan token user tamu</p>
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
                                     <td>id_cart</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="cart_item" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Cart Item</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetCartItem</strong>
                                      <p>adalah Item Keranjang Belanja, digunakan untuk mengambil data item keranjang/pesanan service atau barang per-check in, mengunakan user tamu, data ini hanya digunakan saat melakukan pengumpulan item pengunaan jasa dan barang</p>
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
    "primary_key": "id_cart_item",
    "type": "list",
    "count": 2,
    "data": [
        {
            "id_cart_item": "1",
            "id_cart": "1",
            "id_order": "12345",
            "id_service": "1",
            "id_food": "",
            "qty": "10",
            "total_price": "100000",
            'discount': "10000",
            "created_at": "2020-08-10T19:42:33.000000Z",
            "updated_at": "2020-08-10T19:42:33.000000Z"
        },
        {
            "id_cart_item": "1",
            "id_cart": "1",
            "id_order": "12345",
            "id_service": "",
            "id_food": "2"
            "qty": "5",
            "total_price": "200000",
            'discount': "50000",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostCartItem</strong>
                                    <p>digunakan untuk menambah/mengubah data item ke cart, mengunakan token user tamu</p>
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
                                    <p>Jika tidak diperlukan maka isi value dengan string kosong "", 1 row hanya terdapat 1 id service atau 1 id food</p>
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
                                      <td>id_cart_item</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_cart</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetCart</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_order</td>
                                      <td>STRING (50)</td>
                                      <td>12345</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_service</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetService</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_food</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetFood</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>is_done</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">NO</span></td>
                                      <td><span class="btn btn-danger btn-block">YES</span></td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteCartItem</strong>
                                   <p>digunakan untuk menghapus item dalam keranjang, mengunakan token user tamu</p>
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
                                     <td>id_cart_item</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="guestaccess" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Guest Access</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetGuestAccess</strong>
                                      <p>adalah Akses tamu per-check in ruangan, digunakan untuk mengambil informasi check in dan akses tamu, mengunakan user qnesys/hotel, data ini digunakan untuk akses ketika sudah check in dan maksimal dalam 1 kamar yang sudah checkin adalah 4 orang</p>
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
            "id_guest": "2",
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostGuestAccess</strong>
                                    <p>digunakan untuk menambah/mengubah data check in/out, mengunakan token user qnesys/hotel</p>
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
                                    <!-- <table border="1" width="100%">
                                    <tr>
                                      <th>API-Token</th>
                                      <th>Required?</th>
                                    </tr>
                                    <tr>
                                      <td>(Melakukan login melalui <strong><?=$DOMAIN?>/api/Login</strong>)</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    </table> -->
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
                                      <td>id_check_io_access</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_check_io</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetCheckIO</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_guest</td>
                                      <td>INT (11)</td>
                                      <td>Get Data dari <strong><?=$DOMAIN?>/api/GetGuest</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>active</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteGuestAccess</strong>
                                   <p>digunakan untuk menghapus akses ruangan check in kamar, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_check_io_access</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>
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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetRoomCategory</strong>
                                      <p>adalah Kategori Ruang Kamar, digunakan untuk mengambil list data kategori kamar, mengunakan user qnesys/hotel, data ini digunakan sebagai kategori kamar hotel</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostRoomCategory</strong>
                                    <p>digunakan untuk menambah/mengubah data Kategori Kamar Hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_room_category</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_hotel</td>
                                      <td>INT (11)</td>
                                      <td>Get data melalui <strong><?=$DOMAIN?>/api/GetHotel</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>room_type</td>
                                      <td>STRING(50)</td>
                                      <td>VIP</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>description</td>
                                      <td>TEXT</td>
                                      <td>There exclusive room, for important thing</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT(1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>price</td>
                                      <td>INT(11)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteRoomCategory</strong>
                                   <p>digunakan untuk menghapus data kategori kamar hotel, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_room_category</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetRoom</strong>
                                      <p>adalah Ruang Kamar, digunakan untuk mengambil list data kamar, mengunakan user qnesys/hotel, data ini digunakan sebagai kamar hotel</p>
                                      <center><h3 class="text-center"><a href="#get">GET DATA REQUEST FORMAT</a></h3></center>
                                      <hr>
                                        <h4>Response Body: </h4>
                                        <hr>
<pre>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostRoom</strong>
                                    <p>digunakan untuk menambah/mengubah data Kamar Hotel, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_room</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_room_category</td>
                                      <td>INT (11)</td>
                                      <td>Get data melalui <strong><?=$DOMAIN?>/api/GetRoomCategory</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>no_room</td>
                                      <td>INT (11)</td>
                                      <td>202</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT(1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status_dnd</td>
                                      <td>INT(1)</td>
                                      <td>1</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteRoom</strong>
                                   <p>digunakan untuk menghapus data kamar hotel, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_room</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

                                 </div>
                               </div>
                              </div>
                            </section>
                            <section id="room-hardware" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Room Hardware / Room Utilities</h2>
                                </header>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="card" style="padding: 20px;">
                                      <b class="btn btn-success">POST</b> <strong><?=$DOMAIN?>/api/GetRoomHardware</strong>
                                      <p>adalah Hardware atau alat pada ruangan kamar, digunakan untuk mengambil list data hardware kamar, mengunakan user qnesys/hotel, data ini digunakan sebagai pengontrol hardware</p>
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
                                    <b class="btn btn-primary">POST</b> <strong><?=$DOMAIN?>/api/PostRoomHardware</strong>
                                    <p>digunakan untuk menambah/mengubah data Hardware Kamar, mengunakan token user qnesys/hotel</p>
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
                                      <td>id_room_hardware</td>
                                      <td>INT (11)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-danger btn-block">NO</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>id_room</td>
                                      <td>INT (11)</td>
                                      <td>Get data melalui <strong><?=$DOMAIN?>/api/GetRoom</strong></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>jenis_hardware</td>
                                      <td>STRING (50)</td>
                                      <td>-</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>nama_hardware</td>
                                      <td>STRING (50)</td>
                                      <td>AC Sharp E-235</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>koneksi</td>
                                      <td>INT (1)</td>
                                      <td>1</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>bluetooth_mac_address</td>
                                      <td>STRING (50)</td>
                                      <td>12:23:23:44:22</td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>topic_mqtt</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>mqtt_username</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>mqtt_password</td>
                                      <td>STRING (150)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>ip_address</td>
                                      <td>STRING (50)</td>
                                      <td></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                      <td><span class="btn btn-success btn-block">YES</span></td>
                                    </tr>
                                    <tr>
                                      <td>status</td>
                                      <td>INT (1)</td>
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
                                   <b class="btn btn-danger">POST</b> <strong><?=$DOMAIN?>/api/DeleteRoomHardware</strong>
                                   <p>digunakan untuk menghapus data hardware kamar, mengunakan token user qnesys/hotel</p>
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
                                     <td>id_room_hardware</td>
                                     <td>INT (11)</td>
                                     <td>1</td>
                                     <td><span class="btn btn-success btn-block">YES</span></td>
                                   </tr>
                                   </table>

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
