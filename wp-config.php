<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'kemalcakiroglu_db' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xH#QP}&P,>tlBa__=Zs{7ay,8jtM>Atq2LO~HI-g^y(era?3@D}M_Bj*Qv40@LI$' );
define( 'SECURE_AUTH_KEY',  '-&wD{,3?z!l1% NwzxP9o}&D!pW/2Ty#kmS%k)zxcE==a_Weh_m^vjK[8_-f0h{0' );
define( 'LOGGED_IN_KEY',    '> Rpl{(!TLn|yb9B&`.*K1s.A_,BddIeE.2u?/^=i!p&@sb|Vm.56U?0@rud^%h-' );
define( 'NONCE_KEY',        'xi2.G&.r|}=^ qOQwv`Egp+v+)w?Q!}w`G{!a;`Rmzo-5p#??Eta]7e)h.x~B|A3' );
define( 'AUTH_SALT',        'FocQN`B{WD5Atj tg8o|T#M^gdVz[o+/pn0DQTVmTEb:M`iqB a86<pgxKK7Qcii' );
define( 'SECURE_AUTH_SALT', 'O$x,LBCSrMV7E%04&3DQHN,<SXn@dQ6e{a0]*~@drTf1T95Jj,ue|/irOMh<_pC ' );
define( 'LOGGED_IN_SALT',   '8t@vkc63.&_yZ.hj%#f|-P`14Bl@4Tplv)ak``#(tO;}ASoQgDZYnUb+>ntXJtMw' );
define( 'NONCE_SALT',       'U%7G{uX3~3iu<,tb~_c7$iw&1<+oi6Ni.$lmYQd%&+FXsKtX2;JH/x?Z(F+YI^y<' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';