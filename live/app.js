"use strict";// Optional. You will see this name in eg. 'ps' or 'top' command

process.title = 'node-chat';// Port where we'll run the websocket server
var webSocketsServerPort = 1337;// websocket and http servers
var webSocketServer = require('websocket').server;
var http = require('http');
const api =  require('./request_api.js');
/**
 * Global variables
 */
// latest 100 messages
var history = [ ];
// list of currently connected clients (users)
var clients = [ ];/**
 * Helper function for escaping input strings
 */
function htmlEntities(str) {
  return String(str)
      .replace(/&/g, '&amp;').replace(/</g, '&lt;')
      .replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}// Array with some colors
var colors = [ 'red', 'green', 'blue', 'magenta', 'purple', 'plum', 'orange' ];
// ... in random order
colors.sort(function(a,b) { return Math.random() > 0.5; } );/**
 * HTTP server
 */
var server = http.createServer(function(request, response) {
  // Not important for us. We're writing WebSocket server,
  // not HTTP server
});
server.listen(webSocketsServerPort, function() {
  console.log((new Date()) + " Server is listening on port "
      + webSocketsServerPort);
});/**
 * WebSocket server
 */
 var http = require('http'),
    fs = require('fs');

 fs.readFile('./index.html', function (err, html) {
     if (err) {
         throw err;
     }
     http.createServer(function(request, response) {
         response.writeHeader(200, {"Content-Type": "text/html"});
         response.write(html);
         response.end();
     }).listen(8000);
 });

var wsServer = new webSocketServer({
  // WebSocket server is tied to a HTTP server. WebSocket
  // request is just an enhanced HTTP request. For more info
  // http://tools.ietf.org/html/rfc6455#page-6
  httpServer: server
});// This callback function is called every time someone
// tries to connect to the WebSocket server



wsServer.on('request', function(request) {
  console.log((new Date()) + ' Connection from origin '
      + request.origin + '.');  // accept connection - you should check 'request.origin' to
  // make sure that client is connecting from your website
  // (http://en.wikipedia.org/wiki/Same_origin_policy)
  var connection = request.accept(null, request.origin);
  connection.sendUTF('{"type":"require_token","message":"please enter token"}');
  // we need to know client index to remove them on 'close' event
  var index = clients.push(connection) - 1;
  var userName = false;
  var userColor = false;  console.log((new Date()) + ' Connection accepted.');  // send back chat history

  if (history.length > 0) {
    connection.sendUTF(
        JSON.stringify({ type: 'history', data: history} ));
  }  // user sent some message

  connection.on('message', function(message) {
      try
      {
          var message_data = JSON.parse(message.utf8Data);
          if(message_data.type=='token')
          {
            const result = api.request_api('http://candahar.com/SmartHotel/public/api/QWERTYUIOPASDFGHJKLZXCVBNM',
            JSON.stringify({
              "select":"*",
              "where":"",
              "where_in":"",
              "like":"",
              "order":"",
              "limit":"1",
              "offset":"",
              "custom_condition":"token = \'"+message_data.value+"\' AND active = 1"
            }));
              result.then(res =>
                {
                  var result_object = JSON.parse(res);
                  if(result_object.data.length>0)
                  {
                    //JIKA TOKEN USER HOTEL
                    if(result_object.data[0].id_user!='')
                    {

                    }
                    //JIKA TOKEN USER TAMU
                    else if(result_object.data[0].id_guest!='')
                    {

                    }
                    //JIKA TOKEN IPTV
                    else if(result_object.data[0].is_iptv!='' && result_object.data[0].id_hotel!='')
                    {
                      iptv_model(message_data.value,result_object.data[0].id_hotel).then(
                        iptv_model_data => {
                        var expire_time = 0;
                        var time = 0;
                        var expire_time = 0;
                        for (var prop in iptv_model_data) {
                            if (!iptv_model_data.hasOwnProperty(prop)) continue;
                            time = 0;
                              for(index=0;index<iptv_model_data[prop].length;index++)
                              {
                                  time = time + parseInt(iptv_model_data[prop][index]['range_time']);
                                  function setPusher(){
                                    var ads_source = JSON.stringify(iptv_model_data[prop][index]);
                                    setTimeout(function(){
                                      connection.sendUTF(ads_source);
                                    },time);
                                  }
                                  setPusher();
                                  //jika baris terakhir maka ambil data baru
                                  if(index==(iptv_model_data[prop].length-1))
                                  {
                                    expire_time = time;
                                    setTimeout(function(){
                                      index=0;
                                    },expire_time);
                                  }
                              }

                        }
                      });
                    }

                  }
                }
              );
          }

      }
      catch(error)
      {
        connection.sendUTF(
          JSON.stringify({ type:'message', data: "ERROR" }));
          console.log(error);
      }
  });
    // user disconnected
  connection.on('close', function(connection) {
    if (userName !== false && userColor !== false) {
      console.log((new Date()) + " Peer "
          + connection.remoteAddress + " disconnected.");      // remove user from the list of connected clients
      clients.splice(index, 1);
      // push back user's color to be reused by another user
      colors.push(userColor);
    }
  });
});
/*======================FUNCTION UNTUK MESSAGE===========================*/
/*======================FUNCTION UNTUK INTERVAL===========================*/
async function iptv_model(token,id_hotel)
{
  //Ambil data ads master location
  var array_iptv_ads_location={};
  var result_ads_location = api.request_api('http://candahar.com/SmartHotel/public/api/GetAdsIPTVLocation',
  JSON.stringify({
    "select":"*",
    "where":"",
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":""
  }),token);
  await result_ads_location.then(
    async result_ads_location_object =>
    {
      result_ads_location_object = JSON.parse(result_ads_location_object);
      //Ambil data trx ads per-hotel
      var result_ads_trx = api.request_api('http://candahar.com/SmartHotel/public/api/GetAdsIPTVTrx',
      JSON.stringify({
        "select":"*",
        "where":"",
        "where_in":"",
        "like":"",
        "order":"",
        "limit":"",
        "offset":"",
        "custom_condition":"ms_ads.id_hotel = \'"+id_hotel+"\' AND active = 1"
      }),token);
      await result_ads_trx.then(
        result_ads_trx_object =>
        {
          result_ads_trx_object = JSON.parse(result_ads_trx_object);
          result_ads_location_object.data.forEach(function(row,key){
            array_iptv_ads_location[row.id_ads_location]=[];
          });
          result_ads_trx_object.data.forEach(function(row, key){
            array_iptv_ads_location[row.id_ads_location].push(row);
          });
        });
    });
    return array_iptv_ads_location;
}

// function fetch_ads_trx(token,id_hotel)
// {
//   //Ambil data trx ads per-hotel
//   var result_ads_trx = api.request_api('http://candahar.com/SmartHotel/public/api/GetAdsIPTVTrx',
//   JSON.stringify({
//     "select":"*",
//     "where":"",
//     "where_in":"",
//     "like":"",
//     "order":"",
//     "limit":"",
//     "offset":"",
//     "custom_condition":"ms_ads.id_hotel = \'"+id_hotel+"\' AND active = 1"
//   }),token);
//   await result_ads_trx.then(
//     result_ads_trx_object =>
//     {
//       result_ads_trx_object = JSON.parse(result_ads_trx_object);
//       result_ads_location_object.data.forEach(function(row,key){
//         array_iptv_ads_location[row.id_ads_location]=[];
//       });
//       result_ads_trx_object.data.forEach(function(row, key){
//         array_iptv_ads_location[row.id_ads_location].push(row);
//       });
//     });
// }
