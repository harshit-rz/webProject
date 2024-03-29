<html>
  <head>
    <title></title>
    <style>
      .header {
        background: #bbb;
        margin-left: auto;
        margin-right: auto;
        padding: 0.5em;
      }
      .wrapper {
        display: grid;
        grid-template-columns: 1fr 9fr;
        height: 90%;
      }
      .wrapper > div {
        background: #eee;
      }
      .wrapper > div:nth-child(odd) {
        background: #ddd;
      }
      a:link,
      a:visited {
        color: blue;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>
        Admin
      </h1>
    </div>
    <div class="wrapper">
      <div>
        <ul>
          <li><a href="admin_sd.htm">Show Details</a></li>
          <li><a href="#">Edit Details</a></li>
        </ul>
        <ul>
          Teacher:
          <li><a href="#">Add User</a></li>
          <li><a href="#">Show Details</a></li>
          <li><a href="#">Edit Details</a></li>
          <li><a href="#">Update Attendance</a></li>
          <li><a href="#">Delete User</a></li>
        </ul>
        <ul>
          Non-Staff:
          <li><a href="#">Add User</a></li>
          <li><a href="#">Show Details</a></li>
          <li><a href="#">Edit Details</a></li>
          <li><a href="#">Update Attendance</a></li>
          <li><a href="#">Delete User</a></li>
        </ul>
        <ul>
          Student:
          <li><a href="login.htm" target="dispAll">Add User</a></li>
          <li><a href="#">Show Details</a></li>
          <li><a href="#">Edit Details</a></li>
          <li><a href="#">Delete User</a></li>
        </ul>
      </div>
      <div>
        <iframe
          name="dispAll"
          height="100%"
          width="100%"
          style="border:none"
        ></iframe>
      </div>
    </div>
  </body>
</html>
