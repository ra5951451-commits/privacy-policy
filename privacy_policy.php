<?php
/**
 * Privacy Policy for Arrow Puzzle
 * Package ID: com.wisaxis.arrowpuzzle
 *
 * Compliant with:
 * - Google Play Developer Program Policies (Data Safety Section)
 * - Google Mobile Ads (AdMob) Publisher Policy
 * - General Data Protection Regulation (GDPR / UK GDPR)
 * - California Consumer Privacy Act / CPRA (CCPA)
 * - Children's Online Privacy Protection Act (COPPA)
 */

declare(strict_types=1);

// Configuration Settings
$appName        = "Arrow Puzzle";
$packageName    = "com.wisaxis.arrowpuzzle";
$developerName  = "Wisaxis";
$contactEmail   = "support@arrowpuzzle.com";
$effectiveDate  = "November 13, 2026";
$lastUpdated    = date("F j, Y");
$currentYear    = date("Y");

// Set HTTP headers for security and clean rendering
header("Content-Type: text/html; charset=UTF-8");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Referrer-Policy: strict-origin-when-cross-origin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Privacy Policy for <?= htmlspecialchars($appName) ?> (<?= htmlspecialchars($packageName) ?>). Transparent data handling, Google AdMob disclosure, and user privacy rights.">
  <meta name="robots" content="index, follow">
  <title>Privacy Policy &mdash; <?= htmlspecialchars($appName) ?></title>
  
  <style>
    :root {
      --primary: #ef4444;
      --primary-hover: #dc2626;
      --accent: #38bdf8;
      --accent-bg: rgba(56, 189, 248, 0.08);
      --accent-border: rgba(56, 189, 248, 0.25);
      --bg: #090d16;
      --card-bg: #111827;
      --card-border: #1f2937;
      --text: #f3f4f6;
      --text-muted: #9ca3af;
      --text-subtle: #6b7280;
      --surface: #1e293b;
      --success: #10b981;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Helvetica Neue", Arial, sans-serif;
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.7;
      padding: 2rem 1rem;
      -webkit-font-smoothing: antialiased;
    }

    .wrapper {
      max-width: 880px;
      margin: 0 auto;
    }

    .container {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: 18px;
      padding: 3rem 2.5rem;
      box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45);
    }

    @media (max-width: 640px) {
      .container {
        padding: 1.75rem 1.25rem;
      }
      body {
        padding: 1rem 0.5rem;
      }
    }

    header {
      border-bottom: 2px solid var(--card-border);
      padding-bottom: 2rem;
      margin-bottom: 2.5rem;
      text-align: center;
    }

    .badge {
      display: inline-block;
      background: linear-gradient(135deg, var(--primary), var(--primary-hover));
      color: #ffffff;
      font-weight: 700;
      font-size: 0.95rem;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      padding: 0.4rem 1.25rem;
      border-radius: 9999px;
      margin-bottom: 1rem;
      box-shadow: 0 4px 14px rgba(239, 68, 68, 0.35);
    }

    h1 {
      font-size: 2.35rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      margin-bottom: 0.75rem;
      color: #ffffff;
    }

    .meta-bar {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      color: var(--text-muted);
      font-size: 0.92rem;
      margin-top: 0.5rem;
    }

    .meta-bar span {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
    }

    .meta-bar strong {
      color: var(--text);
    }

    .summary-box {
      background: var(--accent-bg);
      border: 1px solid var(--accent-border);
      border-radius: 12px;
      padding: 1.35rem 1.5rem;
      margin-bottom: 2.5rem;
    }

    .summary-box h3 {
      color: var(--accent);
      font-size: 1.05rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      display: flex;
      align-center: center;
      gap: 0.5rem;
    }

    .summary-box p {
      color: #e0f2fe;
      font-size: 0.95rem;
      margin: 0;
      line-height: 1.6;
    }

    .nav-toc {
      background: rgba(30, 41, 59, 0.5);
      border: 1px solid var(--card-border);
      border-radius: 12px;
      padding: 1.25rem 1.5rem;
      margin-bottom: 2.5rem;
    }

    .nav-toc-title {
      font-size: 0.88rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--text-muted);
      margin-bottom: 0.75rem;
    }

    .nav-toc ul {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 0.4rem 1.5rem;
      list-style: none;
      padding: 0;
    }

    .nav-toc a {
      color: var(--accent);
      text-decoration: none;
      font-size: 0.92rem;
      transition: color 0.15s ease;
    }

    .nav-toc a:hover {
      color: #7dd3fc;
      text-decoration: underline;
    }

    section {
      margin-bottom: 2.25rem;
    }

    h2 {
      font-size: 1.35rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 0.85rem;
      padding-bottom: 0.4rem;
      border-bottom: 1px solid var(--card-border);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    h2 .sec-num {
      color: var(--primary);
      font-weight: 800;
    }

    h3 {
      font-size: 1.08rem;
      color: var(--accent);
      margin-top: 1.25rem;
      margin-bottom: 0.5rem;
    }

    p {
      color: #d1d5db;
      font-size: 0.98rem;
      margin-bottom: 1rem;
    }

    ul, ol {
      color: #d1d5db;
      padding-left: 1.5rem;
      margin-bottom: 1rem;
    }

    li {
      margin-bottom: 0.5rem;
    }

    code {
      background: #1e293b;
      color: #fca5a5;
      padding: 0.15rem 0.45rem;
      border-radius: 5px;
      font-size: 0.9em;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    }

    a {
      color: var(--accent);
      text-decoration: none;
      transition: color 0.15s ease;
    }

    a:hover {
      color: #7dd3fc;
      text-decoration: underline;
    }

    .table-container {
      overflow-x: auto;
      margin: 1.25rem 0;
      border-radius: 10px;
      border: 1px solid var(--card-border);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.92rem;
      text-align: left;
    }

    th {
      background: #1f2937;
      color: #ffffff;
      font-weight: 700;
      padding: 0.85rem 1rem;
      border-bottom: 1px solid var(--card-border);
    }

    td {
      padding: 0.85rem 1rem;
      border-bottom: 1px solid rgba(31, 41, 55, 0.6);
      color: #d1d5db;
    }

    tr:last-child td {
      border-bottom: none;
    }

    tr:nth-child(even) td {
      background: rgba(30, 41, 59, 0.35);
    }

    .sdk-card {
      background: rgba(17, 24, 39, 0.7);
      border: 1px solid var(--card-border);
      border-left: 4px solid var(--primary);
      border-radius: 8px;
      padding: 1.25rem;
      margin: 1rem 0;
    }

    .sdk-title {
      font-weight: 700;
      color: #ffffff;
      font-size: 1.05rem;
      margin-bottom: 0.35rem;
    }

    .contact-card {
      background: #1e293b;
      border: 1px solid var(--card-border);
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 1rem;
    }

    .contact-card p {
      margin-bottom: 0.4rem;
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--card-border);
      color: var(--text-subtle);
      font-size: 0.88rem;
    }

    .btn-print {
      display: inline-block;
      margin-top: 1rem;
      background: var(--surface);
      color: var(--text-muted);
      border: 1px solid var(--card-border);
      padding: 0.45rem 1rem;
      border-radius: 8px;
      font-size: 0.85rem;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .btn-print:hover {
      background: #334155;
      color: #ffffff;
      text-decoration: none;
    }

    @media print {
      body {
        background: #ffffff;
        color: #000000;
        padding: 0;
      }
      .container {
        border: none;
        box-shadow: none;
        padding: 0;
        background: transparent;
      }
      .badge, .btn-print, .nav-toc {
        display: none;
      }
      h1, h2, h3 {
        color: #000000;
      }
      p, li, td {
        color: #222222;
      }
    }
  </style>
</head>
<body>

<div class="wrapper">
  <div class="container">
    
    <header>
      <div class="badge">Official Legal Document</div>
      <h1>Privacy Policy</h1>
      <div class="meta-bar">
        <span><strong>Application:</strong> <?= htmlspecialchars($appName) ?></span>
        <span><strong>Package ID:</strong> <code><?= htmlspecialchars($packageName) ?></code></span>
        <span><strong>Publisher:</strong> <?= htmlspecialchars($developerName) ?></span>
        <span><strong>Effective Date:</strong> <?= htmlspecialchars($effectiveDate) ?></span>
      </div>
    </header>

    <!-- Quick Summary Box for Google Play Reviewers & Users -->
    <div class="summary-box">
      <h3>Quick Privacy Summary</h3>
      <p>
        <strong><?= htmlspecialchars($appName) ?></strong> is designed with privacy at its core. 
        We do <strong>not</strong> require user registration, we do <strong>not</strong> collect your real name, email, phone number, GPS coordinates, or contacts. 
        Your level progress and puzzle records are stored <strong>strictly on your local device</strong>. 
        We display family-friendly advertisements through <strong>Google AdMob</strong> in compliance with the Google Play Developer Program Policies.
      </p>
    </div>

    <!-- Table of Contents -->
    <nav class="nav-toc">
      <div class="nav-toc-title">Table of Contents</div>
      <ul>
        <li><a href="#section-1">1. Introduction & Scope</a></li>
        <li><a href="#section-2">2. Information We Do NOT Collect</a></li>
        <li><a href="#section-3">3. Information We Collect & Why</a></li>
        <li><a href="#section-4">4. Google AdMob & Third-Party SDKs</a></li>
        <li><a href="#section-5">5. Google Play Data Safety Disclosures</a></li>
        <li><a href="#section-6">6. Children's Privacy (COPPA)</a></li>
        <li><a href="#section-7">7. Data Retention & Deletion Rights</a></li>
        <li><a href="#section-8">8. GDPR & International Privacy Rights</a></li>
        <li><a href="#section-9">9. California Privacy Rights (CCPA/CPRA)</a></li>
        <li><a href="#section-10">10. Policy Updates</a></li>
        <li><a href="#section-11">11. Contact & Data Protection Officer</a></li>
      </ul>
    </nav>

    <!-- Section 1 -->
    <section id="section-1">
      <h2><span class="sec-num">1.</span> Introduction & Scope</h2>
      <p>
        Welcome to <strong><?= htmlspecialchars($appName) ?></strong> (referred to as "the Game", "we", "our", or "us"). 
        This Privacy Policy explains how information is handled when you download, install, and play <?= htmlspecialchars($appName) ?> 
        on Android devices.
      </p>
      <p>
        By installing or using <?= htmlspecialchars($appName) ?>, you agree to the practices described in this policy. 
        If you do not agree with any part of this policy, please do not install or use the Game.
      </p>
    </section>

    <!-- Section 2 -->
    <section id="section-2">
      <h2><span class="sec-num">2.</span> Information We Do NOT Collect</h2>
      <p>
        To ensure total privacy and a friction-free casual puzzle experience, the Game does <strong>not</strong> solicit or access:
      </p>
      <ul>
        <li><strong>No Personal Identifiers:</strong> We do not ask for or store your full name, home address, personal email, or phone number.</li>
        <li><strong>No Account Credentials:</strong> No registration, social media login (Facebook, Google Sign-In, etc.), or password is required.</li>
        <li><strong>No Precise Geolocation:</strong> We never request or access your device's GPS or precise location sensors.</li>
        <li><strong>No Hardware Sensor / Media Access:</strong> We do not access your camera, microphone, photo gallery, media storage, or address book contacts.</li>
        <li><strong>No Biometric Data:</strong> No fingerprint, face recognition, or voiceprint data is collected.</li>
      </ul>
    </section>

    <!-- Section 3 -->
    <section id="section-3">
      <h2><span class="sec-num">3.</span> Information We Collect & How We Use It</h2>
      
      <h3>A. Local Device Game Save Data</h3>
      <p>
        Your gameplay progress (completed levels, earned star ratings, unlocked puzzle chapters, remaining hint balances, audio preferences, and optional Pro status) is saved <strong>exclusively on your physical device</strong> using encrypted local storage.
      </p>
      <ul>
        <li>This data is stored under Android's private app sandbox and is not transmitted to any remote servers operated by us.</li>
        <li>Local save data is protected with an HMAC integrity verification check to prevent corruption and save-file loss.</li>
      </ul>

      <h3>B. Anonymous Technical Diagnostics & Crash Telemetry</h3>
      <p>
        When you run the Game, non-personally identifiable technical telemetry may be processed automatically through Google Play Services:
      </p>
      <ul>
        <li>Device model, manufacturer, and screen resolution.</li>
        <li>Operating system version (e.g., Android 14).</li>
        <li>Anonymous crash logs, ANR (Application Not Responding) stack traces, and runtime performance metrics.</li>
      </ul>
      <p>
        <em>Purpose:</em> This information is used strictly to diagnose crashes, eliminate bugs, and ensure 60fps rendering performance across diverse Android phone models.
      </p>
    </section>

    <!-- Section 4 -->
    <section id="section-4">
      <h2><span class="sec-num">4.</span> Google AdMob & Third-Party Advertising SDKs</h2>
      <p>
        <?= htmlspecialchars($appName) ?> is supported by advertising through <strong>Google AdMob</strong>. 
        AdMob displays banner ads, app open ads, and optional rewarded video ads (e.g., watching a short sponsor video to earn a free in-game hint).
      </p>

      <div class="sdk-card">
        <div class="sdk-title">Google AdMob (Google LLC)</div>
        <p>
          Google AdMob may collect and process device-level identifiers to serve, measure, and protect advertisements:
        </p>
        <ul>
          <li><strong>Google Advertising ID (GAID / AAID):</strong> Used for frequency capping (preventing the same ad from showing repeatedly), ad reporting, and fraud detection.</li>
          <li><strong>Approximate IP-Based Geolocation:</strong> Used to serve ads in your general country or language region (e.g., non-precise geographic signals).</li>
          <li><strong>Ad Interaction Telemetry:</strong> Impressions, click events, and video completion rates.</li>
        </ul>
        <p>
          <strong>European Economic Area (EEA) & UK Consent:</strong><br>
          For players located in the EEA and the UK, we implement the <strong>Google User Messaging Platform (UMP)</strong>. 
          When required by law, a consent dialog allows you to choose between personalized ads or non-personalized ads before any ad request is dispatched.
        </p>
        <p>
          For full details on how Google handles advertising data, review:<br>
          &bull; <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">How Google uses information from sites or apps that use our services</a><br>
          &bull; <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy Policy</a>
        </p>
      </div>

      <div class="sdk-card">
        <div class="sdk-title">Google Play In-App Billing (Google LLC)</div>
        <p>
          If you purchase the optional "Arrow Puzzle Pro" (ad-removal) or in-game hint packs, the transaction is processed directly through the official <strong>Google Play In-App Billing API</strong>.
        </p>
        <ul>
          <li>We never receive, view, or store your credit/debit card numbers, bank account information, or billing address.</li>
          <li>All payment processing is governed by the <a href="https://play.google.com/intl/en_us/about/play-terms/" target="_blank" rel="noopener">Google Play Terms of Service</a>.</li>
        </ul>
      </div>

      <div class="sdk-card">
        <div class="sdk-title">Unity Engine (Unity Technologies)</div>
        <p>
          The Game runtime is built with the Unity Engine. Unity may collect anonymous hardware diagnostics (graphics API, CPU capabilities) to ensure proper audio/visual execution on your hardware. 
          Learn more at the <a href="https://unity.com/legal/privacy-policy" target="_blank" rel="noopener">Unity Privacy Policy</a>.
        </p>
      </div>
    </section>

    <!-- Section 5 -->
    <section id="section-5">
      <h2><span class="sec-num">5.</span> Google Play Data Safety Disclosures</h2>
      <p>
        In accordance with Google Play's Data Safety requirements, the following table details our data collection and sharing practices:
      </p>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Data Type</th>
              <th>Collected?</th>
              <th>Shared with 3rd Parties?</th>
              <th>Purpose</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Personal Identifiers</strong> (Name, Email, Phone)</td>
              <td>No</td>
              <td>No</td>
              <td>Not Collected</td>
            </tr>
            <tr>
              <td><strong>Financial Information</strong> (Card / Bank details)</td>
              <td>No</td>
              <td>No</td>
              <td>Handled directly by Google Play</td>
            </tr>
            <tr>
              <td><strong>Precise Location</strong> (GPS)</td>
              <td>No</td>
              <td>No</td>
              <td>Not Collected</td>
            </tr>
            <tr>
              <td><strong>Device Identifiers</strong> (GAID / Advertising ID)</td>
              <td>Yes (via AdMob)</td>
              <td>Yes (Google AdMob)</td>
              <td>Advertising, Analytics & Fraud Prevention</td>
            </tr>
            <tr>
              <td><strong>App Performance & Diagnostics</strong> (Crash logs, ANRs)</td>
              <td>Yes</td>
              <td>Yes (Google Play)</td>
              <td>Crash diagnostics & Bug fixing</td>
            </tr>
            <tr>
              <td><strong>In-App Actions</strong> (Level progress, stars, hints)</td>
              <td>Stored Locally Only</td>
              <td>No</td>
              <td>Game functionality & Saving state</td>
            </tr>
          </tbody>
        </table>
      </div>

      <ul>
        <li><strong>Encryption in Transit:</strong> All communications between your device and Google services use industry-standard HTTPS / TLS encryption.</li>
        <li><strong>Data Deletion Request:</strong> Users can delete all stored game data instantly via their Android device settings or by contacting us.</li>
      </ul>
    </section>

    <!-- Section 6 -->
    <section id="section-6">
      <h2><span class="sec-num">6.</span> Children's Privacy (COPPA & GDPR-K Compliance)</h2>
      <p>
        <?= htmlspecialchars($appName) ?> is designed as a family-friendly casual puzzle game. We comply strictly with the 
        <strong>Children's Online Privacy Protection Act (COPPA)</strong> and Article 8 of the GDPR (GDPR-K).
      </p>
      <ul>
        <li>We do <strong>not</strong> knowingly collect, request, or maintain personal information from children under the age of 13 (or under 16 in the European Union).</li>
        <li>Advertisements served through Google AdMob adhere to Google Play's Families Policy and content filtering standards.</li>
        <li>If a parent or legal guardian discovers that their child has inadvertently provided personal data to us, please notify us immediately at <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a>. We will promptly delete such records.</li>
      </ul>
    </section>

    <!-- Section 7 -->
    <section id="section-7">
      <h2><span class="sec-num">7.</span> Data Retention & Data Deletion Rights</h2>
      <p>
        Because we do not maintain a cloud account database, your personal data is not stored on our servers. You have complete autonomy over your local data:
      </p>

      <h3>How to Erase Your In-Game Data:</h3>
      <ol>
        <li>On your Android phone, open <strong>Settings</strong>.</li>
        <li>Navigate to <strong>Apps</strong> (or <em>Application Manager</em>).</li>
        <li>Select <strong><?= htmlspecialchars($appName) ?></strong> from the list.</li>
        <li>Tap <strong>Storage & cache</strong> &rarr; <strong>Clear Storage</strong> (or <em>Clear Data</em>).</li>
      </ol>
      <p>
        This permanently deletes all local puzzle progress, hints, and cached configuration files from your device.
      </p>

      <h3>How to Reset or Delete Your Advertising ID:</h3>
      <ol>
        <li>Open Android <strong>Settings</strong> &rarr; <strong>Google</strong> &rarr; <strong>All Services</strong>.</li>
        <li>Tap <strong>Ads</strong> (or <em>Ad privacy</em>).</li>
        <li>Tap <strong>Reset advertising ID</strong> or <strong>Delete advertising ID</strong>.</li>
      </ol>
    </section>

    <!-- Section 8 -->
    <section id="section-8">
      <h2><span class="sec-num">8.</span> European Union & UK Privacy Rights (GDPR)</h2>
      <p>
        Under the General Data Protection Regulation (EU Regulation 2016/679) and the UK Data Protection Act 2018, 
        residents of the EEA and UK possess the following rights regarding their personal data:
      </p>
      <ul>
        <li><strong>Right of Access & Rectification:</strong> You may request confirmation of what data is processed.</li>
        <li><strong>Right to Erasure ("Right to be Forgotten"):</strong> You have the right to request deletion of any collected information.</li>
        <li><strong>Right to Withdraw Consent:</strong> You may alter or revoke your advertising consent at any time via the in-game consent settings or by resetting your device's advertising identifier.</li>
        <li><strong>Right to Lodge a Complaint:</strong> You have the right to lodge a complaint with your local Data Protection Authority (DPA).</li>
      </ul>
    </section>

    <!-- Section 9 -->
    <section id="section-9">
      <h2><span class="sec-num">9.</span> California Consumer Privacy Rights (CCPA / CPRA)</h2>
      <p>
        Under the California Consumer Privacy Act (CCPA) and the California Privacy Rights Act (CPRA), California residents are entitled to specific disclosures:
      </p>
      <ul>
        <li><strong>We Do NOT Sell Personal Information:</strong> We do not sell, rent, or trade your personal information to third parties for monetary consideration.</li>
        <li><strong>Right to Know & Delete:</strong> You have the right to request what personal information is processed and demand its deletion.</li>
        <li><strong>Non-Discrimination:</strong> We will never discriminate against you (deny hints, lower game speed, or charge different prices) for exercising your California privacy rights.</li>
      </ul>
    </section>

    <!-- Section 10 -->
    <section id="section-10">
      <h2><span class="sec-num">10.</span> Changes to This Privacy Policy</h2>
      <p>
        We may update this Privacy Policy from time to time to reflect changes in our legal obligations, third-party SDK updates, or app features. 
        Any modifications will be posted directly to this web page with a revised "Effective Date" at the top. 
        We encourage you to review this page periodically to stay informed about our privacy practices.
      </p>
    </section>

    <!-- Section 11 -->
    <section id="section-11">
      <h2><span class="sec-num">11.</span> Contact Us & Data Requests</h2>
      <p>
        If you have any questions, comments, or data deletion inquiries regarding this Privacy Policy, please reach out to our dedicated support team:
      </p>
      
      <div class="contact-card">
        <p><strong>Developer / Organization:</strong> <?= htmlspecialchars($developerName) ?></p>
        <p><strong>Application Name:</strong> <?= htmlspecialchars($appName) ?></p>
        <p><strong>Package Identifier:</strong> <code><?= htmlspecialchars($packageName) ?></code></p>
        <p><strong>Privacy Contact Email:</strong> <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a></p>
        <p><strong>Response Time:</strong> We endeavor to respond to all verified privacy inquiries within 48 business hours.</p>
      </div>
    </section>

    <footer>
      <p>&copy; <?= htmlspecialchars((string)$currentYear) ?> <?= htmlspecialchars($developerName) ?>. All rights reserved.</p>
      <p><?= htmlspecialchars($appName) ?> &bull; Package ID: <?= htmlspecialchars($packageName) ?></p>
      <button class="btn-print" onclick="window.print()">Print or Save as PDF</button>
    </footer>

  </div>
</div>

</body>
</html>
