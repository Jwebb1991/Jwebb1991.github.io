//jshint esversion: 6
const express = require("express");
const bodyParser = require("body-parser");
const request = require("request");

const app = express();

app.use(express.static("public"));

app.use(bodyParser.urlencoded({extended: true}));

app.get("/", function(req, res){
  res.sendFile(__dirname + "https://jwebb1991.github.io/");
});

app.post("/", function(req, res){

  var firstName = req.body.firstName;
  var lastName = req.body.lastName;
  var email = req.body.email;

  var data = {
    members: [
      {email_address: email,
      status: "subscribed",
       merge_fields: {
         FNAME: firstName,
         LNAME: lastName
       }
      }
    ]
  };

  var jsonData = JSON.stringify(data);

  var options = {
    url: "https://us19.api.mailchimp.com/3.0/lists/676c38496b",
    method: "POST",
    headers: {
      authorization: "joshua1 c69efd06518d45b8fa8712e67f262067-us19"
    },
    body: jsonData

  };

  request(options, function(error, response, body){
    if(error) {
      res.sendFile(__dirname + "/failure.html");
    } else {
      if (response.statusCode === 200) {
        res.sendFile(__dirname + "/success.html");
      } else {
      res.sendFile(__dirname + "/failure.html");      }
    }
  });

});

app.post("/failure", function(req, res){
  res.redirect("/");
});

app.listen(process.env.PORT || 3000, function(){
  console.log("Server is running on port 3000");
});

//c69efd06518d45b8fa8712e67f262067-us19

//676c38496b
