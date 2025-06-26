<?php

/**
 * お客様の声セクション
 * ランダムに3件のお客様の声を表示
 */

function getRandomVoices($count = 3)
{
    $csvFile = __DIR__ . '/../data/voice_data_ko.csv';

    // CSVファイルが存在しない場合のデフォルトデータ
    if (!file_exists($csvFile)) {
        return [
            ['name' => 'A', 'gender' => '남성', 'age' => '20대', 'comment' => '정말 멋진 경험이었어요.'],
            ['name' => 'B', 'gender' => '여성', 'age' => '30대', 'comment' => '감동적인 순간이었어요.'],
            ['name' => 'C', 'gender' => '남성', 'age' => '40대', 'comment' => '가족과 즐거운 시간을 보냈어요.']
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
?> <section class="voice" id="voice"><div class="inner fade"><div><img src="./img/con05_logo.webp" alt="칠석 스카이랜턴 축제 2025" class="con05logo"><h2><img src="./img/con05_tit.webp" alt="고객 후기"></h2></div><ul class="voiceList"> <?php foreach ($voices as $index => $voice): ?> <li data-voice-index="<?php echo $index; ?>"><dl><dt><?php echo htmlspecialchars($voice['name'], ENT_QUOTES, 'UTF-8'); ?>씨<span>(<?php echo htmlspecialchars($voice['gender'], ENT_QUOTES, 'UTF-8'); ?>/<?php echo htmlspecialchars($voice['age'], ENT_QUOTES, 'UTF-8'); ?>)</span></dt><dd><p><?php echo htmlspecialchars($voice['comment'], ENT_QUOTES, 'UTF-8'); ?></p></dd></dl></li> <?php endforeach; ?> </ul></div></section>