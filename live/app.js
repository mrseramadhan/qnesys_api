"use strict";// Optional. You will see this name in eg. 'ps' or 'top' command

/*-----------------REQUIRE MODULE----------------------*/
const prompt = require('prompt');
const api =  require('./request_api.js');
const db = require('./database.js');
/*-----------------GLOBAL VARIABLE----------------------*/
let master_hotel = {};
let token_dev = "";
let ads_location = []; //UNTUK MASTER NAMA LOCATION ADS
let guest_thread_interval = 1000;
/*-----------------STARTER------------------------------*/
prompt.start();
prompt.get(['token'], function (err, result) {
    if (err) { return onErr(err); }
    console.log('Please Insert Your Developer API Token Access:');
    console.log('Token: ' + result.token);
    token_dev = result.token;
    var result_hotel = api.request_api('http://candahar.com/SmartHotel/public/api/GetHotel',
    JSON.stringify({
      "select":"*",
      "where":"",
      "where_in":"",
      "like":"",
      "order":"",
      "limit":"",
      "offset":"",
      "custom_condition":""
    }),result.token);
    result_hotel.then(
      data_hotel =>
      {
        var data_hotel_object = JSON.parse(data_hotel);
        if(data_hotel_object.data)
        {
          data_hotel_object.data.forEach(function(row,key){
            master_hotel[row.id_hotel]={};
            master_hotel[row.id_hotel]['ads_master_model']={};
          });
          console.log('-------------------------SERVER STARTED-------------------------');
          start_server();
        }
        else
        {
          console.log('-------------------------FAILED AUTHORIZE-------------------------');
          return 1;
        }
      });
});
function onErr(err) {
    console.log(err);
    return 1;
}

