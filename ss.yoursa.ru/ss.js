var sitename="Simplex Server";
var footertext="Простые решения на практике оказываются самыми надёжными.";
var is_registered=false;
var defaultpage=4;
var userid=0;
var status=0;
var username="";
var usermail=""
var pages = new Array('regfrm1','regfrm2','regfrm3', 'regfrm4','login1','login2','login3','login4','user1','priv1');

function DrawHeader() {	
    document.write('<div class="pgheader"><div class="logo"></div><div class="ssname">'+sitename+'</div>');
    if (is_registered) document.write('<div class="login"><a href="/out.php" onclick="SelectForm(4)">Выйти</a></div></div>');  
    else document.write('<div class="login"><a href="#"" onclick="SelectForm(4)">Вход</a> | <a href="#" onclick="SelectForm(0)">Регистрация</a></div></div>'); };

function DrawFooter() {	document.write('<div class="pgfooter"><a href="#">'+footertext+'</a> © Simplex Solutions</div>');  };

function DrawRegfrm1() {
    document.write('<div class="workfrm" name="regfrm1" id="regfrm1">');
    document.write('<form name="regform" id="regform" method="post" action="/reg.php" onChange="ActivateButton(regform)" onSubmit="SubmitReg(regform)">');
    document.write('<fieldset class="form"><fieldset class="info"><label for="surname">Фамилия</label><p class="input">');
    document.write('<input name="surname" id="surname" pattern="^[А-Яа-я]+$" required value=""');
    document.write('title="Фамилия должна содержать только русские буквы"></p><label for="name">Имя</label><p class="input">');
    document.write('<input name="name" id="name" pattern="^[А-Яа-я]+$" required value="" title="Имя должно содержать только русские буквы"></p>');
    document.write('</fieldset><fieldset class="xlogin"><label for="email">Эл. почта</label><p class="input">');
    document.write('<input type="email" name="email" id="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required value=""');
    document.write('title="Должен быть указан действующий адрес электронной почты"></p><label for="password">Пароль</label><div class="mx0"></div>');
    document.write('<p class="input"><input type="password" name="password" id="password" onkeyup="CheckPass1(regform)" maxlength="16" required value=""></p>');
    document.write('<div class="pass0" id="pass0f" name="pass0f"></div><label for="repassword">Повторите</label>');
    document.write('<p class="input"><input type="password" name="repassword" id="repassword" onkeyup="CheckPass2(regform)" required value=""></p>');
    document.write('<div class="pass0" id="pass1f" name="pass1f"></div></fieldset><fieldset class="rules">');
    document.write('<label for="rules">Условия <a href="#" onclick="SelectForm(8)">Пользовательского соглашения</a><br>мной прочитаны, поняты и приняты.</label>');
    document.write('<p class="input"><input type="checkbox" name="rules" id="rules" required value="yes"></p></fieldset>');
    document.write('<fieldset class="captcha"><div class="g-recaptcha" data-sitekey="6Lcg2RMTAAAAAHPSyhI5o33_na_QYpuZztLirFQP"></div></fieldset>');
    document.write('<fieldset class="button"><input type="image" id="btreg" name="btreg" src="img/off-reg.png" alt="Зарегистрироваться"></fieldset></fieldset></form></div>');
};

function DrawRegfrm2() {
    document.write('<div class="workfrm" name="regfrm2" id="regfrm2"><form name="form2"><fieldset class="form">');
    document.write('<h1 align="center">Успешная регистрация!</h1>');
    document.write('<p align=justify>Поздравляем! Вы успешно зарегистрировались на нашем сайте. Проверьте Вашу почту. ');
    document.write('Вам должно прийти письмо с уникальной ссылкой. Для подтверждения адреса Вы должны перейти по ссылке. ');
    document.write('После того как адрес Вашей почты будет подтверждён, Ваша учётная запись будет активирована и Вы ');
    document.write('сможете войти в Личный кабинет.</p>');
    document.write('</fieldset></form></div>');
};

function DrawRegfrm3() {
    document.write('<div class="workfrm" name="regfrm3" id="regfrm3"><form name="form3"><fieldset class="form">');
    document.write('<h1 align="center">Ошибка регистрации!</h1><p align=justify>');
    document.write('Простите нас, пожалуйста. По какой-то неизвестной причине мы не смогли Вас зарегистрировать. ');
    document.write('Возможно, это временный сбой или Вы уже были зарегистрированы ранее. Пожалуйста, проверьте все ');
    document.write('Ваши данные и попробуйте ещё раз попозже. Если у Вас снова не получится зарегистрироваться на ');
    document.write('нашем сайте, сообщите нам об этой проблеме по электронной почте. Желательно, чтобы Вы отправили ');
    document.write('нам сообщение с Вашего адреса регистрации. Мы обязательно постараемся Вам помочь.');
    document.write('</p></fieldset></form></div>');
};

