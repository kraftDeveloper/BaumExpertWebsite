<?php
$name = "Marcel Baum";
$title = "Oeffentlich bestellter und vereidigter Sachverstaendiger";
$phone = "+49 (0) 123 456 789";
$email = "info@marcel-baum-sv.de";
$address = "Musterstrasse 12, 12345 Musterstadt";
$services = [
    ["icon"=>"fire","title"=>"Heizungsanlagen","desc"=>"Bewertung und Begutachtung von Heizungssystemen aller Art &ndash; von konventionellen Gas- und Oelheizungen bis hin zu modernen Waermepumpen und Fernwaermesystemen."],
    ["icon"=>"drop","title"=>"Sanitaranlagen","desc"=>"Sachverstaendige Pruefung von Trinkwasser-, Abwasser- und Sanitaerinstallationen gemaess aktueller Normen und technischer Regelwerke (DIN, DVGW, VOB)."],
    ["icon"=>"doc","title"=>"Gutachten &amp; Berichte","desc"=>"Erstellung gerichtsverwertbarer Gutachten fuer Privat- und Gewerbekunden, Versicherungen, Gerichte sowie oeffentliche Auftraggeber."],
    ["icon"=>"scale","title"=>"Gerichtsgutachten","desc"=>"Als vereidigter Sachverstaendiger erstelle ich neutrale, rechtssichere Expertisen fuer Streitfaelle, Bauabnahmen und Schadensanalysen."],
    ["icon"=>"search","title"=>"Schadensanalyse","desc"=>"Systematische Untersuchung von Schaeden an haustechnischen Anlagen mit Ursachenfeststellung und Empfehlungen zur Maengelbeseitigung."],
    ["icon"=>"build","title"=>"Baubegleitung","desc"=>"Unabhaengige Qualitaetskontrolle bei Neubau und Sanierung von Heizungs- und Sanitaranlagen &ndash; von der Planung bis zur Abnahme."],
];
$icons = ["fire"=>"&#128293;","drop"=>"&#128167;","doc"=>"&#128203;","scale"=>"&#9878;","search"=>"&#128269;","build"=>"&#127959;"];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($name) ?> &ndash; Sachverstaendiger Heizung &amp; Sanitaer</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Mono:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --cream:#f5f0e8;--warm-white:#faf8f3;--charcoal:#1c1a17;
  --copper:#b87333;--copper-light:#d4956a;--rust:#8b3a1f;
  --text:#2d2a26;--muted:#7a7167;--border:#d6cfc3;
  --mono:'DM Mono',monospace;--serif:'Cormorant Garamond',Georgia,serif;
}
html{scroll-behavior:smooth}
body{background:var(--warm-white);color:var(--text);font-family:var(--serif);font-size:18px;line-height:1.7;overflow-x:hidden}
header{position:relative;min-height:100vh;display:flex;flex-direction:column;justify-content:center;background:var(--charcoal);overflow:hidden}
.hbg{position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 70% 40%,rgba(184,115,51,.13) 0%,transparent 60%),radial-gradient(ellipse 50% 80% at 20% 80%,rgba(92,61,46,.18) 0%,transparent 55%)}
.grid{position:absolute;inset:0;background-image:linear-gradient(rgba(184,115,51,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(184,115,51,.05) 1px,transparent 1px);background-size:60px 60px}
.hi{position:relative;z-index:2;padding:80px 8vw;display:grid;grid-template-columns:1fr auto;align-items:end;gap:40px}
.badge{font-family:var(--mono);font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--copper);border:1px solid rgba(184,115,51,.4);display:inline-block;padding:6px 16px;margin-bottom:32px;animation:fu .8s ease both}
h1{font-family:var(--serif);font-weight:300;font-size:clamp(3rem,7vw,6.5rem);line-height:1.05;color:var(--cream);animation:fu .8s .15s ease both}
h1 em{font-style:italic;color:var(--copper-light)}
.hsub{font-family:var(--mono);font-size:12px;letter-spacing:.15em;color:var(--muted);margin-top:24px;text-transform:uppercase;animation:fu .8s .3s ease both}
.hcred{text-align:right;color:var(--muted);font-size:13px;font-family:var(--mono);line-height:2.1;animation:fu .8s .45s ease both}
.hcred strong{display:block;color:var(--copper);font-size:10px;letter-spacing:.2em;text-transform:uppercase;margin-bottom:10px}
.scroll{position:absolute;bottom:40px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;color:var(--muted);font-family:var(--mono);font-size:10px;letter-spacing:.2em;text-transform:uppercase;animation:fi 1.2s 1s ease both}
.sline{width:1px;height:50px;background:linear-gradient(to bottom,var(--copper),transparent);animation:sp 2s ease-in-out infinite}
.about{padding:120px 8vw;display:grid;grid-template-columns:1fr 1.6fr;gap:80px;align-items:start;border-bottom:1px solid var(--border)}
.slabel{font-family:var(--mono);font-size:10px;letter-spacing:.25em;text-transform:uppercase;color:var(--copper);padding-bottom:20px;border-bottom:1px solid var(--border);margin-bottom:40px}
.about-l h2{font-size:clamp(2rem,4vw,3.5rem);font-weight:300;line-height:1.2;color:var(--charcoal)}
.about-l h2 em{font-style:italic;color:var(--rust)}
.about-r p{color:var(--muted);font-size:17px;margin-bottom:20px}
.about-r p:first-child{font-size:20px;color:var(--text);font-style:italic}
.quals{margin-top:40px;display:flex;flex-direction:column;gap:12px}
.qi{display:flex;align-items:center;gap:16px;font-family:var(--mono);font-size:13px;color:var(--text)}
.qi::before{content:'';width:24px;height:1px;background:var(--copper);flex-shrink:0}
.services{padding:120px 8vw;background:var(--cream)}
.sh{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:80px}
.sh h2{font-size:clamp(2rem,4vw,3.5rem);font-weight:300;color:var(--charcoal)}
.sh h2 em{font-style:italic;color:var(--rust)}
.sgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;background:var(--border)}
.sc{background:var(--warm-white);padding:48px 40px;transition:background .3s;position:relative;overflow:hidden}
.sc::after{content:'';position:absolute;bottom:0;left:0;width:0;height:2px;background:var(--copper);transition:width .4s}
.sc:hover{background:#fff}
.sc:hover::after{width:100%}
.sicon{font-size:28px;margin-bottom:24px;display:block}
.sc h3{font-size:1.4rem;font-weight:400;color:var(--charcoal);margin-bottom:16px}
.sc p{font-size:15px;color:var(--muted);line-height:1.7}
.nums{padding:100px 8vw;display:grid;grid-template-columns:repeat(4,1fr);background:var(--charcoal)}
.ni{padding:60px 40px;border-right:1px solid rgba(255,255,255,.06);text-align:center}
.ni:last-child{border-right:none}
.nv{font-family:var(--serif);font-size:4rem;font-weight:300;color:var(--copper-light);line-height:1;display:block}
.nl{font-family:var(--mono);font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--muted);margin-top:12px;display:block}
.contact{padding:120px 8vw;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.contact-l h2{font-size:clamp(2rem,4vw,3.5rem);font-weight:300;color:var(--charcoal);margin-bottom:24px}
.contact-l h2 em{font-style:italic;color:var(--rust)}
.contact-l p{color:var(--muted);font-size:17px;margin-bottom:40px}
.cdetails{display:flex;flex-direction:column;gap:20px}
.crow{display:flex;align-items:flex-start;gap:20px}
.clabel{font-family:var(--mono);font-size:10px;letter-spacing:.2em;text-transform:uppercase;color:var(--copper);min-width:80px;padding-top:3px}
.cval{font-size:16px;color:var(--text)}
.cval a{color:inherit;text-decoration:none;border-bottom:1px solid var(--border);transition:border-color .2s}
.cval a:hover{border-color:var(--copper);color:var(--rust)}
.cform{display:flex;flex-direction:column;gap:24px}
.fg{display:flex;flex-direction:column;gap:8px}
.fg label{font-family:var(--mono);font-size:10px;letter-spacing:.2em;text-transform:uppercase;color:var(--muted)}
.fg input,.fg textarea{background:var(--cream);border:1px solid var(--border);padding:14px 18px;font-family:var(--serif);font-size:16px;color:var(--text);outline:none;transition:border-color .2s;resize:vertical;width:100%}
.fg input:focus,.fg textarea:focus{border-color:var(--copper)}
.fg textarea{min-height:120px}
.btn{background:var(--charcoal);color:var(--cream);border:none;padding:16px 40px;font-family:var(--mono);font-size:11px;letter-spacing:.2em;text-transform:uppercase;cursor:pointer;transition:background .2s}
.btn:hover{background:var(--rust)}
footer{background:var(--charcoal);padding:40px 8vw;display:flex;justify-content:space-between;align-items:center;border-top:1px solid rgba(255,255,255,.06)}
footer p{font-family:var(--mono);font-size:11px;color:var(--muted);letter-spacing:.1em}
footer a{color:var(--muted);text-decoration:none}
footer a:hover{color:var(--copper)}
@keyframes fu{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@keyframes fi{from{opacity:0}to{opacity:1}}
@keyframes sp{0%,100%{opacity:.3}50%{opacity:1}}
@media(max-width:900px){
  .hi{grid-template-columns:1fr}.hcred{text-align:left}
  .about{grid-template-columns:1fr;gap:40px}
  .sgrid{grid-template-columns:1fr 1fr}
  .nums{grid-template-columns:1fr 1fr}
  .contact{grid-template-columns:1fr}
  .sh{flex-direction:column;align-items:flex-start;gap:20px}
}
@media(max-width:580px){
  .sgrid{grid-template-columns:1fr}
  footer{flex-direction:column;gap:16px;text-align:center}
}
</style>
</head>
<body>

<header>
  <div class="hbg"></div>
  <div class="grid"></div>
  <div class="hi">
    <div>
      <span class="badge">Sachverstaendigenbüro</span>
      <h1><?= htmlspecialchars($name) ?><br><em>Heizung &amp; Sanitaer</em></h1>
      <p class="hsub">Oeffentlich bestellt &middot; Vereidigt &middot; IHK-zertifiziert</p>
    </div>
    <div class="hcred">
      <strong>Zertifizierungen</strong>
      IHK-zertifizierter Sachverstaendiger<br>
      Oeffentlich bestellt und vereidigt<br>
      DVGW-Fachkundenachweis<br>
      DIN EN ISO 17024
    </div>
  </div>
  <div class="scroll">
    <div class="sline"></div>
    Mehr erfahren
  </div>
</header>

<section class="about">
  <div class="about-l">
    <div class="slabel">Ueber mich</div>
    <h2>Unabhaengig.<br><em>Praezise.</em><br>Verlaesslich.</h2>
  </div>
  <div class="about-r">
    <p>Seit ueber 20 Jahren bin ich als oeffentlich bestellter und vereidigter Sachverstaendiger fuer Heizungs- und Sanitaranlagen taetig &ndash; fuer Privatpersonen, Unternehmen und Gerichte.</p>
    <p>Meine Gutachten sind fachlich fundiert, rechtssicher und verstaendlich formuliert. Ob Schadensbewertung, Abnahmepruefung oder gerichtliches Gutachten &ndash; ich biete eine neutrale, unabhaengige Expertenmeinung, auf die Sie sich verlassen koennen.</p>
    <p>Als Mitglied relevanter Fachverbaende und mit kontinuierlicher Weiterbildung bleibe ich stets auf dem aktuellen Stand der Technik und Rechtslage.</p>
    <div class="quals">
      <div class="qi">Oeffentlich bestellt und vereidigt (IHK)</div>
      <div class="qi">Meister des Installateur- und Heizungsbauerhandwerks</div>
      <div class="qi">DVGW-zertifizierter Fachmann fuer Gasinstallationen</div>
      <div class="qi">Mitglied im Bund der oeffentlich bestellten Sachverstaendigen</div>
      <div class="qi">Gerichtlich anerkannt &ndash; bundesweit taetig</div>
    </div>
  </div>
</section>

<section class="services">
  <div class="sh">
    <div>
      <div class="slabel">Leistungen</div>
      <h2>Meine Expertise<br><em>auf einen Blick</em></h2>
    </div>
  </div>
  <div class="sgrid">
    <?php foreach ($services as $s): ?>
    <div class="sc">
      <span class="sicon"><?= $icons[$s['icon']] ?></span>
      <h3><?= $s['title'] ?></h3>
      <p><?= $s['desc'] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="nums">
  <div class="ni"><span class="nv">20+</span><span class="nl">Jahre Erfahrung</span></div>
  <div class="ni"><span class="nv">850+</span><span class="nl">Gutachten erstellt</span></div>
  <div class="ni"><span class="nv">100%</span><span class="nl">Neutral &amp; unabhaengig</span></div>
  <div class="ni"><span class="nv">48h</span><span class="nl">Reaktionszeit</span></div>
</section>

<section class="contact" id="kontakt">
  <div class="contact-l">
    <div class="slabel">Kontakt</div>
    <h2>Sprechen wir<br><em>ueber Ihr Anliegen</em></h2>
    <p>Ich freue mich auf Ihre Anfrage. Ob dringende Schadensbegutachtung oder langfristige Projektbegleitung &ndash; nehmen Sie Kontakt auf.</p>
    <div class="cdetails">
      <div class="crow"><span class="clabel">Telefon</span><span class="cval"><a href="tel:+49123456789"><?= htmlspecialchars($phone) ?></a></span></div>
      <div class="crow"><span class="clabel">E-Mail</span><span class="cval"><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></span></div>
      <div class="crow"><span class="clabel">Adresse</span><span class="cval"><?= htmlspecialchars($address) ?></span></div>
      <div class="crow"><span class="clabel">Buerozeiten</span><span class="cval">Mo&ndash;Fr: 08:00 &ndash; 17:00 Uhr</span></div>
    </div>
  </div>
  <div>
    <div class="slabel">Anfrage senden</div>
    <form class="cform" action="#kontakt" method="post">
      <div class="fg"><label for="cn">Ihr Name</label><input type="text" id="cn" name="name" placeholder="Max Mustermann" required></div>
      <div class="fg"><label for="ce">E-Mail-Adresse</label><input type="email" id="ce" name="email" placeholder="max@beispiel.de" required></div>
      <div class="fg"><label for="cs">Betreff</label><input type="text" id="cs" name="subject" placeholder="z. B. Schadensgutachten Heizung"></div>
      <div class="fg"><label for="cm">Ihre Nachricht</label><textarea id="cm" name="message" placeholder="Bitte beschreiben Sie Ihr Anliegen kurz..." required></textarea></div>
      <button type="submit" class="btn">Anfrage absenden</button>
    </form>
  </div>
</section>

<footer>
  <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($name) ?> &middot; Sachverstaendiger Heizung &amp; Sanitaer</p>
  <p><a href="#">Impressum</a> &nbsp;&middot;&nbsp; <a href="#">Datenschutz</a></p>
</footer>

</body>
</html>
