<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuickPOS | Smart Point of Sale</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    :root {
      --ink:     #0f0e0b;
      --cream:   #faf8f3;
      --gold:    #c9a84c;
      --gold-lt: #f0d99a;
      --gold-dk: #8a6b28;
      --emerald: #1e5c4b;
      --em-lt:   #d1ede6;
      --em-md:   #3a9478;
      --slate:   #2a2a27;
      --muted:   #6b6b60;
      --border:  #e2ded4;
    }
 
    html { scroll-behavior: smooth; }
 
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--ink);
      overflow-x: hidden;
    }
 
    /* ── HEADER ─────────────────────────────────────────── */
    header {
      position: sticky;
      top: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 6%;
      height: 72px;
      background: rgba(250,248,243,0.88);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--border);
    }
 
    .logo {
      font-family: 'DM Serif Display', serif;
      font-size: 22px;
      letter-spacing: -0.5px;
      color: var(--ink);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .logo-dot {
      width: 8px; height: 8px;
      border-radius: 50%;
      background: var(--gold);
      display: inline-block;
    }
 
    nav { display: flex; align-items: center; gap: 32px; }
    nav a {
      color: var(--muted);
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 0.3px;
      transition: color 0.2s;
    }
    nav a:hover { color: var(--ink); }
 
    .btn-primary {
      background: var(--ink);
      color: var(--cream);
      border: none;
      padding: 10px 22px;
      border-radius: 6px;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      letter-spacing: 0.3px;
      transition: background 0.2s, transform 0.15s;
    }
    .btn-primary:hover { background: var(--slate); transform: translateY(-1px); }
 
    /* ── HERO ───────────────────────────────────────────── */
    .hero {
      min-height: 90vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 60px;
      padding: 80px 8%;
      background: var(--cream);
      position: relative;
      overflow: hidden;
    }
 
    .hero::before {
      content: '';
      position: absolute;
      top: -120px; right: -120px;
      width: 560px; height: 560px;
      border-radius: 50%;
      background: radial-gradient(circle, #e8d99a22 0%, transparent 70%);
      pointer-events: none;
    }
 
    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--gold-dk);
      background: #f5edcc;
      padding: 6px 14px;
      border-radius: 100px;
      border: 1px solid var(--gold-lt);
      margin-bottom: 28px;
    }
 
    .hero h1 {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(2.8rem, 5vw, 4.2rem);
      line-height: 1.1;
      color: var(--ink);
      letter-spacing: -1.5px;
      margin-bottom: 24px;
    }
 
    .hero h1 em {
      font-style: italic;
      color: var(--gold-dk);
    }
 
    .hero p {
      font-size: 17px;
      color: var(--muted);
      line-height: 1.7;
      max-width: 440px;
      margin-bottom: 40px;
    }
 
    .hero-cta {
      display: flex;
      gap: 16px;
      align-items: center;
    }
 
    .btn-gold {
      background: var(--gold);
      color: #fff;
      border: none;
      padding: 14px 30px;
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
      box-shadow: 0 4px 18px rgba(201,168,76,0.32);
    }
    .btn-gold:hover {
      background: var(--gold-dk);
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(201,168,76,0.38);
    }
 
    .btn-outline {
      background: transparent;
      color: var(--ink);
      border: 1.5px solid var(--border);
      padding: 13px 24px;
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: border-color 0.2s, background 0.2s;
    }
    .btn-outline:hover { border-color: var(--ink); background: #f3f1ea; }
 
    .hero-visual {
      background: var(--slate);
      border-radius: 20px;
      padding: 32px;
      box-shadow: 0 32px 80px rgba(0,0,0,0.18);
      position: relative;
    }
 
    .dash-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }
    .dash-title {
      color: #fff;
      font-weight: 600;
      font-size: 15px;
    }
    .dash-badge {
      background: rgba(201,168,76,0.18);
      color: var(--gold-lt);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.8px;
      padding: 5px 12px;
      border-radius: 100px;
    }
 
    .dash-stats {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-bottom: 20px;
    }
    .stat-card {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 12px;
      padding: 16px;
    }
    .stat-label {
      font-size: 11px;
      color: rgba(255,255,255,0.45);
      letter-spacing: 0.8px;
      text-transform: uppercase;
      margin-bottom: 6px;
    }
    .stat-value {
      font-size: 26px;
      font-weight: 600;
      color: #fff;
    }
    .stat-value span { color: var(--gold); }
    .stat-delta {
      font-size: 12px;
      color: var(--em-md);
      margin-top: 4px;
    }
 
    .chart-bars {
      display: flex;
      align-items: flex-end;
      gap: 8px;
      height: 80px;
      margin-top: 16px;
    }
    .bar {
      flex: 1;
      border-radius: 4px 4px 0 0;
      transition: opacity 0.2s;
    }
    .bar:hover { opacity: 0.8; }
 
    /* ── TRUSTED BY ─────────────────────────────────────── */
    .trusted {
      padding: 32px 8%;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 40px;
      overflow: hidden;
    }
    .trusted-label {
      font-size: 12px;
      font-weight: 500;
      color: var(--muted);
      white-space: nowrap;
      letter-spacing: 0.5px;
    }
    .trusted-logos {
      display: flex;
      gap: 40px;
      align-items: center;
    }
    .trusted-logo {
      font-size: 15px;
      font-weight: 600;
      color: #c0bdb4;
      letter-spacing: -0.3px;
      white-space: nowrap;
    }
 
    /* ── FEATURES ───────────────────────────────────────── */
    #features {
      padding: 100px 8%;
      background: var(--cream);
    }
 
    .section-tag {
      display: inline-block;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1.8px;
      text-transform: uppercase;
      color: var(--em-md);
      margin-bottom: 16px;
    }
 
    .section-title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      color: var(--ink);
      letter-spacing: -1px;
      line-height: 1.15;
      max-width: 480px;
      margin-bottom: 60px;
    }
 
    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
      border: 1px solid var(--border);
      border-radius: 16px;
      overflow: hidden;
    }
 
    .feature-card {
      padding: 36px 32px;
      background: #fff;
      transition: background 0.2s;
      border-right: 1px solid var(--border);
    }
    .feature-card:last-child { border-right: none; }
    .feature-card:hover { background: #fdfbf5; }
 
    .feature-icon {
      width: 48px; height: 48px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      margin-bottom: 20px;
    }
    .icon-gold { background: #f7edcc; }
    .icon-green { background: var(--em-lt); }
    .icon-slate { background: #e8e6e0; }
 
    .feature-card h3 {
      font-size: 18px;
      font-weight: 600;
      color: var(--ink);
      margin-bottom: 10px;
      letter-spacing: -0.3px;
    }
    .feature-card p {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.65;
    }
 
    /* ── PRICING ────────────────────────────────────────── */
    #pricing {
      padding: 100px 8%;
      background: var(--slate);
      position: relative;
      overflow: hidden;
    }
 
    #pricing::before {
      content: '';
      position: absolute;
      bottom: -200px; left: 50%;
      transform: translateX(-50%);
      width: 700px; height: 400px;
      background: radial-gradient(ellipse, rgba(201,168,76,0.08) 0%, transparent 70%);
      pointer-events: none;
    }
 
    .pricing-eyebrow { color: var(--gold); }
 
    .pricing-title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      color: #fff;
      letter-spacing: -1px;
      line-height: 1.15;
      margin-bottom: 60px;
    }
 
    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      max-width: 860px;
    }
 
    .plan-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      padding: 32px 28px;
      transition: transform 0.2s, border-color 0.2s;
    }
    .plan-card:hover { transform: translateY(-4px); }
 
    .plan-card.featured {
      background: var(--gold);
      border-color: var(--gold);
    }
 
    .plan-name {
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.55);
      margin-bottom: 20px;
    }
    .plan-card.featured .plan-name { color: rgba(0,0,0,0.55); }
 
    .plan-price {
      font-family: 'DM Serif Display', serif;
      font-size: 42px;
      color: #fff;
      letter-spacing: -1.5px;
      line-height: 1;
      margin-bottom: 6px;
    }
    .plan-card.featured .plan-price { color: var(--ink); }
 
    .plan-period {
      font-size: 13px;
      color: rgba(255,255,255,0.4);
      margin-bottom: 28px;
    }
    .plan-card.featured .plan-period { color: rgba(0,0,0,0.4); }
 
    .plan-divider {
      height: 1px;
      background: rgba(255,255,255,0.1);
      margin-bottom: 24px;
    }
    .plan-card.featured .plan-divider { background: rgba(0,0,0,0.15); }
 
    .plan-feature {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      color: rgba(255,255,255,0.75);
      margin-bottom: 12px;
    }
    .plan-card.featured .plan-feature { color: rgba(0,0,0,0.75); }
 
    .check {
      width: 18px; height: 18px;
      border-radius: 50%;
      background: rgba(255,255,255,0.12);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 10px;
    }
    .plan-card.featured .check { background: rgba(0,0,0,0.12); }
 
    .plan-btn {
      display: block;
      margin-top: 28px;
      text-align: center;
      padding: 12px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.2s;
      border: 1.5px solid rgba(255,255,255,0.2);
      color: #fff;
      background: transparent;
    }
    .plan-btn:hover { background: rgba(255,255,255,0.1); }
 
    .plan-card.featured .plan-btn {
      background: var(--ink);
      border-color: var(--ink);
      color: #fff;
    }
    .plan-card.featured .plan-btn:hover { background: var(--slate); }
 
    /* ── CONTACT ────────────────────────────────────────── */
    #contact {
      padding: 100px 8%;
      background: var(--cream);
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
 
    .contact-info h2 {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(2rem, 3vw, 2.6rem);
      color: var(--ink);
      letter-spacing: -1px;
      line-height: 1.15;
      margin-bottom: 16px;
    }
    .contact-info p {
      font-size: 15px;
      color: var(--muted);
      line-height: 1.7;
      margin-bottom: 32px;
    }
 
    .contact-detail {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 20px;
      font-size: 14px;
    }
    .contact-icon {
      width: 36px; height: 36px;
      background: #f0ede4;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      flex-shrink: 0;
    }
    .contact-detail strong { display: block; color: var(--ink); font-weight: 600; margin-bottom: 2px; }
    .contact-detail span { color: var(--muted); }
 
    .contact-form {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 40px;
    }
 
    .form-group { margin-bottom: 20px; }
    .form-group label {
      display: block;
      font-size: 13px;
      font-weight: 500;
      color: var(--ink);
      margin-bottom: 8px;
      letter-spacing: 0.2px;
    }
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 11px 14px;
      border: 1.5px solid var(--border);
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      color: var(--ink);
      background: var(--cream);
      transition: border-color 0.2s, box-shadow 0.2s;
      outline: none;
      resize: none;
    }
    .form-group input:focus,
    .form-group textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201,168,76,0.12);
    }
    .form-group textarea { height: 110px; }
 
    .btn-submit {
      width: 100%;
      padding: 14px;
      background: var(--ink);
      color: var(--cream);
      border: none;
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s;
      letter-spacing: 0.2px;
    }
    .btn-submit:hover { background: var(--slate); }
 
    /* ── FOOTER ─────────────────────────────────────────── */
    footer {
      background: var(--ink);
      color: rgba(255,255,255,0.55);
      padding: 56px 8%;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 32px;
    }
 
    .footer-logo {
      font-family: 'DM Serif Display', serif;
      font-size: 20px;
      color: #fff;
      margin-bottom: 8px;
    }
    .footer-sub {
      font-size: 13px;
      color: rgba(255,255,255,0.35);
    }
 
    .footer-links {
      display: flex;
      gap: 28px;
      align-items: center;
    }
    .footer-links a {
      color: rgba(255,255,255,0.5);
      text-decoration: none;
      font-size: 14px;
      transition: color 0.2s;
    }
    .footer-links a:hover { color: #fff; }
 
    /* ── ANIMATIONS ─────────────────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-up { animation: fadeUp 0.7s ease both; }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.22s; }
    .delay-3 { animation-delay: 0.34s; }
    .delay-4 { animation-delay: 0.46s; }
  </style>
</head>
<body>
 
<!-- HEADER -->
<header>
  <div class="logo">
    <span class="logo-dot"></span>
    QuickPOS
  </div>
  <nav>
    <a href="#features">Features</a>
    <a href="#pricing">Pricing</a>
    <a href="#contact">Contact</a>
    <button class="btn-primary">Sign Up</button>
  </nav>
</header>
 
<!-- HERO -->
<section class="hero">
  <div>
    <div class="hero-eyebrow fade-up">
      ✦ Trusted by 4,200+ businesses
    </div>
    <h1 class="fade-up delay-1">
      The Last POS System<br><em>You'll Ever Need</em>
    </h1>
    <p class="fade-up delay-2">
      QuickPOS gives you real-time inventory, powerful analytics, and seamless checkout — all in one beautifully simple system.
    </p>
    <div class="hero-cta fade-up delay-3">
      <a href="#contact" class="btn-gold">Get Started for Free →</a>
      <a href="#features" class="btn-outline">See Features</a>
    </div>
  </div>
 
  <!-- POS Software Mockup Image -->
  <div class="hero-visual fade-up delay-4">
    <img
      src="https://via.placeholder.com/680x420/2a2a27/c9a84c?text=QuickPOS+Software+Mockup"
      alt="QuickPOS Software Mockup"
      style="width:100%;border-radius:12px;display:block;"
    >
    <div class="dash-header" style="margin-top:20px;margin-bottom:0;">
      <span class="dash-title">Live Dashboard Preview</span>
      <span class="dash-badge">LIVE</span>
    </div>
    <div class="dash-stats" style="margin-top:16px;">
      <div class="stat-card">
        <div class="stat-label">Revenue</div>
        <div class="stat-value"><span>$</span>8,420</div>
        <div class="stat-delta">▲ 12.4% vs yesterday</div>
      </div>
      <div class="stat-card">
        <div class="stat-label">Orders</div>
        <div class="stat-value">312</div>
        <div class="stat-delta">▲ 8.1% vs yesterday</div>
      </div>
      <div class="stat-card">
        <div class="stat-label">Avg. Ticket</div>
        <div class="stat-value">$27</div>
        <div class="stat-delta">▲ 3.2% vs yesterday</div>
      </div>
      <div class="stat-card">
        <div class="stat-label">In Stock</div>
        <div class="stat-value">1,841</div>
        <div class="stat-delta">24 low-stock alerts</div>
      </div>
    </div>
    <div class="chart-bars">
      <div class="bar" style="height:38%;background:rgba(201,168,76,0.3)"></div>
      <div class="bar" style="height:55%;background:rgba(201,168,76,0.3)"></div>
      <div class="bar" style="height:45%;background:rgba(201,168,76,0.3)"></div>
      <div class="bar" style="height:70%;background:rgba(201,168,76,0.4)"></div>
      <div class="bar" style="height:60%;background:rgba(201,168,76,0.4)"></div>
      <div class="bar" style="height:80%;background:rgba(201,168,76,0.5)"></div>
      <div class="bar" style="height:100%;background:var(--gold)"></div>
    </div>
  </div>
</section>
 
<!-- TRUSTED BY -->
<div class="trusted">
  <span class="trusted-label">TRUSTED BY</span>
  <div class="trusted-logos">
    <span class="trusted-logo">Horizon Retail</span>
    <span class="trusted-logo">BrewLine</span>
    <span class="trusted-logo">Velora Boutique</span>
    <span class="trusted-logo">FreshCart</span>
    <span class="trusted-logo">NovaMart</span>
  </div>
</div>
 
<!-- FEATURES -->
<section id="features">
  <span class="section-tag">Why QuickPOS</span>
  <h2 class="section-title">Everything your business needs, nothing it doesn't.</h2>
 
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon icon-gold">📦</div>
      <h3>Smart Inventory</h3>
      <p>Real-time stock tracking across all your locations. Set auto-reorder thresholds and never run out.</p>
    </div>
    <div class="feature-card">
      <div class="feature-icon icon-green">📊</div>
      <h3>Deep Analytics</h3>
      <p>Understand your busiest hours, top products, and profit margins with beautiful, actionable dashboards.</p>
    </div>
    <div class="feature-card">
      <div class="feature-icon icon-slate">⚡</div>
      <h3>5-Minute Setup</h3>
      <p>Get fully operational in minutes. Plug-and-play hardware, zero training required for your staff.</p>
    </div>
  </div>
</section>
 
<!-- PRICING -->
<section id="pricing">
  <span class="section-tag pricing-eyebrow">Pricing</span>
  <h2 class="pricing-title">Simple plans.<br>No surprises.</h2>
 
  <div class="pricing-grid">
    <div class="plan-card">
      <div class="plan-name">Basic</div>
      <div class="plan-price">$29</div>
      <div class="plan-period">per month</div>
      <div class="plan-divider"></div>
      <div class="plan-feature"><span class="check">✓</span> 1 Location</div>
      <div class="plan-feature"><span class="check">✓</span> Core Analytics</div>
      <div class="plan-feature"><span class="check">✓</span> Standard Support</div>
      <a href="#contact" class="plan-btn">Get Started</a>
    </div>
 
    <div class="plan-card featured">
      <div class="plan-name">Pro</div>
      <div class="plan-price">$79</div>
      <div class="plan-period">per month</div>
      <div class="plan-divider"></div>
      <div class="plan-feature"><span class="check">✓</span> 5 Locations</div>
      <div class="plan-feature"><span class="check">✓</span> Full Analytics Suite</div>
      <div class="plan-feature"><span class="check">✓</span> Priority Support</div>
      <a href="#contact" class="plan-btn">Get Started</a>
    </div>
 
    <div class="plan-card">
      <div class="plan-name">Enterprise</div>
      <div class="plan-price">—</div>
      <div class="plan-period">custom pricing</div>
      <div class="plan-divider"></div>
      <div class="plan-feature"><span class="check">✓</span> Unlimited Locations</div>
      <div class="plan-feature"><span class="check">✓</span> Custom Integrations</div>
      <div class="plan-feature"><span class="check">✓</span> Dedicated Manager</div>
      <a href="#contact" class="plan-btn">Contact Sales</a>
    </div>
  </div>
</section>
 
<!-- CONTACT -->
<section id="contact">
  <div class="contact-info">
    <span class="section-tag">Get In Touch</span>
    <h2>Let's talk about your business.</h2>
    <p>Whether you're a single-location café or a multi-store retailer, we'll help you find the right plan and get set up fast.</p>
 
    <div class="contact-detail">
      <div class="contact-icon">📧</div>
      <div>
        <strong>Email</strong>
        <span>hello@quickpos.io</span>
      </div>
    </div>
    <div class="contact-detail">
      <div class="contact-icon">📞</div>
      <div>
        <strong>Phone</strong>
        <span>+1 (800) 555-0190</span>
      </div>
    </div>
    <div class="contact-detail">
      <div class="contact-icon">⏰</div>
      <div>
        <strong>Support Hours</strong>
        <span>Mon–Fri, 9am – 6pm EST</span>
      </div>
    </div>
  </div>
 
  <div class="contact-form">
    <form action="process.php" method="POST">
      <div class="form-group">
        <label>Your Name</label>
        <input type="text" name="name" placeholder="Jane Smith" required>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="jane@company.com" required>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" placeholder="Tell us about your business..." required></textarea>
      </div>
      <button type="submit" class="btn-submit">Send Message →</button>
    </form>
  </div>
</section>
 
<!-- FOOTER -->
<footer>
  <div>
    <div class="footer-logo">QuickPOS</div>
    <div class="footer-sub">© 2026 QuickPOS System. All rights reserved.</div>
  </div>
  <div class="footer-links">
    <a href="#">Facebook</a>
    <a href="#">Twitter</a>
    <a href="#">LinkedIn</a>
  </div>
</footer>
 
</body>
</html>