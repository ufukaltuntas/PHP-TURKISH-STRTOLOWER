# PHP TURKISH STRTOLOWER

Özellikle mb_strlower fonksiyonunun türkçe harflerde ki hatalarından dolayı ufak bir fonksiyon yazdım.
Aşağıda kullanımı ile ilgili bilgiler paylaştım.

I wrote a small function especially because of the errors of the mb_strlower function in Turkish letters.
I have shared information about its use below.


echo strlower_tr('teSt cONtent'); // output  Test Content

echo strlower_tr('test content'); // output  Test Content

echo strlower_tr('TEST CONTENT'); // output  Test Content
