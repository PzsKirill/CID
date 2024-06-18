<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cdi' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')l0_)LU-{!%wk1[0C,qt/8#i^}27-,%&>,.AX&b1*=fnfZ9:*vQ(@7N;neftZ2c5' );
define( 'SECURE_AUTH_KEY',  ' GupSjM^Rxjd6 |Psm$:dZ,9F_6oB~.YdF!S[P8A?9_&jS6wc#IdRmYvSI|- -]W' );
define( 'LOGGED_IN_KEY',    'wLn9X!}U-koc^;CnqnU$7Tq&cSVbM+:v=}#fpl|*vhfr*~NAR!hb6Utd|_w noaN' );
define( 'NONCE_KEY',        'Gv.]rH9{{HD8?xe|r4Cmg]nH6/GFmj)1}u%@K4C7V_(e_h)p&LqM;bwakE}5-Yr^' );
define( 'AUTH_SALT',        'm4 S+o>{^(rg.U;rwN8M ={{AlR-.lBq5N}3-zS?HURun^JAOpMf]?nTQUtx$,Gb' );
define( 'SECURE_AUTH_SALT', 'IM>VWeO_>4YGBBHyDi19F<eE_Iq!9pM|kP6QJ,&f!B*(k.IeE,m{/9ZD-NnW@!(e' );
define( 'LOGGED_IN_SALT',   'yC/!|:zYu2q/zu!tK|vF.9Z>wv9gUe>B56t4W(-;J?2Qp,>gHQ3%7UhFRBNwR9:,' );
define( 'NONCE_SALT',       '/(%QTQ1*u>9%05Q^0cW$YZ<sbJC#_n|mA]c1^K*EqE,9w[}4]^Y6z!L{r}<t*Naa' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