function DrawRegfrm4() {
    document.write('<div class="workfrm" name="regfrm4" id="regfrm4"><form name="form4"><fieldset class="form">');
    document.write('<h1 align="center">Ошибка регистрации!</h1><p align=justify>');
    document.write('Этот адрес уже зарегистрирован. Вы забыли свой пароль?');
    document.write('</p><p><a href="#" onclick="SelectForm(5)">Выслать пароль</a>');
    document.write('</p></fieldset></form></div>');
};

function DrawLogin1() {
    document.write('<div class="workfrm" name="login1" id="login1"><form name="logform" id="logform" method="post" action="/log.php" onChange="ActivateBtn2(logform)"><fieldset class="form">');
    document.write('<div class="stub1"><font size="5" face="Sans-serif">Войти в Личный кабинет.</font></div>');
    document.write('<fieldset class="xlogin"><label for="email">Эл. почта</label><p class="input">');
    document.write('<input type="email" name="email" id="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required value=""');
    document.write('title="Должен быть указан действующий адрес электронной почты"></p><label for="password">Пароль</label><div class="mx0"></div>');
    document.write('<p class="input"><input type="password" name="password" id="password" onkeyup="CheckPassword(regform)" maxlength="16" required value=""></p>');
    document.write('<br><a href="#" onclick="SelectForm(5)">Забыли пароль?</a><br></fieldset><fieldset class="button">');
    document.write('<input type="image" id="btlog" name="btlog" src="img/off-log.png" alt="Войти">');
    document.write('</fieldset></fieldset></form></div>');
};

function DrawLogin2() {
    document.write('<div class="workfrm" name="login2" id="login2"><form name="remform" id="remform" method="post" action="/rem.php" onSubmit="SubmitRem(remform)"><fieldset class="form">');
    document.write('<div class="stub1"><font size="5" face="Sans-serif">Отправка нового пароля.</font></div>');
    document.write('<fieldset class="xlogin"><label for="email">Эл. почта</label><p class="input">');
    document.write('<input type="email" name="email" id="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required value=""');
    document.write('title="Должен быть указан действующий адрес электронной почты"></p><div class="mx0"></div></fieldset>');
    document.write('<fieldset class="button"><input type="image" id="btreg" name="btreg" src="img/off-msg.png" alt="Войти">');
    document.write('</fieldset></fieldset></form></div>');
};

function DrawLogin3() {
    document.write('<div class="workfrm" name="login3" id="login3"><form name="form6"><fieldset class="form">');
    document.write('<h1 align="center">Ошибка входа!</h1><p align=justify>');
    document.write('Извините, но Вы ввели неверный  пароль. Если Вы его забыли, мы можем выслать на Ваш почтовый ящик новый пароль.');
    document.write('</p><p><a href="#" onclick="SelectForm(4)">Выслать пароль</a>');	
    document.write('</p></fieldset></form></div>');
};

function DrawLogin4() {
    document.write('<div class="workfrm" name="login4" id="login4"><form name="form7""><fieldset class="form">');
    document.write('<h1 align="center">Подтверждение адреса.</h1><p align=justify>');
    document.write('Поздравляем! Ваш адрес успешно подтверждён! Теперь Вы можете войти на сайт.');
    document.write('</p><p><a href="#" onclick="SelectForm(4)">Войти</a>');	
    document.write('</p></fieldset></form></div>');
};

function DrawUser1() {
    document.write('<div class="workfrm" name="user1" id="user1"><form name="form8"><fieldset class="form">');
    document.write('<h1 align="center">Пользовательское соглашение</h1><p align=justify>');
    document.write('Здесь типа текст Пользовательского соглашения.');
    document.write('</p><p><a href="#" onclick="SelectForm(0)">Зарегистрироваться</a>');	
    document.write('</p></fieldset></form></div>');
};

function DrawPriv1() {
    document.write('<div class="workfrm" name="priv1" id="priv1"><form name="privform"><fieldset class="form">');
    document.write('<h1 align="center">Личный кабинет.</h1><p align=justify>');
    document.write(username+', добро пожаловать в Ваш Личный кабинет!');
    document.write('');
    document.write('');
    document.write('');
    document.write('');
    document.write('</p></fieldset></form></div>');
};

function SumbitReg(form) {
    var retcount = 0;
    if (form.surname.value == "") alert("Ошибка! Необходимо указать фамилию"); else retcount++;
    if (form.name.value == "") alert("Ошибка! Необходимо указать имя"); else retcount++;
    if (form.email.value == "") alert("Ошибка! Необходимо указать электронную почту"); else retcount++;
    if (form.password.value == "") alert("Ошибка! Нельзя использовать пустой пароль"); else retcount++;
    if (!(form.password.value == form.repassword.value)) alert("Ошибка! Пароли не совпадают!"); else retcount++;
    if (!form.rules.checked) alert("Ошибка! Условия Пользовательского соглашения необходимо принять"); else retcount++;
    if (retcount<6) return false;
};

