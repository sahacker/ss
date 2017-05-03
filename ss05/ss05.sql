CREATE DATABASE IF NOT EXISTS ss05 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

drop table if exists ss05.msgstr;
create table ss05.msgstr (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lang varchar(2) NOT NULL,
    typekey varchar(12) NOT NULL,
    msg varchar(254) NOT NULL
    ) engine=aria;


insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_MAIN', 'Main page');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_MAIN', 'Главная страница');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_DESC', 'License agreement');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_DESC', 'Лицензионное соглашение');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_ABO', 'About this project');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_ABO', 'Об этом проекте');

insert into ss05.msgstr (lang,typekey,msg) values ('en','uitem_USER', 'User');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','uitem_USER', 'Пользователь');

insert into ss05.msgstr (lang,typekey,msg) values ('en','uitem_UPD', 'Update profile');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','uitem_UPD', 'Изменить профиль');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COMP', 'Company');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COMP', 'Компания');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_VIEW', 'Company Properties');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_VIEW', 'Свойства компании');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_REQU', 'Company Requisits');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_REQU', 'Реквизиты компании');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_FILI', 'Company Offices (filials)');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_FILI', 'Офисы (филиалы) компании');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_SERV', 'Provided services');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_SERV', 'Оказываемые услуги');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_LIST', 'List View');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_LIST', 'Просмотр списка');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_NEWC', 'Create company');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_NEWC', 'Создать компанию');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_NEWF', 'Add office');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_NEWF', 'Добавить офис');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_DELF', 'Delete office');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_DELF', 'Удалить офис');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_DEFF', 'Set default');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_DEFF', 'Сделать основным');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_CHGF', 'Change office');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_CHGF', 'Изменить офис');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_DELE', 'Delete company');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_DELE', 'Удалить компанию');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_EDIT', 'Update company');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_EDIT', 'Изменить компанию');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_PRO', 'Profile');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_PRO', 'Профиль');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_ABO', 'About');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_ABO', 'О нас');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_LIC', 'License');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_LIC', 'Лицензия');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mm_MAIN', 'Main menu');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mm_MAIN', 'Главное меню');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mm_OWNER', 'Owner menu');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mm_OWNER', 'Меню владельца');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mm_ADMIN', 'Operator menu');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mm_ADMIN', 'Меню сотрудника');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mm_GUEST', 'Guest menu');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mm_GUEST', 'Меню гостя');

insert into ss05.msgstr (lang,typekey,msg) values ('en','m1_NAME', 'Name');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','m1_NAME', 'Наименование');

insert into ss05.msgstr (lang,typekey,msg) values ('en','m1_REQU', 'Requisits');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','m1_REQU', 'Реквизиты');

insert into ss05.msgstr (lang,typekey,msg) values ('en','m1_COIN', 'Budget');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','m1_COIN', 'Бюджет');

insert into ss05.msgstr (lang,typekey,msg) values ('en','m1_FILI', 'Offices');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','m1_FILI', 'Офисы');

insert into ss05.msgstr (lang,typekey,msg) values ('en','m1_SERV', 'Services');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','m1_SERV', 'Услуги');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COIN', 'Budget');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COIN', 'Бюджет');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COIN1', 'Cash');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COIN1', 'Наличных');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COIN2', 'Borrowed');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COIN2', 'Заёмных');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COIN3', 'Shared');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COIN3', 'Акционных');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COIN4', 'Demo');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COIN4', 'Демо');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_COINF', 'All money');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_COINF', 'Всего денег');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_DSUF', 'Suffix');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_DSUF', 'Cуффикс');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_ABBR', 'Abbreviation');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_ABBR', 'Сокращённо');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_OWN', 'Owner');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_OWN', 'Владелец');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_CREA', 'Created');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_CREA', 'Создана');

insert into ss05.msgstr (lang,typekey,msg) values ('en','citem_FORM', 'm.d.Y');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','citem_FORM', 'd.m.Y');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TIPH', 'Tip!');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TIPH', 'Совет!');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TIPI', 'This site can be opened on a mobile device.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TIPI', 'Этот сайт можно открыть на мобильном устройстве.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TITL', 'License agreement');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TITL', 'Лицензионное соглашение');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_TAPP', 'Start creating your amazing application!');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_TAPP', 'Начните создавать ваши удивительные приложения!');

