document.addEventListener("DOMContentLoaded", function () {
  if ($("section").hasClass("p-mv")) {
    // 初回のみローディング画面を表示するか確認
    const isLoadingDisplayed = !sessionStorage.getItem("loadingDisplayed");

    if (isLoadingDisplayed) {
      sessionStorage.setItem("loadingDisplayed", "true"); // ローディング表示済みフラグを設定
    }

    let images = Array.from(document.querySelectorAll("img")).filter(
      (image) => {
        return !image.src.includes("gravatar.com"); // Gravatar画像を除外
      }
    );
    const totalImages = images.length;
    let loadedImages = 0;

    const loading = document.getElementById("js-loading");
    const progressBar = document.getElementById("js-loading-not");
    const loadingWrapper = document.getElementById("js-loading-wrapper");
    const mainContent = document.getElementById("js-global-container");
    const loadingTitle = document.getElementById("js-loading-title");

    function updateProgress() {
      loadedImages++;
      const percentComplete = Math.round((loadedImages / totalImages) * 100);
      // const percentComplete = loadedImages / totalImages; // 0 ～ 1 の範囲

      // clip-pathの値を計算（右側から削る形）
      const clipValue = `inset(0 ${100 - percentComplete}% 0 0)`;
      progressBar.style.clipPath = clipValue;

      // progressBar.style.width = percentComplete + "%";

      // すべての画像が読み込まれたら
      if (loadedImages === totalImages) {
        setTimeout(function () {
          loadingTitle.style.opacity = "0";
          setTimeout(function () {
            loading.style.backgroundImage = "none";
            loading.style.position = "absolute";
            mainContent.classList.add("is-visible");
            setTimeout(function () {
              loading.classList.remove("is-visible");
            }, 1000);
          }, 300); // フェードアウトのための遅延
        }, 1000); // 少しの遅延を加える
      }
    }

    if (isLoadingDisplayed) {
      loading.classList.add("is-visible");
      mainContent.classList.remove("is-visible");
      // 各画像の読み込み完了を監視
      images.forEach(function (image) {
        if (image.complete) {
          updateProgress(); // 既に読み込まれている場合もカウント
        } else {
          image.addEventListener("load", updateProgress);
          image.addEventListener("error", updateProgress); // エラー時もカウント
        }
      });
    } else {
      // ローディング画面をスキップ

      if (loading.classList.contains("is-visible")) {
        loading.classList.remove("is-visible");
      }
      mainContent.classList.add("is-visible");
    }
  } else {
    document.getElementById("js-global-container").classList.add("is-visible");
  }


  // スクロール変化
  const header = document.getElementById("js-header");
  // const mv = document.getElementById("js-mv");
  // const about = document.getElementById("js-about");

  if (header) {
    window.addEventListener("scroll", function () {
      if (this.window.scrollY > 0) {
        header.classList.add("is-scrolled");
        // mv.classList.add("is-hidden");
        // about.classList.add("is-visible");
      } else {
        header.classList.remove("is-scrolled");
        // mv.classList.remove("is-hidden");
        about.classList.remove("is-visible");
      }
    });
  } else if (header) {
    window.addEventListener("scroll", function () {
      if (this.window.scrollY > 0) {
        header.classList.add("is-scrolled");
      } else {
        header.classList.remove("is-scrolled");
      }
    });
  }


  // スクロール後MV消滅
  const mv = document.getElementById("js-mv");
  const about = document.getElementById("js-about");
  if (mv && about) {
    window.addEventListener("scroll", function () {
      if (this.window.scrollY > 200) {
        mv.classList.add("is-hidden");
        about.classList.add("is-visible");
      } else {
        mv.classList.remove("is-hidden");
      }
    });
  }


  // MV切り替え
  const slides = document.querySelectorAll(".js-mvSlide");
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.add("is-active");
        slide.classList.add("is-active-2");
      } else {
        setTimeout(() => {
          slide.classList.remove("is-active");
        }, 1000);
        slide.classList.remove("is-active-2");
      }
    });
  }

  function startSlideshow() {
    showSlide(currentSlide);
    setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 5000);
  }

  startSlideshow();

  //ハンバーガーメニューの制御
  const hamburger = document.querySelector(".js-hamburger");
  const mobileMenu = document.querySelector(".js-mobile-menu");
  let state = false;
  let pos;

  if (hamburger && mobileMenu) {
    // PC向け: ホバー時の処理
    hamburger.addEventListener("mouseenter", function () {
      if (!state) {
        openMenu();
      } else {
        closeMenu();
      }
    });

    function openMenu() {
      hamburger.classList.add("is-open");
      mobileMenu.classList.add("is-show");
      pos = window.scrollY; // 現在のスクロール位置を記録
      document.body.classList.add("js-fixed");
      document.body.style.top = `-${pos}px`;
      state = true; // メニューを開いた状態に変更
    }

    function closeMenu() {
      hamburger.classList.remove("is-open");
      mobileMenu.classList.remove("is-show");
      document.body.classList.remove("js-fixed");
      document.body.style.top = "";
      window.scrollTo(0, pos); // スクロール位置を元に戻す
      state = false; // メニューを閉じた状態に変更
    }
  }

  // 共通: タップ/クリック時の処理（スマホ対応も含む）
  let clickState = false;

  if (hamburger && mobileMenu) {
    const handleClick = function () {
      if (!clickState) {
        openMenu();
      } else {
        closeMenu();
      }
    };

    hamburger.onclick = handleClick;

    function openMenu() {
      hamburger.classList.add("is-open");
      mobileMenu.classList.add("is-show");
      pos = window.scrollY; // 現在のスクロール位置を記録
      document.body.classList.add("js-fixed");
      document.body.style.top = `-${pos}px`;
      clickState = true; // メニューを開いた状態に変更
    }

    function closeMenu() {
      hamburger.classList.remove("is-open");
      mobileMenu.classList.remove("is-show");
      document.body.classList.remove("js-fixed");
      document.body.style.top = "";
      window.scrollTo(0, pos); // スクロール位置を元に戻す
      clickState = false; // メニューを閉じた状態に変更
    }
  }

  // newsスライダー
  const swiper = new Swiper(".swiper", {
    slidesPerView: 1.56,
    spaceBetween: 31, // スライド間の距離
    grabCursor: true,
  });

  // モーダル
  MicroModal.init({
    disableScroll: false,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
    onShow: function (modal) {
      const match = modal.id.match(/^modal-(0[1-9]|10)$/); // 正規表現で 01~09 または 10 にマッチ
      if (match) {
        gsap.utils.toArray(".js-not-modal").forEach((not) => {
          gsap.fromTo(
            not,
            {
              width: "0%",
              filter: "drop-shadow(0px 0px 0px rgba(255, 255, 255, 0))",
            },
            {
              width: "100%",
              filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
              ease: "power2.out",
              duration: 1.5,
            }
          );
        });

        // モーダルの前後ボタンのクリックイベントを設定
        document.querySelectorAll(".js-pagination-btn").forEach((button) => {
          button.addEventListener("click", function () {
            const targetModalId = this.getAttribute("data-micromodal-trigger"); // 次に開くモーダルID
            const currentModalId = this.closest(".p-modal").id; // 現在開いているモーダルID

            // 現在のモーダルを閉じる
            MicroModal.close(currentModalId);

            // 次のモーダルを開く
            MicroModal.show(targetModalId);
          });
        });
      }
    },
  });

  // GSAPとScrollTriggerの初期化
  gsap.registerPlugin(ScrollTrigger);

  const setupScrollTrigger = () => {
    ScrollTrigger.matchMedia({
      // 769px以上の画面幅
      "(min-width: 769px)": function () {
        // 画像の切り替えとスクロールに合わせての固定
        const images = document.querySelectorAll(".js-image");
        const contents = document.querySelectorAll(".js-content");

        if (images.length > 0 && contents.length > 0) {
          // 各js-imageの表示状態を管理するためにフェードイン・アウトのアニメーションを設定
          images.forEach((image, index) => {
            gsap.to(image, {
              scrollTrigger: {
                trigger: contents[index], // 各js-contentに対応するjs-imageを表示
                start: "top center", // コンテンツが画面の中央に来るとき
                end: "bottom top", // js-contentが画面から消えるとき
                toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
              },
              width: "100%",
              zIndex: 1, // 表示されているjs-imageを最前面に
              duration: 0.3, // フェードインの時間
            });
          });

          images.forEach((image, index) => {
            gsap.to(".c-not", {
              scrollTrigger: {
                trigger: contents[index], // 各js-contentに対応するjs-imageを表示
                start: "top center", // コンテンツが画面の中央に来るとき
                end: "bottom top", // js-contentが画面から消えるとき
                toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
              },
              width: "100%",
              duration: 0.6, // フェードインの時間
            });
          });

          // js-imagesを固定しておく設定
          gsap.to(".js-images", {
            scrollTrigger: {
              trigger: ".js-images", // js-imagesが含まれる親要素をトリガー
              pin: true, // スクロールしても固定
              start: "center center",
              end: () =>
                "+=" +
                (document.querySelector(".js-contents").offsetHeight -
                  document.querySelector(".js-content").offsetHeight),
              scrub: true, // スクロールと同期
            },
          });
        }
      },

      // 768px以下の画面幅
      "(max-width: 768px)": function () {
        // // 768px以下の処理が必要な場合、ここに記述
      },
    });
  };

  // 初期化
  setupScrollTrigger();
});

