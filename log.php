<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт web-студії "WEB-DECO"</title>
   
    <script src="js/clock1.js"></script>
	<script type="text/javascript">
		function send()
		{
			var valid = true;
			var elems = document.forms[0].elements;
			for(var i=0; i<document.forms[0].length; i++)
			{
				if(elems[i].getAttribute('type') == 'text' || elems[i].getAttribute('type') == 'password' || elems[i].getAttribute('type') == 'email') {
					if(elems[i].value == '') {
						elems[i].style.border = '2px solid red';
						valid = false;
					}
				}
			}
			if(!valid) {
				alert('Заповніть всі поля!');
				return false;
			}
		}
	</script>
    <style>
        .shadowtext{
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
    <script>
        window.onload=function()
        {
            setInterval(clockPainting, 1000);   
        }
    </script>
</head>
<body background="images/bg.jpg">
    <table border="1" align="center" cellpadding="10">
    <tr>
        <td background="images/b3.jpg" colspan="2" height="150" align="right" hspace="5">
            <img src="images/лого.png" alt="" height="140" width="140" align="left">
            <font color="Maroon">
                <h1 class="shadowtext">Сайт студії "WEB-DECO"</h1>
            </font>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <font size="4"><b>
                <a href="#">Головна</a>
                <a href="#">Фотогалерея</a>
                <a href="#">Телефони</a>
                <a href="#">Статистика</a>
                <a href="#">Зареєстровані</a>
            </b></font>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
            <center><canvas id="canvas" height="120" width="120"></canvas></center>
<hr>
            <font size="5" color="navy"><h2>Новини</h2></font>
                    <font size="5">
                        <ul>
                            <li><a href="#">Сайт будівельної компанії</a></li>
                            <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                            <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                            <li><a href="#">Розробка CMS для Metro Cash & Carry</a></li>
                            <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
                            <p align="right"><a href="#">інші...</a></p>
                        </ul>
                    </font>
                    <hr>
                <h1 align="center"><font color="green">Реєстрація</font></h1>
                <form action="forma.php" method="post" onsubmit="return send();">
                <table align="center" bgcolor="#ccc">
                    <tr>
                        <td><font color="green">Прізвище</font>: </td>
                        <td><input type="text" size="10" maxlength="20" name="name2"></td>
                    </tr>
                    <tr>
                        <td><font color="green">Ім'я</font> : </td>
                        <td><input type="text" size="10" maxlength="20" name="name1"></td>
                    </tr>
                    <tr>
                        <td><font color="green">E-Mail</font> : </td>
                        <td><input type="email" size="10" maxlength="20" name="email"></td>
                    </tr>
                    <tr>
                        <td><font color="green">Пароль</font> : </td>
                        <td><input type="password" size="10" maxlength="20" name="password"></td>
                    </tr>
                </table>

                <p align="center">
                    <input type="submit" value="Зареєструватись">
                    <input type="reset" value="Очистити">
                </p>
                </form>
                <hr>
        </td>
        <td width="70%">            	  
        <?php
                echo '<h1 align="center"Хто до нас на сайт заходив !</h1>';
                echo '<TABLE align="center" border="1" width="800">';
                        echo '<tr>';
                echo '<td align="center">IP Address</td>';
                echo '<td align="center">Браузер</td>';
                echo '<td align="center">Дата</td>';
                        echo '<tr>';
                $data = file("log.txt");
                foreach ($data as $line){
                    $trs = explode ("|", $line);

                            echo '<tr>';
                            echo '<td>'.$trs[0].'</td>';
                    echo '<td>'.$trs[1].'</td>';
                    echo '<td>'.$trs[2].'</td>';
                            echo '<tr>';
                }
                echo '</table>';
                ?>
        </td>
    </tr>
        <tr>
        <td background="images/bg3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробила Майлат Анасатасія</font>
        </td>
    </tr>
    </table>    
</body>
</html>
