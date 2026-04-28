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

    .logo-row span {
      font-size: 1.55rem;
      color: #7d84ab;
      font-weight: 700;
      opacity: .8;
    }

    .mini-stat {
      border-right: 1px solid #eff1ff;
      padding: 10px 20px;
    }

    .mini-stat:last-child { border-right: 0; }

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
      background: transparent;
      border: 0;
      border-radius: 0;
      padding: 0;
      width: 100%;
      margin-inline: 0;
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
      overflow-x: clip;
    }

    .what-we-do-scroll-zone {
      position: relative;
      height: auto;
    }

    .what-we-do-sticky {
      position: static;
    }

    .what-we-do-track {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
      overflow: hidden;
      padding: 10px clamp(18px, 7vw, 48px) 12px;
      transform: none !important;
    }

    .what-we-do-track::-webkit-scrollbar {
      display: none;
    }

    .what-we-do-card {
      scroll-snap-align: start;
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
      display: none;
    }

    .scroll-cursor:hover {
      transform: translateY(-50%) scale(1.05);
    }

    .scroll-cursor:disabled {
      opacity: 0;
      pointer-events: none;
    }

    .scroll-cursor.left {
      left: -10px;
    }

    .scroll-cursor.right {
      right: -10px;
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
      .mini-stat { border-right: 0; border-bottom: 1px solid #eff1ff; }
      .scroll-cursor {
        display: none;
      }

      .what-we-do-track {
        grid-template-columns: 1fr;
        overflow: hidden;
        padding-inline: 14px;
      }

      .what-we-do-scroll-zone {
        height: auto !important;
      }

      .what-we-do-sticky {
        position: static;
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
      <div class="d-flex justify-content-between flex-wrap mt-3 gap-3">
        <span>Google</span><span>Microsoft</span><span>airbnb</span><span>amazon</span><span>Uber</span><span>slack</span><span>shopify</span><span>Notion</span>
      </div>
    </section>

    <section class="section-card p-2 p-md-4 mt-4">
      <div class="row g-2 text-center">
        <div class="col-md-4 col-lg mini-stat"><h3 class="mb-0">250+</h3><small class="text-secondary">Projects Completed</small></div>
        <div class="col-md-4 col-lg mini-stat"><h3 class="mb-0">150+</h3><small class="text-secondary">Happy Clients</small></div>
        <div class="col-md-4 col-lg mini-stat"><h3 class="mb-0">10+</h3><small class="text-secondary">Years of Experience</small></div>
        <div class="col-md-6 col-lg mini-stat"><h3 class="mb-0">99.9%</h3><small class="text-secondary">Uptime & Reliability</small></div>
        <div class="col-md-6 col-lg mini-stat"><h3 class="mb-0">24/7</h3><small class="text-secondary">Support Available</small></div>
      </div>
    </section>

    <section class="mt-5 what-we-do-shell">
      <div class="px-3 px-md-4 px-xl-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-3">
          <div>
            <h2 class="what-we-do-headline mb-0"><strong>The Apple Store difference.</strong> Even more reasons to shop with us.</h2>
          </div>
        </div>
      </div>
      <div class="what-we-do-track-wrap what-we-do-scroll-zone" data-what-we-do-scroll-zone>
        <div class="what-we-do-sticky">
        <button class="scroll-cursor left" type="button" aria-label="Scroll left" data-scroll-left>←</button>
        <div class="what-we-do-track" data-what-we-do-track>
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
        <button class="scroll-cursor right" type="button" aria-label="Scroll right" data-scroll-right>→</button>
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

  </script>
</body>
</html>
