var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "Feedback",
  password: "rjpolice",
  database: "feedbacks"
});

con.connect(function(err) {
  if (err) {
    console.error('Error connecting to the database:', err);
    throw err;
  }

  con.query("SELECT * FROM `fir feedback`", function (err, result, fields) {
    if (err) {
      console.error('Error executing query:', err);
      throw err;
    }
    console.log(result);
    con.end(); // Close the connection when done
  });
});
function myFunction() {
    const message = document.getElementById("message");
    message.innerHTML = result;
    try {
      throw result;
    }
    catch(err) {
      message.innerHTML = "Input " + err;
    }
  }