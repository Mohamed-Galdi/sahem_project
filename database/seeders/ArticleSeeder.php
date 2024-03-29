<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $titles = [
            "تحول الأزمة إلى فرصة: مساهمة الشباب في مشروع 'ساهم'",
            'قصص الإيجابية: تحول الحياة بواسطة الطعام',
            "استدامة الطعام: دور المبادرات الغذائية في حماية البيئة",
            "قوة التعاون: المطاعم والمتاجر في خدمة المجتمع",
            "فرصة للإنسانية: التأثير الاجتماعي لتقديم الطعام",
            "تكنولوجيا الأمل: دور التقنية في مكافحة الجوع",
            "تحقيق الأمن الغذائي: استراتيجيات مبتكرة لتحسين التوزيع",
            "تعزيز الروابط الاجتماعية: التبرع بالطعام كوسيلة للتواصل",
        ];
        $images = [
            'articles_images/a.jpg',
            'articles_images/d.jpg',
            'articles_images/h.jpg',
            'articles_images/c.jpg',
            'articles_images/e.jpg',
            'articles_images/g.jpg',
            'articles_images/f.jpg',
            'articles_images/b.jpg',
        ];

        $descriptions = [
            '
قصص شبابية تلهم حول كيفية تحويل التحديات إلى فرص، حيث يتم استعراض دور الشباب في إدارة وتنمية منصة "ساهم" وتأثيرهم الإيجابي في المجتمع.',
            '
تحليل للأثر الاجتماعي والنفسي لعمليات التبرع بالطعام، مُستعرضًا كيف يعمل التبرع عبر "ساهم" على تعزيز التواصل وبناء الروابط الإنسانية في المجتمع.',
            '
استعراض للأساليب الإبداعية التي تستخدمها منصة "ساهم" لضمان تحقيق الأمن الغذائي من خلال تحسين وتسهيل عمليات توزيع الطعام للمحتاجين.',
            '
نظرة عامة على كيفية استخدام التكنولوجيا، من خلال منصة "ساهم"، في مواجهة التحديات الغذائية وتوفير الدعم للمجتمعات المحتاجة.',
            '
تحليل للمساهمة الاجتماعية لتقديم الطعام عبر منصة "ساهم" وكيف تمكّن هذه الفرصة من تعزيز الروابط المجتمعية ومساعدة الأفراد في الحاجة.',
            '
تحليل عن تأثير التعاون بين المطاعم والمتاجر والمؤسسات الخيرية في تقديم المساعدة للمحتاجين، مع تسليط الضوء على النتائج الإيجابية لهذه الجهود المشتركة.',
            '
تسليط الضوء على أهمية استدامة الطعام وكيف تلعب منصة "ساهم" دورًا رئيسيًا في الحد من هدر الطعام وتحفيز المبادرات المحلية للحفاظ على البيئة.',
            '
استكشاف لقصص ملهمة حول الأفراد الذين تغيرت حياتهم بفضل المساهمات الغذائية وكيف تأثرت حياتهم بالطعام الذي تم توزيعه من خلال منصة "ساهم".',
        ];

        $filePath = __DIR__ . '/article_example.txt';

        if (file_exists($filePath)) {
            $article = file_get_contents($filePath);
            // Now $article contains the content of your text file
        } else {
            $article = '';
        };


        foreach ($titles as $index => $title) {
            $image = $images[$index];
            $description = $descriptions[$index];

            Article::create([
                'title' => $title,
                'image' => $image,
                'description' => $description,
                'body' => $article,
            ]);
        }
    }
}
