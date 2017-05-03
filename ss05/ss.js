
function ButtonEnableReg(form) {
	
}


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