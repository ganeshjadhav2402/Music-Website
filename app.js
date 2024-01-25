const music = new Audio("audio/heat.mp3");
// music.play();

const songs = [
  {
    id: "1",
    songName: `On My Way <br><div class="subtitle">Alan Walker</div>`,
    poster: "images/1.jpeg"
  },
  {
    id: "2",
    songName: `Ravensthorpe <br><div class="subtitle">Sarah Schahcner, Assassin's Creed</div>`,
    poster: "images/2.jpeg"
  },
  {
    id: "3",
    songName: `Sweater Weather <br><div class="subtitle">The Neighbourhood</div>`,
    poster: "images/3.jpeg"
  },
  {
    id: "4",
    songName: `Ava <br><div class="subtitle">Danil Muzik</div>`,
    poster: "images/4.jpeg"
  },
  {
    id: "5",
    songName: `After Hours <br><div class="subtitle">The Weekend</div>`,
    poster: "images/5.jpeg"
  },
  {
    id: "6",
    songName: `Gangsta's Paradie <br><div class="subtitle">Coolio, L.V.</div>`,
    poster: "images/6.jpeg"
  },
  {
    id: "7",
    songName: `Satya <br><div class="subtitle">DIVINE</div>`,
    poster: "images/7.jpeg"
  },
  {
    id: "8",
    songName: `Spirits <br><div class="subtitle">The Strumbellas</div>`,
    poster: "images/8.jpeg"
  },
  {
    id: "9",
    songName: `Teesri Manzil <br><div class="subtitle">DIVINE</div>`,
    poster: "images/9.jpeg"
  },
  {
    id: "10",
    songName: `Selish Love (with Selena Gomez) <br><div class="subtitle">DJ Snake, Selena Gomez</div>`,
    poster: "images/10.jpeg"
  },
  {
    id: "11",
    songName: `We Don't Talk Anymore (feat. Selena Gomez) <br><div class="subtitle">Charlie Puth, Selena Gomez</div>`,
    poster: "images/11.jpeg"
  },
  {
    id: "12",
    songName: `Alone <br><div class="subtitle">Alan Walker</div>`,
    poster: "images/12.jpeg"
  },
  {
    id: "13",
    songName: `Peaches (feat. Daniel Caeser & Giveon) <br><div class="subtitle">Justin Bieber, Daniel Caeser, Giveon</div>`,
    poster: "images/13.jpeg"
  },
  {
    id: "14",
    songName: `Play Date <br><div class="subtitle">Melaine Martinez</div>`,
    poster: "images/14.jpeg"
  },
  {
    id: "15",
    songName: `Shower <br><div class="subtitle">Becky G</div>`,
    poster: "images/15.jpeg"
  },
  {
    id: "16",
    songName: `Arjan Vailly (From "ANIMAL") <br><div class="subtitle">Manan Bhardwaj, Bhupinder Babbal</div>`,
    poster: "images/16.jpeg"
  },
  {
    id: "17",
    songName: `Chaleya <br><div class="subtitle">Anirudh Ravichander, Arijit Singh, Shilpa Rao, Kumaar</div>`,
    poster: "images/17.jpeg"
  },
  {
    id: "18",
    songName: `Agar Tum Saath Ho <br><div class="subtitle">Alka Yagnik, Arijit Singh</div>`,
    poster: "images/18.jpeg"
  },
  {
    id: "19",
    songName: `Radha <br><div class="subtitle">Pritam, Shahid Mallya, Sunidhi Chauhan</div>`,
    poster: "images/19.jpeg"
  },
  {
    id: "20",
    songName: `Kabira <br><div class="subtitle">Pritam, Tochi Raina, Rekha Bhardwaj</div>`,
    poster: "images/20.jpeg"
  },
  {
    id: "21",
    songName: `Mera Mann Kehen Laga <br><div class="subtitle">Falak Shabbir</div>`,
    poster: "images/21.jpeg"
  }
];

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
    master_Play.classList.remove("bx-play");
    master_Play.classList.add("bx-pause");
  } else {
    music.pause();
    wave.classList.remove("active1");
    master_Play.classList.add("bx-play");
    master_Play.classList.remove("bx-pause");
  }
});

const makeAllplays = () => {
  Array.from(document.getElementsByClassName("playListplay")).forEach(el => {
    el.classList.add("bxs-caret-right-circle");
    el.classList.remove("bx-pause-circle");
  });
};
const makeAllBackground = () => {
  Array.from(document.getElementsByClassName("songItem")).forEach(el => {
    el.style.background = "rgb(105, 105, 105, .0)";
  });
};

let index = 0;
let poster_bottom_play = document.getElementById("poster-bottom-play");
let title = document.getElementById("title");

