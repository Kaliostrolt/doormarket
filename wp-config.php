<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'doormarket');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '111');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x^+G[)lIkkB[<$fOJOHawE-kZ6vc|)A`-^J|`jU,HupIz^51/ex@|:2k,roT%mSv');
define('SECURE_AUTH_KEY',  '|$[6`H4vHNj^2E4?ktJTRO*L_pjKqjs&oPGVACdR=1 PrA0>9HI`4W|S>7Xr?^>)');
define('LOGGED_IN_KEY',    'vi;ncVfs-%^/MSnZ^Sv[_NR}<~/ |sC{6W7ixv?9q:D+ypJJG[j<A#^O[TS`6f5N');
define('NONCE_KEY',        '50bHrS#]shuhU^Y6#j6S>MIt{zL!IjI8kF F^fL3~;&;wBe;[C1875>iBm8dHDx:');
define('AUTH_SALT',        'Xt)@LidRqna({}a]L<t~$%&v[ rVEqNWL[>IfRy+;$j 8-C56b@22S>!|b|fJJ/k');
define('SECURE_AUTH_SALT', 'mI6^DM *6Hw@|;f^&X_L?fRy~^Rlq&:5vz}MjE+ipIVEHNInEF@rVI`Dj_D]90w1');
define('LOGGED_IN_SALT',   '8_PO?F4<x<#mPR*3>hT80*2Y-];72v`thzc/xkY&t%+)HjtfV[w|3#;/7LjTW(<u');
define('NONCE_SALT',       '-+|prZ$mu0#rR~%z($-sUn**w[HtgJ?fa7`|f>1.8c`?Z?[Zd-Z7?|[sq1f]+i/*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