document.addEventListener("DOMContentLoaded", function () {
  // js-interviewを監視する
  const targets = document.querySelectorAll(".js-interview");
  const labels = document.querySelectorAll(".js-label");
  const containers = document.querySelectorAll(".js-container");

  if (!targets || !labels) return;

  const showLabel = (label, container) => {};

  // Intersection Observerの設定
  const observerOptions = {
    root: null, // ビューポートを基準
    rootMargin: "0px",
    threshold: 0.5, // 50%見えたらトリガー
  };

  targets.forEach((target, index) => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          if (labels[index] && containers[index]) {
            // 対応する.js-labelと.js-containerが存在すれば
            showLabel(labels[index], containers[index]);
          }
        }
      });
    }, observerOptions);

    observer.observe(target);
  });
});

// アコーディオン
document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  const IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      event.preventDefault(); // デフォルトの挙動を無効化

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーションの完了後に
        closingAnim.onfinish = () => {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};
// アニメーションの時間とイージング
const animTiming = {
  duration: 400,
  easing: "ease-out",
};
// アコーディオンを閉じるときのキーフレーム
const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px", // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];
// アコーディオンを開くときのキーフレーム
const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];

// NOTバーのアニメーション
gsap.utils.toArray(".c-not").forEach((not) => {
  const isInViewport = not.getBoundingClientRect().top < window.innerHeight;

  if (isInViewport) {
    // ページロード時のアニメーション
    gsap.fromTo(
      not,
      {
        clipPath: "inset(0 100% 0 0)",
      },
      {
        clipPath: "inset(0 0 0 0)",
        ease: "power2.out",
        duration: 1, // アニメーション時間
        delay: 1.2, // ページ読み込み直後に少し遅延
        toggleActions: "play none none reverse",
      }
    );
  } else {
    gsap.to(not, {
      clipPath: "inset(0 0 0 0)",
      ease: "power2.out",
      scrollTrigger: {
        trigger: not,
        start: "top 60%",
        end: "top 30%",
        delay: 1.2,
        toggleActions: "play none none reverse",
      },
    });
  }
});

