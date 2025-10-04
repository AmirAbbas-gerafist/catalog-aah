# پروژه MyList – aah
این پروژه یک لیست ساده آیتم‌ها است که کاربر می‌تواند آیتم جدید اضافه کند، ۱۰ آیتم آخر را ببیند و تعداد کل آیتم‌ها را مشاهده کند. همچنین امکان حذف هر آیتم از لیست وجود دارد.

## نسخه‌ها و محیط اجرا
- XAMPP Version: 8.2.0 (Apache و MySQL فعال)
- PHP Version: 8.2
- MySQL Version: 8.0

## ساختار فایل‌ها
- `index.php` : فرم افزودن آیتم و نمایش لیست  
- `db_aah.php` : اتصال به دیتابیس `my_list`  
- `styles.css` : استایل و طراحی صفحات  
- `fonts/` : فایل فونت فارسی Vazir (اختیاری)  
- `README.md` : راهنمای پروژه  


## دیتابیس و جدول
1. وارد phpMyAdmin شوید.  
2. یک دیتابیس با نام `my_list` بسازید.  
3. دستور SQL زیر را اجرا کنید:

## نحوه اجرا
1. XAMPP را اجرا کنید (Apache و MySQL فعال باشد)  
2. پروژه را در مسیر `htdocs` قرار دهید، مثلا `C:\xampp\htdocs\Project`  
3. مرورگر را باز کنید و بروید به: `http://localhost/Project`  
4. آیتم جدید اضافه کنید و لیست آخرین آیتم‌ها و تعداد کل را مشاهده کنید  
5. برای حذف آیتم، روی لینک «حذف» کنار آن کلیک کنید  


## ویژگی‌ها
- افزودن آیتم جدید  
- نمایش ۱۰ آیتم آخر  
- نمایش تعداد کل آیتم‌ها  
- امکان حذف آیتم‌ها  
- طراحی مدرن و واکنش‌گرا با CSS و فونت فارسی Vazir

```sql
CREATE TABLE `items_aah` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(120) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```