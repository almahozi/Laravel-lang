<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "يجب قبول حقل :attribute.",
    "active_url"       => "حقل :attribute لا يُمثّل رابطًا صحيحًا",
    "after"            => "يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.",
    "alpha"            => "يجب أن لا يحتوي حقل :attribute سوى على حروف.",
    "alpha_dash"       => "يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.",
    "alpha_num"        => " يجب أن يحتوي حقل:attribute على حروفٍ وأرقامٍ فقط.",
    "array"            => "يجب أن يكون حقل :attribute ًمصفوفة.",
    "before"           => "يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.",
    "between"              => [
        "numeric" => "يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.",
        "file"    => "يجب أن يكون حجم ملف :attribute محصورًا ما بين :min و :max كيلوبايت.",
        "string"  => "يجب أن يكون عدد حروف :attribute محصورًا ما بين :min و :max",
        "array"   => "يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max."  ,
    ],
    "boolean"          => "يجب أن تكون قيمة حقل :attribute إما  صواب أو خطأ.",
    "confirmed"        => "حقل التأكيد غير مُطابق لحقل :attribute",
    "date"             => "حقل :attribute ليس تاريخًا صحيحًا",
    "date_format"      => "لا يتوافق حقل :attribute مع الشكل :format.",
    "different"        => "يجب أن يكون حقلا :attribute و :other مُختلفان",
    "digits"           => "يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام",
    "digits_between"   => "يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ",
    "email"            => "يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيح الشكل.",
    "exists"           => "القيمة المختارة لحقل :attribute غير صحيحة.",
    "filled"           => "حقل :attribute إجباري.",
    "image"            => "يجب أن يكون حقل :attribute صورةً.",
    "in"               => "القيمة المختارة لحقل :attribute غير صحيحة.",
    "integer"          => "يجب أن يكون حقل :attribute عددًا صحيحًا.",
    "ip"               => "يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة.",
    "max"                  => [
        "numeric" => "يجب أن تكون قيمة حقل :attribute :max على الأكثر.",
        "file"    => "يجب أن يكون حجم ملف :attribute :max كيلوبايت على الأكثر.",
        "string"  => "يجب أن لا يتجاوز طول :attribute :max حروفٍ/حرفًا",
        "array"   => "يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.",
    ],
    "mimes"            => "يجب أن يكون الحقل ملفًا من نوع : :values.",
    "min"                  => [
        "numeric" => "يجب أن تكون قيمة حقل :attribute :min على الأقل.",
        "file"    => "يجب أن يكون حجم ملف :attribute :min كيلوبايت على الأقل.",
        "string"  => "يجب أن يكون طول :attribute :min حروفٍ/حرفًا على الأقل.",
        "array"   => "يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر",
    ],
    "not_in"           => "القيمة المختارة لحقل :attribute غير صحيحة.",
    "numeric"          => "يجب أن يكون حقل :attribute رقمًا.",
    "regex"            => "صيغة حقل :attribute غير صحيحة.",
    "required"         => "حقل :attribute مطلوب.",
    "required_if"      => "حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.",
    "required_with"    => "حقل :attribute مطلوب إذا توفّر حقل :values.",
    "required_with_all" => "حقل :attribute مطلوب إذا توفّر :values.",
    "required_without" => "حقل :attribute مطلوب إذا لم يتوفّر حقل :values.",
    "required_without_all" => "حقل :attribute مطلوب إذا لم يتوفّر :values.",
    "same"             => "يجب أن يتطابق حقل :attribute مع :other",
    "size"                 => [
        "numeric" => "يجب أن تكون قيمة حقل :attribute :size.",
        "file"    => "يجب أن يكون حجم ملف :attribute :size كيلو بايت.",
        "string"  => "يجب أن يحتوي حقل :attribute :size حرفٍ/أحرف.",
        "array"   => "يجب أن يحتوي حقل :attribute على :min عنصرٍ/عناصر",
    ],
     "timezone"         => "يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا",
    "unique"           => "قيمة حقل :attribute مُستخدمة من قبل عضو آخر.",
    "url"              => "صيغة رابط :attribute غير صحيحة.",
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
       "name" => "الاسم",
        "username" => "اسم المُستخدم",
        "email" => "البريد الالكتروني",
        "first_name" => "الاسم",
        "last_name" => "اسم العائلة",
        "password" => "كلمة السر",
        "password_confirmation" => "تأكيد كلمة السر",
         "city" => "المدينة",
        "country" => "الدولة",
        "address" => "العنوان",
        "phone" => "الهاتف",
        "mobile" => "الجوال",
        "age" => "العمر",
        "sex" => "الجنس",
        "gender" => "النوع",
        "day" => "اليوم",
        "month" => "الشهر",
        "year" => "السنة",
        "hour" => "ساعة",
        "minute" => "دقيقة",
        "second" => "ثانية",
        "title" => "اللقب",
        "content" => "المُحتوى",
        "description" => "الوصف",
        "excerpt" => "المُلخص",
        "date" => "التاريخ",
        "time" => "الوقت",
        "available" => "مُتاح",
        "size" => "الحجم",
    ],

];
