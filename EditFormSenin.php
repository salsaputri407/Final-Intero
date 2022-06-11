<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 15px 0 20px;
      font-weight: 400;
      color: #1c87c9;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #242F9B;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5;
      border-radius: 8px; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      input {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #242F9B;
      border-radius: 8px;
      }
      input::placeholder {
      color: #666
      }
      button {
      width: 30%;
      padding: 10px;
      border: none;
      background-image: linear-gradient(to bottom right, #9055FF, #13E2DA);
      text-align:center;
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      border-radius: 8px;
      }
      button:hover {
      background: #242F9B;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <form action="/">
        <div style="margin:15px;text-align:center;">
          <h1 style="color:#242F9B; font-weight:bold;">EDIT COLLEGE SCHEDULE</h3>
        </div>
        <div class="testbox">
          <div class="item">
            <p>Schedule</p>
              <div class="name-item">
                <input class="fname" type="text" name="name" placeholder="Activity">
              </div>
          </div>
          <p>Time</p>
            <div class="columns">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="time" class="form-group" name="time" placeholder="From">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="time" class="form-group" name="time" placeholder="From">
                </div>
              </div>
          </div>
        </div><center>
        <button type="submit" href="TimetableSenin.php">Submit</button></center>
      </form>
    </div>
  </body>
</html>