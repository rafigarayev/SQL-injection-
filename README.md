# GSStore Vulnerability Lab 🦁

Bu layihə veb təhlükəsizliyi dərsi üçün **SQL Injection (SQLi)** boşluğunu və PHP-MySQL bağlantısını nümayiş etdirmək məqsədilə hazırlanıb.

## 🛠️ Texniki Göstəricilər
* **Backend:** PHP 8.x
* **Database:** MySQL (XAMPP)
* **Frontend:** HTML5, CSS3, JavaScript

## 🚀 Laboratoriya Testi (SQL Injection)
Verilənlər bazası ilə PHP arasındakı bağlantının uğurlu olduğunu sübut etmək üçün bu addımları izləyin:

1. **Giriş:** Login səhifəsinə daxil olun.
2. **Kod:** İstifadəçi adı (email) sahəsinə bu xüsusi kodu yazın: `' OR 1=1 -- `
3. **Parol:** Parol yerinə istənilən bir simvol yazın və "Giriş" düyməsini basın.

**Nəticə:** Uğurlu girişdən sonra ekranda birbaşa verilənlər bazasından (MySQL) çəkilən `admin@gsstore.com` mail ünvanı görünəcək. 

---
**Qeyd:** Bu mail ünvanı heç bir PHP faylında kod olaraq yazılmayıb. Onun ekranda görünməsi PHP-nin bazaya uğurla bağlandığını və məlumatı oradan real vaxtda çəkdiyini göstərir.
