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
      --bg: radial-gradient(circle at 10% 20%, #f6f8ff 0%, #fcfcff 40%, #ffffff 100%);
    }

    body {
      font-family: Inter, "Segoe UI", Arial, sans-serif;
      color: var(--text);
      background: var(--bg);
      line-height: 1.6;
    }

    .navbar {
      padding: 22px 0;
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
      font-weight: 800;
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

    footer a { text-decoration: none; color: #60689a; }

    @media (max-width: 991px) {
      .hero-art { min-height: 420px; margin-top: 16px; }
      .floating-card { transform: scale(.85); }
      .mini-stat { border-right: 0; border-bottom: 1px solid #eff1ff; }
    }
  </style>
</head>
<body>
  <div class="container py-2">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
        <span class="logo-dot">N</span> Novatek
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#topNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="topNav">
        <ul class="navbar-nav mx-auto gap-lg-3">
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Solutions</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
        </ul>
        <div class="d-flex gap-2">
          <button class="btn btn-light btn-pill border">📞 Schedule a Call</button>
          <button class="btn btn-main btn-pill">Start a Project →</button>
        </div>
      </div>
    </nav>

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

    <section class="mt-5">
      <div class="d-flex justify-content-between align-items-end mb-3">
        <div>
          <small class="text-uppercase text-primary fw-bold">What we do</small>
          <h2 class="fw-bold">End-to-end software solutions<br/>built for impact</h2>
        </div>
        <a href="#" class="text-decoration-none fw-semibold">View all services →</a>
      </div>
      <div class="row g-3">
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>Web Development</h6><p class="small text-secondary">High-performance websites and web apps.</p><a href="#">Learn more →</a></div></div>
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>Mobile App Development</h6><p class="small text-secondary">Native and cross-platform apps.</p><a href="#">Learn more →</a></div></div>
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>UI/UX Design</h6><p class="small text-secondary">Engaging and intuitive interfaces.</p><a href="#">Learn more →</a></div></div>
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>Cloud Solutions</h6><p class="small text-secondary">Secure and scalable infrastructure.</p><a href="#">Learn more →</a></div></div>
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>AI & Automation</h6><p class="small text-secondary">Workflow intelligence and automations.</p><a href="#">Learn more →</a></div></div>
        <div class="col-md-6 col-lg-4 col-xl-2"><div class="service-card"><h6>Custom Software</h6><p class="small text-secondary">Tailored platforms for complex needs.</p><a href="#">Learn more →</a></div></div>
      </div>
    </section>

    <section class="mt-5">
      <div class="row g-4 align-items-center">
        <div class="col-lg-4">
          <small class="text-uppercase text-primary fw-bold">Why choose novatek</small>
          <h2 class="fw-bold">Technology. Innovation. Results.</h2>
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

    <section class="mt-5">
      <small class="text-uppercase text-primary fw-bold">Why process</small>
      <h2 class="fw-bold">A seamless process from<br/>idea to launch</h2>
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
          <h2 class="fw-bold">Loved by teams<br/>around the world.</h2>
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
        <h2 class="mb-1">Let's build something amazing together.</h2>
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
      <div class="text-center text-secondary mt-4">© 2024 Novatek. All rights reserved.</div>
    </footer>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