/*----------------------SERVER CLIENT HANDLER------------------------------*/
function start_server()
{
  /*----------------------THREAD SERVER START------------------------------*/
  resync_model();
  setInterval(resync_model,60000);
  /*----------------------END THREAD SERVER START--------------------------*/
  process.title = 'node-chat';// Port where we'll run the websocket server
  var webSocketsServerPort = 1337;// websocket and http servers
  var webSocketServer = require('websocket').server;
  var http = require('http');

  var history = [ ];
  var clients = [ ];/**
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

    var thread_guest_access;
    var thread_guest_cart;
    var thread_guest_cart_checkout;
    var thread_division_notification;
    var thread_ads;
    var thread_room_status = {};

    var last_update_guest_access;
    var last_update_guest_cart;
    var last_update_guest_cart_checkout;
    var last_update_division_notification;
    var last_update_ads;
    var last_update_room_status = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    var table_status=["tr_status_ac","tr_status_clean_my_room","tr_status_dnd","tr_status_light","tr_status_smart_lock","tr_status_tv"];
    var notif_status=["status_ac","status_clean_my_room","status_dnd","status_light","status_smart_lock","status_tv"]
    var status_label=["AC","Clean My Room","Status DND","Status Light","Smart Lock","TV"];

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
                    if(result_object.data)
                    {
                      if(result_object.data.length>0)
                        {
                        //JIKA TOKEN USER HOTEL
                        if(result_object.data[0].id_user!='')
                        {
                          date = new Date();
                          year = date.getFullYear();
                          month = date.getMonth() + 1;
                          day = date.getDate();
                          hours = date.getHours();
                          minutes = date.getMinutes();
                          seconds = date.getSeconds();
                          last_update_division_notification = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          function Interval_Division_Notification_Pusher(id_user,last_update_division_notification){
                            try{
                              db.query("SELECT b.id_guest, b.last_name_used, b.last_phone_used, c.id_order, c.id_service, d.service_name, d.price AS service_price, c.id_food, e.food_name, e.price AS food_price, c.qty AS order_qty, c.total_price, c.discount, f.no_room, f.lantai FROM tr_cart a LEFT JOIN tr_check_io b ON a.id_check_io = b.id_check_io LEFT JOIN dt_cart_item c ON c.id_cart = a.id_cart LEFT JOIN ms_service d ON c.id_service = d.id_service LEFT JOIN ms_food e ON e.id_food = c.id_food LEFT JOIN ms_room f ON f.id_room = b.id_room LEFT JOIN ms_category_food h ON e.id_food_category = h.id_food_category LEFT JOIN ms_user g ON (g.id_division = d.id_division) OR (e.id_food IS NOT NULL AND b.id_hotel = h.id_hotel) WHERE a.is_done = 1 AND a.active = 1 AND b.datetime_checkout IS NULL AND a.updated_at >= '" + last_update_division_notification + "' AND g.id_user = '" + result_object.data[0].id_user + "'").then(
                                result => {
                                  try{
                                    if(result.length > 0)
                                    {
                                      var data_send = {};
                                      data_send['type'] = "notification_division";
                                      data_send['data_service'] = [];
                                      data_send['data_food'] = [];
                                      for(var index=0; result.length>index; index++)
                                      {
                                        if(result[index].id_food=='' || result[index].id_food==null)
                                        {
                                          data_send['data_service'].push(result[index]);
                                        }
                                        else
                                        {
                                          data_send['data_food'].push(result[index]);
                                        }
                                      }
                                      connection.sendUTF(JSON.stringify(data_send));
                                      thread_division_notification = setTimeout(function(){
                                        date = new Date();
                                        year = date.getFullYear();
                                        month = date.getMonth() + 1;
                                        day = date.getDate();
                                        hours = date.getHours();
                                        minutes = date.getMinutes();
                                        seconds = date.getSeconds();
                                        last_update_division_notification = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                                        Interval_Division_Notification_Pusher(result_object.data[0].id_user,last_update_division_notification);
                                      },guest_thread_interval);
                                    }
                                    else
                                    {
                                      thread_division_notification = setTimeout(function(){
                                        Interval_Division_Notification_Pusher(result_object.data[0].id_user,last_update_division_notification);
                                      },guest_thread_interval);
                                    }
                                  }
                                  catch(err)
                                  {
                                    thread_division_notification = setTimeout(function(){
                                      Interval_Division_Notification_Pusher(result_object.data[0].id_user,last_update);
                                    },10000);
                                  }
                              });
                            }
                            catch(err)
                            {
                              thread_division_notification = setTimeout(function(){
                                Interval_Division_Notification_Pusher(result_object.data[0].id_user,last_update_division_notification);
                              },10000);
                            }
                          }
                          Interval_Division_Notification_Pusher(result_object.data[0].id_user,last_update_division_notification);
                        }
                        //JIKA TOKEN USER TAMU
                        else if(result_object.data[0].id_guest!='')
                        {
                          var date = new Date();

                          var year = date.getFullYear();
                          var month = date.getMonth() + 1;
                          var day = date.getDate();
                          var hours = date.getHours();
                          var minutes = date.getMinutes();
                          var seconds = date.getSeconds();
                          var last_update_guest_access = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;

                          function Interval_Guest_Access_Pusher(id_guest,last_update_guest_access){
                            try{
                              db.query("SELECT b.id_check_io, a.id_guest, b.id_room, a.active, b.id_hotel, IF(a.active = 1,CONCAT(c.guest_name,' Grant', ' Access'), CONCAT(c.guest_name,' Revoke', ' Access')) as message FROM dt_check_io_access a LEFT JOIN tr_check_io b ON a.id_check_io = b.id_check_io LEFT JOIN ms_guest c ON a.id_guest = c.id_guest  WHERE b.datetime_checkout IS NULL AND b.id_guest = '"+result_object.data[0].id_guest+"' AND a.updated_at >= '"+last_update_guest_access+"'").then(
                                result => {
                                  try{
                                    if(result.length > 0)
                                    {
                                      var data_send = {};
                                      data_send['type'] = "notification_guest_access";
                                      data_send['data'] = result;
                                      connection.sendUTF(JSON.stringify(data_send));
                                      thread_guest_access = setTimeout(function(){
                                        date = new Date();
                                        year = date.getFullYear();
                                        month = date.getMonth() + 1;
                                        day = date.getDate();
                                        hours = date.getHours();
                                        minutes = date.getMinutes();
                                        seconds = date.getSeconds();
                                        last_update_guest_access = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                                        Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_access);
                                      },guest_thread_interval);
                                    }
                                    else
                                    {
                                      thread_guest_access = setTimeout(function(){
                                        Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_access);
                                      },guest_thread_interval);
                                    }
                                  }
                                  catch(err)
                                  {
                                    thread_guest_access = setTimeout(function(){
                                      Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_access);
                                    },10000);
                                  }
                                }
                              );
                            }
                            catch(err)
                            {
                              thread_guest_access = setTimeout(function(){
                                Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_access);
                              },10000);
                            }
                          }
                          Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_access);

                          last_update_guest_cart = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          function Interval_Guest_Cart_Pusher(id_guest,last_update_guest_cart){
                            try{
                              db.query("SELECT b.id_check_io, d.id_cart, e.id_cart_item, e.id_service, f.service_name, f.price as service_price, g.id_food, g.food_name, g.price as food_price, e.qty, e.total_price, e.discount FROM dt_check_io_access a LEFT JOIN tr_check_io b ON a.id_check_io = b.id_check_io LEFT JOIN ms_guest c ON a.id_guest = c.id_guest  LEFT JOIN tr_cart d ON b.id_check_io = d.id_check_io LEFT JOIN dt_cart_item e ON e.id_cart = e.id_cart LEFT JOIN ms_service f ON f.id_service = e.id_service LEFT JOIN ms_food g ON e.id_food = g.id_food WHERE b.datetime_checkout IS NULL AND d.active = 1 AND d.is_done = 0 AND a.id_guest = '"+result_object.data[0].id_guest+"' AND e.updated_at >= '"+last_update_guest_cart+"'").then(
                                result => {
                                    try{
                                      if(result.length>0)
                                      {
                                        db.query("SELECT a.id_check_io, b.id_cart, 'Cart item updated' as message FROM tr_check_io a LEFT JOIN tr_cart b ON a.id_check_io = b.id_check_io WHERE a.id_check_io = '" +result[0].id_check_io+ "' AND b.id_cart = '" +result[0].id_cart+ "'").then(
                                          result_head => {
                                            var data_send = {};
                                            data_send['type'] = "notification_guest_cart";
                                            data_send['data_cart'] = result_head;
                                            data_send['data_cart_item'] = result;
                                            connection.sendUTF(JSON.stringify(data_send));
                                            thread_guest_cart = setTimeout(function(){
                                              date = new Date();
                                              year = date.getFullYear();
                                              month = date.getMonth() + 1;
                                              day = date.getDate();
                                              hours = date.getHours();
                                              minutes = date.getMinutes();
                                              seconds = date.getSeconds();
                                              last_update_guest_cart = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                                              Interval_Guest_Cart_Pusher(result_object.data[0].id_guest,last_update_guest_cart);
                                            },guest_thread_interval);
                                          }
                                        )
                                      }
                                      else
                                      {
                                        thread_guest_cart = setTimeout(function(){
                                          Interval_Guest_Cart_Pusher(result_object.data[0].id_guest,last_update_guest_cart);
                                        },guest_thread_interval);
                                      }
                                    }
                                    catch(err)
                                    {
                                      thread_guest_cart = setTimeout(function(){
                                        Interval_Guest_Cart_Pusher(result_object.data[0].id_guest,last_update_guest_cart);
                                      },10000);
                                    }
                                }
                              );
                            }
                            catch(err)
                            {
                              thread_guest_cart = setTimeout(function(){
                                Interval_Guest_Access_Pusher(result_object.data[0].id_guest,last_update_guest_cart);
                              },10000);
                            }
                          }
                          Interval_Guest_Cart_Pusher(result_object.data[0].id_guest,last_update_guest_cart);

                          last_update_guest_cart_checkout = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          function Interval_Guest_Cart_Checkout_Pusher(id_guest,last_update_guest_cart_checkout){
                            try{
                              db.query("SELECT b.id_check_io, d.id_cart, 'Cart has been checkout' as message FROM dt_check_io_access a LEFT JOIN tr_check_io b ON a.id_check_io = b.id_check_io LEFT JOIN ms_guest c ON a.id_guest = c.id_guest  LEFT JOIN tr_cart d ON b.id_check_io = d.id_check_io WHERE b.datetime_checkout IS NULL AND d.active = 1 AND d.is_done = 1 AND a.id_guest = '"+result_object.data[0].id_guest+"' AND d.updated_at >= '"+last_update_guest_cart_checkout+"'").then(
                                result => {
                                    try{
                                      if(result.length>0)
                                      {
                                        db.query("SELECT a.id_check_io, b.id_cart, 'Cart item updated' as message FROM tr_check_io a LEFT JOIN tr_cart b ON a.id_check_io = b.id_check_io WHERE a.id_check_io = '" +result[0].id_check_io+ "' AND b.id_cart = '" +result[0].id_cart+ "'").then(
                                          result_head => {
                                            var data_send = {};
                                            data_send['type'] = "notification_guest_cart";
                                            data_send['data_cart'] = result;
                                            connection.sendUTF(JSON.stringify(data_send));
                                            thread_guest_cart_checkout = setTimeout(function(){
                                              date = new Date();
                                              year = date.getFullYear();
                                              month = date.getMonth() + 1;
                                              day = date.getDate();
                                              hours = date.getHours();
                                              minutes = date.getMinutes();
                                              seconds = date.getSeconds();
                                              last_update_guest_cart_checkout = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                                              Interval_Guest_Cart_Checkout_Pusher(result_object.data[0].id_guest,last_update_guest_cart_checkout);
                                            },guest_thread_interval);
                                          }
                                        )
                                      }
                                      else
                                      {
                                        thread_guest_cart_checkout = setTimeout(function(){
                                          Interval_Guest_Cart_Checkout_Pusher(result_object.data[0].id_guest,last_update_guest_cart_checkout);
                                        },guest_thread_interval);
                                      }
                                    }
                                    catch(err)
                                    {
                                      thread_guest_cart_checkout = setTimeout(function(){
                                        Interval_Guest_Cart_Checkout_Pusher(result_object.data[0].id_guest,last_update_guest_cart_checkout);
                                      },10000);
                                    }
                                }
                              );
                            }
                            catch(err)
                            {
                              thread_guest_cart_checkout = setTimeout(function(){
                                Interval_Guest_Cart_Checkout_Pusher(result_object.data[0].id_guest,last_update_guest_cart_checkout);
                              },10000);
                            }
                          }
                          Interval_Guest_Cart_Checkout_Pusher(result_object.data[0].id_guest,last_update_guest_cart_checkout);

                          function Interval_Guest_Room_Status_Pusher(id_guest,last_update_room_status_func,index){
                            try{
                              db.query("SELECT b.id_check_io, a.id_guest, b.id_room, b.id_hotel, IF(d.status=1,CONCAT(c.guest_name,' Turn On ', ' " + status_label[index] + "'), CONCAT(c.guest_name,' Turn Off ', ' " + status_label[index] + "')) message FROM dt_check_io_access a LEFT JOIN tr_check_io b ON a.id_check_io = b.id_check_io LEFT JOIN ms_guest c ON a.id_guest = c.id_guest LEFT JOIN " + table_status[index] + " d ON d.id_room = b.id_room WHERE b.datetime_checkout IS NULL AND a.id_guest = '" + result_object.data[0].id_guest + "' AND d.updated_at >= '" + last_update_room_status_func + "'").then(
                                result => {
                                  try{
                                    if(result.length > 0)
                                    {
                                      var data_send = {};
                                      data_send['type'] = notif_status[index];
                                      data_send['data_status'] = result;
                                      connection.sendUTF(JSON.stringify(data_send));
                                      thread_room_status[table_status[index]] = setTimeout(function(){
                                        date = new Date();
                                        year = date.getFullYear();
                                        month = date.getMonth() + 1;
                                        day = date.getDate();
                                        hours = date.getHours();
                                        minutes = date.getMinutes();
                                        seconds = date.getSeconds();
                                        last_update_room_status[index] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                                        Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[index],index);
                                      },guest_thread_interval);
                                    }
                                    else
                                    {
                                      thread_room_status[table_status[index]] = setTimeout(function(){
                                        Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status_func,index);
                                      },guest_thread_interval);
                                    }
                                  }
                                  catch(err)
                                  {
                                    thread_room_status[table_status[index]] = setTimeout(function(){
                                      Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status_func,index);
                                    },10000);
                                  }
                                }
                              );
                            }
                            catch(err)
                            {
                              thread_room_status[table_status[index]] = setTimeout(function(){
                                Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status_func,index);
                              },10000);
                            }
                          }
                          last_update_room_status[0] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          last_update_room_status[1] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          last_update_room_status[2] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          last_update_room_status[3] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          last_update_room_status[4] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          last_update_room_status[5] = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[0],0);
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[1],1);
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[2],2);
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[3],3);
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[4],4);
                          Interval_Guest_Room_Status_Pusher(result_object.data[0].id_guest,last_update_room_status[5],5);

                        }
                        //JIKA TOKEN IPTV
                        else if(result_object.data[0].is_iptv!='' && result_object.data[0].id_hotel!='')
                        {
                          var ads_model_data = master_hotel[result_object.data[0].id_hotel]['ads_master_model'];
                          for (var id_category in ads_model_data) {
                            //if (!ads_model_data.hasOwnProperty(id_category)) continue;
                            Interval_Pusher(id_category);
                          }
                          function Interval_Pusher(id_category)
                          {
                            var time = 0;
                            //waktu schedule untuk push
                            time = 0;
                            //waktu expire schedule atrian push perkategori
                            var expire_time = 0;
                            //Looping push berdasarkan data per-kateogri
                            var ads_trx_model_data = master_hotel[result_object.data[0].id_hotel]['ads_master_model'][id_category];
                            if(ads_trx_model_data.length==0)
                            {
                              connection.sendUTF(
                                JSON.stringify({ type:'message', data: "No Ads Found in location "+ads_location[id_category]+", Restart thread "+ads_location[id_category]+" on 10 seconds" }));
                              thread_ads = setTimeout(function(){
                                Interval_Pusher(id_category);
                              },10000);
                            }
                            else
                            {
                              for(index=0;index<ads_trx_model_data.length;index++)
                              {
                                  //Penempatan schedule per atrian data yang akan dipush
                                  time = time + parseInt(ads_trx_model_data[index]['range_time']);
                                  //Agar data tetap static meskipun index bertambah
                                  function setPusher(){
                                    var ads_source = JSON.stringify(ads_trx_model_data[index]);
                                    thread_ads = setTimeout(function(){
                                      connection.sendUTF(ads_source);
                                    },time);
                                  }
                                  setPusher();
                                  //Jika atrian terakhir
                                  if(index==(ads_trx_model_data.length-1))
                                  {
                                    //Maka schedule paling akhir adalah waktu expire antrian
                                    expire_time = time;
                                    //Jika sudah expire maka jalankan fungsi interval push yang baru setelah waktu atrian expire
                                    thread_ads = setTimeout(function(){
                                      Interval_Pusher(id_category);
                                    },expire_time);
                                  }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                );
            }

        }
        catch(error)
        {
          connection.sendUTF(
            JSON.stringify({ type:'message', data: "Thread interupt" }));
        }
    });
      // user disconnected
    connection.on('close', function() {
      clearTimeout(thread_guest_access);
      clearTimeout(thread_guest_cart);
      clearTimeout(thread_guest_cart_checkout);
      clearTimeout(thread_ads);
      clearTimeout(thread_room_status);
      clearTimeout(thread_room_status[table_status[0]]);
      clearTimeout(thread_room_status[table_status[1]]);
      clearTimeout(thread_room_status[table_status[2]]);
      clearTimeout(thread_room_status[table_status[3]]);
      clearTimeout(thread_room_status[table_status[4]]);
      clearTimeout(thread_room_status[table_status[5]]);
    });
  });
}
/*----------------------END SERVER CLIENT HANDLER------------------------------*/

/*----------------------SERVER THREAD MODULE------------------------------------------*/
async function resync_model()
{
  for (var id_hotel in master_hotel) {
    await ads_model(token_dev,id_hotel).then(
      async ads_model_object =>
      {
        for (var id_category in ads_model_object)
        {
          await ads_trx_model(token_dev,id_hotel,id_category).then(
            ads_trx_model_object => {
              if(ads_trx_model_object)
              {
                master_hotel[id_hotel]['ads_master_model'][id_category]=ads_trx_model_object;
              }
            }
          );
        }
      }
    );
  }
  console.log("Synchrone model data finish at --> " +(new Date()));
}

async function ads_model(token,id_hotel)
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
    result_ads_location_object =>
    {
      result_ads_location_object = JSON.parse(result_ads_location_object);
      result_ads_location_object.data.forEach(function(row,key){
        array_iptv_ads_location[row.id_ads_location]=[];
        ads_location[row.id_ads_location]=row.ads_location;
      });
    });
  return array_iptv_ads_location;
}

async function ads_trx_model(token,id_hotel,id_ads_location)
{
  var array_ads_trx=[];
  var result_ads_trx = api.request_api('http://candahar.com/SmartHotel/public/api/GetAdsIPTVTrx',
  JSON.stringify({
    "select":"*",
    "where":"",
    "where_in":"",
    "like":"",
    "order":"",
    "limit":"",
    "offset":"",
    "custom_condition":"ms_ads.id_hotel = \'"+id_hotel+"\' AND dt_ads_iptv_trx.id_ads_location = \'"+id_ads_location+"\' AND active = 1"
  }),token);
  await result_ads_trx.then(
    result_ads_trx_object =>
    {
      result_ads_trx_object = JSON.parse(result_ads_trx_object);
      if(result_ads_trx_object.data)
      {
        result_ads_trx_object.data.forEach(function(row, key){
          array_ads_trx.push(row);
        });
      }

    });
  return array_ads_trx;
}

/*----------------------END SERVER THREAD MODULE--------------------------------------*/