Array.from(document.getElementsByClassName("playListplay")).forEach(e => {
  e.addEventListener("click", el => {
    index = el.target.id;
    // console.log(index);
    music.src = `audio/${index}.mp3`;
    poster_bottom_play.src = `images/${index}.jpeg`;
    music.play();
    master_Play.classList.remove("bx-play");
    master_Play.classList.add("bx-pause");

    let songTitles = songs.filter(els => {
      return els.id == index;
    });

    songTitles.forEach(elss => {
      let { songName } = elss;
      title.innerHTML = songName;
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName("songItem"))[
      index - 1
    ].style.background =
      "rgb(105, 105, 105, .2)";
    makeAllplays();
    el.target.classList.remove("bxs-caret-right-circle");
    el.target.classList.add("bx-pause-circle");
    wave.classList.add("active1");
  });
});

let currentStart = document.getElementById("currStart");
let currentEnd = document.getElementById("currEnd");
let seek = document.getElementById("seek");
let bar2 = document.getElementById("bar2");
let dot = document.getElementsByClassName("dot")[0];

music.addEventListener("timeupdate", () => {
  let music_curr = music.currentTime;
  let music_dur = music.duration;
  // console.log(music_dur);

  let min1 = Math.floor(music_dur / 60);
  let sec1 = Math.floor(music_dur % 60);

  if (sec1 < 0) {
    sec1 = `0${sec1}`;
  }
  currentEnd.innerText = `${min1}:${sec1}`;

  let min2 = Math.floor(music_curr / 60);
  let sec2 = Math.floor(music_curr % 60);
  if (sec2 < 10) {
    sec2 = `0${sec2}`;
  }
  currentStart.innerText = `${min2}:${sec2}`;

  let progressBar = parseInt(music_curr / music_dur * 100);
  seek.value = progressBar;
  let seekbar = seek.value;
  bar2.style.width = `${seekbar}%`;
  dot.style.left = `${seekbar}%`;
});

seek.addEventListener("change", () => {
  music.currentTime = seek.value * music.duration / 100;
});

let vol_icon = document.getElementById("vol-icon");
let vol = document.getElementById("vol");
let vol_bar = document.getElementsByClassName("vol-bar")[0];
let vol_dot = document.getElementById("vol-dot");

vol.addEventListener("change", () => {
  if (vol.value == 0) {
    vol_icon.classList.remove("bxs-volume-full");
    vol_icon.classList.remove("bxs-volume-low");
    vol_icon.classList.add("bxs-volume-mute");
  }
  if (vol.value > 0) {
    vol_icon.classList.remove("bxs-volume-full");
    vol_icon.classList.add("bxs-volume-low");
    vol_icon.classList.remove("bxs-volume-mute");
  }
  if (vol.value > 50) {
    vol_icon.classList.add("bxs-volume-full");
    vol_icon.classList.remove("bxs-volume-low");
    vol_icon.classList.remove("bxs-volume-mute");
  }
  let vol_a = vol.value;
  vol_bar.style.width = `${vol_a}%`;
  vol_dot.style.left = `${vol_a}%`;
  music.volume = vol_a / 100;
});


let back = document.getElementById("back");
let next = document.getElementById("next");

back.addEventListener("click", () => {
  index -= 1;
  if (index < 1) {
    index = Array.from(document.getElementsByClassName("songItem")).length;
  }
  music.src = `audio/${index}.mp3`;
    poster_bottom_play.src = `images/${index}.jpeg`;
    music.play();
    master_Play.classList.remove("bx-play");
    master_Play.classList.add("bx-pause");
    wave.classList.add("active1");


    let songTitles = songs.filter(els => {
      return els.id == index;
    });

    songTitles.forEach(elss => {
      let { songName } = elss;
      title.innerHTML = songName;
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName("songItem"))[
      index - 1
    ].style.background =
      "rgb(105, 105, 105, .2)";
    makeAllplays();
    el.target.classList.remove("bxs-caret-right-circle");
    el.target.classList.add("bx-pause-circle");
    wave.classList.add("active1");
  
});

next.addEventListener("click", () => {
  index++;
  if (index > Array.from(document.getElementsByClassName("songItem")).length) {
    index = 1;
  }
  music.src = `audio/${index}.mp3`;
    poster_bottom_play.src = `images/${index}.jpeg`;
    music.play();
    master_Play.classList.remove("bx-play");
    master_Play.classList.add("bx-pause");
    wave.classList.add("active1");


    let songTitles = songs.filter(els => {
      return els.id == index;
    });

    songTitles.forEach(elss => {
      let { songName } = elss;
      title.innerHTML = songName;
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName("songItem"))[
      index - 1
    ].style.background =
      "rgb(105, 105, 105, .2)";
    makeAllplays();
    el.target.classList.remove("bxs-caret-right-circle");
    el.target.classList.add("bx-pause-circle");
    wave.classList.add("active1");
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
