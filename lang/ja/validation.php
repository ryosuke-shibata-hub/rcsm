<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーションメッセージ
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデータークラスで使用されるデフォルトのエラーメッセージです。
    | 必要に応じて自由に修正してください。
    |
    */

    'accepted' => ':attribute を承認してください。',
    'accepted_if' => ':other が :value の場合、:attribute を承認してください。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute には :date より後の日付を指定してください。',
    'after_or_equal' => ':attribute には :date 以降の日付を指定してください。',
    'alpha' => ':attribute は英字のみ使用できます。',
    'alpha_dash' => ':attribute は英字・数字・ダッシュ・アンダースコアのみ使用できます。',
    'alpha_num' => ':attribute は英字と数字のみ使用できます。',
    'any_of' => ':attribute が不正です。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute は半角英数字と記号のみ使用できます。',
    'before' => ':attribute には :date より前の日付を指定してください。',
    'before_or_equal' => ':attribute には :date 以前の日付を指定してください。',
    'between' => [
        'array' => ':attribute は :min 個から :max 個の項目を含めてください。',
        'file' => ':attribute は :min KBから :max KBの間で指定してください。',
        'numeric' => ':attribute は :min から :max の間で指定してください。',
        'string' => ':attribute は :min 文字から :max 文字の間で入力してください。',
    ],
    'boolean' => ':attribute は true または false を指定してください。',
    'can' => ':attribute に許可されていない値が含まれています。',
    'confirmed' => ':attribute が確認用と一致していません。',
    'contains' => ':attribute に必要な値が含まれていません。',
    'current_password' => '現在のパスワードが正しくありません。',
    'date' => ':attribute は正しい日付を指定してください。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format 形式で入力してください。',
    'decimal' => ':attribute は小数点以下 :decimal 桁で指定してください。',
    'declined' => ':attribute は拒否してください。',
    'declined_if' => ':other が :value の場合、:attribute は拒否してください。',
    'different' => ':attribute と :other には異なる値を指定してください。',
    'digits' => ':attribute は :digits 桁で入力してください。',
    'digits_between' => ':attribute は :min 桁から :max 桁の間で入力してください。',
    'dimensions' => ':attribute の画像サイズが不正です。',
    'distinct' => ':attribute に重複した値があります。',
    'doesnt_end_with' => ':attribute は次のいずれかで終了してはいけません: :values。',
    'doesnt_start_with' => ':attribute は次のいずれかで開始してはいけません: :values。',
    'email' => ':attribute は有効なメールアドレスを入力してください。',
    'ends_with' => ':attribute は次のいずれかで終了してください: :values。',
    'enum' => '選択された :attribute が不正です。',
    'exists' => '選択された :attribute は存在しません。',
    'extensions' => ':attribute は次の拡張子のいずれかでなければなりません: :values。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute は必ず値を入力してください。',
    'gt' => [
        'array' => ':attribute は :value 個より多くの項目を含めてください。',
        'file' => ':attribute は :value KBより大きくしてください。',
        'numeric' => ':attribute は :value より大きくしてください。',
        'string' => ':attribute は :value 文字より多く入力してください。',
    ],
    'gte' => [
        'array' => ':attribute は :value 個以上の項目を含めてください。',
        'file' => ':attribute は :value KB以上にしてください。',
        'numeric' => ':attribute は :value 以上にしてください。',
        'string' => ':attribute は :value 文字以上にしてください。',
    ],
    'hex_color' => ':attribute は有効な16進数カラーコードを指定してください。',
    'image' => ':attribute は画像ファイルでなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute は :other に存在しなければなりません。',
    'in_array_keys' => ':attribute には次のキーのいずれかが含まれていなければなりません: :values。',
    'integer' => ':attribute は整数で入力してください。',
    'ip' => ':attribute は有効なIPアドレスを指定してください。',
    'ipv4' => ':attribute は有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attribute は有効なIPv6アドレスを指定してください。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'list' => ':attribute はリスト形式でなければなりません。',
    'lowercase' => ':attribute は小文字で入力してください。',
    'lt' => [
        'array' => ':attribute は :value 個未満の項目にしてください。',
        'file' => ':attribute は :value KB未満にしてください。',
        'numeric' => ':attribute は :value 未満にしてください。',
        'string' => ':attribute は :value 文字未満にしてください。',
    ],
    'lte' => [
        'array' => ':attribute は :value 個以下の項目にしてください。',
        'file' => ':attribute は :value KB以下にしてください。',
        'numeric' => ':attribute は :value 以下にしてください。',
        'string' => ':attribute は :value 文字以下にしてください。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスを指定してください。',
    'max' => [
        'array' => ':attribute は :max 個以下にしてください。',
        'file' => ':attribute は :max KB以下にしてください。',
        'numeric' => ':attribute は :max 以下にしてください。',
        'string' => ':attribute は :max 文字以下にしてください。',
    ],
    'max_digits' => ':attribute は最大 :max 桁までです。',
    'mimes' => ':attribute は :values タイプのファイルでなければなりません。',
    'mimetypes' => ':attribute は :values タイプのファイルでなければなりません。',
    'min' => [
        'array' => ':attribute は最低 :min 個の項目を含めてください。',
        'file' => ':attribute は最低 :min KB以上にしてください。',
        'numeric' => ':attribute は最低 :min 以上にしてください。',
        'string' => ':attribute は最低 :min 文字以上で入力してください。',
    ],
    'min_digits' => ':attribute は最低 :min 桁必要です。',
    'missing' => ':attribute は入力しないでください。',
    'missing_if' => ':other が :value の場合、:attribute は入力しないでください。',
    'missing_unless' => ':other が :value でない限り、:attribute は入力しないでください。',
    'missing_with' => ':values が存在する場合、:attribute は入力しないでください。',
    'missing_with_all' => ':values がすべて存在する場合、:attribute は入力しないでください。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式が正しくありません。',
    'numeric' => ':attribute は数値で入力してください。',
    'password' => [
        'letters' => ':attribute には少なくとも1文字の英字を含めてください。',
        'mixed' => ':attribute には大文字と小文字をそれぞれ少なくとも1文字含めてください。',
        'numbers' => ':attribute には少なくとも1つの数字を含めてください。',
        'symbols' => ':attribute には少なくとも1つの記号を含めてください。',
        'uncompromised' => '指定された :attribute は情報漏洩データに含まれています。別のものにしてください。',
    ],
    'present' => ':attribute は存在している必要があります。',
    'present_if' => ':other が :value の場合、:attribute は存在している必要があります。',
    'present_unless' => ':other が :value でない限り、:attribute は存在している必要があります。',
    'present_with' => ':values が存在する場合、:attribute も存在している必要があります。',
    'present_with_all' => ':values がすべて存在する場合、:attribute も存在している必要があります。',
    'prohibited' => ':attribute は入力禁止です。',
    'prohibited_if' => ':other が :value の場合、:attribute は入力禁止です。',
    'prohibited_if_accepted' => ':other が承認されている場合、:attribute は入力禁止です。',
    'prohibited_if_declined' => ':other が拒否されている場合、:attribute は入力禁止です。',
    'prohibited_unless' => ':other が :values に含まれない限り、:attribute は入力禁止です。',
    'prohibits' => ':attribute は :other の入力を禁止します。',
    'regex' => ':attribute の形式が正しくありません。',
    'required' => ':attribute は必須です。',
    'required_array_keys' => ':attribute には次の項目を含めてください: :values。',
    'required_if' => ':other が :value の場合、:attribute は必須です。',
    'required_if_accepted' => ':other が承認されている場合、:attribute は必須です。',
    'required_if_declined' => ':other が拒否されている場合、:attribute は必須です。',
    'required_unless' => ':other が :values に含まれない限り、:attribute は必須です。',
    'required_with' => ':values が存在する場合、:attribute は必須です。',
    'required_with_all' => ':values がすべて存在する場合、:attribute は必須です。',
    'required_without' => ':values が存在しない場合、:attribute は必須です。',
    'required_without_all' => ':values がすべて存在しない場合、:attribute は必須です。',
    'same' => ':attribute と :other が一致していません。',
    'size' => [
        'array' => ':attribute は :size 個の項目を含めてください。',
        'file' => ':attribute は :size KBでなければなりません。',
        'numeric' => ':attribute は :size でなければなりません。',
        'string' => ':attribute は :size 文字で入力してください。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values。',
    'string' => ':attribute は文字列で入力してください。',
    'timezone' => ':attribute は有効なタイムゾーンを指定してください。',
    'unique' => ':attribute は既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字で入力してください。',
    'url' => ':attribute は有効なURLを入力してください。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーションメッセージ
    |--------------------------------------------------------------------------
    */

'custom' => [
    'PostName' => [
        'required' => '投稿名は必須です。',
        'max' => '投稿名は:max文字以内で入力してください。',
    ],
    'Comment' => [
        'required' => 'コメントは必須です。',
        'max' => 'コメントは:max文字以内で入力してください。',
    ],
    'SettingImg' => [
        'required' => 'セッティング画像は必須です。',
    ],
    'Category' => [
        'required' => 'カテゴリは必須です。',
        'integer' => 'カテゴリを選択してください。',
        'in' => 'カテゴリを選択してください。',
    ],
    'FrontCamber' => [
        'regex' => 'フロントキャンバーは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'RearCamber' => [
        'regex' => 'リアキャンバーは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'FrontToe' => [
        'regex' => 'フロントトーは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'RearToe' => [
        'regex' => 'リアトーは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'FrontCaster' => [
        'regex' => 'フロントキャスターは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'RearCaster' => [
        'regex' => 'リアキャスターは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'FrontSkid' => [
        'regex' => 'フロントスキッドは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'RearSkid' => [
        'regex' => 'リアスキッドは1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'FrontDumperSpring' => [
        'max' => 'フロントダンパースプリングは:max文字以内で入力してください。',
    ],
    'RearDumperSpring' => [
        'max' => 'リアダンパースプリングは:max文字以内で入力してください。',
    ],
    'FrontDumperOil' => [
        'max' => 'フロントダンパーオイルは:max文字以内で入力してください。',
    ],
    'RearDumperOil' => [
        'max' => 'リアダンパーオイルは:max文字以内で入力してください。',
    ],
    'FrontHeight' => [
        'regex' => 'フロント車高は1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'RearHeight' => [
        'regex' => 'リア車高は1〜2桁の整数、または小数点以下1桁までの数値で入力してください（符号±可）。',
    ],
    'PinionGear' => [
        'regex' => 'ピニオンギアは1〜2桁の整数で入力してください。',
    ],
    'SpurGear' => [
        'regex' => 'スパーギアは1〜2桁の整数で入力してください。',
    ],
    'GearRatio' => [
        'regex' => 'ギヤ比は1〜2桁の整数、または小数点以下1桁までの数値で入力してください。',
    ],
    'Transmitter' => [
        'max' => '送信機は:max文字以内で入力してください。',
    ],
    'Receiver' => [
        'max' => '受信機は:max文字以内で入力してください。',
    ],
    'Esc' => [
        'max' => 'ESCは:max文字以内で入力してください。',
    ],
    'Servo' => [
        'max' => 'サーボは:max文字以内で入力してください。',
    ],
    'Gyro' => [
        'max' => 'ジャイロは:max文字以内で入力してください。',
    ],
    'Motor' => [
        'max' => 'モーターは:max文字以内で入力してください。',
    ],
    'OtherSetting' => [
        'max' => 'その他の設定(OtherSetting)は:max文字以内で入力してください。',
    ],
],


    /*
    |--------------------------------------------------------------------------
    | 属性名
    |--------------------------------------------------------------------------
    | ここに属性名を設定すると、エラーメッセージ内の :attribute を
    | 置き換えることができます。
    |
    */

    'attributes' => [],

];