// タイトルバーの表示
document.querySelectorAll(".c-title").forEach((title) => {
  const firstBar = title.querySelector(".js-bar-first img");
  const lastBar = title.querySelector(".js-bar-last img");

  // 最初のバーのアニメーション
  if (firstBar) {
    gsap.to(firstBar, {
      width: "100%",
      ease: "power2.out",
      scrollTrigger: {
        trigger: title,
        start: "top 80%",
        end: "top 50%",
        scrub: true,
      },
    });
  }
  // 次のバーのアニメーション
  if (lastBar) {
    gsap.to(lastBar, {
      width: "100%",
      ease: "power2.out",
      scrollTrigger: {
        trigger: title,
        start: "top 50%",
        end: "top 20%",
        scrub: true,
      },
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".js-slideIn");

  slides.forEach((slide) => {
    const isInViewport = slide.getBoundingClientRect().top < window.innerHeight;

    if (isInViewport) {
      // ページロード時のアニメーション
      gsap.fromTo(
        slide,
        {
          clipPath: "inset(0 100% 0 0)",
        },
        {
          clipPath: "inset(0 0 0 0)", // アニメーション終了状態
          ease: "power2.out",
          duration: 0.5, // アニメーション時間
        }
      );
    } else {
      // ScrollTriggerの設定（スクロールで発火する要素）
      gsap.to(slide, {
        duration: 0.5,
        clipPath: "inset(0 0 0 0)", // 100%で表示
        ease: "power2.out",
        scrollTrigger: {
          trigger: slide,
          start: "top 80%",
          end: "top 50%",
        },
      });
    }
  });
});

// ScrollTrigger プラグインを登録
gsap.registerPlugin(ScrollTrigger);

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // .js-interviewSlideIn のすべての要素に対してアニメーションを適用
        entry.target
          .querySelectorAll(".js-interviewSlideIn")
          .forEach((element) => {
            gsap.to(element, {
              clipPath: "inset(0 0 0 0)",
              ease: "power2.out",
              duration: 1,
              toggleActions: "play none none reverse",
            });
          });
      }
    });
  },
  {
    threshold: 0.1, // 要素の50%が見えたら発火
  }
);