insert into ss05.msgstr (lang,typekey,msg) values ('en','mitem_FOOT', 'Simplex Server Project');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','mitem_FOOT', 'Проект Simplex Server');

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

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_CONG', 'Congratilations! Success registration.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_CONG', 'Поздравляем! Вы успешно зарегистрировались.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_CHK1', 'You can login after check Your e-mail.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_CHK1', 'После проверки адреса почты Вы сможете войти на сайт.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_SUCC', 'After a few seconds You will be redirect to login form.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_SUCC', 'Через несколько секунд Вы будете перенаправлены на форму входа.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_FAIL', 'Registration error. This address is used already.');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_FAIL', 'Ошибка регистрации. Этот адрес уже используется.');

insert into ss05.msgstr (lang,typekey,msg) values ('en','login_FNOW', 'Forward now');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','login_FNOW', 'Перейти сейчас');

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

insert into ss05.msgstr (lang,typekey,msg) values ('en','form_SUC', 'Success registration');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_SUC', 'Успешная регистрация');

insert into ss05.msgstr (lang,typekey,msg) values ('en','form_FAIL', 'Registration failed');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','form_FAIL', 'Ошибка регистрации');

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

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_root', 'Administrator');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_root', 'Администратор');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_supp', 'Team Support');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_supp', 'Команда Поддержки');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_boss', 'Company Client Chief');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_boss', 'Руководитель компании-клиента');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_clnt', 'Company Client Member');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_clnt', 'Сотрудник компании-клиента');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_free', 'Free Lancer');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_free', 'Вольный Копейщик');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_team', 'Free Lancer Team');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_team', 'Команда фрилансеров');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_outs', 'Outsourcing Company');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_outs', 'Компания Аутсорсинга');

insert into ss05.msgstr (lang,typekey,msg) values ('en','grp_user', 'User');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','grp_user', 'Пользователь');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_NUM', 'Number');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_NUM', 'Номер');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_SEL', 'Select');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_SEL', 'Выбрать');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_NAME', 'Office Name');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_NAME', 'Наименование');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_ADDR', 'Address');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_ADDR', 'Адрес');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_REG', 'Region or State');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_REG', 'Регион или область');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_LAND', 'Country');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_LAND', 'Страна');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_IDX', 'Post Index');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_IDX', 'Индекс');

insert into ss05.msgstr (lang,typekey,msg) values ('en','oftab_MAIN', 'Headquarter');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','oftab_MAIN', 'Головной офис');

insert into ss05.msgstr (lang,typekey,msg) values ('en','dlg_Y', 'Yes');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','dlg_Y', 'Да');

insert into ss05.msgstr (lang,typekey,msg) values ('en','dlg_N', 'No');
insert into ss05.msgstr (lang,typekey,msg) values ('ru','dlg_N', 'Нет');

drop table if exists ss05.groups;
create table ss05.groups (
    gid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rules int(11) NOT NULL,
    idtype varchar(12) NOT NULL
	) engine=aria;

insert into ss05.groups(rules, idtype) values (0, 'grp_root'); #1
insert into ss05.groups(rules, idtype) values (2, 'grp_supp'); #2
insert into ss05.groups(rules, idtype) values (1, 'grp_boss'); #3
insert into ss05.groups(rules, idtype) values (1, 'grp_clnt'); #4
insert into ss05.groups(rules, idtype) values (4, 'grp_free'); #5
insert into ss05.groups(rules, idtype) values (4, 'grp_team'); #6
insert into ss05.groups(rules, idtype) values (3, 'grp_outs'); #7
insert into ss05.groups(rules, idtype) values (3, 'grp_user'); #8

