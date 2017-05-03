drop table ss05.msgstr;

create table ss05.msgstr (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lang varchar(2) NOT NULL,
    typekey varchar(12) NOT NULL,
    msg varchar(254) NOT NULL
    ) engine=aria;


insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_MAIN', 'Main page');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_MAIN', 'Главная страница');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_DESC', 'The typical pattern of the main page.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_DESC', 'Типовой шаблон главной страницы');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TIPH', 'Tip!');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TIPH', 'Совет!');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TIPI', 'Default tip here.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TIPI', 'Здесь совет по умолчанию.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TITL', 'Title');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TITL', 'Заголовок');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TAPP', 'Start creating your amazing application!');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TAPP', 'Начните создавать ваши удивительные приложения!');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_FOOT', 'Footer');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_FOOT', 'Подвал');

insert into ss05.msgstr (lang,typekey,msg) values ('en','rmenu1_REG', 'Register');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','rmenu1_REG', 'Регистрация');

insert into ss05.msgstr (lang,typekey,msg) values ('en','rmenu1_LGN', 'Login');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','rmenu1_LGN', 'Вход');

insert into ss05.msgstr (lang,typekey,msg) values ('en','rmenu1_REM', 'Remind');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','rmenu1_REM', 'Напомнить');

insert into ss05.msgstr (lang,typekey,msg) values ('en','rmenu1_LGT', 'Logout');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','rmenu1_LGT', 'Выход');

insert into ss05.msgstr (lang,typekey,msg) values ('en','lmenu_MAIN', 'MAIN NAVIGATION');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','lmenu_MAIN', 'ОСНОВНАЯ НАВИГАЦИЯ');

insert into ss05.msgstr (lang,typekey,msg) values ('en','lmenu_PROF', 'Profile');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','lmenu_PROF', 'Профиль');

insert into ss05.msgstr (lang,typekey,msg) values ('en','lmenu_COMP', 'Companies');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','lmenu_COMP', 'Компании');

insert into ss05.msgstr (lang,typekey,msg) values ('en','lmenu_COIN', 'Finance');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','lmenu_COIN', 'Финансы');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mail_INFO', 'Get messages: ');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mail_INFO', 'Получено сообщений:');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mail_SHOW', 'See all messages');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mail_SHOW', 'Просмотреть все сообщения');

# insert into ss05.msgstr (lang,typekey,msg) values ('en','mail_', '');
# insert into ss05.msgstr (lang,typekey,msg) values ('ru','mail_', '');

# insert into ss05.msgstr (lang,typekey,msg) values ('en','mail_', '');
# insert into ss05.msgstr (lang,typekey,msg) values ('ru','mail_', '');

insert into ss05.msgstr (lang,typekey,msg) values ('en','user_NONE', 'Unknown user');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','user_NONE', 'Неизвестный пользователь');

insert into ss05.msgstr (lang,typekey,msg) values ('en','user_UREG', 'Unregistered user');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','user_UREG', 'Незарегистрированный пользователь');

insert into ss05.msgstr (lang,typekey,msg) values ('en','user_TEST', 'Test user');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','user_TEST', 'Тестовый пользователь');

insert into ss05.msgstr (lang,typekey,msg) values ('en','user_SUPP', 'Support Team');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','user_SUPP', 'Команда Поддержки');

insert into ss05.msgstr (lang,typekey,msg) values ('en','user_UMSG', 'This user is not yet registered.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','user_UMSG', 'Этот пользователь ещё не зарегистрирован.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_FORM', 'Login to start your session.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_FORM', 'Войдите чтобы открыть Ваш сеанс.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_REME', 'Remember Me.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_REME', 'Запомнить меня.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_REMI', 'Enter the email address for password recovery');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_REMI', 'Укажите почту для восстановления пароля');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_FORG', 'I forgot my password.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_FORG', 'Я забыл свой пароль.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_NREG', 'Register a new membership.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_NREG', 'Регистрация нового участника.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_AREG', 'I already have a membership.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_AREG', 'Я уже зарегистрирован.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_MAIL', 'Enter your e-mail');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_MAIL', 'Введите Ваш адрес электронной почты');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_PASS', 'Enter your password');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_PASS', 'Введите Ваш пароль');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_PASA', 'Enter your password again');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_PASA', 'Введите Ваш пароль снова');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_NAME', 'Enter your full name');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_NAME', 'Введите Ваше полное имя');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_N1', 'Enter your name');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_N1', 'Введите Ваше имя');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_N2', 'Enter your surname');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_N2', 'Введите Вашу фамилию');

insert into ss05.msgstr (lang,typekey,msg) values ('en','placeh_SRCH', 'Search');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','placeh_SRCH', 'Искать');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_CASE', 'I agree to the ');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_CASE', 'Я принимаю ');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_TERM', 'terms');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_TERM', 'Условия');

insert into ss05.msgstr (lang,typekey,msg) values ('en','form_LGN', 'Login Form');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_LGN', 'Форма входа');

insert into ss05.msgstr (lang,typekey,msg) values ('en','form_REG', 'Registration Form');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_REG', 'Форма регистрации');

insert into ss05.msgstr (lang,typekey,msg) values ('en','form_REM', 'Password Remind');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_REM', 'Напомнить пароль');

# insert into ss05.msgstr (lang,typekey,msg) values ('en','form_', '');
# insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_', '');

# insert into ss05.msgstr (lang,typekey,msg) values ('en','form_', '');
# insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_', '');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_NONE', '<font color=gray>Password is null</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_NONE', '<font color=gray>Пароль не указан</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_UNEQ', '<font color=red>Passwords do not match</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_UNEQ', '<font color=red>Пароли не совпадают</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_EQ', '<font color=green>Passwords match</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_EQ', '<font color=green>Пароли совпадают</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_x1', '<font color=red>Easy password</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_x1', '<font color=red>Лёгкий пароль</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_x2', '<font color=yellow>Tolerable password</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_x2', '<font color=yellow>Сносный пароль</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','pass_x3', '<font color=green>Secure password</font>');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','pass_x3', '<font color=green>Стойкий пароль</font>');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_t404', 'Page not found.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_t404', 'Страница не найдена.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_t500', 'Internal server error.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_t500', 'Внутренняя ошибка сервера.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_c404', 'This page have been moved or deleted. Meanwhile, you may ');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_c404', 'Эта страница могла быть перемещена или удалена. Вы можете ');
insert into ss05.msgstr (lang,typekey,msg) values ('en','error_c4041', 'return to dashboard');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_c4041', 'вернуться на Главную');
insert into ss05.msgstr (lang,typekey,msg) values ('en','error_c4042', ' or try using the search form.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_c4042', ' или воспользоваться формой поиска.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_c500', 'We will work on fixing that right away. Meanwhile, you may ');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_c500', 'Мы будем работать, чтобы исправить это. Вы можете ');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_f404', 'Oops! Page not found.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_f404', 'Упс! Страница не найдена.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','error_f500', 'Oops! Something went wrong.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','error_f500', 'Упс! Что-то пошло не так.');

drop table ss05.users;

create table ss05.users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	enabled tinyint DEFAULT 0,
	status tinyint DEFAULT 0,
    fullname varchar(48) NOT NULL,
    surname varchar(24),
    name varchar(24),
    email varchar(48) NOT NULL,
    passwd varchar(32) NOT NULL,
	created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;
	
insert into ss05.users (enabled, fullname, email, passwd) values (1, 'Сахаров Сергей', 'sahacker@mail.ru', 'Qwe123');


