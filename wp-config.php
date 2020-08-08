<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+6v(#*rK)1h*$j8JhWLPiYN+Jp6[L^Ovf&q5ln_@LTB3%yXO~B*Q@9PQz8;,K)NP' );
define( 'SECURE_AUTH_KEY',  'P^CNI*Rx3/$Ix}83!~6:gFg]B`EAL*$UiskZ._+jJc#=m=vM_]j!/-XI|,/r<]ZJ' );
define( 'LOGGED_IN_KEY',    'i[1>|WAA5qUx*v& yoRWo5$~,/weJ1OZ0EWc]p/rZ`hSWeY#r[`)`]c9$5Ni#k|M' );
define( 'NONCE_KEY',        ' rA%9p)))$L;DwnOoi#(p/g>8+8j%Dc;8bdUHmhJ6X7T7;JM;!*ey6*@rY=ov|}&' );
define( 'AUTH_SALT',        'Y/~N*ARr~QGO?<0:NBK0pn%7=AMN{E2~:aj-w+s=M]+nr:6gu-f$VX(n`[(}M}G_' );
define( 'SECURE_AUTH_SALT', 'uC8WJ`gEPRsb~#s!Gmd#,<NGKC8hW;.wwvB`F$^6$CpQIO*f|Osp2S0fAMj]=LjA' );
define( 'LOGGED_IN_SALT',   'IN?9]9r~?H1ri HcW^+<wG5b}K-hLA<T!WL#KLMCXesN-+?H$a/q1$rRn.OPM_JS' );
define( 'NONCE_SALT',       '_K#`*Qu 9*NTMG5HS~{m&Y5M5L-PSY`n^)KcAK i=JRI8!)#DdT7sQePUGJ{o>zn' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
