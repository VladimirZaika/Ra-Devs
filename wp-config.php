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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'radevs' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eO%BA.Bu*+Z(:9e?_lii k-9(a4Mw-N>5y_9+9;iUG720Y.|[J!81{q%tsmeI/61' );
define( 'SECURE_AUTH_KEY',  'LV2a.4c-zyB4O9eG3l$Yxm*,tR1&^1QqqEo1kjG>K,j;[~u]y^De7ywrW?P8=Cnh' );
define( 'LOGGED_IN_KEY',    'nK,4ArXmv<=lo[>aso17^9%O19YApY2h-t;Y#RyhD@G0zNs8aR@ncL*Zgp.HS(AP' );
define( 'NONCE_KEY',        '4lp.QYEe4[#,#]URGjSS%[0VxraS^`/Oa@OgyUXHeV5=(G!^*i{nSa~D6_F0RsN=' );
define( 'AUTH_SALT',        'lZ6&tKE84!Y4eBhVI,#>0%oo1)jWV;81CX, .gM,YSWik9^^uorE&(C]L!;n~V@k' );
define( 'SECURE_AUTH_SALT', '*KaxHR%q.g-Dcs:{g2%:?{?+ KC]3O|4Z){9j---J40T21P{=YwoMD~<G>b9^-[k' );
define( 'LOGGED_IN_SALT',   'Pn2.%{B-zqvF^&bVp-!icn8!/d>^+do<;4p_3g3)T,6jZf7fC%[ 4>9Fk[WC y,J' );
define( 'NONCE_SALT',       't-Of]8|6)#S[ES8va(0r;^RqnG?SlLR+.%p1,%hcmn2LfEJJAOH&Ugp`iJ|1./Hb' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
