exports.request_api = async (url, data, token='') => {
  const axios = require('axios');
  let response_api = '{"message":"timeout"}';

  await axios
    .post(url,
      // {
      //   "select":"*",
      //   "where":"",
      //   "where_in":"",
      //   "like":"",
      //   "order":"",
      //   "limit":"",
      //   "offset":"",
      //   "custom_condition":""
      // }
      JSON.parse(data),
      {
        "headers":{'API-Token':token}
      }
    )
    .then(res => {
      try{
          response_api = JSON.stringify(res.data);
      }
      catch(error)
      {
          response_api = JSON.stringify({"message":"error syntax"});
          console.log(error);
      }

    })
    .catch(error => {
      response_api = JSON.stringify({"message":"error syntax"});
      console.log(error);
  });
  return response_api;
}
