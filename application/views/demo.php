<html>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Google Auth</h2>
   <br />
   <div class="panel panel-default">
  <?php

$user_data = $this->session->userdata('user_data');

if ($user_data) {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<h3><b>Name : </b>' . $user_data["first_name"] . ' ' . $user_data['last_name'] . '</h3>';
    echo '<h3><b>Email :</b> ' . $user_data['email_address'] . '</h3>';
    echo '<h3><a href="' . base_url() . 'demo/logout">Logout</h3></div>';
} else {
    echo '<div align="center">' . $login_button . '</div>';
}
?>
   </div>
  </div>
 </body>
</html>

