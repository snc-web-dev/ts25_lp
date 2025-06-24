<?php

/**
 * お客様の声セクション
 * ランダムに3件のお客様の声を表示
 */

function getRandomVoices($count = 3)
{
    $csvFile = __DIR__ . '/../data/voice_data_en.csv';

    // CSVファイルが存在しない場合のデフォルトデータ
    if (!file_exists($csvFile)) {
        return [
            ['name' => 'A', 'gender' => 'Male', 'age' => '20s', 'comment' => 'It was a truly wonderful experience.'],
            ['name' => 'B', 'gender' => 'Femal', 'age' => '30s', 'comment' => 'It was a touching moment.'],
            ['name' => 'C', 'gender' => 'Male', 'age' => '40s', 'comment' => 'I had a great time with my family.']
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
?>

<section class="voice" id="voice">
    <div class="inner fade">
        <div><img src="./img/con05_logo.webp" alt="Tanabata Sky Lantern Festival 2025" class="con05logo">
            <h2><img src="./img/con05_tit.webp" alt="Customer Testimonials"></h2>
        </div>
        <ul class="voiceList">
            <?php foreach ($voices as $index => $voice): ?>
                <li data-voice-index="<?php echo $index; ?>">
                    <dl>
                        <dt><?php echo htmlspecialchars($voice['name'], ENT_QUOTES, 'UTF-8'); ?><span>(<?php echo htmlspecialchars($voice['gender'], ENT_QUOTES, 'UTF-8'); ?>/<?php echo htmlspecialchars($voice['age'], ENT_QUOTES, 'UTF-8'); ?>)</span></dt>
                        <dd>
                            <p><?php echo htmlspecialchars($voice['comment'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </dd>
                    </dl>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>