import{m as y}from"./module.esm-9e7b5893.js";window.Alpine=y;y.start();const a=document.querySelector(".at-wrap"),f=a.querySelector(".at-main"),m=document.getElementById("song");console.log(m.innerHTML);const h={file:m.innerHTML,player:{enablePlayer:!0,soundFont:"https://cdn.jsdelivr.net/npm/@coderline/alphatab@latest/dist/soundfont/sonivox.sf2",scrollElement:a.querySelector(".at-viewport")}},t=new alphaTab.AlphaTabApi(f,h),g=a.querySelector(".at-overlay");t.renderStarted.on(()=>{g.style.display="flex"});t.renderFinished.on(()=>{g.style.display="none"});function v(e){const o=document.querySelector("#at-track-template").content.cloneNode(!0).firstElementChild;return o.querySelector(".at-track-name").innerText=e.name,o.track=e,o.onclick=n=>{n.stopPropagation(),t.renderTracks([e])},o}const l=a.querySelector(".at-track-list");t.scoreLoaded.on(e=>{l.innerHTML="",e.tracks.forEach(o=>{l.appendChild(v(o))})});t.renderStarted.on(()=>{const e=new Map;t.tracks.forEach(n=>{e.set(n.index,n)}),l.querySelectorAll(".at-track").forEach(n=>{e.has(n.track.index)?n.classList.add("active"):n.classList.remove("active")})});t.scoreLoaded.on(e=>{a.querySelector(".at-song-title").innerText=e.title,a.querySelector(".at-song-artist").innerText=e.artist});const s=a.querySelector(".at-controls .at-count-in");s.onclick=()=>{s.classList.toggle("active"),s.classList.contains("active")?t.countInVolume=1:t.countInVolume=0};const r=a.querySelector(".at-controls .at-metronome");r.onclick=()=>{r.classList.toggle("active"),r.classList.contains("active")?t.metronomeVolume=1:t.metronomeVolume=0};const c=a.querySelector(".at-controls .at-loop");c.onclick=()=>{c.classList.toggle("active"),t.isLooping=c.classList.contains("active")};a.querySelector(".at-controls .at-print").onclick=()=>{t.print()};const d=a.querySelector(".at-controls .at-zoom select");d.onchange=()=>{const e=parseInt(d.value)/100;t.settings.display.scale=e,t.updateSettings(),t.render()};const u=a.querySelector(".at-controls .at-layout select");u.onchange=()=>{switch(u.value){case"horizontal":t.settings.display.layoutMode=alphaTab.LayoutMode.Horizontal;break;case"page":t.settings.display.layoutMode=alphaTab.LayoutMode.Page;break}t.updateSettings(),t.render()};const S=a.querySelector(".at-controls .at-player-progress");t.soundFontLoad.on(e=>{const o=Math.floor(e.loaded/e.total*100);S.innerText=o+"%"});t.playerReady.on(()=>{S.style.display="none"});const i=a.querySelector(".at-controls .at-player-play-pause"),L=a.querySelector(".at-controls .at-player-stop");i.onclick=e=>{e.target.classList.contains("disabled")||t.playPause()};L.onclick=e=>{e.target.classList.contains("disabled")||t.stop()};t.playerReady.on(()=>{i.classList.remove("disabled"),L.classList.remove("disabled")});t.playerStateChanged.on(e=>{const o=i.querySelector("i.fas");e.state===alphaTab.synth.PlayerState.Playing?(o.classList.remove("fa-play"),o.classList.add("fa-pause")):(o.classList.remove("fa-pause"),o.classList.add("fa-play"))});function p(e){let o=e/1e3;const n=o/60|0;return o=o-n*60|0,String(n).padStart(2,"0")+":"+String(o).padStart(2,"0")}const q=a.querySelector(".at-song-position");let k=-1;t.playerPositionChanged.on(e=>{(e.currentTime/1e3|0)!=k&&(q.innerText=p(e.currentTime)+" / "+p(e.endTime))});
