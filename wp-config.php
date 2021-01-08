<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'test101' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LQC@K$](`:uC[Z&nE7%lMbq{eL.|kSesS7=*4/0P<XNqOIn}:Wptnn;fd1jdh1w{' );
define( 'SECURE_AUTH_KEY',  '(YIBq DM9M?hDlj?IkYHojx[1ghjY.j&g~is^>T}t=w_v1rOKe[,d1-ocCCyYeBF' );
define( 'LOGGED_IN_KEY',    '<R2[xqCqkl72._!tRItT~y`dz:5$Xq{|P~dnN#q?MSZ}hMs;+^]fVXaVy}o GR 5' );
define( 'NONCE_KEY',        'ld[[Fa,Q!}qYTSdKPyp6&5tOX8T`k>yt8I=>L[*%4,eLd*Q_z&{X,^R2Zr%7E&7Y' );
define( 'AUTH_SALT',        '<~Q3~8>SbI}[$Jk>hy7-XU_J,Qu*XAbf-&&vvCentE%BP)xW(lPAsc6`<b?z!p}i' );
define( 'SECURE_AUTH_SALT', 'EaqT^$p`x<lbZH4PzA[T!m}{hqg~{OOvKrK[{3>N:Uu-ga{u :__o1t<[O>9LF02' );
define( 'LOGGED_IN_SALT',   'V@*(KD_N>`3|WS%#A{XP1EY|D$lB4??p#;W2(;_}6d[{!>:Q~^y=&0`+)qb=`%>3' );
define( 'NONCE_SALT',       '{4Y^!;# zWYS]yQuk~dt+g_rbNn0z0/8dpBWd>$5dV!ulitcl`t=Ncg(m4]MW+mj' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
