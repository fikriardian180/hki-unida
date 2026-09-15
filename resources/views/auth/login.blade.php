<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Admin - Sentra HKI UNIDA Gontor</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <style>
      :root{
        --purple:#6C5CE7;--black:#1c1c1e;--orange:#FF8A3D;--yellow:#FFD23F;
        --ink:#164e63;--panel-bg:#e9e8ec;
      }
      *{box-sizing:border-box;}
      html,body{margin:0;height:100%;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;background:#f8fafc;}
      body{display:flex;align-items:center;justify-content:center;min-height:100vh;padding:24px;}
      .card{display:flex;width:920px;max-width:100%;height:560px;border-radius:22px;overflow:hidden;box-shadow:0 20px 40px -15px rgba(0,0,0,0.15);background:white;}

      /* LEFT CANVAS */
      .canvas{position:relative;width:50%;background:var(--panel-bg);overflow:hidden;display:none;}
      @media(min-width:720px){.canvas{display:block;}}

      .stage{position:absolute;bottom:52px;left:0;width:100%;height:280px;overflow:hidden;}
      .creature{position:absolute;bottom:0;will-change:transform;}
      .creature svg{display:block;}
      .rig{transform-origin:bottom center;}

      /* Base positions - Sudah digeser lebih ke tengah/kanan */
        #orange{left:15%;z-index:3;}
        #purple{left:33%;z-index:1;}
        #black {left:50%;z-index:2;}
        #yellow{left:59%;z-index:4;}

      /* Entrance keyframes */
      #black.enter  { animation: enter-black  0.7s cubic-bezier(.22,1,.36,1) 0.0s  both; }
      #purple.enter { animation: enter-purple 0.75s cubic-bezier(.22,1,.36,1) 0.18s both; }
      #yellow.enter { animation: enter-yellow 0.65s cubic-bezier(.34,1.56,.64,1) 0.32s both; }
      #orange.enter { animation: enter-orange 0.6s  cubic-bezier(.34,1.56,.64,1) 0.46s both; }

      @keyframes enter-black {
        from{transform:translateY(-280px) translateX(60px) rotate(25deg) scale(0.9);opacity:0;}
        to  {transform:translateY(0) translateX(0) rotate(0deg) scale(1);opacity:1;}
      }
      @keyframes enter-purple {
        0%   {transform:translateY(40px) translateX(-80px) rotate(-45deg) scale(0.5,0.22);opacity:0;}
        55%  {transform:translateY(10px) translateX(-20px) rotate(-20deg) scale(0.75,0.55);opacity:1;}
        100% {transform:translateY(0) translateX(0) rotate(0deg) scale(1,1);opacity:1;}
      }
      @keyframes enter-yellow {
        from{transform:translateY(180px) scale(0.7);opacity:0;}
        to  {transform:translateY(0) scale(1);opacity:1;}
      }
      @keyframes enter-orange {
        0%   {transform:translateY(60px) translateX(-50px) scale(0.32,0.55) rotate(-8deg);opacity:0;}
        60%  {transform:translateY(10px) translateX(-10px) scale(0.7,0.8) rotate(-2deg);opacity:1;}
        100% {transform:translateY(0) translateX(0) scale(1,1) rotate(0deg);opacity:1;}
      }

      .brand{position:absolute;top:28px;left:0;width:100%;text-align:center;font-weight:700;letter-spacing:.02em;color:#164e63;font-size:16px;}
      .caption{position:absolute;bottom:16px;left:0;width:100%;text-align:center;font-size:13px;color:#6b6a70;transition:opacity .15s ease;}

      /* RIGHT FORM */
      .form-side{flex:1;display:flex;align-items:center;justify-content:center;padding:48px 40px;}
      .form-inner{width:100%;max-width:320px;}
      .brand-logo{width:80px;height:auto;margin:0 auto 12px;display:block;}
      h1{font-size:24px;font-weight:700;margin:0 0 4px;color:#1e293b;text-align:center;}
      .subtitle{text-align:center;color:#64748b;font-size:13px;margin:0 0 24px;}
      
      .alert-error {
        background-color: #fef2f2;
        border: 1px solid #fca5a5;
        color: #991b1b;
        padding: 10px 14px;
        border-radius: 8px;
        font-size: 13px;
        margin-bottom: 16px;
      }

      .field{margin-bottom:16px;}
      .field label{display:block;font-size:12px;font-weight:600;color:#475569;margin-bottom:6px;}
      .field-wrap{position:relative;}
      .field input{width:100%;padding:11px 14px;border:1.5px solid #cbd5e1;border-radius:10px;font-size:14px;outline:none;transition:border-color .2s,box-shadow .2s;background:#fff;}
      .field input:focus{border-color:var(--ink);box-shadow:0 0 0 3px rgba(22, 78, 99, 0.15);}
      .field input.pw{padding-right:38px;}
      .eye-toggle{position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;padding:4px;color:#94a3b8;display:flex;}
      .eye-toggle:hover{color:#475569;}
      
      .btn{width:100%;padding:12px;border-radius:10px;border:none;font-size:14px;font-weight:600;cursor:pointer;transition:transform .15s,background .2s;margin-top:8px;}
      .btn-primary{background:var(--ink);color:white;}
      .btn-primary:hover{background:#0e3a4b;}
      .btn-primary:active{transform:scale(.98);}
      
      .back-home{text-align:center;font-size:13px;color:#64748b;margin-top:24px;}
      .back-home a{color:var(--ink);font-weight:600;text-decoration:none;}
    </style>
</head>
<body>
<div class="card">

  <div class="canvas" id="canvas">
    <div class="brand">Sentra HKI UNIDA Gontor</div>
    <div class="stage" id="stage">

      <!-- Orange creature -->
      <div class="creature enter" id="orange">
        <div class="rig" id="orangeRig">
        <svg width="130" height="76" viewBox="0 0 130 76">
          <path d="M0,76 L0,46 C0,18 28,0 65,0 C102,0 130,18 130,46 L130,76 Z" fill="var(--orange)"/>
          <circle cx="38" cy="56" r="7" fill="#e8723a" opacity="0.35"/>
          <circle cx="92" cy="56" r="7" fill="#e8723a" opacity="0.35"/>
          <circle id="oBrowL" cx="48" cy="32" r="2" fill="#1a1a1e" opacity="0"/>
          <circle id="oBrowR" cx="82" cy="32" r="2" fill="#1a1a1e" opacity="0"/>
          <circle class="eyedot" cx="48" cy="40" r="3.6" fill="#1a1a1e"/>
          <circle class="eyedot" cx="82" cy="40" r="3.6" fill="#1a1a1e"/>
          <path id="oMouth" d="M48,53 Q65,62 82,53" stroke="#1a1a1e" stroke-width="3.2" fill="none" stroke-linecap="round"/>
        </svg>
        </div>
      </div>

      <!-- Purple creature -->
      <div class="creature enter" id="purple">
        <div class="rig" id="purpleRig">
        <svg width="86" height="218" viewBox="0 0 86 218">
          <path id="pBody" d="M0,218 L0,24 C0,11 11,0 24,0 L62,0 C75,0 86,11 86,24 L86,218 Z" fill="var(--purple)"/>
          <path id="pBrowL" d="M24,24 L34,18" stroke="#1a1a1e" stroke-width="2.6" stroke-linecap="round" opacity="0"/>
          <path id="pBrowR" d="M52,18 L62,24" stroke="#1a1a1e" stroke-width="2.6" stroke-linecap="round" opacity="0"/>
          <circle class="eyedot" cx="33" cy="26" r="2.8" fill="#1a1a1e"/>
          <circle class="eyedot" cx="53" cy="26" r="2.8" fill="#1a1a1e"/>
          <path id="pMouth" d="M43,38 L43,44" stroke="#1a1a1e" stroke-width="2.6" stroke-linecap="round"/>
        </svg>
        </div>
      </div>

      <!-- Black creature -->
      <div class="creature enter" id="black">
        <div class="rig" id="blackRig">
        <svg width="56" height="232" viewBox="0 0 56 232">
          <rect x="0" y="0" width="56" height="232" rx="12" fill="var(--black)"/>
          <ellipse cx="18" cy="26" rx="6" ry="7" fill="#fff"/>
          <ellipse cx="38" cy="26" rx="6" ry="7" fill="#fff"/>
          <circle class="eyedot" cx="18" cy="27" r="2.6" fill="#1a1a1e"/>
          <circle class="eyedot" cx="38" cy="27" r="2.6" fill="#1a1a1e"/>
          <path id="bMouth" d="M18,44 L38,44" stroke="#fff" stroke-width="2.6" stroke-linecap="round" opacity="0"/>
        </svg>
        </div>
      </div>

      <!-- Yellow creature -->
    <div class="creature enter" id="yellow">
        <div class="rig" id="yellowRig">
            <svg width="62" height="108" viewBox="0 0 62 108">
                <rect x="0" y="0" width="62" height="108" rx="31" fill="var(--yellow)"/>
            <!-- Dua Mata Lingkaran -->
                <circle class="eyedot" cx="22" cy="38" r="3.5" fill="#1a1a1e"/>
                <circle class="eyedot" cx="40" cy="38" r="3.5" fill="#1a1a1e"/>
                <path id="yMouth" d="M20,56 L42,56" stroke="#1a1a1e" stroke-width="2.8" stroke-linecap="round"/>
            </svg>
        </div>
    </div>

    </div>
    <div class="caption" id="caption">Portal Sistem Informasi Admin Sentra HKI</div>
  </div>

  <div class="form-side">
    <div class="form-inner">
      <img src="{{ asset('images/logo-hki.png') }}" alt="Logo HKI" class="brand-logo">
      <h1>Selamat Datang!</h1>
      <p class="subtitle">Masukan identitas anda untuk akses dashboard</p>

      <!-- Menampilkan Error Validasi Laravel -->
      @if ($errors->any())
        <div class="alert-error">
            {{ $errors->first() }}
        </div>
      @endif

      <form action="{{ route('login.post') }}" method="POST" id="loginForm">
        @csrf
        <div class="field">
          <label for="email">Email Admin</label>
          <div class="field-wrap">
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="admin@unida.gontor.ac.id" required autocomplete="off"/>
          </div>
        </div>
        
        <div class="field">
          <label for="password">Kata Sandi</label>
          <div class="field-wrap">
            <input type="password" name="password" id="password" class="pw" placeholder="••••••••" required autocomplete="off"/>
            <button type="button" class="eye-toggle" id="eyeToggle" aria-label="Lihat password">
              <svg id="eyeShow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"/><circle cx="12" cy="12" r="3"/>
              </svg>
              <svg id="eyeHide" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.5 18.5 0 0 1 4.22-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                <line x1="1" y1="1" x2="23" y2="23"/>
              </svg>
            </button>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" id="loginBtn">Masuk Aplikasi</button>
      </form>
      
      <p class="back-home"><a href="{{ url('/') }}">← Kembali ke Halaman Utama</a></p>
    </div>
  </div>

</div>

<script>
(function(){
  const canvas  = document.getElementById('canvas');
  const caption = document.getElementById('caption');
  const emailEl = document.getElementById('email');
  const passEl  = document.getElementById('password');
  const eyeToggle = document.getElementById('eyeToggle');
  const eyeShow = document.getElementById('eyeShow');
  const eyeHide = document.getElementById('eyeHide');
  const loginBtn  = document.getElementById('loginBtn');

  const O_SMILE   = 'M48,53 Q65,62 82,53';
  const O_WORRIED = 'M48,58 Q65,52 82,58';
  const O_NEUTRAL = 'M48,53 Q65,56 82,53';
  const PM_NEUTRAL = 'M43,38 L43,44';
  const PM_WORRIED = 'M40,40 Q43,36 47,41';
  const BM_NEUTRAL = 'M18,44 L38,44';
  const BM_WORRIED = 'M17,42 Q28,38 39,42';
  const YA_N = {x1:33,y1:36,x2:49,y2:32};
  const YA_W = {x1:33,y1:34,x2:47,y2:39};

  const P_NORMAL = 'M0,218 L0,24 C0,11 11,0 24,0 L62,0 C75,0 86,11 86,24 L86,218 Z';
  const P_PANIC  = 'M0,218 L0,38 C0,26 6,20 16,14 C28,6 50,-4 66,6 C76,13 86,22 86,34 L86,218 Z';

  const pBody  = document.getElementById('pBody');
  const pBrowL = document.getElementById('pBrowL');
  const pBrowR = document.getElementById('pBrowR');
  const pMouth = document.getElementById('pMouth');
  const oBrowL = document.getElementById('oBrowL');
  const oBrowR = document.getElementById('oBrowR');
  const oMouth = document.getElementById('oMouth');
  const bMouth = document.getElementById('bMouth');
  const yAnt   = document.getElementById('yAntenna');
  const allEyes = Array.from(document.querySelectorAll('.eyedot'));

  let state = 'idle', pwVisible = false, hopTimer = 0;

  const captions = {
    idle:   'Portal Sistem Informasi Admin Sentra HKI',
    typing: 'Mereka mengawasi saat Anda mengetik...',
    panic:  'Jangan lihat! Ini password rahasia.',
    reveal: 'Oh — baiklah, password terlihat aman.',
    hop:    'Semoga berhasil masuk!',
  };

  const creatures = [
    {
      id:'orange', rig:document.getElementById('orangeRig'),
      fl:{spd:1/3.9,ph:0.4,amp:3.5},
      s:{
        idle:  {y:0,  x:0,  r:0,   sy:1,    sc:1},
        typing:{y:0,  x:0,  r:3,   sy:1,    sc:1},
        panic: {y:0,  x:0,  r:-3,  sy:0.92, sc:1},
        reveal:{y:-3, x:0,  r:0,   sy:1.04, sc:1},
        hop:   {y:-13,x:0,  r:2,   sy:1,    sc:1.04},
      }
    },
    {
      id:'purple', rig:document.getElementById('purpleRig'),
      fl:{spd:1/4.5,ph:0.0,amp:4},
      s:{
        idle:  {y:0,  x:0,  r:0,   sy:1,    sc:1},
        typing:{y:0,  x:0,  r:4,   sy:1,    sc:1},
        panic: {y:0,  x:-4, r:-3,  sy:0.88, sc:1},
        reveal:{y:-8, x:0,  r:0,   sy:1.08, sc:1},
        hop:   {y:-20,x:0,  r:0,   sy:1,    sc:1},
      }
    },
    {
      id:'black', rig:document.getElementById('blackRig'),
      fl:{spd:1/5.1,ph:1.1,amp:3.5},
      s:{
        idle:  {y:0,  x:0, r:0,  sy:1,    sc:1},
        typing:{y:0,  x:0, r:4,  sy:1,    sc:1},
        panic: {y:0,  x:2, r:0,  sy:0.13, sc:1},
        reveal:{y:-6, x:0, r:0,  sy:1.05, sc:1},
        hop:   {y:-17,x:0, r:0,  sy:1,    sc:1},
      }
    },
    {
      id:'yellow', rig:document.getElementById('yellowRig'),
      fl:{spd:1/4.7,ph:1.7,amp:4},
      s:{
        idle:  {y:0,  x:0, r:0,  sy:1,    sc:1},
        typing:{y:0,  x:0, r:-5, sy:1,    sc:1},
        panic: {y:0,  x:0, r:5,  sy:0.94, sc:1},
        reveal:{y:-4, x:0, r:0,  sy:1.06, sc:1},
        hop:   {y:-19,x:0, r:-2, sy:1,    sc:1},
      }
    },
  ];

  const cur = {};
  creatures.forEach(c=>{cur[c.id]={y:0,x:0,r:0,sy:1,sc:1};});

  function lerp(a,b,t){return a+(b-a)*t;}
  function clamp(v,lo,hi){return Math.max(lo,Math.min(hi,v));}

  function tick(){
    const t = performance.now()/1000;
    const isPanic  = state==='panic';
    const isTyping = state==='typing';
    const isHop    = state==='hop';
    if(isHop) hopTimer+=1/60;

    creatures.forEach((c,i)=>{
      const tgt = c.s[state]||c.s.idle;
      const floatAmp = isTyping ? 0.4 : isPanic ? 0 : 1;
      const fy = Math.sin((t+c.fl.ph)*Math.PI*2*c.fl.spd)*c.fl.amp*floatAmp;

      let ty = tgt.y + (isHop?0:fy);
      if(isHop){
        const d = i*0.07;
        const el = Math.max(0,hopTimer-d);
        ty = Math.min(0, Math.sin(el*Math.PI*3.2)*-22);
      }

      const spd = isPanic?0.3 : isTyping?0.16 : 0.12;
      const cv = cur[c.id];
      cv.y  = lerp(cv.y,  ty,    spd);
      cv.x  = lerp(cv.x,  tgt.x, spd);
      cv.r  = lerp(cv.r,  tgt.r, spd);
      cv.sc = lerp(cv.sc, tgt.sc,spd);
      cv.sy = lerp(cv.sy, tgt.sy,spd);

      c.rig.style.transform =
        `translate(${cv.x.toFixed(2)}px,${cv.y.toFixed(2)}px) `+
        `rotate(${cv.r.toFixed(2)}deg) `+
        `scale(${cv.sc.toFixed(3)},${(cv.sy*cv.sc).toFixed(3)})`;
    });
    requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);

  function updateEyes(cx,cy){
    if(state==='panic') return;
    const rect=canvas.getBoundingClientRect();
    const dx=clamp((cx-rect.left-rect.width*.44)/(rect.width/2)*5,-5,5);
    const dy=clamp((cy-rect.top-rect.height*.46)/(rect.height/2)*5,-5,5);
    allEyes.forEach(p=>{p.style.transform=`translate(${dx}px,${dy}px)`;});
  }
  document.addEventListener('mousemove',e=>updateEyes(e.clientX,e.clientY));

  function setCaption(s){
    caption.style.opacity=0;
    setTimeout(()=>{caption.textContent=captions[s]||captions.idle;caption.style.opacity=1;},120);
  }

  function applyFace(s){
    const worried = s==='panic';

    pBody.setAttribute('d', worried?P_PANIC:P_NORMAL);
    pBrowL.setAttribute('opacity', worried?'1':'0');
    pBrowR.setAttribute('opacity', worried?'1':'0');
    pMouth.setAttribute('d', worried?PM_WORRIED:PM_NEUTRAL);

    oBrowL.setAttribute('opacity', worried?'1':'0');
    oBrowR.setAttribute('opacity', worried?'1':'0');

    bMouth.setAttribute('opacity', worried?'1':'0');
    bMouth.setAttribute('d', worried?BM_WORRIED:BM_NEUTRAL);

    if(worried)            oMouth.setAttribute('d',O_WORRIED);
    else if(s==='typing')  oMouth.setAttribute('d',O_NEUTRAL);
    else                   oMouth.setAttribute('d',O_SMILE);

    const ya = worried?YA_W:YA_N;
    yAnt.setAttribute('x1',ya.x1);yAnt.setAttribute('y1',ya.y1);
    yAnt.setAttribute('x2',ya.x2);yAnt.setAttribute('y2',ya.y2);
  }

  function setState(s){
    if(state===s) return;
    if(s==='hop') hopTimer=0;
    state=s;
    applyFace(s);
    setCaption(s);
    if(s!=='panic') allEyes.forEach(p=>{p.style.transform='';});
  }

  emailEl.addEventListener('focus',()=>setState('typing'));
  emailEl.addEventListener('input', ()=>setState('typing'));
  emailEl.addEventListener('blur',  ()=>setState('idle'));

  passEl.addEventListener('focus',()=>setState(pwVisible?'reveal':'panic'));
  passEl.addEventListener('blur', ()=>setState('idle'));

  eyeToggle.addEventListener('click',()=>{
    pwVisible=!pwVisible;
    passEl.type=pwVisible?'text':'password';
    eyeShow.style.display=pwVisible?'none':'block';
    eyeHide.style.display=pwVisible?'block':'none';
    eyeToggle.setAttribute('aria-label',pwVisible?'Sembunyikan password':'Lihat password');
    setState(pwVisible?'reveal':'panic');
    passEl.focus();
  });

  loginBtn.addEventListener('mouseenter',()=>setState('hop'));
  loginBtn.addEventListener('mouseleave',()=>setState('idle'));

  document.querySelectorAll('.creature').forEach(el=>{
    el.addEventListener('animationend',e=>{
      const names=['enter-black','enter-purple','enter-yellow','enter-orange'];
      if(names.includes(e.animationName)) el.classList.remove('enter');
    });
  });
})();
</script>
</body>
</html>