drop table if exists ss05.users;
create table ss05.users (
    uid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	enabled tinyint DEFAULT 0,
	status tinyint DEFAULT 0,
    fullname varchar(48) NOT NULL,
    surname varchar(24),
    name varchar(24),
    email varchar(48) NOT NULL UNIQUE,
    passwd varchar(32) NOT NULL,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;
	
insert into ss05.users (enabled, status, fullname, surname, name, email, passwd) values 
(1, 1, 'Сахаров как Босс', 'Сахаров', 'Сергей', 'sahacker@mail.ru', 'Qwe123'),
(1, 2, 'Сахаров как Оператор', 'Сахаров', 'Сергей', 'sahacker@yandex.ru', 'Qwe123'),
(1, 8, 'Сахаров как Аудитор', 'Сахаров', 'Сергей', 'service@yoursa.ru', 'Qwe123');

drop table if exists ss05.companies;
create table ss05.companies (
    cid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    owner int(11) DEFAULT 1,
    budget_a int(11) DEFAULT 0,
    budget_b int(11) DEFAULT 0,
    budget_c int(11) DEFAULT 0,
    budget_demo int(11) DEFAULT 100,
    lockadm tinyint DEFAULT 0,
    lockown tinyint DEFAULT 0,
    name varchar(48) NOT NULL,
    dsuffix varchar(24),
    abbr varchar(12),
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;

insert into ss05.companies (owner, name, dsuffix, abbr) values
(1, 'ООО "Парус"',         'd001.ss.loc', 'ООО Парус'),
(2, 'ООО "Акула"',         'd002.ss.loc', 'ООО Акула'),
(3, 'ООО "Катер"',         'd003.ss.loc', 'ООО Катер');

drop table if exists ss05.relations;
create table ss05.relations (cid int(11), uid int(11), gid int(11)) engine=aria;

insert into ss05.relations (cid, uid, gid) values
(1,1,1), (1,2,2), (1,3,8),
(2,1,2), (2,2,8), (2,3,1),
(3,1,8), (3,2,1), (3,3,2);

drop table if exists ss05.branches;

drop table if exists ss05.offices;
create table ss05.offices (
    bid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cid int(11) NOT NULL DEFAULT 0,
    address varchar(128) NOT NULL,
    region varchar(128) NOT NULL,
    country varchar(128) NOT NULL,
    postidx varchar(8) NOT NULL,

    extip varchar(16) NOT NULL,
    fname varchar(128) NOT NULL,
    deff BOOLEAN default FALSE,
    sbc1 BOOLEAN default FALSE,
    dhcp BOOLEAN default FALSE,
    ovnc BOOLEAN default FALSE,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;

	
insert into ss05.offices (cid, address, region, country, postidx, extip, fname, deff, sbc1, dhcp, ovnc) values
(1, 'г. Семёнов, ул. Школьная, 61-2', 'Нижегородская область', 'RU', '606657', '81.18.157.249', 'Основной офис', true, true, false, false),
(1, 'г. Семёнов, ул. Калинина, 6а',   'Нижегородская область', 'RU', '606650', 'dynamic', 'Запасной офис', false, true, false, false),
(2, 'г. Семёнов, ул. Школьная, 61-2', 'Нижегородская область', 'RU', '606657', '81.18.157.249', 'Головной офис', true, true, false, false),
(2, 'г. Семёнов, ул. Калинина, 6а',   'Нижегородская область', 'RU', '606650', 'dynamic', 'Филиал в Мухино', false, true, false, false),
(3, 'г. Семёнов, ул. Школьная, 61-2', 'Нижегородская область', 'RU', '606657', '81.18.157.249', 'Штаб-квартира', true, true, false, false),
(3, 'г. Семёнов, ул. Калинина, 6а',   'Нижегородская область', 'RU', '606650', 'dynamic', 'Торговая точка', false, true, false, false);

drop table if exists ss05.msgtxt;
create table ss05.msgtxt (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lang varchar(2) NOT NULL,
    typekey varchar(12) NOT NULL,
    msg text NOT NULL
    ) engine=aria;

INSERT INTO `msgtxt` (`lang`, `typekey`, `msg`) VALUES
('en', 'LICENSE', '<div style=\"text-align: center; font-weight: bold;\"><big>Terms and Conditions<br></big></div><div style=\"text-align: justify;\">At the moment the site works in a test mode. Service is provided \"as is\", no claim.<div>'),
('ru', 'LICENSE', '<div style=\"text-align: center; font-weight: bold;\"><big>Условия и положения<br></big></div><div style=\"text-align: justify;\">На данный момент сайт действует в тестовом режиме. Сервис предоставляется \"как есть\", претензии не принимаются.</div>'),
('en', 'ABOUT', '<div style=\"text-align: center; font-weight: bold;\"><big>About<br></big></div><div style=\"text-align: justify;\">At the moment the site works in a test mode. Service is provided \"as is\", no claim.<div>'),
('ru', 'ABOUT', '<div style=\"text-align: center; font-weight: bold;\"><big>О нас<br></big></div><div style=\"text-align: justify;\">На данный момент сайт действует в тестовом режиме. Сервис предоставляется \"как есть\", претензии не принимаются.</div>');
