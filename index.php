<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatek Landing Page</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <style>
    :root {
      --text: #111634;
      --muted: #667085;
      --primary: #5b5eff;
      --primary-deep: #0f1b66;
      --surface: #ffffff;
      --line: #eef0ff;
      --bg: #ffffff;
      --glass: rgba(255, 255, 255, 0.72);
    }

    body {
      font-family: Inter, "Segoe UI", Arial, sans-serif;
      color: var(--text);
      background: var(--bg);
      line-height: 1.6;
      letter-spacing: -0.01em;
    }

    .navbar-wrap {
      margin-top: 10px;
      border-radius: 22px;
      border: 1px solid rgba(126, 145, 255, 0.24);
      background: linear-gradient(120deg, rgba(255,255,255,.84), rgba(245,248,255,.72));
      backdrop-filter: blur(12px);
      box-shadow: 0 14px 38px rgba(73, 95, 210, 0.12);
      padding: 10px 18px;
      position: sticky;
      top: 10px;
      z-index: 1040;
      width: 100%;
      transition: top .45s cubic-bezier(.22, 1, .36, 1),
                  border-radius .45s cubic-bezier(.22, 1, .36, 1),
                  margin-top .45s cubic-bezier(.22, 1, .36, 1),
                  padding .45s cubic-bezier(.22, 1, .36, 1),
                  box-shadow .45s cubic-bezier(.22, 1, .36, 1),
                  border-color .45s cubic-bezier(.22, 1, .36, 1),
                  background .45s cubic-bezier(.22, 1, .36, 1);
    }

    .navbar-wrap.is-compact {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      margin-top: 0;
      border-radius: 0;
      border-color: rgba(126, 145, 255, 0.18);
      background: rgba(255, 255, 255, 0.94);
      box-shadow: 0 12px 30px rgba(30, 44, 122, 0.14);
      padding: 8px clamp(14px, 2.4vw, 32px);
    }

    body.header-stuck {
      padding-top: var(--sticky-nav-offset, 0px);
    }

    .navbar {
      padding: 8px 0;
    }

    .navbar .nav-link {
      color: #3d456b;
      font-weight: 500;
      letter-spacing: .01em;
      position: relative;
      padding-inline: 12px !important;
    }

    .navbar .nav-link:hover {
      color: #3347c7;
    }

    .navbar .nav-link::after {
      content: "";
      position: absolute;
      left: 12px;
      right: 12px;
      bottom: 5px;
      height: 2px;
      border-radius: 999px;
      background: linear-gradient(90deg, #6d73ff, #6fc9ff);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .25s ease;
    }

    .navbar .nav-link:hover::after {
      transform: scaleX(1);
    }

    .logo-dot {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      background: linear-gradient(150deg, #3c66ff, #8057ff);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-weight: 700;
    }

    .btn-pill {
      border-radius: 999px;
      padding: 11px 24px;
      font-weight: 600;
    }

    .btn-main {
      background: #04113f;
      border: 1px solid #04113f;
      color: #fff;
      box-shadow: 0 8px 22px rgba(9, 24, 90, 0.22);
    }

    .btn-main:hover {
      background: #0a1d61;
      color: #fff;
    }

    .ai-chip {
      border: 1px solid #dce3ff;
      color: #4f5cc9;
      background: #f7f9ff;
      border-radius: 999px;
      font-size: 11px;
      padding: 6px 10px;
      letter-spacing: .08em;
      text-transform: uppercase;
      font-weight: 700;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      border: 1px solid #e6e9ff;
      border-radius: 999px;
      padding: 6px 14px;
      font-size: 12px;
      color: #656de0;
      font-weight: 700;
      letter-spacing: .03em;
      background: #fff;
    }

    h1.hero-title {
      font-size: clamp(2rem, 4vw, 4rem);
      line-height: 1.06;
      font-weight: 600;
      margin: 18px 0;
      letter-spacing: -0.02em;
    }

    .hero-title .accent {
      background: linear-gradient(90deg, #5f65ff, #5db9ff);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero-sub {
      color: var(--muted);
      max-width: 520px;
      font-size: 1.08rem;
      margin-bottom: 26px;
    }

    .avatar-stack img {
      width: 42px;
      height: 42px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fff;
      margin-left: -8px;
    }

    .avatar-stack img:first-child { margin-left: 0; }

    .hero-art {
      position: relative;
      min-height: 560px;
      display: grid;
      place-items: center;
    }

    .ring {
      width: min(520px, 100%);
      aspect-ratio: 1;
      border-radius: 50%;
      background:
        radial-gradient(circle at 28% 34%, rgba(255,255,255,0.97), rgba(255,255,255,0.2) 28%, transparent 40%),
        conic-gradient(from 140deg, #90b8ff, #6f79ff, #a678ff, #89a4ff, #90b8ff);
      box-shadow: 0 20px 64px rgba(99, 103, 255, 0.35);
      filter: saturate(1.2);
      position: relative;
    }

    .ring::before {
      content: "";
      position: absolute;
      inset: 20%;
      border-radius: 50%;
      background: #fff;
      box-shadow: inset 0 0 30px rgba(140, 150, 255, .26);
    }

    .floating-card {
      position: absolute;
      background: #fff;
      border: 1px solid #ebedff;
      border-radius: 16px;
      padding: 16px;
      box-shadow: 0 12px 35px rgba(86, 101, 241, .14);
    }

    .chart-bars span {
      width: 18px;
      background: linear-gradient(180deg, #7f84ff, #cfccff);
      border-radius: 10px;
      display: inline-block;
      margin-right: 8px;
    }

    .section-card {
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 18px;
      box-shadow: 0 8px 28px rgba(100, 98, 255, .06);
    }

    .logo-row {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 45%, #f5f8ff 100%);
      border: 1px solid rgba(111, 121, 255, 0.14);
    }

    .logo-row::before,
    .logo-row::after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      width: clamp(36px, 8vw, 90px);
      pointer-events: none;
      z-index: 2;
    }

    .logo-row::before {
      left: 0;
      background: linear-gradient(90deg, rgba(248, 249, 255, 1), rgba(248, 249, 255, 0));
    }

    .logo-row::after {
      right: 0;
      background: linear-gradient(270deg, rgba(245, 248, 255, 1), rgba(245, 248, 255, 0));
    }

    .logo-marquee {
      display: flex;
      width: max-content;
      gap: 14px;
      margin-top: 16px;
      animation: logo-marquee 28s linear infinite;
    }

    .logo-row:hover .logo-marquee {
      animation-play-state: paused;
    }

    .logo-chip {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 18px;
      border-radius: 999px;
      border: 1px solid rgba(124, 134, 180, 0.25);
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(6px);
      font-size: 0.97rem;
      letter-spacing: 0.02em;
      color: #4e5985;
      font-weight: 700;
      box-shadow: 0 8px 20px rgba(86, 101, 241, 0.08);
      white-space: nowrap;
    }

    .logo-chip i {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: linear-gradient(140deg, #6f79ff, #8ec5ff);
      box-shadow: 0 0 0 5px rgba(111, 121, 255, 0.12);
      display: inline-block;
    }

    @keyframes logo-marquee {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }

    .metrics-grid {
      position: relative;
      border: 1px solid rgba(130, 145, 255, 0.18);
      border-radius: 28px;
      background:
        radial-gradient(circle at 0% 0%, rgba(125, 131, 255, .16), transparent 55%),
        radial-gradient(circle at 100% 100%, rgba(92, 196, 255, .12), transparent 58%),
        #fff;
      overflow: hidden;
    }

    .metrics-grid::after {
      content: "";
      position: absolute;
      inset: -2px;
      border-radius: inherit;
      background: linear-gradient(130deg, rgba(111, 121, 255, .12), rgba(91, 222, 255, .1), rgba(111, 121, 255, .12));
      filter: blur(24px);
      z-index: -1;
    }

    .mini-stat {
      position: relative;
      padding: 20px 18px;
      border-right: 1px solid rgba(226, 230, 255, 0.9);
      border-bottom: 1px solid rgba(226, 230, 255, 0.9);
      background: linear-gradient(170deg, rgba(255,255,255,.82), rgba(248,250,255,.82));
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    }

    .mini-stat:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 28px rgba(96, 107, 220, 0.14);
      border-color: rgba(164, 175, 255, 0.65);
    }

    .mini-stat-number {
      font-size: clamp(1.6rem, 2.4vw, 2.2rem);
      line-height: 1;
      margin: 0 0 8px;
      font-weight: 700;
      color: #10194b;
      letter-spacing: -0.02em;
      display: flex;
      justify-content: center;
      align-items: baseline;
      gap: 4px;
    }

    .mini-stat-number .suffix {
      font-size: .66em;
      color: #5a66d7;
      font-weight: 600;
    }

    .mini-stat-label {
      margin: 0;
      color: #6f789f;
      font-size: .93rem;
      font-weight: 500;
    }

    .soft-glow {
      position: relative;
      isolation: isolate;
    }

    .soft-glow::before {
      content: "";
      position: absolute;
      inset: -30% -10%;
      z-index: -1;
      background: radial-gradient(circle at 50% 10%, rgba(87,122,255,.26), rgba(87,122,255,0));
      filter: blur(30px);
    }

    .service-card {
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 22px;
      background: #fff;
      height: 100%;
      transition: .25s ease;
    }

    .service-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 28px rgba(100, 98, 255, .15);
    }

    .what-we-do-shell {
      --what-we-do-gutter: clamp(18px, 7vw, 48px);
      --what-we-do-panel-width: min(980px, 86vw);
      background: transparent;
      border: 0;
      border-radius: 0;
      padding: 0;
      width: calc(100% + (50vw - 50%));
      margin-left: 0;
      margin-right: calc(50% - 50vw);
      overflow-x: clip;
    }

    .what-we-do-headline {
      color: #6e6e73;
      font-weight: 600;
      letter-spacing: -0.02em;
      font-size: clamp(1.5rem, 2.8vw, 2.9rem);
    }

    .what-we-do-headline strong {
      color: #111111;
      font-weight: 700;
    }

    .what-we-do-track-wrap {
      position: relative;
      overflow: hidden;
      width: 100%;
      margin-inline: 0;
    }

    .what-we-do-track {
      display: flex;
      gap: 16px;
      overflow-x: auto;
      padding: 0 0 12px;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
    }

    .what-we-do-track::-webkit-scrollbar {
      display: none;
    }

    .what-we-do-panel {
      flex: 0 0 var(--what-we-do-panel-width);
      scroll-snap-align: start;
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 16px;
      align-items: stretch;
    }

    .what-we-do-card {
      border-radius: 18px;
      min-height: 240px;
      background: #f5f5f7;
      border: 0;
      box-shadow: inset 0 0 0 1px rgba(0,0,0,0.02);
      padding: 26px 28px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      color: #1d1d1f;
    }

    .what-we-do-card.wide {
      min-height: 496px;
      justify-content: space-between;
      overflow: hidden;
    }

    .what-we-do-visual {
      margin-top: 16px;
      border-radius: 14px;
      min-height: 220px;
      background-size: cover;
      background-position: center;
    }

    .what-we-do-visual.specialist {
      background-image: linear-gradient(180deg, rgba(237,237,242,0) 30%, rgba(237,237,242,.85)), url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=900&q=80');
    }

    .what-we-do-visual.video {
      background-image: linear-gradient(180deg, rgba(237,237,242,0) 30%, rgba(237,237,242,.85)), url('https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=900&q=80');
    }

    .what-we-do-icon {
      width: 38px;
      height: 38px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      background: transparent;
      margin-bottom: 16px;
    }

    .what-we-do-card h5 {
      font-weight: 600;
      letter-spacing: -0.02em;
      margin: 0;
      font-size: clamp(1.35rem, 2vw, 2.05rem);
      line-height: 1.14;
    }

    .what-we-do-card p {
      margin: 0;
      color: #1d1d1f;
      line-height: 1.15;
      font-size: clamp(1.35rem, 1.9vw, 2rem);
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .tone-teal { color: #007f8a; }
    .tone-green { color: #008009; }
    .tone-violet { color: #8b3df0; }
    .tone-blue { color: #0066cc; }

    .scroll-cursor {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 3;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      border: 0;
      background: rgba(255,255,255,.92);
      box-shadow: 0 8px 24px rgba(0,0,0,.12);
    }

    .scroll-cursor:hover {
      transform: translateY(-50%) scale(1.05);
    }

    .scroll-cursor:disabled {
      opacity: .35;
      cursor: not-allowed;
    }

    .scroll-cursor.left {
      left: 8px;
    }

    .scroll-cursor.right {
      right: 8px;
    }

    .what-we-do-slider {
      width: 100%;
      margin: 6px 0 0;
      padding: 0 4px 10px 0;
    }

    .what-we-do-slider input[type="range"] {
      width: 100%;
      accent-color: #111111;
    }

    .dark-dashboard {
      border-radius: 22px;
      background: radial-gradient(circle at 20% 15%, #283072 0%, #101a4e 35%, #0a1136 100%);
      color: #d9ddff;
      border: 1px solid #313d80;
      box-shadow: 0 24px 45px rgba(53, 56, 164, .34);
    }

    .process-step {
      text-align: left;
      padding: 12px;
    }

    .quote-card {
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 24px;
      height: 100%;
    }

    .cta-band {
      border-radius: 22px;
      color: #fff;
      background: linear-gradient(90deg, #050f3f, #1a29ac, #6238f5);
      overflow: hidden;
      position: relative;
    }

    .cta-band::after {
      content: "";
      position: absolute;
      inset: 0;
      background: repeating-radial-gradient(circle at 100% 0, rgba(255,255,255,.12), rgba(255,255,255,0) 80px);
      opacity: .4;
      pointer-events: none;
    }



    .modern-strip {
      border: 1px solid var(--line);
      border-radius: 24px;
      background: linear-gradient(120deg, rgba(11,22,67,.96), rgba(38,67,170,.88), rgba(89,118,255,.88));
      color: #edf1ff;
      box-shadow: 0 26px 50px rgba(30, 49, 131, .25);
      overflow: hidden;
    }

    .modern-strip .carousel-item {
      min-height: 240px;
    }

    .glass-card {
      background: var(--glass);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255,255,255,.5);
      border-radius: 18px;
      padding: 20px;
      color: #152049;
    }

    .gradient-pill {
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.35);
      padding: 8px 16px;
      font-size: 12px;
      color: #dfe5ff;
      display: inline-flex;
      gap: 8px;
      letter-spacing: .06em;
      text-transform: uppercase;
    }

    .heading-medium {
      font-weight: 600 !important;
      letter-spacing: -0.02em;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
      background-color: rgba(255,255,255,.2);
      border-radius: 50%;
      width: 2.6rem;
      height: 2.6rem;
      background-size: 45% 45%;
    }

    footer a { text-decoration: none; color: #60689a; }

    @media (max-width: 991px) {
      .hero-art { min-height: 420px; margin-top: 16px; }
      .floating-card { transform: scale(.85); }
      .mini-stat { border-right: 0; }
      .scroll-cursor {
        display: none;
      }

      .what-we-do-panel {
        flex-basis: 100%;
        grid-template-columns: 1fr;
      }

      .what-we-do-card.wide {
        min-height: 340px;
      }
    }
  </style>
</head>
<body>
  <div class="container py-2">
    <div class="navbar-wrap">
      <nav class="navbar navbar-expand-lg bg-transparent">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
          <span class="logo-dot">N</span>
          <span>Novatek</span>
          <span class="ai-chip">AI Native Studio</span>
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#topNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="topNav">
          <ul class="navbar-nav mx-auto gap-lg-2">
            <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">AI Labs</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Case Studies</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
          </ul>
          <div class="d-flex gap-2">
            <button class="btn btn-light btn-pill border">📞 Schedule a Call</button>
            <button class="btn btn-main btn-pill">Build with AI →</button>
          </div>
        </div>
      </nav>
    </div>

    <section class="pt-4 pt-lg-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <span class="tag">✦ SOFTWARE. DESIGN. INNOVATION.</span>
          <h1 class="hero-title">Building next-gen digital products that accelerate <span class="accent">business growth.</span></h1>
          <p class="hero-sub">We partner with startups and enterprises to build scalable, secure, and high-performance digital products that drive real impact.</p>
          <div class="d-flex flex-wrap gap-3 mb-4">
            <button class="btn btn-main btn-pill">Start a Project →</button>
            <button class="btn btn-light btn-pill border">▶ Watch Video</button>
          </div>
          <div class="d-flex flex-wrap align-items-center gap-4">
            <div class="d-flex align-items-center avatar-stack">
              <img src="https://i.pravatar.cc/60?img=12" alt="" />
              <img src="https://i.pravatar.cc/60?img=18" alt="" />
              <img src="https://i.pravatar.cc/60?img=4" alt="" />
              <img src="https://i.pravatar.cc/60?img=5" alt="" />
              <img src="https://i.pravatar.cc/60?img=30" alt="" />
            </div>
            <div><strong>250+ Happy Clients</strong><br /><small class="text-secondary">worldwide</small></div>
            <div><strong class="text-warning">★★★★★</strong><br /><small class="text-secondary">4.9/5 from 800+ reviews</small></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-art">
            <div class="ring"></div>
            <div class="floating-card" style="left: 5%; top: 8%; width: 170px;">
              <small class="text-secondary">Performance</small>
              <div class="fs-3 fw-bold">98.6%</div>
              <small class="text-success">↑ 12.8% this month</small>
            </div>
            <div class="floating-card" style="left: 15%; bottom: 20%; width: 300px;">
              <small class="text-secondary">Analytics Overview</small>
              <div class="fs-4 fw-bold">$24,850.00</div>
              <div class="chart-bars mt-2 d-flex align-items-end" style="height:80px">
                <span style="height:20%"></span><span style="height:36%"></span><span style="height:52%"></span><span style="height:30%"></span><span style="height:72%"></span><span style="height:92%"></span>
              </div>
            </div>
            <div class="floating-card text-center" style="right: 2%; top: 34%; width: 170px;">
              <small class="text-secondary">Project Completion</small>
              <div class="display-6 fw-bold text-primary">72%</div>
              <small class="text-secondary">On Track</small>
            </div>
            <div class="floating-card" style="right: 6%; bottom: 12%; width: 190px;">
              <small class="text-secondary">Security</small>
              <div class="fw-semibold">Your data is safe ✅</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-card p-4 mt-4 logo-row">
      <small class="text-uppercase text-primary fw-bold">Trusted by Innovative Companies</small>
      <div class="logo-marquee" aria-label="Trusted companies" data-logo-marquee>
        <span class="logo-chip"><i></i>Google</span><span class="logo-chip"><i></i>Microsoft</span><span class="logo-chip"><i></i>Airbnb</span><span class="logo-chip"><i></i>Amazon</span><span class="logo-chip"><i></i>Uber</span><span class="logo-chip"><i></i>Slack</span><span class="logo-chip"><i></i>Shopify</span><span class="logo-chip"><i></i>Notion</span><span class="logo-chip"><i></i>Stripe</span><span class="logo-chip"><i></i>Figma</span>
      </div>
    </section>

   

    <section class="mt-5 what-we-do-shell">
      <div class="px-0">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
          <div>
            <h2 class="what-we-do-headline mb-0"><strong>Nove Tech next Gen.</strong> Even more reasons to with us.</h2>
          </div>
        </div>
      </div>
      <div class="what-we-do-track-wrap">
        <button class="scroll-cursor left" type="button" aria-label="Scroll left" data-scroll-left>←</button>
        <div class="what-we-do-track" data-what-we-do-track>
          <div class="what-we-do-panel">
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-teal">🎓</div>
              <p><span class="tone-teal">Save with special pricing</span> for college students and educators.</p>
            </article>
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-green">🖥</div>
              <p><span class="tone-green">Customize your Mac</span> with chip, memory, storage, and color.</p>
            </article>
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-violet">☺</div>
              <p>Make them yours. <span class="tone-violet">Engrave a mix of emoji, names, and numbers for free.</span></p>
            </article>
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-blue">⇄</div>
              <p><span class="tone-blue">Trade in your current device.</span> Get credit toward a new one.</p>
            </article>
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-green">💳</div>
              <p>Pay in full or <span class="tone-green">pay over time.</span> Your choice.</p>
            </article>
            <article class="what-we-do-card">
              <div class="what-we-do-icon tone-green">⌚</div>
              <p><span class="tone-green">Choose a case. Pick a band.</span> Make an Apple Watch just for you.</p>
            </article>
          </div>

          <div class="what-we-do-panel">
            <article class="what-we-do-card wide" style="grid-column: span 2;">
              <div>
                <small class="text-uppercase fw-semibold text-secondary">Apple Specialist</small>
                <p class="mt-2">Shop one on one with a Specialist. Online or in a store.</p>
              </div>
              <div class="what-we-do-visual specialist"></div>
            </article>
            <article class="what-we-do-card wide">
              <div>
                <small class="text-uppercase fw-semibold text-secondary">Shop with a Specialist over video.</small>
                <p class="mt-2">Choose your next device in a guided video session.</p>
              </div>
              <div class="what-we-do-visual video"></div>
            </article>
          </div>

          <div class="what-we-do-panel">
            <article class="what-we-do-card wide" style="grid-column: span 3;">
              <div>
                <small class="text-uppercase fw-semibold text-secondary">Free delivery and pickup</small>
                <p class="mt-2">Get same-day delivery in select areas, or pick up your order in-store.</p>
              </div>
              <div class="what-we-do-visual" style="background-image: linear-gradient(180deg, rgba(237,237,242,0) 30%, rgba(237,237,242,.85)), url('https://images.unsplash.com/photo-1556740758-90de374c12ad?auto=format&fit=crop&w=1400&q=80');"></div>
            </article>
          </div>
        </div>
        <button class="scroll-cursor right" type="button" aria-label="Scroll right" data-scroll-right>→</button>
      </div>
      <div class="what-we-do-slider">
        <input type="range" min="0" max="100" value="0" step="1" aria-label="Slide to see more" data-what-we-do-slider>
      </div>
    </section>
     <section class="metrics-grid p-2 p-md-3 mt-4">
      <div class="row g-2 text-center">
        <div class="col-md-6 col-lg mini-stat">
          <h3 class="mini-stat-number"><span data-counter data-target="250" data-decimals="0">0</span><span class="suffix">+</span></h3>
          <p class="mini-stat-label">Projects Completed</p>
        </div>
        <div class="col-md-6 col-lg mini-stat">
          <h3 class="mini-stat-number"><span data-counter data-target="150" data-decimals="0">0</span><span class="suffix">+</span></h3>
          <p class="mini-stat-label">Happy Clients</p>
        </div>
        <div class="col-md-6 col-lg mini-stat">
          <h3 class="mini-stat-number"><span data-counter data-target="10" data-decimals="0">0</span><span class="suffix">+</span></h3>
          <p class="mini-stat-label">Years of Experience</p>
        </div>
        <div class="col-md-6 col-lg mini-stat">
          <h3 class="mini-stat-number"><span data-counter data-target="99.9" data-decimals="1">0</span><span class="suffix">%</span></h3>
          <p class="mini-stat-label">Uptime & Reliability</p>
        </div>
        <div class="col-12 mini-stat">
          <h3 class="mini-stat-number">24/7</h3>
          <p class="mini-stat-label">Support Available</p>
        </div>
      </div>
    </section>

    <section class="mt-5">
      <div class="row g-4 align-items-center">
        <div class="col-lg-4">
          <small class="text-uppercase text-primary fw-bold">Why choose novatek</small>
          <h2 class="heading-medium">Technology. Innovation. Results.</h2>
          <p class="text-secondary">We combine cutting-edge technologies with best practices to deliver solutions that drive real impact.</p>
          <ul class="list-unstyled text-secondary">
            <li>✓ Agile Development Process</li>
            <li>✓ Scalable & Secure Architecture</li>
            <li>✓ On-Time Delivery</li>
            <li>✓ Transparent Communication</li>
          </ul>
          <button class="btn btn-main btn-pill mt-2">More about us →</button>
        </div>
        <div class="col-lg-8">
          <div class="dark-dashboard p-4">
            <h4 class="mb-4">Overview</h4>
            <div class="row g-3 mb-3">
              <div class="col-6 col-md-3"><div class="section-card p-3 bg-transparent border-secondary-subtle text-light"><small>Total Projects</small><div class="h4">128</div></div></div>
              <div class="col-6 col-md-3"><div class="section-card p-3 bg-transparent border-secondary-subtle text-light"><small>Active Clients</small><div class="h4">84</div></div></div>
              <div class="col-6 col-md-3"><div class="section-card p-3 bg-transparent border-secondary-subtle text-light"><small>Success Rate</small><div class="h4">98.6%</div></div></div>
              <div class="col-6 col-md-3"><div class="section-card p-3 bg-transparent border-secondary-subtle text-light"><small>Revenue</small><div class="h4">$24.8k</div></div></div>
            </div>
            <div class="section-card p-4 bg-transparent border-secondary-subtle text-light" style="height:210px">Project Activity<br/><div class="mt-3" style="height:120px;background:linear-gradient(180deg,rgba(125,114,255,.4),rgba(125,114,255,0));border-radius:12px"></div></div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="modern-strip mt-5 p-4 p-md-5">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
        <div>
          <span class="gradient-pill">Modern Product Slider</span>
          <h2 class="heading-medium mt-3 mb-1 text-white">Apple-inspired, sleek product moments.</h2>
          <p class="mb-0 text-white-50">Slide through capabilities designed for clarity, speed, and premium visual feel.</p>
        </div>
      </div>
      <div id="insightSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row g-3 align-items-center">
              <div class="col-lg-7">
                <h3 class="heading-medium text-white">Realtime Tech Intelligence</h3>
                <p class="text-white-50">Watch product metrics update live with low-latency pipelines and readable dashboards for every team.</p>
              </div>
              <div class="col-lg-5">
                <div class="glass-card">
                  <small class="text-secondary">Latency</small>
                  <div class="display-6 heading-medium">42ms</div>
                  <small>Global infrastructure optimized for instant response.</small>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-3 align-items-center">
              <div class="col-lg-7">
                <h3 class="heading-medium text-white">Immersive Visual Layer</h3>
                <p class="text-white-50">Modern gradients, balanced spacing, and medium-weight typography for effortless reading across devices.</p>
              </div>
              <div class="col-lg-5">
                <div class="glass-card">
                  <small class="text-secondary">Design score</small>
                  <div class="display-6 heading-medium">97/100</div>
                  <small>Accessibility first color contrast with premium aesthetics.</small>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-3 align-items-center">
              <div class="col-lg-7">
                <h3 class="heading-medium text-white">Secure Cloud Foundation</h3>
                <p class="text-white-50">Enterprise-grade architecture with reliable scaling, smart automation, and clear operational control.</p>
              </div>
              <div class="col-lg-5">
                <div class="glass-card">
                  <small class="text-secondary">Availability</small>
                  <div class="display-6 heading-medium">99.99%</div>
                  <small>Resilient systems engineered for mission-critical launches.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#insightSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#insightSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="mt-5">
      <small class="text-uppercase text-primary fw-bold">Why process</small>
      <h2 class="heading-medium">A seamless process from<br/>idea to launch</h2>
      <div class="row mt-2 g-2">
        <div class="col-md-2"><div class="process-step"><strong>01</strong><div>Discover</div><small class="text-secondary">Know your goals.</small></div></div>
        <div class="col-md-2"><div class="process-step"><strong>02</strong><div>Plan</div><small class="text-secondary">Roadmap strategy.</small></div></div>
        <div class="col-md-2"><div class="process-step"><strong>03</strong><div>Design</div><small class="text-secondary">Create UI/UX.</small></div></div>
        <div class="col-md-2"><div class="process-step"><strong>04</strong><div>Develop</div><small class="text-secondary">Build solutions.</small></div></div>
        <div class="col-md-2"><div class="process-step"><strong>05</strong><div>Test</div><small class="text-secondary">Ensure quality.</small></div></div>
        <div class="col-md-2"><div class="process-step"><strong>06</strong><div>Launch</div><small class="text-secondary">Deploy and support.</small></div></div>
      </div>
    </section>

    <section class="mt-5">
      <div class="d-flex justify-content-between align-items-end">
        <div>
          <small class="text-uppercase text-primary fw-bold">Testimonials</small>
          <h2 class="heading-medium">Loved by teams<br/>around the world.</h2>
        </div>
        <a href="#" class="text-decoration-none fw-semibold">View all testimonials →</a>
      </div>
      <div class="row g-3 mt-1">
        <div class="col-md-4"><div class="quote-card"><p>“Novatek transformed our idea into a powerful product. Their team is professional, responsive, and truly cares.”</p><strong>Sarah Johnson</strong><br><small class="text-secondary">CEO, TechNova</small></div></div>
        <div class="col-md-4"><div class="quote-card"><p>“The quality of work and attention to detail is exceptional. They delivered on time and exceeded expectations.”</p><strong>Michael Chen</strong><br><small class="text-secondary">CTO, DataFlow</small></div></div>
        <div class="col-md-4"><div class="quote-card"><p>“Amazing team! They understood our requirements perfectly and built a solution that scaled our business.”</p><strong>David Wilson</strong><br><small class="text-secondary">Founder, Shoply</small></div></div>
      </div>
    </section>

    <section class="cta-band mt-4 p-4 p-md-5 d-flex flex-wrap justify-content-between align-items-center gap-3">
      <div>
        <small class="text-uppercase">Ready to get started?</small>
        <h2 class="mb-1 heading-medium">Let's build something amazing together.</h2>
        <p class="mb-0 text-white-50">Share your idea with us and let's create a digital solution that drives results.</p>
      </div>
      <button class="btn btn-light btn-pill px-4">Start a Project →</button>
    </section>

    <footer class="py-5">
      <div class="row g-4">
        <div class="col-lg-3">
          <div class="d-flex align-items-center gap-2 fw-bold fs-4"><span class="logo-dot">N</span> Novatek</div>
          <p class="text-secondary mt-3">We build digital products that help businesses grow, scale, and succeed in the digital world.</p>
        </div>
        <div class="col-6 col-lg-2"><h6>Services</h6><a href="#">Web Development</a><br><a href="#">Mobile Apps</a><br><a href="#">UI/UX Design</a><br><a href="#">Cloud</a></div>
        <div class="col-6 col-lg-2"><h6>Company</h6><a href="#">About Us</a><br><a href="#">Our Work</a><br><a href="#">Careers</a><br><a href="#">Contact</a></div>
        <div class="col-6 col-lg-2"><h6>Resources</h6><a href="#">Documentation</a><br><a href="#">Case Studies</a><br><a href="#">FAQs</a><br><a href="#">Privacy Policy</a></div>
        <div class="col-6 col-lg-3"><h6>Newsletter</h6><p class="text-secondary">Get the latest updates and insights from our team.</p><div class="input-group"><input class="form-control" placeholder="Enter your email"><button class="btn btn-primary">➤</button></div></div>
      </div>
      <div class="text-center text-secondary mt-4">© 2026 Novatek. All rights reserved.</div>
    </footer>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script>
    (() => {
      const navWrap = document.querySelector('.navbar-wrap');
      if (!navWrap) return;

      let ticking = false;

      const syncStickyState = () => {
        const shouldStick = window.scrollY > 36;
        navWrap.classList.toggle('is-compact', shouldStick);

        if (shouldStick) {
          document.body.style.setProperty('--sticky-nav-offset', `${navWrap.offsetHeight + 10}px`);
          document.body.classList.add('header-stuck');
        } else {
          document.body.style.setProperty('--sticky-nav-offset', '0px');
          document.body.classList.remove('header-stuck');
        }

        ticking = false;
      };

      window.addEventListener('scroll', () => {
        if (!ticking) {
          window.requestAnimationFrame(syncStickyState);
          ticking = true;
        }
      }, { passive: true });

      window.addEventListener('resize', syncStickyState);
      syncStickyState();
    })();

    (() => {
      const marquee = document.querySelector('[data-logo-marquee]');
      if (!marquee) return;
      marquee.innerHTML += marquee.innerHTML;
    })();

    (() => {
      const track = document.querySelector('[data-what-we-do-track]');
      const range = document.querySelector('[data-what-we-do-slider]');
      const leftBtn = document.querySelector('[data-scroll-left]');
      const rightBtn = document.querySelector('[data-scroll-right]');
      if (!track || !range || !leftBtn || !rightBtn) return;

      const updateControls = () => {
        const max = Math.max(track.scrollWidth - track.clientWidth, 0);
        const progress = max > 0 ? (track.scrollLeft / max) * 100 : 0;
        range.value = progress;
        leftBtn.disabled = track.scrollLeft <= 4;
        rightBtn.disabled = track.scrollLeft >= max - 4;
      };

      range.addEventListener('input', () => {
        const max = Math.max(track.scrollWidth - track.clientWidth, 0);
        track.scrollLeft = (Number(range.value) / 100) * max;
      });

      const scrollByPanel = (direction) => {
        const panel = track.querySelector('.what-we-do-panel');
        const panelWidth = panel ? panel.getBoundingClientRect().width + 16 : track.clientWidth * 0.9;
        track.scrollBy({ left: direction * panelWidth, behavior: 'smooth' });
      };

      leftBtn.addEventListener('click', () => scrollByPanel(-1));
      rightBtn.addEventListener('click', () => scrollByPanel(1));
      track.addEventListener('scroll', updateControls, { passive: true });
      window.addEventListener('resize', updateControls);
      updateControls();
    })();

    (() => {
      const counterEls = document.querySelectorAll('[data-counter]');
      if (!counterEls.length) return;

      const animateCounter = (el) => {
        const target = Number(el.dataset.target || 0);
        const decimals = Number(el.dataset.decimals || 0);
        const duration = 1500;
        const start = performance.now();

        const step = (now) => {
          const progress = Math.min((now - start) / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          const value = target * eased;
          el.textContent = value.toFixed(decimals);
          if (progress < 1) requestAnimationFrame(step);
        };

        requestAnimationFrame(step);
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        });
      }, { threshold: 0.45 });

      counterEls.forEach((el) => observer.observe(el));
    })();

  </script>
</body>
</html>
