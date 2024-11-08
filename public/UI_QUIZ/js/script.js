document.addEventListener("DOMContentLoaded", function () {
  let pauseMenu = document.getElementById("pause-menu");
  if (pauseMenu) {
    let popUpContainer = document.getElementById("pop-up-container");
    let blackAreaPause = document.getElementById("black-area-pause");
    let popUpMenu = document.getElementById("pop-up-menu");
    let xPauseMenu = document.getElementById("x-pause-menu");
    let bgPause = document.getElementById("bg-pause");
    pauseMenu.addEventListener("click", function () {
      bgPause.currentTime = 0; // mengulangi video dari awal
      bgPause.play();
      blackAreaPause.style.display = "flex";
      popUpMenu.style.display = "flex";
      popUpContainer.style.display = "flex";
    });

    xPauseMenu.addEventListener("click", function () {
      bgPause.currentTime = 0; // mengulangi video dari awal
      popUpMenu.style.display = "none";
      blackAreaPause.style.display = "none";
      popUpContainer.style.display = "none";
    });

    blackAreaPause.addEventListener("click", function () {
      bgPause.currentTime = 0; // mengulangi video dari awal
      popUpMenu.style.display = "none";
      blackAreaPause.style.display = "none";
      popUpContainer.style.display = "none";
    });
  }

  let lanjutMenu = document.getElementById("lanjut-menu");
  let pengaturanMenu = document.getElementById("pengaturan-menu");
  let keluarMenu = document.getElementById("keluar-menu");
  if (lanjutMenu && pengaturanMenu && keluarMenu) {
    // tindakan untuk menu Pause
  }

  let playQuiz = document.getElementById("btn-play-quiz");
  let leaveQuiz = document.getElementById("btn-leave-quiz");
  if (playQuiz && leaveQuiz) {
    let bgMainContent = document.getElementById("bg-main-content");
    let nicknameContainer = document.getElementById("nickname-container");
    let mainContentCustom = document.getElementById("main-content-custom");
    let blackAreaNickname = document.getElementById("black-area-nickname");

    playQuiz.addEventListener("click", function () {
      playQuiz.style.display = "none";
      leaveQuiz.style.display = "none";
      const audio = document.querySelector("audio");
      audio.muted = false;
      audio.play().catch((error) => {
        console.log("Autoplay dibatasi oleh browser:", error);
      });

      blackAreaNickname.style.display = "flex";
      bgMainContent.style.display = "flex";
      nicknameContainer.style.display = "flex";
      mainContentCustom.style.paddingTop = "0px";
    });

    let btnNmMulai = document.getElementById("btn-nm-mulai");
    let btnNmBatal = document.getElementById("btn-nm-batal");
    let inputNicknameMurid = document.getElementById("input-nickname-murid");
    if (btnNmBatal && blackAreaNickname) {
      function closeNickname() {
        playQuiz.style.display = "block";
        leaveQuiz.style.display = "block";
        blackAreaNickname.style.display = "none";
        bgMainContent.style.display = "none";
        nicknameContainer.style.display = "none";
        mainContentCustom.style.paddingTop = "10%";
        inputNicknameMurid.value = "";
      }

      btnNmBatal.addEventListener("click", closeNickname);
      blackAreaNickname.addEventListener("click", closeNickname);
    }
  }

  let skphLink = document.getElementById("skph-link");
  if (skphLink) {
    skphLink.addEventListener("click", function () {
      window.open("https://skph.sch.id/", "_blank");
    });
  }

  let mainMenuCustom = document.getElementById("pop-up-menu");
  if (mainMenuCustom) {
    // console.log(mainMenuCustom.clientWidth);
    // let tinggiMenuPause = mainMenuCustom.clientHeight;
    // let lebarMenuPause = mainMenuCustom.clientWidth;
    // let bgPause = document.getElementById("bg-pause");
    // let pauseVideo = document.getElementById("pause-video");
    // bgPause.style.height = tinggiMenuPause;
    // bgPause.style.width = lebarMenuPause;
  }
});
