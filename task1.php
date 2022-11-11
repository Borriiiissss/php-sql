<!--Задача №1: сформировать массив с данными для блока «Опыт работы».
Вывести данные массива в HTML-шаблоне.
Решение: данные обраны в словарь и выводятся на экран через цикл foreach-->

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=I1hyG6SNm-mcVV9YQ72Mcjs6oLesa1ipY1IHhxUj4Vl0-bD0olHjwxZl4nUkto7mpU2568V1pu62aObglnyOadl9oFjByxfM7mzAXWOoqbOpSGoHz0tZM6fSlsH4uxrKwvfAeW7BmMcYJlCUwlLdltkKOpEEvh0FCIy260bRR_BkIoK6CgJyAldAT_seuVXXYlDqEhbmIe0kqOx6iakxgMsRiueiQjnN253DkulzwSdEyGdlGN37wyg1t9Dh3yu8tuxmE1u49Jno5Aq5IZ8p1mepMqFa2CB1xjpciZDxHV9tuI0V7NQQzL_8R_2o0RrulEQejAI52LlgFVZhU8yBYkuqYr_lAeswxTsxdTJhxbqJSxiZnP8XjyFVupUYLAkxJUJy2Cu3n24fSuP9t9iiZeNE7WU5-O42bOL54ymsc_V2Mxu_EkJfI-IHK_4Q-nXl8LfdfqdFjpY4sk5OCagewgaZMw_kMcminAEOwS2LlazpERiBWhJLJIuykRmI7G6OFBWzfWCPyhTdhsCIMeD8jKEyg_RJ_ATLL7AB8Itp1UR--o295rRt06gJ0_rtp2oZu3kdVvFzzKtt3LUztVrIIOcCfHPqRGVIdouk99sfVaOOb3Lx6A1t1kmiqY2bSHQHIkx5c-hrLRrbqi_fjSJN6BUubJK56BcFYhp4CDMaLHapQJ2jtg598YjK-O0JpPn3zaApM13J_ktRKJDHNT8W5LY57IFOJsUyj-ouqbl46oqBEPuoeaBunJnRB28XtB4lpXqu9HP7HKLyi1ryR94OFoCnrQgOo759MRJYfcYQ8PDpBC7hIxRQBK2788E4nmT4K_pPlIsyk58W9Fxd8WTtIMz7fsr7uQEZn-aRpKAZwIVeDayqjSt8wCa4hMnc_IqypMHcvKOOu-yYfnxfvbD1shivvPIESwoGcH_mOKqD9X6SpSzMTxhlE8JoVp2eSznkshWjhX3A1X09uTKmaIWchAIX4bGjrPkkEKgtaBpCkXwvhYHkBjzQSLeyvgMlEpMZNPppr20WIGPHnTWSjOUWBPYY2Bj1MK-FKqpIfwl8RMg" charset="UTF-8"></script><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Имя</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <?php 
          $skills = [
          'Adobe Photoshop' => 50,
          'Photography' => 60,
          'Illustrator' => 81,
          'Media' => 89,
          ]
          ?>
          
          <?php
          foreach ($skills as $skillname => $skillvalue): ?>
          
          <?php echo $skillname ?>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" 					style="width:<?php echo $skillvalue; ?>%"> <?php echo $skillvalue; ?>%  </div>
          </div>
          
          <?php endforeach; ?>
          

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        
        <?php 
          $experience = [
          'Front End Developer' => 'Jan 2015 <br> Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.',
          'Web Developer' => 'Mar 2012 - Dec 2014<br> Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.',
          'Graphic Designer' => 'Jun 2010 - Mar 2012<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
          ];
          ?>
          
          <?php
          foreach ($experience as $item => $date): ?>          
          <h5 class="w3-opacity"><b> <?php echo $item ?> </b></h5>
			<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i></h6>
          <p><?php echo $date ?></p>          
          <?php endforeach; ?>
           </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
