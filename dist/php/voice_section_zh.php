<?php

/**
 * お客様の声セクション
 * ランダムに3件のお客様の声を表示
 */

function getRandomVoices($count = 3)
{
    $csvFile = __DIR__ . '/../data/voice_data_zh.csv';

    // CSVファイルが存在しない場合のデフォルトデータ
    if (!file_exists($csvFile)) {
        return [
            ['name' => 'A', 'gender' => '男性', 'age' => '20多岁', 'comment' => '這是一段非常棒的體驗。'],
            ['name' => 'B', 'gender' => '女性', 'age' => '30多岁', 'comment' => '那是一段感人的時光。'],
            ['name' => 'C', 'gender' => '男性', 'age' => '40多岁', 'comment' => '和家人度過了愉快的時光。']
        ];
    }

    $voices = [];
    $handle = fopen($csvFile, 'r');

    // ヘッダー行をスキップ
    fgetcsv($handle);

    // データを読み込み
    while (($data = fgetcsv($handle)) !== FALSE) {
        $voices[] = [
            'name' => $data[0],
            'gender' => $data[1],
            'age' => $data[2],
            'comment' => $data[3]
        ];
    }

    fclose($handle);

    // ランダムに選択
    shuffle($voices);
    return array_slice($voices, 0, $count);
}

// AJAX リクエストの場合はJSONで返す
if (isset($_GET['ajax']) && $_GET['ajax'] === 'true') {
    header('Content-Type: application/json');
    echo json_encode(getRandomVoices());
    exit;
}

// 通常のページ読み込み時はHTMLを出力
$voices = getRandomVoices();
?> <section class="voice" id="voice"><div class="inner fade"><div><img src="./img/con05_logo.webp" alt="七夕天燈節2025" class="con05logo"><h2><img src="./img/con05_tit.webp" alt="顧客回饋"></h2></div><ul class="voiceList"> <?php foreach ($voices as $index => $voice): ?> <li data-voice-index="<?php echo $index; ?>"><dl><dt><?php echo htmlspecialchars($voice['name'], ENT_QUOTES, 'UTF-8'); ?><span>(<?php echo htmlspecialchars($voice['gender'], ENT_QUOTES, 'UTF-8'); ?>/<?php echo htmlspecialchars($voice['age'], ENT_QUOTES, 'UTF-8'); ?>)</span></dt><dd><p><?php echo htmlspecialchars($voice['comment'], ENT_QUOTES, 'UTF-8'); ?></p></dd></dl></li> <?php endforeach; ?> </ul></div></section>