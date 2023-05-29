<html>
  <head>
    <title>Raja Care Hospital</title>

    <link href="css/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div class="top">
      <div>Contact Us +92 96366 20000 / 01 | rajacare@hospital.com</div>
    </div>

    <div class="logo">
      <div>
        <table>
          <tr>
            <td width="600px" style="font-size: 50px; font-family: forte">
              <font color="#428bca"> Raja Care </font
              ><font color="#000"> Hospital</font>
            </td>
            <td>
              <br />
              <br />
              <font size="4px">
                <a href="index.php">HOME</a>
                <a href="about.php">ABOUT US</a>
                <a href="service.php">SERVICE</a>
                <a href="contact.php">CONTACT US</a>
              </font>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="middle">
      <div style="background-image: url('img/a.jpg')">
        <p>
          <br />
          <br />
          Health Care Services <br />
          <font size="5px"> We Care About Your Health </font>
        </p>
      </div>
    </div>

    <div class="bottom">
      <div>
        <table border="0">
          <tr>
            <td width="700px">
              <font color="#000"> We are medical center </font> <br />
              <br />

              <font color="#000" size="5px">
                We Have Medicare Plan Options for You!
              </font>
              <br />
              <br />

              Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non
              mattis metus. Integer vel lorem tincidunt, pharetra eros nec,
              posuere odio. Nullam eget bibendum sem, venenatis lacinia justo.
              Duis aliquet lobortis neque, eget volutpat nulla iaculis a.
              <br /><br />

              In hac habitasse platea dictumst. Praesent condimentum justo
              justo, at ultricies diam accumsan vitae. Donec ac elementum diam.
              Ut quam orci, posuere quis lacus sed, vehicula rhoncus massa. Nunc
              volutpat nibh nulla, tincidunt egestas tellus faucibus nec.
              <br /><br />
              <ul>
                <li>Nulla venenatis auctor quam, ac porta lectus dictum in</li>
                <li>Aliquam sodales nisi sit amet lorem</li>
                <li>
                  Suspendisse vulputate tellus in justo convallis imperdiet
                </li>
                <li>Morbi id lorem consequat, sodales mi non</li>
                <li>Nulla venenatis auctor quam, ac porta lectus dictum in</li>
              </ul>

              <br />
            </td>

            <td></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="bottom_up">
      <?php
      include('conn.php');
      ?>
      <div>
        Make an Appointment

        <table>
          <form action="insert.php" method="post">
            <tr>
              <td width="500px"></td>
              <td><input type="text" placeholder="First Name" name="f_name" /></td>
              <td><input type="text" placeholder="Last Name"  name="l_name" /></td>
            </tr>
            <tr height="30px"></tr>
            <tr>
              <td width="500px"></td>
              <td><input type="text" placeholder="Email Id"  name="email"/></td>
              <td><input type="text" placeholder="Mobile No"  name="p_no" /></td>
            </tr>
            <tr height="30px"></tr>
            <tr>
              <td width="500px"></td>
              <td colspan="2"><button name="add_appoin">SUBMIT</button></td>
            </tr>
          </form>
        </table>
      </div>
    </div>

    <div class="nav_down">
      <div>&copy; UK Hospital, site designed & developed by Raja Mubashir</div>
    </div>
  </body>
</html>
