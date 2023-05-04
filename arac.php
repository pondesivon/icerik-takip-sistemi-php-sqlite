 <?php
  class Arac {
    public static function KlasordekiDosyalariDiziyeAktar($klasor) {
      $dosyalar = array_diff(scandir($klasor), array('.', '..'));

      return $dosyalar;
    }

    public static function DosyaOlusturVeIcerikKaydet($yol, $metin) {
      $doc = fopen($yol, "w");
      file_put_contents($yol, $metin);
      fclose($doc);
    }

    public static function GunlukDosyasiOlustur($baslik, $metin){
      $yeniDosya = realpath(".") . "\\yonetim\\gunluk\\" . date("Y-m-d--H-i-s") . "--" . $baslik . ".txt";
      Arac::DosyaOlusturVeIcerikKaydet($yeniDosya, $metin);
    }

    public static function YeniSatirKarakterleriniPEtiketiIleSar($metin) {
      $metin = trim($metin);
      return '<p>' . preg_replace('/[\r\n]+/', '</p><p>', $metin) . '</p>';
      //https://eloux.com/2014/04/15/a-better-alternative-to-php-nl2br/
    }

    //BaglantiMetniOlustur
    function BaglantiMetniOlustur($string) {
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
        $string = strtolower(str_replace($find, $replace, $string));
        $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = str_replace(' ', '-', $string);

        //Bu satırı düzenleme yaptıktan 
        //sonra " - " metnini "---" olarak 
        //dönüştürüldüğü için ekledik.
        $string = str_replace('---', '-', $string);
        return $string;
    }

    //Türkçe karakterleri de dikkate alarak büyük
    //küçük harf dönüşümü yapan metot.
    public static function case_converter( $keyword, $transform='lowercase' ){

      $low = array('a','b','c','ç','d','e','f','g','ğ','h','ı','i','j','k','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z','q','w','x');
      $upp = array('A','B','C','Ç','D','E','F','G','Ğ','H','I','İ','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z','Q','W','X');

      if( $transform=='uppercase' OR $transform=='u' )
      {
        $keyword = str_replace( $low, $upp, $keyword );
        $keyword = function_exists( 'mb_strtoupper' ) ? mb_strtoupper( $keyword ) : $keyword;

      }elseif( $transform=='lowercase' OR $transform=='l' ) {
        
        $keyword = str_replace( $upp, $low, $keyword );
        $keyword = function_exists( 'mb_strtolower' ) ? mb_strtolower( $keyword ) : $keyword;

      }

      return $keyword;
      //https://gist.github.com/halillusion/8d9f1c66f06e790549435b3a2c2051f3
    }

    function TurkceTarih($date){
        $aylar = array(
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
            'Sunday' => 'Pazar',
            'Jan' => 'Oca',
            'Feb' => 'Şub',
            'Mar' => 'Mar',
            'Apr' => 'Nis',
            'May' => 'May',
            'Jun' => 'Haz',
            'Jul' => 'Tem',
            'Aug' => 'Ağu',
            'Sep' => 'Eyl',
            'Oct' => 'Eki',
            'Nov' => 'Kas',
            'Dec' => 'Ara'
        );

        return  strtr($date, $aylar);
        //https://stackoverflow.com/a/60576898
    }    
  }