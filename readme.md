# The Gilded Rose Kata

## Setup

حالا وظیفه ی شماست که:

1.  باید ابتدا کد رو باز نویسی و تمیز کنید.
2. سپس یک امکان جدید به سیستم اضافه کنید به نحوی که تمام تست های موجود در فایل conjured رو براورده کنه.

در نهایت شما میتونید راه حل رو روی برنچ solution ببینید.

## قوانین

سلام به مغازه ما خوش آمدید.
ما بهترین اجناس شهر رو اینجا به فروش می رسونیم.
اسم مغازه دار ما خشایار است.
. ارزش اجناس ما هر روز کاهش پیدا می کنه
چون به تاریخ انقضا شون نزدیک و نزدیک تر میشن.
ما یه سیستم حساب داری داریم که توسط یه برنامه نویس قبلا نوشته شده و 
تاریخ انقضا و کیفیت اجناس رو برامون نشون میده.
اون برنامه نویس ول کرده رفته و ما از شما میخوایم که یک امکان جدید 
به برنامه ای که فعلا موجود هست اضافه کنید.

برای آشنایی با سیستم:

- تعداد روز هایی که تا پایان مهلت فروش هر نوع جنس مانده با sellIn تعیین می شود.
- ارزش هر آیتم مقدار توسط پارامتر quality مشخص می شود.
- در پایان هر روز مقادیر quality , sellIn برای هر آیتم توسط سیستم ما بر اساس نوع آن ها تغییر داده می شود.

تا اینجا ش آسون بود، اما قوانین مد نظر ما این ها هستند:

- وقتی مهلت فروش بگذرد افت کیفیت آیتم های عادی دو واحد در روز خواهد بود.
- مقدار quality هیچگاه نباید عددی منفی شود.
- مقدار quality برای "ترشی" به گذشت زمان افزایش می یابد.
- مقدار حداکثر برای quality عدد 50 می باشد.
- مقدار quality , sellIn برا "گوگرد" در پایان روز نباید تغییر کند.
- اگر بیشتر از 10 روز به پایان مهلت فروش مانده باشد ارزش "بلیت هواپیما" در پایان هر روز 1 واحد افزایش می باید. 
- اگر 10 یا کمتر از 10 روز به پایان مهلت فروش مانده باشد ارزش "بلیت هواپیما" در پایان هر روز 2 واحد افزایش می باید. 
- اگر 5 یا  کمتر از 5 روز به پایان مهلت فروش مانده باشد ارزش "بلیت هواپیما" در پایان هر روز 3 واحد افزایش می باید. 
- به محض اتمام مهلت فروش مقدار quality برای بلیت ها به 0 تغییر می کند. 


حالا ما قصد داریم یک نوع جدید از آیتم ها با نام "کیک خامه ای" رو به سیستم فعلی اضافه کنیم :

"کیک های خامه ای" با سرعتی دو برابر آیتم های "عادی" کاهش quality خواهند داشت.
یعنی قبل از گذشت تاریخ مصرف روزی 2 واحد و بعد از گذشت تاریخ مصرف روزی 4 واحد افت میکند تا به صفر برسد.
