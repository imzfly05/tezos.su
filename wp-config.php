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
define('DB_NAME', 'tezos_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/vx>61Mx_W.U e^FqX,T|VOafvttts7JIW-G(k?!{E#]i^A|C}rVQ&In,*6Z%<DZ');
define('SECURE_AUTH_KEY',  'zzc!G,b>oa@u?Aj<H^cvuWZI]hBmj`4af3B3yNueKE`JDw89?6.]85:ItkO[Y{3{');
define('LOGGED_IN_KEY',    'v$3y2B^$[mT2`ERDj,vYSd?0@#K*&S6RiDW97-PxT$_b!K0>(><jqlZu[36<n)_2');
define('NONCE_KEY',        'qP.lc9P?F&aE@i~Nz+8`DB:ArqIj^Dysw0}rVDNvXM@Tg]~]#`?$dtpp2M.<3.XQ');
define('AUTH_SALT',        'aR%BpPZ:x3$i%xg`=%Z.FVxAvnuw7 /Eru|^N0X(L`cfWww@%T)joH*}76p8)6G:');
define('SECURE_AUTH_SALT', 'p8uC%gR_6UVI3P){I=#Qh{NCJWt)*vqw)d]g.>Pp!#J7w~AgVg9jGs3(+kM V9B=');
define('LOGGED_IN_SALT',   'RY{D$0vFk*q37(kI@{?5/N BE-WAD-C-7WiwQZ3Ufkt@M9Q}8PalH-qgL5rbFd/,');
define('NONCE_SALT',       'fm*$0c!UZhx8DHP IP#fX>;@P HCi5uUJS&FP3=}1#hyn~04h@T ~XU7JEmcS*81');

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
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
