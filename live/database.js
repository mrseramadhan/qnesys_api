exports.query = async (sql) => {

  var mysql = require('mysql');

  var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "u5119736_smarthotel"
  });
  var res;

  return new Promise( (resolve, reject) => {
    try{
      con.connect(
        async (err) => {
          if (err) throw reject(err);
        }
      );

      con.query(sql, async (err_sql, result) => {
        if (err_sql) throw console.log(err_sql);
        await resolve(result);
      });

      con.end();
    }
    catch(ex)
    {
      reject(ex);
    }
  });

};
