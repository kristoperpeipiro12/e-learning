document.addEventListener("DOMContentLoaded", function () {
    let pauseMenu = document.getElementById("pause-menu");
    if (pauseMenu) {
        let popUpContainer = document.getElementById("pop-up-container");
        let blackAreaPause = document.getElementById("black-area-pause");
        let popUpMenu = document.getElementById("pop-up-menu");
        let xPauseMenu = document.getElementById("x-pause-menu");
        let lanjutPause = document.getElementById("lanjut-menu");
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

        lanjutPause.addEventListener("click", function () {
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
            // const audio = document.querySelector("audio");
            // audio.muted = false;
            // audio.play().catch((error) => {
            //     console.log("Autoplay dibatasi oleh browser:", error);
            // });

            blackAreaNickname.style.display = "flex";
            bgMainContent.style.display = "flex";
            nicknameContainer.style.display = "flex";
            mainContentCustom.style.paddingTop = "0px";
        });

        let btnNmMulai = document.getElementById("btn-nm-mulai");
        let btnNmBatal = document.getElementById("btn-nm-batal");
        let inputNicknameMurid = document.getElementById(
            "input-nickname-murid"
        );
        if (btnNmBatal && blackAreaNickname) {
            function closeNickname() {
                playQuiz.style.display = "block";
                leaveQuiz.style.display = "block";
                blackAreaNickname.style.display = "none";
                bgMainContent.style.display = "none";
                nicknameContainer.style.display = "none";
                // mainContentCustom.style.paddingTop = "10%";
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

    //Text to Speech
    const togglePlayButton = document.getElementById("toggle-play");
    if (togglePlayButton) {
        const soalContainer = document.getElementById("soal-container");
        let isPlaying = false;
        let currentParagraph = 0;

        const isiSoal = soalContainer.getElementsByClassName("isi-soal"); // Variabel Anda
        const jawabanLabels = soalContainer.querySelectorAll(
            ".jawaban-wrap label"
        ); // Semua label jawaban

        let currentWordIndex = 0;
        togglePlayButton.addEventListener("click", function () {
            if (!isPlaying) {
                if (currentParagraph >= isiSoal.length) {
                    // Reset ke awal jika sudah selesai
                    currentParagraph = 0;
                }
                isPlaying = true;
                togglePlayButton.innerHTML = `
            <i class="fa-solid fa-volume-high" id="read-on"></i>
            Jeda
            `;
                play();
            } else {
                isPlaying = false;
                togglePlayButton.innerHTML = `
            <i class="fa-solid fa-volume-xmark" id="read-off"></i>
            Baca
            `;
                speechSynthesis.cancel();
            }
        });

        function play() {
            if (currentParagraph < isiSoal.length) {
                const paragraph = isiSoal[currentParagraph];
                let jawabanText = "";
                jawabanLabels.forEach((label) => {
                    jawabanText += label.textContent + " ";
                });

                const text = paragraph.textContent + " " + jawabanText; // Gabungkan soal dan semua jawaban
                speak(text);
            } else {
                isPlaying = false;
                togglePlayButton.innerHTML = `
            <i class="fa-solid fa-volume-xmark" id="read-off"></i>
            Baca
            `;
            }
        }

        function speak(text) {
            const words = text.split(" ");
            const rate = 1.2; // Atur kecepatan (contoh: 1.0 = 1x lebih cepat)

            function speakWord() {
                if (currentWordIndex < words.length) {
                    const word = words[currentWordIndex];
                    const utterance = new SpeechSynthesisUtterance(word);
                    utterance.lang = "id-ID"; // Atur bahasa yang sesuai
                    utterance.rate = rate; // Atur kecepatan baca
                    speechSynthesis.speak(utterance);

                    utterance.onend = function () {
                        currentWordIndex++;
                        speakWord();
                    };
                } else {
                    // Setelah selesai membaca kata-kata, lanjutkan ke paragraf berikutnya
                    currentWordIndex = 0;
                    currentParagraph++;
                    setTimeout(play, 500); // Jeda 500ms sebelum membaca paragraf berikutnya
                }
            }

            speakWord();
        }
    }

    // .........
});
