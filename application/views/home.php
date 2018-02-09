<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url('assets/template/');?>css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url('assets/template/');?>css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url('assets/template/');?>css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">AIRLINES</a><span id="slogan">International Flight</span></h1>
        <div class="right">
          <nav>
            <ul id="top_nav">
              <li><a href="#"><img src="<?php echo base_url('assets/template/');?>images/img1.gif" alt=""></a></li>
              <li><a href="#"><img src="<?php echo base_url('assets/template/');?>images/img2.gif" alt=""></a></li>
              <li class="bg_none"><a href="#"><img src="<?php echo base_url('assets/template/');?>images/img3.gif" alt=""></a></li>
            </ul>
          </nav>
          <nav>
            <ul id="menu">
              <li id="menu_active"><a href="index.html">Home</a></li>
              <li><a href="<?php echo base_url('assets/template/');?>aircrafts.html">Our Aircraft</a></li>
              <li><a href="<?php echo base_url('assets/template/');?>safety.html">Safety</a></li>
              <li><a href="<?php echo base_url('assets/template/');?>charters.html">Charters</a></li>
              <li><a href="<?php echo base_url('assets/template/');?>contacts.html">Contacts</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">
  <div id="banner">
    <div class="text1"> My Flight<span>My Experience</span>
      <p>Selamat datang di MyFlight, jadikan penerbangan Anda sebagai pengalaman yang terbaik.</p>
    </div>
    <a href="#" class="button_top">Pesan Tiket</a></div>
</div>
<div class="main">
  <section id="content">
    <article class="col1">
      <div class="pad_1">
        <h2>Rencana Perjalanan</h2>
        <form id="form_1" action="#" method="post">
          <div class="wrapper pad_bot1">
            <div class="radio marg_right1">
              <input type="radio" name="name1">
              Round Trip<br>
              <input type="radio" name="name1">
              One Way </div>
            <div class="radio">
              <input type="radio" name="name1">
              Empty-Leg<br>
              <input type="radio" name="name1">
              Multi-Leg </div>
          </div>
          <div class="wrapper"> Awal:
            <div class="bg">
              <input type="text" class="input input1" value="Kota atau Bandara" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Tujuan:
            <div class="bg">
              <input type="text" class="input input1" value="Kota atau Bandara" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Tanggal dan Waktu Keberangkatan:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
              <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper"> Tanggal dan Waktu Kembali:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
              <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper">
            <p>Penumpang:</p>
            <div class="bg left">
              <input type="text" class="input input2" value="# penumpang" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''">
            </div>
            <a href="#" class="button2">Pesan!</a> </div>
        </form>
        <h2>Berita Terbaru</h2>
        <p class="under"><a href="#" class="link1">Khusus tahun baru imlek, Garuda Indonesia mengadakan Diskon 20%</a><br>
          November 5, 2010</p>
        <p class="under"><a href="#" class="link1">Gratis tiket Air Asia untuk perjalanan ke Bali</a><br>
          November 1, 2010</p>
        <p><a href="#" class="link1">Diskon 15% sampai tanggal 2 November 2010 untuk semua pesawat</a><br>
          October 23, 2010</p>
      </div>
    </article>
    <article class="col2 pad_left1">
      <h2>Selamat Datang di My Flight!</h2>
      <p class="color1">My Flight merupakan website pemesanan tiket yang dapat membantu memudahkan Anda dalam melakukan pemesanan tiket pesawat.</p>
      <p class="color1">Dengan My Flight Anda dapat melakukan pemesanan tiket dimanapun dan kapanpun dengan cepat dan tepat.</p>
      <div class="marker">
        <div class="wrapper">
          <p class="pad_bot2"><strong>Aircraft</strong></p>
          <p class="pad_bot2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
        </div>
      </div>
      <div class="wrapper pad_bot2"><a href="#" class="button1">Baca Selengkapnya..</a></div>
      <div class="marker">
        <div class="wrapper">
          <p class="pad_bot2"><strong>Charters</strong></p>
          <p class="pad_bot2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
      </div>
      <div class="wrapper pad_bot2"> <a href="#" class="button1">Reservation</a> <a href="#" class="button2">Fleet</a> </div>
      <div class="wrapper">
        <article class="cols">
          <h2>Our Clients</h2>
          <p><strong>Avero eoset</strong> accusamus et iusto odio dig- nissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
          <p>Atque corrupti quos dolores et quas moles- tias excepturi sint <a href="#">occaecati cupiditate</a> non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
        </article>
        <div class="box1">
          <div class="pad_1">
            <div class="wrapper">
              <p class="pad_bot2">Lorem ipsum dolor sit amet, consectetur adip- isicing elit, sed do eius- mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              <p><span class="right">Mr. Thomas Lloyd</span>&nbsp;<br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2010 <a href="#">Domain Name</a> - All Rights Reserved</p>
        <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
        <div style="clear:both;"></div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>