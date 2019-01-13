-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: carrental2
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_cars`
--

DROP TABLE IF EXISTS `admin_cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_cars` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin5 DEFAULT NULL,
  `keywords` varchar(150) CHARACTER SET latin5 DEFAULT NULL,
  `description` varchar(150) CHARACTER SET latin5 DEFAULT NULL,
  `type` varchar(150) CHARACTER SET latin5 DEFAULT NULL,
  `publisher_id` int(10) DEFAULT NULL,
  `year` int(20) DEFAULT NULL,
  `amount` int(15) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `saleprice` float DEFAULT NULL,
  `detail` longtext CHARACTER SET latin5,
  `writer_id` int(10) DEFAULT NULL,
  `category_id` int(20) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_cars`
--

LOCK TABLES `admin_cars` WRITE;
/*!40000 ALTER TABLE `admin_cars` DISABLE KEYS */;
INSERT INTO `admin_cars` VALUES (3,'AMG11','fffgh2121111','asdf1','0546857252',NULL,NULL,NULL,12,1231,'<p>&nbsp;</p>',NULL,6,NULL,'True','f77cbe7464d34016de33aa2f4f8c68f3.jpeg'),(4,'5.20','fff','af','True',NULL,NULL,NULL,33,222,'<p>&nbsp;</p>',NULL,15,NULL,'True','7dae9a12a685065b7d7002dcce778f65.jpeg'),(7,'E250 CDI','dsf','af','0546857252',NULL,NULL,NULL,4421,6,'<p>&nbsp;</p>',NULL,6,NULL,'True','b1ea2e7c8a29871ac682fa0aeb304e9c.jpeg'),(10,'S603','afd','af','True',NULL,NULL,NULL,60,222,'<p>&nbsp;</p>',NULL,19,NULL,'True','096e5dc94f8f201550dbc7d1086746ef.jpeg'),(11,'s40','dsf','af','att',NULL,NULL,NULL,4421,222,'<p>&nbsp;</p>',NULL,19,NULL,'True','6c1efe8171be73e0fc2f777f29e4123e.jpeg'),(12,'adf','afd','af','att',NULL,NULL,NULL,4421,222,'<p>fgh</p>',NULL,2,NULL,'True','c1ad4d2ddc6758c88db84901c8ee888c.jpeg'),(30,'AMG','fffgh','asdf','att',NULL,NULL,NULL,60,6,'<p>&nbsp;</p>',NULL,2,NULL,NULL,'858e6d3139c234d99e84ad4199d0a9c8.jpeg'),(68,'asd4','dsf','asdf','0546857252',NULL,NULL,NULL,4421,222,'<p>sfg</p>',NULL,2,NULL,NULL,'3b3013e5e29e6a3f62890e8a5d469827.jpeg'),(73,'AMG','1','asdf','False',NULL,NULL,NULL,33,222,'<p>&nbsp;</p>',NULL,2,NULL,'True','237154f31cd69f2f55669184640214ac.jpeg'),(76,'asd','afd','asdf','True',NULL,NULL,NULL,4421,2222,'<p>&nbsp;</p>',NULL,2,32,NULL,'5f2555aa07519143a63759764fa8c6e7.jpeg'),(77,'adf','afd','asdf','0546857252',NULL,NULL,NULL,63,123,'<p>&nbsp;</p>',NULL,2,32,'True','1c7f97c49b0fbff59af9c2f5ad8468cb.jpeg'),(78,'BMW 7.3','BMW','Dizel','0546857252',NULL,NULL,NULL,60000,34000,'<figure class=\"table\"><table><tbody><tr><td>Seat Upholstery</td><td>Leather&nbsp;</td></tr><tr><td>Front Tyres</td><td>245 / 45 R19 <a href=\"https://www.carwale.com/tyres/bmw-7-series-tyres/?cmids=994&amp;year=2018&amp;versionid=4573\">View all tyres</a></td></tr><tr><td>Rear Tyres</td><td>275 / 40 R19</td></tr></tbody></table></figure>',NULL,15,32,'True','dd5ec53fddc52d5cb6858e443afa1f4c.jpeg'),(79,'AMG','afd','asdf','True',NULL,NULL,NULL,4421,222,'<p>&nbsp;</p>',NULL,2,2,'True',NULL),(80,'AMG','fffgh','asdf','att',NULL,NULL,NULL,123,6,'<p>&nbsp;</p>',NULL,2,2,'True',NULL),(81,'Fiorino','fffgh','asdf','True',NULL,NULL,NULL,4421,222,'<p>wqd</p>',NULL,2,32,'True',NULL),(82,'Fiesta 1.5 TDCI','afd','asdf','Kisa Arac',NULL,NULL,NULL,63,123,'<p>Specifications</p><p>Transmission</p><p>Manual</p><p>Body Type</p><p>Sedan</p><p>Kilometres</p><p>-</p><p>Trim</p><p>S</p><p>Safety Rating</p><p>N/A</p><p>View All Specifications</p><p>Highlights</p><p>4-Cylinder engine</p><p>Power doors</p>',NULL,33,2,'True','fd8e45d435fce14d9e47d47d8412caf0.jpeg'),(83,'AMG','fffgh1','asdf','0546857252',NULL,NULL,NULL,4421,222,'<p>I</p>',NULL,2,2,'True','0bbcd4a1d18d6b89cb83a9c568bfc2b9.jpeg'),(84,'İİİİ','İİİ','iii','İİİ',NULL,NULL,NULL,4421,222,'<figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/101008/m_2018-ford-fiesta-1-5-tdci-85-ps-titanium-9.jpg\" alt=\"2018 Ford Fiesta 1.5 TDCi 85 PS Titanium Araba\"></figure><p><strong>2018121.000,00 TL</strong></p><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/90766/m_2017-yeni-ford-fiesta-1-5-tdci-85-ps-titanium-9.jpg\" alt=\"2017 Yeni Ford Fiesta 1.5 TDCi 85 PS Titanium Araba\"></figure><p><a href=\"https://www.epey.com/araba/2017-yeni-ford-fiesta-1-5-tdci-85-ps-titanium.html\"><strong>2017Fiyat bulunamadı</strong></a></p><h2>2018 Ford Fiesta 1.5 TDCi 85 PS Titanium Özellikleri</h2><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/temel-bilgiler-42.png\"></figure><h3>TEMEL ÖZELLİKLER</h3><ul><li><strong>Model Yılı</strong><a href=\"https://www.epey.com/araba/model-yili/2018/\">2018</a></li><li><strong>Araç Türü</strong><a href=\"https://www.epey.com/araba/arac-turu/binek/\">Binek</a></li><li><strong>Segment</strong><a href=\"https://www.epey.com/araba/segment/b/\">B</a></li><li><strong>Gövde Tipi</strong><a href=\"https://www.epey.com/araba/govde-tipi/hatchback/\">Hatchback</a></li><li><strong>Motor Tipi</strong><a href=\"https://www.epey.com/araba/motor-tipi/benzin/\">İçten Yanmalı (Standart)</a></li><li><strong>Seri</strong><a href=\"https://www.epey.com/araba/seri/fiesta/\">Fiesta</a></li><li><strong>Donanım Paketi</strong><a href=\"https://www.epey.com/araba/donanim-paketi/titanium/\">Titanium</a></li><li><strong>Motorlu Taşıt Vergisi</strong>1553 tl/yıl</li><li><strong>Ait Olduğu Ülke</strong>Amerika</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/motor-49.png\"></figure><h3>MOTOR</h3><ul><li><strong>Yakıt Tipi</strong><a href=\"https://www.epey.com/araba/yakit-tipi/dizel/\">Dizel</a></li><li><strong>Silindir Hacmi</strong>1499 cc</li><li><strong>Silindir Adedi</strong><a href=\"https://www.epey.com/araba/silindir-adedi/4/\">4</a></li><li><strong>Yakıt Püskürtme</strong><a href=\"https://www.epey.com/araba/yakit-puskurtme/common-rail-direkt-enjeksiyon/\">Common Rail Direkt Enjeksiyon</a></li><li><strong>Besleme Tipi</strong><a href=\"https://www.epey.com/araba/besleme-tipi/turbo/\">Turbo</a></li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/performans-113.png\"></figure><h3>PERFORMANS</h3><ul><li><strong>Beygir Gücü (Toplam)</strong><a href=\"https://www.epey.com/araba/beygir-gucu-toplam/85-hp/\">85 hp</a></li><li><strong>Azami Tork</strong>215 nm</li><li><strong>Azami Devir</strong>3750 d/d</li><li><strong>Azami Hız</strong>175 km/s</li><li><strong>0-100 Km Hızlanma</strong>12.5 saniye</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/sanziman-cekis-sistemi-112.png\"></figure><h3>ŞANZIMAN &amp; ÇEKİŞ SİSTEMİ</h3><ul><li><strong>Şanzıman Türü</strong><a href=\"https://www.epey.com/araba/sanziman-turu/manuel/\">Manuel</a></li><li><strong>Şanzıman Kademesi</strong><a href=\"https://www.epey.com/araba/sanziman-kademesi/6-ileri/\">6 ileri</a></li><li><strong>Çekiş</strong><a href=\"https://www.epey.com/araba/cekis/onden-cekisli/\">Önden Çekişli</a></li><li><strong>Çekiş Kontrol Sistemi</strong><a href=\"https://www.epey.com/araba/cekis-kontrol-sistemi/var/\">Var</a></li><li><strong>Çekiş Kontrol Özellikleri</strong>TCS (Elektronik Çekiş Kontrol Sistemi)</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/yakit-tuketimi-gaz-salinimi-51.png\"></figure><h3>YAKIT TÜKETİMİ &amp; EMİSYON</h3><ul><li><strong>Yakıt Kapasitesi</strong>42 lt.</li><li><strong>Şehir İçi Tüketim (100 km)</strong>3.9 lt.</li><li><strong>Şehir Dışı Tüketim (100 km)</strong>3.2 lt.</li><li><strong>Karma Tüketim (100 km)</strong>3.5 lt.</li><li><strong>Karma CO2 Salınımı</strong>89 g/km</li><li><strong>Çevre Standardı (Emisyon)</strong>Euro 6</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/bagaj-ozellikleri-57.png\"></figure><h3>BAGAJ ÖZELLİKLERİ</h3><ul><li><strong>Bagaj Hacmi (5 Koltuk)</strong>292 lt.</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/agirlik--olculer-53.png\"></figure><h3>AĞIRLIK &amp; ÖLÇÜLER</h3><ul><li><strong>Uzunluk</strong>4040 mm</li><li><strong>Genişlik</strong>1735 mm</li><li><strong>Yükseklik</strong>1476 mm</li><li><strong>Boş Ağırlık</strong>1191 kg</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/lastik-jant-54.png\"></figure><h3>LASTİK &amp; JANT</h3><ul><li><strong>Taban Genişliği</strong>195 mm</li><li><strong>Kesit Oranı</strong>55 %</li><li><strong>Jant Çapı</strong>16 inç</li><li><strong>Lastik Ebatları</strong>195/55 R16</li><li><strong>Jant Tipi</strong><a href=\"https://www.epey.com/araba/jant-tipi/alasimli/\">Alaşımlı</a></li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/muzik--eglence-48.png\"></figure><h3>MÜZİK &amp; EĞLENCE</h3><ul><li><strong>Radyo</strong><a href=\"https://www.epey.com/araba/radyo/var/\">Var</a></li><li><strong>LCD Multimedya Ekran</strong><a href=\"https://www.epey.com/araba/lcd-multimedya-ekran/var/\">Var</a></li><li><strong>LCD Ekran Özellikleri</strong>8 İnç Dokunmatik Ekran</li><li><strong>Harici Giriş-Çıkış</strong>Var</li><li><strong>Harici Giriş-Çıkış Özellikleri</strong>USB Girişi</li><li><strong>Multimedya Diğer Özellikler</strong>Ford SYNC 3 (Sesli Komut &amp; Acil Yardım)Türkçe Sesli Kontrol Sistemi7 Adet Hoparlör</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/navigasyon-bluetooth-114.png\"></figure><h3>NAVİGASYON &amp; BLUETOOTH</h3><ul><li><strong>Bluetooth Telefon</strong><a href=\"https://www.epey.com/araba/bluetooth-telefon/var/\">Var</a></li><li><strong>Bluetooth Bağlantı Özellikleri</strong>Bluetooth Telefon Bağlantısı</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/koltuklar--ic-doseme-45.png\"></figure><h3>KOLTUKLAR &amp; İÇ DÖŞEME</h3><ul><li><strong>Koltuk Sayısı</strong><a href=\"https://www.epey.com/araba/koltuk-sayisi/5/\">5</a></li><li><strong>Koltuk Döşemesi Tipi</strong><a href=\"https://www.epey.com/araba/koltuk-dosemesi-tipi/kumas/\">Kumaş</a></li><li><strong>Sürücü Koltuğu Ayarları</strong><a href=\"https://www.epey.com/araba/surucu-koltugu-ayarlari/manuel-ayarlanabilir/\">Manuel</a></li><li><strong>Sürücü Koltuğu Özellikleri</strong>Koltuk Arkası CepBel Desteği Ayarı</li><li><strong>Ön Yolcu Koltuğu Ayarları</strong><a href=\"https://www.epey.com/araba/on-yolcu-koltugu-ayarlari/manuel-ayarlanabilir/\">Manuel</a></li><li><strong>Ön Yolcu Kolt.Özellikleri</strong>Koltuk Arkası Cep</li><li><strong>Kol Dayama</strong><a href=\"https://www.epey.com/araba/kol-dayama/var/\">Var</a></li><li><strong>Kol Dayama Özellikleri</strong>Ön Kol Dayama</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/camlar-aynalar-50.png\"></figure><h3>CAMLAR &amp; AYNALAR</h3><ul><li><strong>Ön &amp; Arka Cam Özellikleri</strong>Karartılmış Arka Cam</li><li><strong>Ön Yan Cam Ayarları</strong>Elektrikli</li><li><strong>Ön Yan Cam Özellikleri</strong>Tek Dokunuşla Açılıp Kapanma</li><li><strong>Arka Yan Cam Ayarları</strong>Elektrikli</li><li><strong>Arka Yan Cam Özellikleri</strong>Karartılmış Camlar</li><li><strong>Yan Dikiz Aynaları</strong><a href=\"https://www.epey.com/araba/yan-dikiz-aynalari/elektrikli/\">Elektrikli</a></li><li><strong>Yan Dikiz Ayna Özellikleri</strong>IsıtmalıElektrikli AyarlanırSinyalliGövde Rengi</li><li><strong>İç Dikiz Aynası</strong><a href=\"https://www.epey.com/araba/ic-dikiz-aynasi/otomatik-kararan-elektrokrom/\">Otomatik Kararan</a></li><li><strong>Panoramik Cam Tavan</strong>Yok</li><li><strong>Açılır Tavan</strong>Yok</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/isitma--sogutma-43.png\"></figure><h3>ISITMA &amp; SOĞUTMA</h3><ul><li><strong>Klima</strong><a href=\"https://www.epey.com/araba/klima/otomatik-klima/\">Otomatik Klima</a></li><li><strong>Isıtma &amp; Soğutma Özellikleri</strong>EATC (Elektronik İklim Kontrolü)</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/lambalar-aydinlatma-47.png\"></figure><h3>LAMBALAR &amp; AYDINLATMA</h3><ul><li><strong>Far Tipi</strong><a href=\"https://www.epey.com/araba/far-tipi/halojen/\">Halojen</a></li><li><strong>Far Özellikleri</strong>Far Yükseklik Ayarı</li><li><strong>Sis Farları</strong>Var</li><li><strong>Sis Farı Özellikleri</strong>Ön Sis Farları</li><li><strong>Diğer Aydınlatma Özellikleri</strong>Ani Frenlemede Otomatik Yanan FlaşörlerLED İç Ambiyans AydınlatmaLED Arka Stop LambalarıLED Gündüz Farları</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/direksiyon-ozellikleri-46.png\"></figure><h3>DİREKSİYON ÖZELLİKLERİ</h3><ul><li><strong>Direksiyon Sistemi</strong>Elektrik Destekli</li><li><strong>Direksiyon Özellikleri</strong>Müzik Sistemi Kumanda TuşlarıYükseklik &amp; Derinlik AyarıDeri Direksiyon Simidi</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/gostergeler-sensorler-115.png\"></figure><h3>GÖSTERGELER &amp; SENSÖRLER</h3><ul><li><strong>Park Sensörü &amp; Yardımı</strong>Yok</li><li><strong>Far Sensörü</strong><a href=\"https://www.epey.com/araba/far-sensoru/var/\">Var</a></li><li><strong>Yağmur Sensörü</strong><a href=\"https://www.epey.com/araba/yagmur-sensoru/var/\">Var</a></li><li><strong>Lastik Basınç Sensörü</strong><a href=\"https://www.epey.com/araba/lastik-basinc-sensoru/var/\">Var</a></li><li><strong>Lastik Basınç Özellikleri</strong>Lastik Basıncı Takip Sistemi</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/surus-destek-sistemleri-56.png\"></figure><h3>SÜRÜŞ DESTEK SİSTEMLERİ</h3><ul><li><strong>Dur &amp; Kalk (Stop &amp; Start)</strong><a href=\"https://www.epey.com/araba/dur-kalk-stop-start/var/\">Var</a></li><li><strong>Yokuş Kalkış Desteği</strong><a href=\"https://www.epey.com/araba/yokus-kalkis-destegi/var/\">Var</a></li><li><strong>Yokuş Kalkış Özellikleri</strong>HLA (Yokuş Kalkış Desteği)</li><li><strong>Denge Kontrol Sistemi</strong><a href=\"https://www.epey.com/araba/denge-kontrol-sistemi/var/\">Var</a></li><li><strong>Denge Kontrol Özellikleri</strong>ESP (Elektronik Denge Kontrolü)</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/yolcu-emniyeti-44.png\"></figure><h3>YOLCU EMNİYETİ</h3><ul><li><strong>Hava Yastığı</strong><a href=\"https://www.epey.com/araba/hava-yastigi/var/\">Var</a></li><li><strong>Hava Yastığı Adedi</strong><a href=\"https://www.epey.com/araba/hava-yastigi-adedi/2-adet/\">2 adet</a></li><li><strong>Hava Yastığı Çeşitleri</strong><a href=\"https://www.epey.com/araba/hava-yastigi-cesitleri/surucu-hava-yastigi/\">Sürücü Hava Yastığı</a><a href=\"https://www.epey.com/araba/hava-yastigi-cesitleri/on-yolcu-hava-yastigi/\">Ön Yolcu Hava Yastığı</a></li><li><strong>Anahtarsız Sistem</strong><a href=\"https://www.epey.com/araba/anahtarsiz-sistem/var/\">Var</a></li><li><strong>Anahtarsız Sistem Özellikleri</strong>Anahtarsız Çalıştırma</li><li><strong>Kumanda &amp; Kilit Sistemleri</strong>Uzaktan Kumandalı Merkezi KilitFord MyKey (Ayar Hafızalı Anahtar)</li><li><strong>Çarpışma Testi (NCAP/ANCAP)</strong><a href=\"https://www.epey.com/araba/carpisma-testi-ncap-ancap/var/\">Var</a></li><li><strong>NCAP/ANCAP Puanı</strong><a href=\"https://www.epey.com/araba/ncap-ancap-puani/5-yildiz/\">5 yıldız</a></li><li><strong>NCAP/ANCAP Yılı</strong>2017</li><li><strong>NCAP/ANCAP Web Sayfası</strong><a href=\"https://www.epey.com/git.php?url=https://www.euroncap.com/tr/results/ford/fiesta/27708\">2018 Ford Fiesta 1.5 TDCi 85 PS Titanium NCAP/ANCAP Web Sayfası</a></li><li><strong>Diğer Güvenlik Özellikleri</strong>Ford Kolay Yakıt (Yanlış Yakıtı Önleme)</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/frenler-suspansiyon-52.png\"></figure><h3>FRENLER &amp; SÜSPANSİYON</h3><ul><li><strong>ABS Fren Sistemi</strong><a href=\"https://www.epey.com/araba/abs-fren-sistemi/var/\">Var</a></li><li><strong>Fren Destek Sistemleri</strong>EBA (Acil Fren Desteği)EBD (Elektronik Fren Dağıtımı)</li><li><strong>Park Freni Tipi</strong><a href=\"https://www.epey.com/araba/park-freni-tipi/mekanik-park-freni/\">Mekanik Park Freni</a></li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/renkler-dis-govde-116.png\"></figure><h3>DIŞ GÖVDE</h3><ul><li><strong>Kapı Sayısı</strong>5</li><li><strong>Dış Gövde Özellikleri</strong>Gövde Rengi Kapı KollarıKrom Ön IzgaraKrom Ön Izgara SüslemeleriGövde Rengi Arka Rüzgarlık</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/garanti-yol-yardim-59.png\"></figure><h3>GARANTİ &amp; YOL YARDIM</h3><ul><li><strong>Garanti</strong>Periyodik Bakım Şartı3 Yıl / 100 Bin Km Mekanik3 Yıl Boya12 Yıl Paslanmazlık</li><li><strong>Yol Yardım Hizmeti</strong><a href=\"https://www.epey.com/araba/yol-yardim-hizmeti/var/\">Var</a></li><li><strong>Yol Yardım Bilgileri</strong>Ford Euroservis-Acil Yol Yardımı 444 3673</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/web-sayfasi-arac-katalogu-55.png\"></figure><h3>DOKÜMAN</h3><ul><li><strong>Resmi Ürün Sayfası</strong><a href=\"https://www.epey.com/git.php?url=http://www.ford.com.tr/otomobiller/Yeni-Fiesta\">2018 Ford Fiesta 1.5 TDCi 85 PS Titanium Resmi Ürün Sayfası</a></li><li><strong>Test Sürüşü Talep Sayfası</strong><a href=\"https://www.epey.com/git.php?url=http://www.ford.com.tr/SBE/test-surusu\">2018 Ford Fiesta 1.5 TDCi 85 PS Titanium Test Sürüşü Talep Sayfası</a></li><li><strong>Ürün Kataloğu</strong><a href=\"https://www.epey.com/dosya/101008/2018-ford-fiesta-1-5-tdci-85-ps-titanium-urun-katalogu.pdf/\">2018 Ford Fiesta 1.5 TDCi 85 PS Titanium Ürün Kataloğu</a></li></ul>',NULL,33,2,'True','ef37b2a3e03edbb7e4a093d1ed82f10b.jpeg'),(85,'E250 CDI','MERCEDES','Otomatik','0546857252',NULL,NULL,NULL,120000,60000,'<p>İletişim Tel : 05362234323</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/temel-bilgiler-42.png\"></figure><h3>TEMEL ÖZELLİKLER</h3><ul><li><strong>Model Yılı</strong><a href=\"https://www.epey.com/araba/model-yili/2014/\">2014</a></li><li><strong>Araç Türü</strong><a href=\"https://www.epey.com/araba/arac-turu/binek/\">Binek</a></li><li><strong>Segment</strong><a href=\"https://www.epey.com/araba/segment/e/\">E</a></li><li><strong>Gövde Tipi</strong><a href=\"https://www.epey.com/araba/govde-tipi/sedan/\">Sedan</a></li><li><strong>Motor Tipi</strong><a href=\"https://www.epey.com/araba/motor-tipi/benzin/\">İçten Yanmalı (Standart)</a></li><li><strong>Seri</strong><a href=\"https://www.epey.com/araba/seri/e/\">E</a></li><li><strong>Alt Seri</strong><a href=\"https://www.epey.com/araba/alt-seri/250-cdi/\">250 CDI</a></li><li><strong>Donanım Paketi</strong><a href=\"https://www.epey.com/araba/donanim-paketi/elite/\">Elite</a></li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/motor-49.png\"></figure><h3>MOTOR</h3><ul><li><strong>Yakıt Tipi</strong><a href=\"https://www.epey.com/araba/yakit-tipi/dizel/\">Dizel</a></li><li><strong>Silindir Hacmi</strong>2143 cc</li><li><strong>Silindir Adedi</strong><a href=\"https://www.epey.com/araba/silindir-adedi/4/\">4</a></li><li><strong>Yakıt Püskürtme</strong><a href=\"https://www.epey.com/araba/yakit-puskurtme/common-rail-direkt-enjeksiyon/\">Common Rail Direkt Enjeksiyon</a></li><li><strong>Besleme Tipi</strong><a href=\"https://www.epey.com/araba/besleme-tipi/turbo/\">Turbo</a></li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/performans-113.png\"></figure><h3>PERFORMANS</h3><ul><li><strong>Beygir Gücü (Toplam)</strong><a href=\"https://www.epey.com/araba/beygir-gucu-toplam/204-hp/\">204 hp</a></li><li><strong>Azami Tork</strong>500 nm</li><li><strong>Azami Devir</strong>3800 d/d</li><li><strong>Azami Hız</strong>238 km/s</li><li><strong>0-100 Km Hızlanma</strong>7.9 saniye</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/sanziman-cekis-sistemi-112.png\"></figure><h3>ŞANZIMAN &amp; ÇEKİŞ SİSTEMİ</h3><ul><li><strong>Şanzıman Türü</strong><a href=\"https://www.epey.com/araba/sanziman-turu/otomatik/\">Otomatik</a></li><li><strong>Şanzıman Kademesi</strong><a href=\"https://www.epey.com/araba/sanziman-kademesi/7-ileri/\">7 ileri</a></li><li><strong>Şanzıman Özellikleri</strong><a href=\"https://www.epey.com/araba/sanziman-teknolojisi/7g-tronic-tam-otomatik/\">7G-Tronic (Otomatik)</a></li><li><strong>Çekiş</strong><a href=\"https://www.epey.com/araba/cekis/4x4-cekisli/\">4x4 Çekişli</a></li><li><strong>Çekiş Kontrol Sistemi</strong><a href=\"https://www.epey.com/araba/cekis-kontrol-sistemi/var/\">Var</a></li><li><strong>Çekiş Kontrol Özellikleri</strong>ASR (Patinaj Önleme Sistemi)</li></ul><figure class=\"image\"><img src=\"https://cdn3.epey.com/resim/grup/yakit-tuketimi-gaz-salinimi-51.png\"></figure><h3>YAKIT TÜKETİMİ &amp; EMİSYON</h3><ul><li><strong>Yakıt Kapasitesi</strong>67 lt.</li><li><strong>Şehir İçi Tüketim (100 km)</strong>6.6 lt.</li><li><strong>Şehir Dışı Tüketim (100 km)</strong>5.0 lt.</li><li><strong>Karma Tüketim (100 km)</strong>5.7 lt.</li><li><strong>Karma CO2 Salınımı</strong>149 g/km</li></ul>',NULL,25,45,'False','26256689f4d92ec934e164ccbddc7310.jpeg'),(87,'AMG11','fffgh1','af','kısa arac',NULL,NULL,NULL,4421,222,'<p>İletişim : 05468567342</p>',NULL,6,30,'True','88019d094e2ae73b39cce4e9d5fda488.jpeg'),(88,'Civic 1.4','Honda2','Otomatik,LPG TÜPLÜ','Kısa Araç',NULL,NULL,NULL,1000000,7000,'<p>İletişim : 0546854612</p><p>&nbsp;</p><p>Full Otomatik LPG\'li</p><p>Hasar Yok</p><p>Yakıt Çok Az&nbsp;</p>',NULL,31,46,NULL,'965fe081b6841d80b06f34a23307d35d.jpeg'),(90,'AMG','afd','asdf','Kısa Kasa',NULL,NULL,NULL,4421,123,'<p>dfg</p>',NULL,2,30,NULL,'543e57adc9a3b7aaa50504624ed1a8a5.png'),(91,'Volvo e200-1h OTOMATİK','volvo','Dizel','0546857252',NULL,NULL,NULL,120000,700000,'<p>Otomatik Vites</p><p>Dizel</p><p>Yakıtı Koklayan Araç</p><p>&nbsp;</p><p>&nbsp;</p>',NULL,23,46,'True','04c0436266032864a05a4080ff9c645e.jpeg');
/*!40000 ALTER TABLE `admin_cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_category`
--

DROP TABLE IF EXISTS `admin_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `keywords` varchar(40) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_category`
--

LOCK TABLES `admin_category` WRITE;
/*!40000 ALTER TABLE `admin_category` DISABLE KEYS */;
INSERT INTO `admin_category` VALUES (2,0,'FIAT','fiat.com','fiat_cars','True'),(6,0,'MERCEDES','mercedes.com','usa.mercedes','True'),(15,0,'BMW','qw','otomatik','True'),(18,0,'AUDI','wd','wd','True'),(19,0,'VOLVO','volvo.com','asd1','True'),(22,15,'3.20','qwd','asd1','True'),(23,19,'e200','bmw.com','qwe','True'),(24,19,'e350','qwd','asd1','True'),(25,6,'AMG1','mercedes.com','otomatik','True'),(26,6,'AMG2','mercedes.com','otomatik','True'),(27,2,'SEDAN1','mercedes.com','otomatik','True'),(28,2,'SEDAN2','qwd','asd1','True'),(29,18,'A3','qwd','full_otomatik','True'),(30,18,'A4','bmw.com','asd1','True'),(31,0,'HONDA','Honda.com','asd1','True'),(32,0,'FORD','qwd','asd1','True'),(33,32,'Fiesta','ford.com','asd1','True'),(34,0,'VOLKSWAGEN','Volkswagen','Araclar','True'),(36,34,'Passat','mercedes.com','Passat','True');
/*!40000 ALTER TABLE `admin_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_image`
--

DROP TABLE IF EXISTS `admin_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_image`
--

LOCK TABLES `admin_image` WRITE;
/*!40000 ALTER TABLE `admin_image` DISABLE KEYS */;
INSERT INTO `admin_image` VALUES (24,2,'36d545444ca774ea36b99684cd76d256.jpeg'),(37,3,'207c7ebac122932353818be9b124189d.jpeg'),(43,1,'8096f0ee56fe27bf830517a963349896.jpeg'),(44,1,'c86eaafbb29ce5fa7a96dad7592e91a0.jpeg'),(46,12,'a604e7808e1348dc870b4d32b18663d8.jpeg'),(48,12,'410cab88912368c3a7c4f1c64f940247.jpeg'),(50,30,'70ad16bf8c0d243dd996fa0bc45d2f7c.jpeg'),(51,30,'6a6f705abb9daae36210e9fec0204993.jpeg'),(52,2,'56b21604feb20d73f35d3e3836de8923.jpeg'),(53,30,'c381765d56f4490df21517128598c0e0.jpeg'),(54,68,'2c9a5b0b030ac4cd14b5b4bbacba5fac.jpeg'),(55,68,'891fe8b90f276d68a01479405c0578b3.jpeg'),(56,73,'84a33aad360af5680d6d1ffceb4c47bc.jpeg'),(57,73,'7dd72420834643f86441dec0d8d3c73a.jpeg'),(58,76,'62a282f0aab077c95192f85f5d208da4.jpeg'),(59,77,'9b370123b03ce874d06ef43888d74d9f.jpeg'),(61,78,'242c055aac6b66af1918645ed9335b2e.jpeg'),(62,78,'aacd28af5c7531b7fa2e758abe67eac9.jpeg'),(65,82,'10f86714dff181c0b187e5576fa92f98.jpeg'),(66,82,'f630e10a83eb35308758838d8d9ee7ef.jpeg'),(67,84,'a17c88196e1a348f739f824575012b6c.jpeg'),(69,85,'2e3fdf1d60189ab9d3334ff99869cbd5.jpeg'),(70,85,'0366d6a8d3d4a10e7d41ab0de29b9498.jpeg'),(72,87,'58c36aa4b1e90fd6843ec35eb7b64dc5.png'),(73,88,'e805ce75346206b0645855dc66b6071c.jpeg'),(74,88,'874e704bf1ff9dd5626f3644c6317f95.jpeg'),(75,86,'d4afb4c9e4d680919910043c95f6a4f7.png'),(76,89,'a3b72143ae70e06a5c711c18537aec15.png'),(77,90,'7c5fe802d6b18e1a8342cabf61f4b463.png'),(79,90,'38f14786745aaacf1f873f73bf450cd2.jpeg'),(80,92,'c5fec6840268750aa350092898470b19.png'),(81,83,'14f2fdf05177e0c2d9268cd87f28a436.jpeg'),(82,91,'95e69e384d6dc97c9c8cda971b660a35.jpeg'),(84,91,'9f8a27f039338f109e70a6015b45e6d8.jpeg');
/*!40000 ALTER TABLE `admin_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_messages`
--

DROP TABLE IF EXISTS `admin_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin5 DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(255) CHARACTER SET latin5 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET latin5 DEFAULT NULL,
  `message` longtext CHARACTER SET latin5,
  `comment` longtext,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_messages`
--

LOCK TABLES `admin_messages` WRITE;
/*!40000 ALTER TABLE `admin_messages` DISABLE KEYS */;
INSERT INTO `admin_messages` VALUES (1,'Osman','oklid13@gmail.com','www.deneme.com','yardim',NULL,NULL,NULL),(2,'asd','asd@hotmail.com','https://www.youtube.com','asd',NULL,NULL,'Okundu'),(3,'asd','asd@hotmail.com','https://www.youtube.com','asd',NULL,NULL,NULL),(5,'asd','asd@hotmail.com','https://www.youtube.com','asd',NULL,NULL,'Okundu'),(6,NULL,NULL,NULL,NULL,NULL,NULL,'Okundu'),(7,NULL,NULL,NULL,NULL,NULL,NULL,'Okundu'),(8,'asd','asd@hotmail.com','https://www.youtube.com','asd',NULL,NULL,'Okundu'),(9,NULL,'asd@hotmail.com',NULL,NULL,NULL,NULL,'Okundu'),(10,'sdaf',NULL,NULL,NULL,NULL,NULL,NULL),(11,NULL,'asd@hotmail.co',NULL,'asd',NULL,NULL,NULL),(12,'Ahmet Yilmaz','asd@hotmail.com','https://www.youtube.com','asd',NULL,NULL,NULL),(13,'Ahmet Yİlmaz','asd@hotmail.com','https://www.youtuİbe.com','asd',NULL,NULL,NULL);
/*!40000 ALTER TABLE `admin_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_settings`
--

DROP TABLE IF EXISTS `admin_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `keywords` varchar(150) DEFAULT NULL,
  `address` longtext CHARACTER SET latin5,
  `fax` varchar(60) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `smtpserver` varchar(40) DEFAULT NULL,
  `smtpmail` varchar(80) DEFAULT NULL,
  `smtppasw` varchar(70) DEFAULT NULL,
  `smtpport` varchar(50) DEFAULT NULL,
  `aboutus` longtext CHARACTER SET latin5,
  `contract` longtext CHARACTER SET latin5,
  `referans` longtext CHARACTER SET latin5,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_settings`
--

LOCK TABLES `admin_settings` WRITE;
/*!40000 ALTER TABLE `admin_settings` DISABLE KEYS */;
INSERT INTO `admin_settings` VALUES (1,1,'Royal Class Car | Advertise','--','--','<p>İçerenköy Mah. Eski Üsküdar Cad. VIP Center No.10 K.6 Pendik İstanbul</p>','44 208 1234567','0 (464) 34 53 53','iletisim@royalclass.com','adsf','smtp.gmail.com','Fe2S2XxWx','465','<p>RoyalClass.Com kullanıcıların kesintisiz ve yüksek kaliteli hizmet sunan, güncel ve detaylı ilanları ile sektörde önde gelen, milyonlarca ziyaretçi potansiyeli ile en hızlı sonuç veren otomobil ilan sitesidir. 2003 yılından bu yana sürekli ilerleme ve gelişme prensibi ile faaliyetlerine devam eden Araba.Com araç ilanları yayını konusunda uzmanlaşmış ve en kısa sürede araç sattıran site ünvanının hakkını vermiştir. Royalclass.Com\'un en büyük amacı kullanıcılarının güncel ilanlar arasında arama yaparak ihtiyaç duydukları otomobillere kolayca ulaşabilmeleri, araçlarını hızlı ve pratik bir şekilde satabilmeleridir. royalclass.Com bu amaçtan yola çıkarak sürekli büyüme ve iyileşme yolunda emin adımlarla ilerlemektedir. Misyonumuz, sürekli geliştirmekte olduğumuz özelliklerimiz ile bireysel üyelerimize ve kurumsal firmalarımıza pratik, görsel açıdan zengin, teknik açıdan yüksek kalitede, müşteri hizmetleri ile tüm ihtiyaçlarınıza cevap verecek donanımda ve kesintisiz hizmet vermektir. 7/24 Kesintisiz Hizmeti ve Sorun Çözücü Müşteri Hizmetleri İle royalclass.Com Hep Yanınızda!</p>','<h2>&nbsp;</h2>','<figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-kibar.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-makyol.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-pegasus-1.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-calik.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-taksim-360-tr.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-huma.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-al-maskari.png\" alt=\"\"></figure><figure class=\"image\"><img src=\"http://www.bogazicizirvesi.org/wp-content/uploads/2017/11/logo-sanhe-tea.png\" alt=\"\"></figure>',NULL),(2,NULL,'Test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'Title','aracsatinal',NULL,'istanbul',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `admin_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `roles` longtext,
  `name` varchar(39) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isimsoyisim` varchar(255) CHARACTER SET latin5 DEFAULT NULL,
  `telefon` varchar(250) DEFAULT NULL,
  `city` varchar(60) CHARACTER SET latin5 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin5 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@royalclass.com','ROLE_ADMIN',NULL,'Online','$2y$10$AvmvHjbI8DfzTibFTgPhL.9jUqdtx5WfoPJxl8t1gTqq/EmWUO6Mm','Osman','5362231182','Rize','deneme'),(2,'oklid13@gmail.com','ROLE_USER',NULL,'Online','$2y$10$p6z9nonuM830I2FvIer.ruwpIaVeTgGc23NouqeaioiSsXXhApP6C','Osman Kandemir','5362231182','Rize','Cumhuriyet1222'),(29,'q11','ROLE_USER',NULL,'Online','$2y$10$sLTMVcu.Kueygp7ASCCDXebTwW6b1oqrHKEF3JwUwBrRchD4B9Uj.','Osman Kandemir','5362231182','dfg','Cumhuriyet12123'),(30,'csrf@hotmail.com','ROLE_USER',NULL,'Online','$2y$10$3wlywMYTmfu59ZWRvsGh9OxmJ4IjqrMxzOn/TE9NqsdXm1.vAqwHm','CSRF','csrf','Bolu','csrf'),(31,'osman@osman.com','ROLE_USER',NULL,'Online','$2y$10$ihzaTrQgKI6HwsZ306P56ODuXUUwT784Dr09V53VB8sMyID2LVIhm','Osman Kandemir','123123','Rize','engindere'),(32,'q@hotmail.com','ROLE_USER',NULL,'Online','$2y$10$mRRPZG5/zQTXw3OK0DWZJOOEO4lrq4aCJDBorYnfdf4h8POKUYse.','Ahmet Yilmaz','qwdd','Rize','213'),(33,'qweqw','ROLE_USER',NULL,NULL,'$2y$10$q6BsNRQB2qqIvYQkeKGt6u6wN8oT8tSjyPqxr4XbmIjsw3zQDUN8C','Osman Kandemir','5362231183',NULL,'bulvar2'),(34,'1@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$RIkafUqWBnL7EZfHY4lsj.2jMVfHFs3.imWMPN4uFeOgW9g39O6CW','Osman Kandemir','5362231183',NULL,'Cumhuriyet2'),(35,'qwdqwd@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$wMcB8r5lQGEYhBoHnuZmMe7MZggiWK7NCK/yPkl8Lj5ytT32ZoDy2','Osman Kandemir2','5362231182',NULL,'bulvar3'),(36,'2qwdqwd@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$sEiFfGU9BfD4Pe0oHJhBWO2wg7NxXP.i9W9lxxE8D6Q1udECoCFtm','qwdqwd','5362231182',NULL,'Cumhuriyet12123'),(37,'qwd4q@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$Z0j0MB8gyuNctX6VSolEr.ksy57mdyzbcNR3vDgzFrfYCNbbNvyGa','Osman Kandemir','5362231182',NULL,'Cumhuriyet12123'),(38,'qwd1qwd@hotmailc.comn','ROLE_USER',NULL,NULL,'$2y$10$2fe1qEYppWDxGQ9GUkI.6ujyYuKnEWlbUsh0RFTvUTrrao/R25V/m','qwdqwd','5362231183','İstanbul','engindere'),(39,'qwd1q3wd@hotmailc.comn','ROLE_USER',NULL,NULL,'$2y$10$7f52Jj5zp9iNHet6jz4FRO0KXYNEH5kIo0m8lo1e0Hd.NIxNIkUl2','qwdqwd','5362231183',NULL,'engindere'),(40,'qwdq3wd@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$37oqPPXmwYK4oG4aYTJ7fOOar1z2gpvDQTa77FKXq0ysHVCUQRvcq','Osman Kandemir','5362231183','------','Cumhuriyet12123'),(41,'qwdqw2313d@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$SgXRVmvl4Oh5CBajDX4nduuBQRYuFAsC4aZcu8LhntwzYAa.HOMQ6','Osman Kandemir','5362231183','Şırnak','Cumhuriyet12123'),(42,'qwdqw23513d@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$doBNRH1sS3Tl4tbBEQUuE.rWpLNuFuUdYrY6Ew6SEbx3biSk.0pXy','Osman Kandemir','5362231183','Bayburt','Cumhuriyet12123'),(43,'fatih@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$u2WNOy/REGBNYU.XWlFwtObNTa4zhg1MnZ1S2IGE9Iqv4WrG/wyPi','Fatih Saraç','05465333424','Rize','Engindere Mah. Cumhuriyet Cad.'),(44,'pinar@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$JW9IN9s0FlZ6umQNfkj4zemPPpayk3WmgPhautRBY7VdKXsVy9U76','Pınar Selcuk','5362231182','Rize','Cumhuriyet12123'),(45,'melek@hotmail.com','ROLE_USER',NULL,'Online','$2y$10$XZ53Y5ITMtJm5rLByBFFuOjT.EP5R5T0DgLl485wBI0r/mDWg17oC','Melek1 Kandemir','5362231182','Trabzon','Engindere Mah. Cumhuriyet Cad.'),(46,'123@hotmail.com','ROLE_USER',NULL,NULL,'$2y$10$tzIhCS67TgR1I6.sVIM19uDB.pLpoG34Pdi3BE9aaZvD9MkI3Hg4u','Osman Kandemir','05465333424','Bursa','Engindere Mah. Cumhuriyet Cad.');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isimsoyisim` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `types` varchar(40) NOT NULL,
  `telefon` longtext,
  `roles` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Osman Kandemir1','osmankandemir@gmail.com','$2y$12$.tRBCZgx.Q34iJ4xl2EbbOeNrp1Arc04mcg0slQUNGBK400y51Gy6','Online','Üye','05362231181',NULL),(6,'Ahmet Canik4','deneme1@hotmail.com','123123','Online','Üye','5362231182',NULL),(7,'Halil Söyletmez','soyletmez@hotmail.com','123123','Online','Admin','5362231182',NULL),(8,'Ahmet Yilmaz','asd','qwd','Offline','Üye','5362231182',NULL),(9,'Osman Kandemir','qwd@s.com','sss','Online','Admin','5362231183',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-09 15:04:36
