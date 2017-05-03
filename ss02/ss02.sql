CREATE DATABASE IF NOT EXISTS ss02 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

drop table if exists ss02.msgstr;

create table ss02.msgstr (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lang varchar(2) NOT NULL,
    typekey varchar(12) NOT NULL,
    msg varchar(254) NOT NULL
    ) engine=aria;

# хлебные крошки 

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_MAIN', 'Main page');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_MAIN', 'Главная страница');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_MAIN', 'The typical pattern of the main page.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_MAIN', 'Типовой шаблон главной страницы');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_USER', 'User');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_USER', 'Пользователи');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_USER_C', 'Create User');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_USER_C', 'Создать пользователя');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_USER_R', 'Users List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_USER_R', 'Просмотр списка пользователей');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_USER_U', 'Update profile');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_USER_U', 'Изменить профиль');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_USER_D', 'Delete User');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_USER_D', 'Удалить пользователя');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_COMP', 'Companies');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_COMP', 'Компании');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_COMP_C', 'Create new company');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_COMP_C', 'Создать новую компанию');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_COMP_R', 'Companies List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_COMP_R', 'Просмотр списка компаний');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_COMP_U', 'Update company');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_COMP_U', 'Изменить компанию');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_COMP_D', 'Delete company');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_COMP_D', 'Удалить компанию');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_PART', 'Offices');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_PART', 'Офисы');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PART_C', 'Create new office');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PART_C', 'Создать новый офис');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PART_R', 'Offices List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PART_R', 'Просмотр списка офисов');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PART_U', 'Update office');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PART_U', 'Изменить офис');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PART_D', 'Delete office');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PART_D', 'Удалить офис');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_GRP', 'Groups');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_GRP', 'Группы');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_GRP_C', 'Create new group');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_GRP_C', 'Создать новую группу');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_GRP_R', 'Groups List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_GRP_R', 'Просмотр списка групп');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_GRP_U', 'Update group');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_GRP_U', 'Изменить группу');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_GRP_D', 'Delete group');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_GRP_D', 'Удалить группу');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_PERM', 'Permissions');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_PERM', 'Разрешения');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PERM_C', 'Create new permission');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PERM_C', 'Создать новое разрешение');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PERM_R', 'Permissions List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PERM_R', 'Просмотр списка разрешений');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PERM_U', 'Update permission');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PERM_U', 'Изменить разрешение');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_PERM_D', 'Delete permission');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_PERM_D', 'Удалить разрешение');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_RULE', 'Rules');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_RULE', 'Правила');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_RULE_C', 'Create new rule');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_RULE_C', 'Создать новое правило');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_RULE_R', 'Rules List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_RULE_R', 'Просмотр списка правил');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_RULE_U', 'Update rule');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_RULE_U', 'Изменить правило');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_RULE_D', 'Delete rule');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_RULE_D', 'Удалить правило');

insert into ss02.msgstr (lang,typekey,msg) values ('en','bread0_REL', 'Relations');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread0_REL', 'Отношения');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_REL_C', 'Create new relation');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_REL_C', 'Создать новое отношение');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_REL_R', 'Relations List View');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_REL_R', 'Просмотр списка отношений');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_REL_U', 'Update relation');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_REL_U', 'Изменить отношение');
insert into ss02.msgstr (lang,typekey,msg) values ('en','bread1_REL_D', 'Delete relation');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','bread1_REL_D', 'Удалить отношение');

# основная информация о компании

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COINH', 'Budget');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COINH', 'Бюджет');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COIN1', 'Cash');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COIN1', 'Наличных');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COIN2', 'Borrowed');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COIN2', 'Заёмных');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COIN3', 'Shared');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COIN3', 'Акционных');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COIN4', 'Demo');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COIN4', 'Демо');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_COINF', 'All money');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_COINF', 'Всего денег');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_DSUF', 'Suffix');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_DSUF', 'Cуффикс');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_ABBR', 'Abbreviation');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_ABBR', 'Сокращённо');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_OWN', 'Owner');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_OWN', 'Владелец');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_CREA', 'Created');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_CREA', 'Создана');

insert into ss02.msgstr (lang,typekey,msg) values ('en','comp_FORM', 'm.d.Y');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','comp_FORM', 'd.m.Y');

# типовые окна

insert into ss02.msgstr (lang,typekey,msg) values ('en','win_TIPH', 'Tip!');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','win_TIPH', 'Совет!');

insert into ss02.msgstr (lang,typekey,msg) values ('en','win_TIPI', 'Default tip here.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','win_TIPI', 'Здесь совет по умолчанию.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','win_TITL', 'Title');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','win_TITL', 'Заголовок');

insert into ss02.msgstr (lang,typekey,msg) values ('en','win_TAPP', 'Start creating your amazing application!');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','win_TAPP', 'Начните создавать ваши удивительные приложения!');

insert into ss02.msgstr (lang,typekey,msg) values ('en','win_FOOT', 'Footer');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','win_FOOT', 'Подвал');

