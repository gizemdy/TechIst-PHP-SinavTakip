Tech Istanbul PHP eğitimi kapsamında hazırladığım sınav sonucları takip sistemi sunulmuştur. 

*** Kullanılan teknolojiler HTML, PHP, CSS, MySQL. (sql dosyası klasöre yüklenmiştir, mysqlde içe aktar yaparak kullanılabilir.)

*** Kullanıcının önceden girmiş olduğu notlar anasayfada (index.php) listelenmektedir. Liste sqlden otomatik çekilmektedir. HTML ve CSS ile görsellik katılmıştır.

*** Listede yer alan her kayıt için düzenle ve sil seçeneği koyulmuştur. Düzenle tıklandığında düzenle.php sayfasına, sil tıklandığında sil.php sayfasına yönlendirir. Bu 
  sayfalarda bilgiler veritabanından çekilir. Gerekli düzenlemeler sonrası kaydet veya iptal butonuyla veritabanına gönderir.
  
*** Anasayfaya eklenilen kayıt ekle  butonu ile yeni kayıt ekleme (ekle.php) sayfasına yönlendirmektedir.
  Bu sayfalardan girilen bilgiler kaydet butonuyla veritabanına gönderilir. Anasayfaya aynı anda gelir. 
  
*** Girilen ve düzenlenen tüm notlar otomatik olarak ortalaması hesaplanarak veritabanına gönderilir ve anasayfaya yazdırılır.