// .p-interview__itemOuter を監視
document.querySelectorAll(".p-interview__itemOuter").forEach((item) => {
  observer.observe(item);
});

//テキストスライドアニメーション
$(function () {
  // スクロールイベントを設定
  $(window).scroll(function () {
    // ウィンドウの高さを取得
    const windowHeight = $(window).height();
    // 現在のスクロール位置を取得
    const scroll = $(window).scrollTop();

    // 各ターゲット要素('.slide')に対して処理を行う
    $(".js-slide").each(function () {
      // ターゲット要素の位置を取得
      const targetPosition = $(this).offset().top;
      // ターゲット要素が表示されたらアニメーションを発動
      if (scroll > targetPosition - windowHeight + 100) {
        const $target1 = $(this);
        const $target2 = $target1.find(".js-slide-content");
        const className = "is-visible";
        const timeout = 1500;
        const delay = 100;

        // 一度アニメーションが発動していないか確認
        if (!$target1.hasClass(className)) {
          // アニメーション開始
          $target1.addClass(className);
          setTimeout(() => {
            $target2.addClass(className);
          }, delay);
        }
      }
    });
  });
});

// 背景画像固定
document.addEventListener("DOMContentLoaded", function () {
  const pMessage = document.querySelector(".p-message");
  const unfixedClass = document.querySelector(".is-unfixedClass");

  if (pMessage && unfixedClass) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            pMessage.classList.add("is-unfixed");
          } else if (entry.boundingClientRect.top > 0) {
            pMessage.classList.remove("is-unfixed");
          }
        });
      },
      {
        root: null, // ビューポートを監視
        threshold: 0, // 少しでも交差したら発火
      }
    );

    // observer.observe(otherContents);
    observer.observe(unfixedClass);
  }
});

// READ MOREボタン
jQuery(document).ready(function ($) {
  var postCount = 6; // 初期表示件数

  $("#js-news-btn").on("click", function () {
    postCount += 6; // クリックごとに6件増加
    $(".p-news-list__item.is-hidden").slice(0, 6).removeClass("is-hidden"); // 次の6件を表示

    // すべての記事が表示されたらボタンを非表示にする
    if ($(".p-news-list__item.is-hidden").length === 0) {
      $("#js-news-btn").hide();
    }
  });
});

//　タブ切り替え
$(function () {
  const tabs = $(".js-tab");
  const contents = $(".js-tab-content");

  tabs.on("click", function () {
    tabs.removeClass("is-active");
    $(this).addClass("is-active");

    const index = tabs.index(this);

    console.log("クリックされたタブのインデックス:", index);
    console.log("表示されるコンテンツ:", contents.eq(index));
    contents.removeClass("is-show");
    contents.eq(index).addClass("is-show");
  });
});