# меню

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_REG', 'Register');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_REG', 'Регистрация');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_LGN', 'Login');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_LGN', 'Вход');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_REM', 'Remind');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_REM', 'Напомнить');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_LGT', 'Logout');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_LGT', 'Выход');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_MAIN', 'MAIN NAVIGATION');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_MAIN', 'ОСНОВНАЯ НАВИГАЦИЯ');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_PROF', 'Profile');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_PROF', 'Профиль');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_COMP', 'Companies');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_COMP', 'Компании');

insert into ss02.msgstr (lang,typekey,msg) values ('en','menu_COIN', 'Finance');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','menu_COIN', 'Финансы');

# сообщения

insert into ss02.msgstr (lang,typekey,msg) values ('en','mail_INFO', 'Get messages: ');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','mail_INFO', 'Получено сообщений:');

insert into ss02.msgstr (lang,typekey,msg) values ('en','mail_SHOW', 'See all messages');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','mail_SHOW', 'Просмотреть все сообщения');

# insert into ss02.msgstr (lang,typekey,msg) values ('en','mail_', '');
# insert into ss02.msgstr (lang,typekey,msg) values ('ru','mail_', '');

# insert into ss02.msgstr (lang,typekey,msg) values ('en','mail_', '');
# insert into ss02.msgstr (lang,typekey,msg) values ('ru','mail_', '');

# типы пользователей

insert into ss02.msgstr (lang,typekey,msg) values ('en','user_NONE', 'Unknown user');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','user_NONE', 'Неизвестный пользователь');

insert into ss02.msgstr (lang,typekey,msg) values ('en','user_UREG', 'Unregistered user');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','user_UREG', 'Незарегистрированный пользователь');

insert into ss02.msgstr (lang,typekey,msg) values ('en','user_TEST', 'Test user');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','user_TEST', 'Тестовый пользователь');

insert into ss02.msgstr (lang,typekey,msg) values ('en','user_SUPP', 'Support Team');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','user_SUPP', 'Команда Поддержки');

insert into ss02.msgstr (lang,typekey,msg) values ('en','user_UMSG', 'This user is not yet registered.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','user_UMSG', 'Этот пользователь ещё не зарегистрирован.');

# строки формы входа

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_FORM', 'Login to start your session.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_FORM', 'Войдите чтобы открыть Ваш сеанс.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_REME', 'Remember Me.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_REME', 'Запомнить меня.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_REMI', 'Enter the email address for password recovery');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_REMI', 'Укажите почту для восстановления пароля');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_CONG', 'Congratilations! Success registration.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_CONG', 'Поздравляем! Вы успешно зарегистрировались.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_CHK1', 'You can login after check Your e-mail.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_CHK1', 'После проверки адреса почты Вы сможете войти на сайт.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_SUCC', 'After a few seconds You will be redirect to login form.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_SUCC', 'Через несколько секунд Вы будете перенаправлены на форму входа.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_FAIL', 'Registration error. This address is used already.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_FAIL', 'Ошибка регистрации. Этот адрес уже используется.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_FNOW', 'Forward now');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_FNOW', 'Перейти сейчас');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_FORG', 'I forgot my password.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_FORG', 'Я забыл свой пароль.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_NREG', 'Register a new membership.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_NREG', 'Регистрация нового участника.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_AREG', 'I already have a membership.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_AREG', 'Я уже зарегистрирован.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_CASE', 'I agree to the ');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_CASE', 'Я принимаю ');

insert into ss02.msgstr (lang,typekey,msg) values ('en','login_TERM', 'terms');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','login_TERM', 'Условия');

# плейсхолдеры (записи полей)

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_MAIL', 'Enter your e-mail');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_MAIL', 'Введите Ваш адрес электронной почты');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_PASS', 'Enter your password');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_PASS', 'Введите Ваш пароль');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_PASA', 'Enter your password again');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_PASA', 'Введите Ваш пароль снова');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_NAME', 'Enter your full name');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_NAME', 'Введите Ваше полное имя');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_N1', 'Enter your name');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_N1', 'Введите Ваше имя');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_N2', 'Enter your surname');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_N2', 'Введите Вашу фамилию');

insert into ss02.msgstr (lang,typekey,msg) values ('en','placeh_SRCH', 'Search');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','placeh_SRCH', 'Искать');

# названия форм

insert into ss02.msgstr (lang,typekey,msg) values ('en','form_LGN', 'Login Form');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_LGN', 'Форма входа');

insert into ss02.msgstr (lang,typekey,msg) values ('en','form_REG', 'Registration Form');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_REG', 'Форма регистрации');

insert into ss02.msgstr (lang,typekey,msg) values ('en','form_SUC', 'Success registration');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_SUC', 'Успешная регистрация');

insert into ss02.msgstr (lang,typekey,msg) values ('en','form_FAIL', 'Registration failed');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_FAIL', 'Ошибка регистрации');

insert into ss02.msgstr (lang,typekey,msg) values ('en','form_REM', 'Password Remind');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_REM', 'Напомнить пароль');

# insert into ss02.msgstr (lang,typekey,msg) values ('en','form_', '');
# insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_', '');

