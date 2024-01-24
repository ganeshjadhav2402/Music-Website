const music = new Audio("audio/heat_waves.mp3");
// music.play();

const songs = [
    {
        id: "1",
        songName: `On My Way <br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "images/On_My.png"
    },
    {
        id: "2",
        songName: `Ravensthorpe <br>
        <div class="subtitle">Sarah Schahcner, Assassin's Creed</div>`,
        poster: "images/eng1.jpeg"
    },
    {
        id: "3",
        songName: `Sweater Weather <br>
        <div class="subtitle">The Neighbourhood</div>`,
        poster: "images/eng2.jpeg"
    },
    {
        id: "4",
        songName: `Ava <br>
        <div class="subtitle">Danil Muzik</div>`,
        poster: "images/eng3.jpeg"
    },
    {
        id: "5",
        songName: `After Hours <br>
        <div class="subtitle">The Weekend</div>`,
        poster: "images/eng4.jpeg"
    },
    {
        id: "6",
        songName: `Gangsta's Paradie <br>
        <div class="subtitle">Coolio, L.V.</div>`,
        poster: "images/eng5.jpeg"
    },
    {
        id: "7",
        songName: `Satya <br>
        <div class="subtitle">DIVINE</div>`,
        poster: "images/eng6.jpeg"
    },
    {
        id: "8",
        songName: `Spirits <br>
        <div class="subtitle">The Strumbellas</div>`,
        poster: "images/eng7.jpeg"
    },
    {
        id: "9",
        songName: `Teesri Manzil <br>
        <div class="subtitle">DIVINE</div>`,
        poster: "images/eng8.jpeg"
    },
    {
        id: "10",
        songName: `Selish Love (with Selena Gomez) <br>
        <div class="subtitle">DJ Snake, Selena Gomez</div>`,
        poster: "images/eng9.jpeg"
    },
    {
        id: "11",
        songName: `We Don't Talk Anymore (feat. Selena Gomez) <br>
        <div class="subtitle">Charlie Puth, Selena Gomez</div>`,
        poster: "images/eng10.jpeg"
    },
    {
        id: "12",
        songName: `Alone <br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "images/eng11.jpeg"
    },
    {
        id: "13",
        songName: `Peaches (feat. Daniel Caeser & Giveon) <br>
        <div class="subtitle">Justin Bieber, Daniel Caeser, Giveon</div>`,
        poster: "images/eng12.jpeg"
    },
    {
        id: "14",
        songName: `On My Way <br>
        <div class="subtitle">Alan Walker</div>`,
        poster: "images/eng13.jpeg"
    },
    {
        id: "15",
        songName: `Play Date <br>
        <div class="subtitle">Melaine Martinez</div>`,
        poster: "images/eng14.jpeg"
    },
    {
        id: "16",
        songName: `Shower <br>
        <div class="subtitle">Becky G</div>`,
        poster: "images/eng15.jpeg"
    },
    {
        id: "17",
        songName: `Arjan Vailly (From "ANIMAL") <br>
        <div class="subtitle">Manan Bhardwaj, Bhupinder Babbal</div>`,
        poster: "images/pop1.jpeg"
    },
    {
        id: "18",
        songName: `Chaleya <br>
        <div class="subtitle">Anirudh Ravichander, Arijit Singh, Shilpa Rao, Kumaar</div>`,
        poster: "images/pop2.jpeg"
    },
    {
        id: "19",
        songName: `Agar Tum Saath Ho <br>
        <div class="subtitle">Alka Yagnik, Arijit Singh</div>`,
        poster: "images/pop3.jpeg"
    },
    {
        id: "20",
        songName: `Radha <br>
        <div class="subtitle">Pritam, Shahid Mallya, Sunidhi Chauhan</div>`,
        poster: "images/pop4.jpeg"
    },
    {
        id: "21",
        songName: `Kabira <br>
        <div class="subtitle">Pritam, Tochi Raina, Rekha Bhardwaj</div>`,
        poster: "images/pop6.jpeg"
    },
]

Array.from(document.getElementsByClassName("songItem")).forEach((e, i) => {
    e.getElementsByTagName("img")[0].src = songs[i].poster;
    e.getElementsByTagName("h5")[0].innerHTML = songs[i].songName;
});

let master_Play = document.getElementById("masterPlay");
let wave = document.getElementById("wave");

master_Play.addEventListener("click", () => {
    if (music.paused || music.currentTime <= 0) {
        music.play();
        wave.classList.add("active1");
        master_Play.classList.remove(' bx-play');
        master_Play.classList.add(' bx-pause');
    } else {
        music.pause();
        wave.classList.remove("active1");
        master_Play.classList.add(' bx-play');
        master_Play.classList.remove(' bx-pause');
    }
}); 

let index = 0;
let  poster_bottom_play = document.getElementById("poster-bottom-play");

Array.from(document.getElementsByClassName("playListplay")).forEach((e) => {
    e.addEventListener("click", (el) => {
         index = el.target.id;
        // console.log(index);
        music.src = `audio/${index}.mp3`;
        poster_bottom_play.src = `img/${index}.jpeg`;
        music.play();
    })
})




















let pop_song_left = document.getElementById("pop-left");
let pop_song_right = document.getElementById("pop-right");
let pop_song = document.getElementsByClassName("pop-song")[0];

pop_song_right.addEventListener("click", () => {
    pop_song.scrollLeft += 300;
});

pop_song_left.addEventListener("click", () => {
    pop_song.scrollLeft -= 300;
});

let pop_art_left = document.getElementById("pop-art-left");
let pop_art_right = document.getElementById("pop-art-right");
let pop_item = document.getElementsByClassName("item")[0];

pop_art_right.addEventListener("click", () => {
    pop_item.scrollLeft += 300;
});

pop_art_left.addEventListener("click", () => {
    pop_item.scrollLeft -= 300;
});