// document.addEventListener('DOMContentLoaded', () => {
//   const tabs = document.querySelectorAll('.js-tab');
//   const contents = document.querySelectorAll('.js-tab-content');

//   tabs.forEach((tab, index) => {
//     tab.addEventListener('click', () => {
//       // すべてのタブとコンテンツの選択状態を解除
//       tabs.forEach(t => t.classList.remove('is-active'));
//       contents.forEach(content => content.classList.remove('is-show'));

//       // クリックされたタブと対応するコンテンツを表示
//       tab.classList.add('is-active');
//       contents[index].classList.add('is-show');
//     });
//   });
// });

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? "width=device-width,initial-scale=1"
        : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

//　背景画像切り替え
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".p-interview__item.js-interview");

  function updateBackgroundImages() {
    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    items.forEach((item) => {
      const desktopBg = item.getAttribute("data-desktop-bg");
      const mobileBg = item.getAttribute("data-mobile-bg");

      if (isMobile && mobileBg) {
        item.style.backgroundImage = `url(${mobileBg})`;
      } else if (desktopBg) {
        item.style.backgroundImage = `url(${desktopBg})`;
      }
    });
  }

  // 初期ロード時に実行
  updateBackgroundImages();

  // ウィンドウサイズ変更時にも実行
  window.addEventListener("resize", updateBackgroundImages);
});

(() => {
  const sections = document.querySelectorAll(".snap");
  const triggerOffset = 0.9; // 0.9や1に設定可能
  let currentSection = null;
  let lastScrollPosition = window.pageYOffset;
  let ticking = false;
  let isSnapping = false;

  // 慣性スクロールを持つデバイスかどうかを判定
  const hasInertialScroll =
    "ontouchstart" in window ||
    navigator.maxTouchPoints > 0 ||
    navigator.msMaxTouchPoints > 0;

  function smoothScroll(targetPosition) {
    isSnapping = true;
    window.scrollTo({
      top: targetPosition,
      behavior: "smooth",
    });
    setTimeout(() => {
      isSnapping = false;
    }, 500); // スナップ動作の完了を待つ
  }

  function checkSections() {
    if (isSnapping) return; // スナップ中は処理をスキップ

    const scrollPosition = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const windowTop = scrollPosition;
    const windowBottom = scrollPosition + windowHeight;
    const isScrollingDown = scrollPosition > lastScrollPosition;

    let targetSection = null;
    let isInSnapSection = false;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionBottom = sectionTop + section.offsetHeight;

      // セクションが表示範囲内にあるかチェック
      if (sectionTop < windowBottom && sectionBottom > windowTop) {
        isInSnapSection = true;
        const visibleHeight =
          Math.min(windowBottom, sectionBottom) -
          Math.max(windowTop, sectionTop);
        const visibleRatio = visibleHeight / windowHeight;

        if (visibleRatio >= 1 - triggerOffset && currentSection !== section) {
          targetSection = section;
          return; // forEachループを抜ける
        }
      }
    });

    if (targetSection && !isSnapping) {
      if (currentSection) {
        currentSection.classList.remove("is-snap");
      }
      currentSection = targetSection;
      currentSection.classList.add("is-snap");

      const sectionTop = currentSection.offsetTop;
      const sectionBottom = sectionTop + currentSection.offsetHeight;
      // 下向きスクロールの場合はtopに、上向きスクロールの場合はbottomにスナップ
      const targetPosition = isScrollingDown
        ? sectionTop
        : sectionBottom - windowHeight;
      smoothScroll(targetPosition);
    } else if (!isInSnapSection && currentSection) {
      // .snapではない場所に移動した場合、currentSectionをリセット
      currentSection.classList.remove("is-snap");
      currentSection = null;
    }

    lastScrollPosition = scrollPosition;
    ticking = false;
  }

  if (hasInertialScroll) {
    // 慣性スクロールを持つデバイス用の処理
    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          checkSections();
          ticking = false;
        });
        ticking = true;
      }
    });
  } else {
    // 慣性スクロールを持たないデバイス用の処理
    let scrollTimeout;
    window.addEventListener("scroll", () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(checkSections, 50);
    });
  }
})();