# insert into ss02.msgstr (lang,typekey,msg) values ('en','form_', '');
# insert into ss02.msgstr (lang,typekey,msg) values ('ru','form_', '');

# записи о паролях

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_NONE', '<font color=gray>Password is null</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_NONE', '<font color=gray>Пароль не указан</font>');

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_UNEQ', '<font color=red>Passwords do not match</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_UNEQ', '<font color=red>Пароли не совпадают</font>');

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_EQ', '<font color=green>Passwords match</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_EQ', '<font color=green>Пароли совпадают</font>');

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_x1', '<font color=red>Easy password</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_x1', '<font color=red>Лёгкий пароль</font>');

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_x2', '<font color=yellow>Tolerable password</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_x2', '<font color=yellow>Сносный пароль</font>');

insert into ss02.msgstr (lang,typekey,msg) values ('en','pass_x3', '<font color=green>Secure password</font>');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','pass_x3', '<font color=green>Стойкий пароль</font>');

# записи об ошибках

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_t404', 'Page not found.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_t404', 'Страница не найдена.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_t500', 'Internal server error.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_t500', 'Внутренняя ошибка сервера.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_c404', 'This page have been moved or deleted. Meanwhile, you may ');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_c404', 'Эта страница могла быть перемещена или удалена. Вы можете ');
insert into ss02.msgstr (lang,typekey,msg) values ('en','error_c4041', 'return to dashboard');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_c4041', 'вернуться на Главную');
insert into ss02.msgstr (lang,typekey,msg) values ('en','error_c4042', ' or try using the search form.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_c4042', ' или воспользоваться формой поиска.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_c500', 'We will work on fixing that right away. Meanwhile, you may ');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_c500', 'Мы будем работать, чтобы исправить это. Вы можете ');

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_f404', 'Oops! Page not found.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_f404', 'Упс! Страница не найдена.');

insert into ss02.msgstr (lang,typekey,msg) values ('en','error_f500', 'Oops! Something went wrong.');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','error_f500', 'Упс! Что-то пошло не так.');

# группы пользователей

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_root', 'Administrator');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_root', 'Администратор');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_supp', 'Team Support');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_supp', 'Команда Поддержки');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_boss', 'Company Client Chief');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_boss', 'Руководитель компании-клиента');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_clnt', 'Company Client Member');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_clnt', 'Сотрудник компании-клиента');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_free', 'Free Lancer');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_free', 'Вольный Копейщик');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_team', 'Free Lancer Team');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_team', 'Команда фрилансеров');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_outs', 'Outsourcing Company');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_outs', 'Компания Аутсорсинга');

insert into ss02.msgstr (lang,typekey,msg) values ('en','grp_user', 'User');
insert into ss02.msgstr (lang,typekey,msg) values ('ru','grp_user', 'Пользователь');

drop table if exists ss02.groups;
create table ss02.groups (
    gid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idtype varchar(12) NOT NULL
	) engine=aria;

insert into ss02.groups(idtype) values ('grp_root'); #1
insert into ss02.groups(idtype) values ('grp_supp'); #2
insert into ss02.groups(idtype) values ('grp_boss'); #3
insert into ss02.groups(idtype) values ('grp_clnt'); #4
insert into ss02.groups(idtype) values ('grp_free'); #5
insert into ss02.groups(idtype) values ('grp_team'); #6
insert into ss02.groups(idtype) values ('grp_outs'); #7
insert into ss02.groups(idtype) values ('grp_user'); #8

drop table if exists ss02.users;
create table ss02.users (
    uid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gid int(11) default 8,
    enabled tinyint DEFAULT 0,
    status tinyint DEFAULT 0,
    fullname varchar(48) NOT NULL,
    surname varchar(24),
    name varchar(24),
    email varchar(48),
    passwd varchar(32),
    craft varchar(32),
    speciality varchar(32),
    about varchar(128),
    
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;
	
insert into ss02.users (enabled, status, fullname, surname, name, email, passwd) values (1, 1, 'Сахаров Сергей', 'Сахаров', 'Сергей', 'sahacker@mail.ru', 'Qwe123');
insert into ss02.users (enabled, status, fullname, surname, name, email, passwd) values (1, 8, 'Тестовый пользователь', 'Сахаров', 'Сергей', 'sahacker@yandex.ru', 'Qwe123');

drop table if exists ss02.companies;
create table ss02.companies (
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

insert into ss02.companies (owner, name, dsuffix, abbr) values (1, 'ООО "Рога и копыта"', 'demo.ss.loc', 'Demo Ltd.');

drop table if exists ss02.relations;
create table ss02.relations (cid int(11), uid int(11), gid int(11)) engine=aria;

insert into ss02.relations (cid, uid, gid) values (1,1,1);
insert into ss02.relations (cid, uid, gid) values (1,2,8);

drop table if exists ss02.branches;
create table ss02.branches (
    bid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) engine=aria;


drop table if exists ss02.msgtxt;

create table ss02.msgtxt (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lang varchar(2) NOT NULL,
    typekey varchar(12) NOT NULL,
    msg TEXT NOT NULL
    ) engine=aria;
