#  PHP PDO nedir? Hangi amaçla kullanılır?
 
 PDO, desteklediği veritabanları için ortak metot ve özellikleri barındıran bir OOP sınıfıdır.
 PDO sınıfını kullanarak, PDO için oluşturulmuş veritabanı sürücülerinde/sistemlerinde veri ekleme,
 seçme, güncelleme vb. işlemlerini yapmaya imkan verir.

#  DB Index nedir? Avantajları ve dezavantajları nelerdir?

  İndex kavramı verilerin indeksleme alanlarına göre sıralanmış ve tablo halini almış şekline denilmektedir.
  Bir tabloda belirli bir sıralama düzenine geçilmek için index kullanılmaktadır.

  ### İndex Oluşturmanın Faydaları

  Veritabanında veriler çok fazla olduğunda performans açısından düşüklüğe yol açmaktadır. Karmaşık bir yapıda
  olan verilerde istenilen bilgili bulmak tablo taranır. Bu işlem küçük tablolarda yapmak oldukça basittir. 
  Tablonuzda sürekli olarak yeni veriler geliyorsa tablo taraması yapmak size vakit kaybettireceğinden dolayı index 
  yapısı kullanılarak verilere daha hızlı erişim imkanı sunmaktadır.

  ### İndex Oluşturmanın Zararları

  İndex oluşturmanın zararlarında bahsederken ilk akla gelen veri tabanına her ekleme (insert), 
  güncelleme (update) ve silme (delete) işlemlerinden sonra index yapısı yeniden inşa edilmektedir.

  Yeniden inşa edileceğinden dikkat etmemiz gereken hususlar

  1. Fazla kullanılmayan sütunlar için index oluşturmamalıyız.
  2. Gerekmedikçe index oluşturmamalıyız.

  Eğer oluşturursak bu sistemimizin performansını düşürecektir.

  İndex oluşturma, silme ve düzenleme komutlarını bir sonraki yazımızda değineceğiz. 
  Bir sonraki yazılarda görüşünceye dek hoşça kalın.