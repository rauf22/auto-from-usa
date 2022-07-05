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
define( 'DB_NAME', 'rauf_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'auto' );

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
define( 'AUTH_KEY',         'B3X9KR.xtP*0H0xdx#-!- 7`10LeX,fVeV3-Tswv7~VvqvgUYa|}=:=4A*r~CpzK' );
define( 'SECURE_AUTH_KEY',  ';FNN!6JvJoYZXNL{t,mr4jX8aXqNx^S+VcO45Fxzauel`c0s,Hz|{a[VcO{ 8szl' );
define( 'LOGGED_IN_KEY',    ')fv]F~>+-%N#bbP,][k_3[-.wBa^N?wi6YJTbGU/Ff!0UVd}n+tA #m28aw1[5k2' );
define( 'NONCE_KEY',        '6!=R /tQ9^4zOm8;8%3H$y{|W;9AS>.oA7FxPke~s]~_-z/)V;^N/=ZT?XM4q!=f' );
define( 'AUTH_SALT',        '`0|dZnj45n.H;[fy_92e0hP5/FDaf-N)NA]E(^*;N.R=4)[btf*Xc4Ln=1U5J9B-' );
define( 'SECURE_AUTH_SALT', '}%!$WmJ{XQ{g+Fc#kl%H^[Om`H-H>dCp`t*Tc)(e.xSdYjy WwVG}z@r7li!vcda' );
define( 'LOGGED_IN_SALT',   '>-*=ca.3mMo&m-{EBdhJQKcN<0hxiU[Zci9.Q}#|;nT5c@uA78,;7b?mW3]-L=Gr' );
define( 'NONCE_SALT',       'wfC~)Mw%gJ<7euw:AzBgrs0JCsMe3RH#8%qAC/@r31.m#K&DS&=7+.APOzL!*:z ' );

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