function SumbitLog(form) {
    var retcount = 0;
    if (form.email.value == "") alert("Ошибка! Необходимо указать электронную почту"); else retcount++;
    if (form.password.value == "") alert("Ошибка! Нельзя использовать пустой пароль"); else retcount++;
    if (retcount<2) return false;
};

// function SumbitRem(form) {
//     var retcount = 0; alert("Пароль выслан на указанный адрес!");
//     if (form.email.value == "") alert("Ошибка! Необходимо указать электронную почту"); else retcount++;
//     if (retcount<1) return false; 
// };

function CheckPass1(form) {
      var password = form.password.value; // Получаем пароль из формы
      var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
      var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
      var ru_letters = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя";
      var digits = "0123456789"; // Цифры
      var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
      var is_s = false; // Есть ли в пароле буквы в нижнем регистре
      var is_b = false; // Есть ли в пароле буквы в верхнем регистре
      var is_d = false; // Есть ли в пароле цифры
      var is_sp = false; // Есть ли в пароле спецсимволы
	for (var i = 0; i < password.length; i++)
	  if (!is_s && ru_letters.indexOf(password[i]) != -1)
	  { alert("Ошибка! В пароле не может быть русских букв"); form.password.value =""; } else { 
        for (var i = 0; i < password.length; i++) {  
	  /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
        if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
        else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
        else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
        else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
      }
      var rating = 0;
      if (is_s) rating++; // Если в пароле есть символы в нижнем регистре, то увеличиваем рейтинг сложности
      if (is_b) rating++; // Если в пароле есть символы в верхнем регистре, то увеличиваем рейтинг сложности
      if (is_d) rating++; // Если в пароле есть цифры, то увеличиваем рейтинг сложности
      if (is_sp) rating++; // Если в пароле есть спецсимволы, то увеличиваем рейтинг сложности
      /* Далее идёт анализ длины пароля и полученного рейтинга, и на основании этого готовится текстовое описание сложности пароля */
      if (password == "") document.getElementById('pass0f').style.backgroundImage = "url('img/pw0.jpg')";
      else if (password.length < 6 && rating < 3) document.getElementById('pass0f').style.backgroundImage = "url('img/pw1.jpg')";
      else if (password.length < 6 && rating >= 3) document.getElementById('pass0f').style.backgroundImage = "url('img/pw2.jpg')";
      else if (password.length >= 8 && rating < 3) document.getElementById('pass0f').style.backgroundImage = "url('img/pw2.jpg')";
      else if (password.length >= 8 && rating >= 3) document.getElementById('pass0f').style.backgroundImage = "url('img/pw3.jpg')";
      else if (password.length >= 6 && rating == 1) document.getElementById('pass0f').style.backgroundImage = "url('img/pw1.jpg')";
      else if (password.length >= 6 && rating > 1 && rating < 4) document.getElementById('pass0f').style.backgroundImage = "url('img/pw2.jpg')";
      else if (password.length >= 6 && rating == 4) document.getElementById('pass0f').style.backgroundImage = "url('img/pw3.jpg')";
    };
};

function CheckPass2(form) {
     var pass1 = form.password.value;
     var pass2 = form.repassword.value;
     if (pass2 == "") document.getElementById('pass1f').style.backgroundImage = "url('img/pw0.jpg')";
     else if (pass2 == pass1) document.getElementById('pass1f').style.backgroundImage = "url('img/pwt.jpg')";
     else document.getElementById('pass1f').style.backgroundImage = "url('img/pwf.jpg')";
    };
    
function ActivateButton(form) {
	if ((form.surname.value !="") & (form.name.value !="") & (form.email.value !="") & (form.password.value !="") & (form.password.value == form.repassword.value) & form.rules.checked) 
	    document.getElementById('btreg').src="img/on-reg.png";  else 			
	    document.getElementById('btreg').src="img/off-reg.png"; 
};
function ActivateBtn2(form) {
    if ((form.email.value !="") & (form.password.value !="")) 
	document.getElementById('btlog').src="img/on-log.png";  else 			
	document.getElementById('btlog').src="img/off-log.png"; 
};

function DrawForms(defid) {
    DrawRegfrm1(); DrawRegfrm2(); DrawRegfrm3(); DrawRegfrm4(); DrawLogin1(); DrawLogin2(); DrawLogin3(); DrawLogin4(); DrawUser1();
    DrawPriv1(); SelectForm(defid);
};

function SelectForm(fname) {
    if (is_registered & (fname<9)) fname = 9;
    if (!is_registered & (fname>8)) fname = 0;
    for (var i = 0; i < 10; i++) { document.getElementById(pages[i]).style.display="none"; };
    document.getElementById(pages[fname]).style.display="inline-block";
};

function DrawLMenu() {
    document.write('<div class=leftrec>');
    if (is_registered) {
	document.write('Меню пользователя');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
	document.write('');
    }
    document.write('</div>');
};
