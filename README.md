# ufuxio
PHP TURKISH STRLOWER

Özellike mb_strlower fonksiyonunun türkçe harflerde hata dolayı ufak bir fonksiyon yazdım.
Aşağıda kullanımı ile ilgili bilgiler paylaştım.

I wrote a small function to the property because of the error in the Turkish letters of the mb_strlower function.
I have shared information about its use below.


echo strlower_tr('teSt cONtent'); // output  Test Content

echo strlower_tr('test content'); // output  Test Content

echo strlower_tr('TEST CONTENT'); // output  Test Content
