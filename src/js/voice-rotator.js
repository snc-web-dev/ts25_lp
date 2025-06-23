/**
 * お客様の声 ランダム表示機能（リロード時のみ）
 */
class VoiceRotator {
  constructor(options = {}) {
    this.voiceContainer = document.querySelector("#voice .voiceList");
    // アニメーション機能は削除し、リロード時のみランダム表示
    this.init();
  }

  init() {
    if (!this.voiceContainer) {
      console.warn("Voice container not found");
      return;
    }

    // ページ読み込み時に1回だけランダム表示
    this.loadRandomVoices();
  }

  async loadRandomVoices() {
    try {
      const response = await fetch("php/voice_section.php?ajax=true", {
        method: "GET",
        headers: {
          "Cache-Control": "no-cache",
        },
      });

      if (!response.ok) {
        throw new Error("Network response was not ok");
      }

      const newVoices = await response.json();
      this.updateVoicesDisplay(newVoices);
    } catch (error) {
      console.error("Error fetching voices:", error);
    }
  }

  updateVoicesDisplay(voices) {
    // 既存の要素をクリア
    this.voiceContainer.innerHTML = "";

    // 新しい要素を追加
    voices.forEach((voice, index) => {
      const li = this.createVoiceElement(voice, index);
      this.voiceContainer.appendChild(li);
    });
  }

  createVoiceElement(voice, index) {
    const li = document.createElement("li");
    li.setAttribute("data-voice-index", index);
    li.innerHTML = `
            <dl>
                <dt>${this.escapeHtml(voice.name)}さん<span>(${this.escapeHtml(
      voice.gender
    )}/${this.escapeHtml(voice.age)})</span></dt>
                <dd>
                    <p>${this.escapeHtml(voice.comment)}</p>
                </dd>
            </dl>
        `;
    return li;
  }

  escapeHtml(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
  }

  // 手動更新メソッド（必要に応じて）
  manualUpdate() {
    this.loadRandomVoices();
  }
}

// ページ読み込み完了後に初期化
document.addEventListener("DOMContentLoaded", function () {
  // お客様の声ローテーター初期化
  window.voiceRotator = new VoiceRotator({
    updateInterval: 8000, // 8秒間隔で更新
    animationDuration: 600, // 0.6秒のアニメーション
  });

  // デバッグ用: コンソールから設定変更可能
  // window.voiceRotator.setUpdateInterval(5000); // 5秒間隔に変更
  // window.voiceRotator.setAnimationDuration(800); // 0.8秒のアニメーションに変更
  // window.voiceRotator.manualUpdate(); // 手動更新
});
