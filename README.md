# delights-theme
<h1>Delights WordPress Theme</h1>
<p>Delights är ett modernt, responsivt WordPress-tema byggt för brunch-, café- och restaurangverksamheter. 
   Det är utvecklat enligt WordPress bästa praxis, använder Tailwind CSS för styling och har ACF-integrering 
   för att göra olika sektioner enkla att uppdatera i adminpanelen. <strong>Temat är utvecklat som ett arbetsprov för Peach webbyrå.</strong></p>

<h2>📌 Innehållsförteckning</h2>
<ul>
    <li><a href="#oversikt">Översikt</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#krav">Krav</a></li>
    <li><a href="#funktioner">Funktioner</a></li>
    <li><a href="#struktur">Struktur</a></li>
    <li><a href="#acf">ACF-konfiguration</a></li>
    <li><a href="#utveckling">Utveckling och Anpassning</a></li>
</ul>

<h2 id="oversikt">🎨 Översikt</h2>
<p>Delights-temat är en one-pager inspirerad av brunch- och matupplevelser. 
   Det inkluderar en anpassad hero-sektion, en sektion för “Om oss”, ett matgalleri och en flexibel footer.</p>

<h2 id="installation">📥 Installation</h2>
<ol>
    <li><strong>Ladda ner temat:</strong> Antingen klona detta repo eller ladda ner ZIP-filen.</li>
    <li><strong>Placera i din WordPress-installation:</strong> Lägg mappen <code>delights</code> i <code>wp-content/themes/</code>.</li>
    <li><strong>Aktivera temat:</strong> Gå till <em>Utseende → Teman</em> i WordPress och aktivera <strong>Delights</strong>.</li>
</ol>

<h2 id="krav">⚙️ Krav</h2>
<ul>
    <li>WordPress 5.9 eller senare</li>
    <li>PHP 7.4 eller senare (helst 8.0+)</li>
    <li>Advanced Custom Fields (ACF) installerat</li>
    <li>Tailwind CSS (laddas in via CDN)</li>
</ul>

<h2 id="funktioner">🚀 Funktioner</h2>
<ul>
    <li>Responsivt med Tailwind CSS</li>
    <li>ACF-integration för anpassning via adminpanelen</li>
    <li>Modern och minimalistisk design</li>
    <li>Flexibla sektioner och komponenter</li>
</ul>

<h2 id="struktur">📁 Struktur</h2>
<pre>
delights/
├── assets/
│   ├── images/
│   └── ...
├── js/
│   └── main.js
├── template-parts/
│   ├── hero.php
│   ├── om-oss.php
│   ├── food-images.php
│   └── ...
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── style.css
├── index.php
└── README.md
</pre>

<h2 id="acf">⚡ ACF-konfiguration</h2>
<ul>
    <li><strong>Hero Block:</strong> <code>hero_bild</code>, <code>hero_rubrik</code>, <code>hero_underrubrik</code>, <code>hero_knapp_text</code></li>
   <li><strong>Om oss:</strong> <code>om_oss_rubrik</code>, <code>om_oss_text</code>, <code>om_oss_bild</code></li>
    <li><strong>Food Images:</strong> <code>food_upper_image_1</code>, <code>food_upper_image_2</code>, <code>food_lower_image_1</code>, <code>food_lower_image_2</code>, <code>food_lower_image_3</code></li>
</ul>

<h2 id="utveckling">👨‍💻 Utveckling och Anpassning</h2>
<ol>
    <li><strong>Klona eller ladda ner temat:</strong> <br>
        <code>git clone https://github.com/mathiasskarp/delights-theme.git</code>
    </li>
    <li><strong>Byt ut bilder & text:</strong> Lägg dina egna bilder i <code>assets/images/</code>.</li>
    <li><strong>Styling:</strong> Tailwind laddas via CDN i <code>functions.php</code>.</li>
</ol>

<h2>📜 Licens</h2>
<p>Detta tema är fritt att använda och modifiera. Se eventuella licenskrav för tredjepartsbibliotek som Tailwind CSS och ACF.</p>
