<?php

use Illuminate\Database\Seeder;

use App\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_data = [
            [
                'name' => 'رضامراد صحرایی',
                'name_en' => 'Reza-Sahraee',
                'email' => 'rezasahraee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/reza_sahraee.jpg',
                'resume' => 'resumes/reza_sahraee.pdf',
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'افسانه غریبی',
                'name_en' => 'Afsaneh-Gharibi',
                'email' => 'gharibi.afsaneh@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/afsaneh_gharibi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'امیر احمدی',
                'name_en' => 'Amir-Ahmadi',
                'email' => 'aemeer@hotmail.com',
                'intro' => null,
                'pic' => 'user_pics/amir_ahmadi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'حمید آقایی',
                'name_en' => 'Hamid-Aghaei',
                'email' => 'aghaei@yahoo.com',
                'intro' => <<<INTRO
                دانشجوی دكتری زبان‌شناسی دانشگاه شهید بهشتی، دانش‌آموخته آزفا در مقطع كارشناسی ارشد و مدرس زبان فارسی به غیرفارسی‌زبانان
                INTRO,
                'pic' => 'user_pics/hamid_aghaei.jpg',
                'resume' => null,
                'linkedin_link' => 'https://www.linkedin.com/in/hamid-aghaei',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0002-3517-3302',
            ],
            [
                'name' => 'مروارید طالبی',
                'name_en' => 'Morvarid-Talebi',
                'email' => 'morvarid.talebi@gmail.com',
                'intro' => <<<INTRO
                خانم مروارید طالبی دانشجوی مقطع دکتری رشتۀ «آموزش زبان فارسی به غیرفارسی‌زبانان» در دانشگاه علامه طباطبائی و کارشناس آموزش و پژوهش بنیاد سعدی است. آموزش و پژوهش حول زبان فارسی، خصوصاً دو مؤلفۀ «واژه» و «تلفظ» در حوزۀ علاقۀ ایشان است. از تألیفات ایشان می‌توان به کتاب «آموزش واژه» از مجموعه کتاب‌های «زبان فارسی را چگونه آموزش دهیم؟» چاپ انتشارات دانشگاه علامه طباطبائی و کتاب «آموزش کاربردی واژه (2)» چاپ انتشارات آزفا متعلق به بنیاد سعدی اشاره کرد. همچنین همکاری در طراحی، برگزاری و ارزیابی دوره‌های مختلف آموزش زبان فارسی و تربیت مدرس زبان فارسی، به‌صورت برخط و حضوری، از دیگر موارد در سوابق حرفه‌ای ایشان است.
                INTRO,
                'pic' => 'user_pics/morvarid_talebi.jpg',
                'resume' => 'resumes/morvarid_talebi.pdf',
                'linkedin_link' => 'https://linkedin.com/in/morvarid-talebi',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0002-2473-1401',
            ],
            [
                'name' => 'مریم سلطانی',
                'name_en' => 'Maryam-Soltani',
                'email' => 'mrym.soltani@gmail.com',
                'intro' => <<<INTRO
                مریم سلطانی، فارغ‌التحصیل کارشناسی ارشد رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبایی است. او از سال 1393 در پست کارشناس آموزش در بنیاد سعدی مشغول به کار است. او در تألیف مجموعه‌های آموزشی بنیاد سعدی همکاری داشته که عبارتند از:
                <ul><li>جلدهای اول و دوم مجموعۀ سه‌جلدی «ایران‌شناسی»</li><li>جلدهای  اول، دوم و سوم از مجموعۀ چهارمهارتی «مینا»</li><li>جلد اول، دوم و سوم از مجموعۀ چهارجلدی «لذت خواندن»</li><li>جلد دوم مجموعۀ آموزشی«شیراز»  ویژۀ دانش‌آموزان نوجوان</li></ul>
                سلطانی علاوه بر همکاری در کارگروه‌های تألیف در برگزاری آزمون‌های متفاوت همکاری داشته‌ و در دوره‌های متفاوت زبان‌آموزی و تربیت معلم تدریس کرده‌است. به طور نمونه:
                <ul><li>انجام مصاحبۀ شفاهی در آزمون‌های تعیین سطح حضوری و غیرحضوری</li><li>برنامه‌ریزی و اجرای آزمون‌های تعیین سطح و پایان‌دوره</li><li>تدریس در دوره‌های دانش‌افزایی سال‌های 94 الی 97</li><li>تدریس مهارت «شنیدن» و «خواندن» در دوره‌های تربیت مدرس حضوری و غیرحضوری </li></ul>
                INTRO,
                'pic' => 'user_pics/maryam_soltani.jpg',
                'resume' => 'resumes/maryam_soltani.jpg',
                'linkedin_link' => 'https://linkedin.com/in/maryam-soltani',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0001-9080-3007',
            ],
            [
                'name' => 'منیره شهباز',
                'name_en' => 'Monire-Shahbaz',
                'email' => 'shahbaz.mnr@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/monire_shahbaz.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'سیده‌فاطمه طبسی',
                'name_en' => 'SeyedeFateme-Tabasi',
                'email' => 'seyede.fateme.tabasi@gmail.com',
                'intro' => <<<INTRO
                <ul><li>کارشناسی رشتۀ زبان و ادبیات فارسی، کارشناسی‌ ‌ارشد رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبائی</li><li>مدرس دوره‌های آموزش زبان فارسی به غیرفارسی‌زبانان مراکز آزفای دانشگاه علامه طباطبائی، دانشگاه الزهرا (س) و بنیاد سعدی</li><li>عضو گروه نویسندگان مجموعۀ لذت خواندن (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته)</li><li>عضو گروه نویسندگان مجموعۀ شیراز (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته و دانش‌آموزان مدارس لبنان)</li><li>علاقه‌مندی‌های مطالعاتی و پژوهشی: «گفتمان‌کاوی»، «ایدئولوژی، جنسیت، هویت و فرهنگ در آموزش زبان»، «تحلیل منابع آموزشی»، «آموزش مهارت خواندن» و «آموزش واژه و اصطلاحات»</li></ul>
                INTRO,
                'pic' => 'user_pics/seyedefateme_tabasi.jpg',
                'resume' => 'resumes/seyedefateme_tabasi.pdf',
                'linkedin_link' => 'linkedin.com/in/fateme-tabasi-3552a81b7',
                'website_link' => 'https://independent.academia.edu/FatemeTabasi',
                'orcid_link' => 'https://orcid.org/0000-0003-4343-3327',
            ],
            [
                'name' => 'فائزه مرصوص',
                'name_en' => 'Faeze-Marsous',
                'email' => 'fmarsous2001@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/faeze_marsous.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'هانیه مشایخی',
                'name_en' => 'Hanieh-Mashayekhi',
                'email' => 'mashayekhi.h93@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/hanieh_mashayekhi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'امیرحسین مجیری فروشانی',
                'name_en' => 'Amirhossein-MojiriForoushani',
                'email' => 'amojiry@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/amirhossein_mojiriforoushani.jpg',
                'resume' => 'resumes/amirhossein_mojiriforoushani.pdf',
                'linkedin_link' => 'https://linkedin.com/in/amir-hossein-mojiri-foroushani',
                'website_link' => 'https://amirmojiri.ir',
                'orcid_link' => 'https://orcid.org/0000-0002-3041-068X',
            ],
            [
                'name' => 'آزاده شکری',
                'name_en' => 'Azadeh-Shokri',
                'email' => 'shokri_azadeh@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/azadeh_shokri.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'غلامحسین رضاپور',
                'name_en' => 'GholamHosein-Rezapour',
                'email' => 'gh.hossein88rzp@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/gholamhosein_rezapour.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'بابک نوبهاری',
                'name_en' => 'Babak-Nobahari',
                'email' => 'b.nobahari53@gmail.com',
                'intro' => <<<INTRO
                کارشناس رشته گرافیک هستم از دانشگاه علم و فرهنگ. علاقه‌مند به عکاسی و ایرانگردی. 
                INTRO,
                'pic' => 'user_pics/babak_nobahari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'محمد محرابی',
                'name_en' => 'Mohammd-Mehraabi',
                'email' => 'mehrabi.graphicdesigner@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/mohammd_mehraabi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'مجید شمس‌الدین‌نژاد',
                'name_en' => 'Majid-Shamsoddinnejad',
                'email' => 'md.1382@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/majid_shamsoddinnejad.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'شهناز احمدی‌قادر',
                'name_en' => 'Shahnaz-Ahmadighader',
                'email' => 'sh.ahmadi53@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/shahnaz_ahmadighader.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'مرضیه‌سادات اعتمادالاسلامی',
                'name_en' => 'Marziehsadat-Eatemdoleslami',
                'email' => 'eatmad.m@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/marziehsadat_eatemdoleslami.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'اکرم‌بیگم حاجی‌سیدرضایی',
                'name_en' => 'Akram-Seyedrezaei',
                'email' => 'seyed.rezaee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/akram_seyedrezaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'هدی سلیمی',
                'name_en' => 'Hoda-Salimi',
                'email' => 'h.salimi@saadifoundation.ir',
                'intro' => <<<INTRO
                هدی سلیمی، کارشناس ارشد آموزش زبان انگلیسی به غیر انگلیسی زبانان از دانشگاه علامه طباطبایی، در زمینه‌های حرفه‌ای آموزش مجازی زبان به خارجی‌ها و تربیت مدرس زبان فارسی به غیرفارسی‌زبانان مشغول به فعالیت است. او همچنین، فارغ التحصیل دورة بین‌المللی آموزش زبان انگلیسی به غیر انگلیسی‌زبانان است و هم‌اکنون مشغول طراحی دوره‌های حرفه‌ای تربیت مدرس زبان فارسی به غیر فارسی زبانان می‌باشد. هدی سلیمی، علاوه بر فعالیت‌های حرفه‌ای، چندین مقالة ملی و بین‌المللی در مجلات داخلی و خارجی منتشر نموده و آثار خود را در کنفرانس‌های ملی و بین‌المللی ارائه کرده است. سلیمی با بیش از 5 سال سابقة تدریس زبان انگلیسی و فارسی، مشغول به انجام فعالیت‌های آموزشی و پژوهشی در دانشگاه‌های مطرح ملی و بین‌المللی است. 
                INTRO,
                'pic' => 'user_pics/hoda_salimi.jpg',
                'resume' => 'resumes/hoda_salimi.pdf',
                'linkedin_link' => 'https://linkedin.com/in/hoda-salimi',
                'website_link' => 'https://scholar.google.com/citations?hl=fa&user=swAnpDIAAAAJ',
                'orcid_link' => 'https://orcid.org/0000-0001-6070-7276',
            ],
            [
                'name' => 'بهروز محمودی بختیاری',
                'name_en' => 'Behrouz-MahmoodiBakhtiari',
                'email' => 'mbakhtiari@ut.ac.ir',
                'intro' => null,
                'pic' => 'user_pics/behrouz_mahmoodibakhtiari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'اکرم نعمت‌الهی',
                'name_en' => 'Akram-Nematolahi',
                'email' => 'ak.nematolahi@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/akram_nematolahi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'داود ملک‌لو',
                'name_en' => 'Davoud-Maleklou',
                'email' => 'davidmaleklou@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/davoud_maleklou.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'سمانه صادقی',
                'name_en' => 'Samaneh-Sadeghi',
                'email' => '',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'زهره شیرین‌بخش',
                'name_en' => 'Zohreh-Shirinbakhsh',
                'email' => 'zohreh_shirinbakhsh@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'زینب مرتضائی‌فر',
                'name_en' => 'Zeinab-Mortezaeifar',
                'email' => 'zeinab_mortezaeifar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'سوفیا کتلاکی',
                'name_en' => 'Sofia-Koutlaki',
                'email' => 'kotlaki.s@qhu.ac.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'مسعود فکری',
                'name_en' => 'Masoud-Fekri',
                'email' => 'masoud_fekri@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'ملیکا ترکمان',
                'name_en' => 'Melika-Torkaman',
                'email' => 'melika_torkaman@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'حمیده لطفی نیا',
                'name_en' => 'Hamideh-Latifinia',
                'email' => 'hamideh_latifinia@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'فرزانه اعظم لطفی',
                'name_en' => 'Farzane-Aazamlotfi',
                'email' => 'farzane_aazamlotfi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'فلیحه زهرا کاظمی',
                'name_en' => 'Falihe-Zahrakazemi',
                'email' => 'falihe_zahrakazemi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'یوگویلی',
                'name_en' => 'Yugvili',
                'email' => 'yugvili@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'محمد ابواکلام سرکار',
                'name_en' => 'Mohammad-AbukalamSarkar',
                'email' => 'mohammad_abukalamsarkar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'کلاوس پدرسون',
                'name_en' => 'Klaus-Peterson',
                'email' => 'klaus_peterson@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'مریم شفقی',
                'name_en' => 'Maryam-Shafaghi',
                'email' => 'maryam_shafaghi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'لیلیانا مارکوویچ',
                'name_en' => 'Liliana-Markowic',
                'email' => 'liliana_markowic@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'لیلا بنفشه',
                'name_en' => 'Leila-Banafshe',
                'email' => 'leila_banafshe@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'نسترن رستم‌زاده',
                'name_en' => 'Nastaran-Rostamzade',
                'email' => 'nastaran_rostamzade@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'محمد آقایی',
                'name_en' => 'Mohammad-Aghaei',
                'email' => 'mohammad_aghaei@saadifoundation.ir',
                'intro' => null,
                'pic' => 'user_pics/mohammad_aghaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'نشمین ولدی',
                'name_en' => 'Nashmin-Valadi',
                'email' => 'nashmin_valadi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'نازیلا فرمانی‌انوشه',
                'name_en' => 'Nazila-FarmaniAnoushe',
                'email' => 'nazila_farmaniAnoushe@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'فاطمه افشار',
                'name_en' => 'Fateme-Afshar',
                'email' => 'fateme_afshar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'علی‌اصغر رحیمی',
                'name_en' => 'AliAsghar-Rahimi',
                'email' => 'aliasghar_rahimi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            [
                'name' => 'نشر نویسه پارسی',
                'name_en' => 'Neveeseh-Parsi',
                'email' => 'info@neveeseh',
                'intro' => <<<INTRO
                «نشر نویسه پارسی» فعالیت خود را در سال 1391، به مدیر مسئولی امیر احمدی آغاز كرد.
                بخش مهمی از كتاب‌های این نشر به حوزه علم زبان‌شناسی و علوم شناختی اختصاص دارد. از دیگر زمینه‌های کاری این انتشارات می‌توان به علوم انسانی، علوم اجتماعی، عمومی، ادبیات و دانشگاهی اشاره کرد.
                این انتشارات به‌عنوان ناشر تخصصی انجمن زبان‌شناسی ایران توانسته است تاکنون مجموعه مقالات بیش از 50 همایش ملی و بین‌المللی در حوزه علم زبان‌شناسی را منتشر کند. همچنین این نشر پیشنهاد دهنده، حامی اصلی و برگزارکننده جایزه معتبر «دکتر محمد مقدم» است، این جایزه هر ساله به رسالۀ برگزیده دکتری در رشته زبان‌شناسی همگانی اعطاء می‌شود.
                فروشگاه: تهران، خیابان انقلاب، روبروی دانشگاه تهران، ابتدای خیابان دانشگاه، کتابفروشی توس
                شماره تماس فروشگاه: 66461007
                شماره تماس دفتر انتشارات: 77053246
                INTRO,
                'pic' => 'user_pics/neveeseh_parsi.jpg',
                'resume' => 'resumes/neveeseh.pdf',
                'linkedin_link' => null,
                'website_link' => 'neveeseh.com',
                'orcid_link' => null,
            ],
        ];
        foreach ($users_data as $user_data) {
            $user = new User;
            $user->name = $user_data['name'];
            $user->name_en = $user_data['name_en'];
            $user->email = $user_data['email'];
            $user->intro = $user_data['intro'];
            $user->pic = $user_data['pic'];
            $user->resume = $user_data['resume'];
            $user->linkedin_link = $user_data['linkedin_link'];
            $user->website_link = $user_data['website_link'];
            $user->orcid_link = $user_data['orcid_link'];
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
