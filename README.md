# delights-theme
<h1>Delights WordPress Theme</h1>
<p>Delights är ett responsivt WordPress-tema byggt för brunch-, café- och restaurangverksamheter. 
   Temat använder Tailwind CSS för styling och har ACF-integrering 
   för att göra olika sektioner enkla att uppdatera i adminpanelen. <strong>Temat är utvecklat som ett arbetsprov för Peach webbyrå.</strong></p>

<h2>📌 Innehållsförteckning</h2>
<ul>
    <li><a href="#oversikt">Översikt</a></li>
    <li><a href="#krav">Krav</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#funktioner">Funktioner</a></li>
    <li><a href="#struktur">Struktur</a></li>
    <li><a href="#acf">ACF-konfiguration</a></li>
    <li><a href="#utveckling">Utveckling och Anpassning</a></li>
</ul>

<h2 id="oversikt">🎨 Översikt</h2>
<p>Delights-temat är en one-pager inspirerad av brunch- och matupplevelser.</p>

<h2 id="krav">⚙️ Krav</h2>
<ul>
    <li>WordPress 5.9 eller senare</li>
    <li>PHP 7.4 eller senare (helst 8.0+)</li>
    <li>Advanced Custom Fields (ACF) installerat</li>
    <li>Tailwind CSS (laddas in via CDN)</li>
</ul>

<h2 id="installation">📥 Installation</h2>
<p>Följ dessa steg för att installera och aktivera temat korrekt:</p>

<h3>1️⃣ Ladda ner och aktivera temat</h3>
<ol>
    <li>Klona eller ladda ner temat från GitHub:</li>
    <pre><code>git clone https://github.com/mathiasskarp/delights-theme.git</code></pre>
    <li>Flytta mappen <code>delights</code> till <code>wp-content/themes/</code> i din WordPress-installation.</li>
    <li>Gå till WordPress adminpanel → <em>Utseende → Teman</em>.</li>
    <li>Aktivera <strong>Delights</strong>-temat.</li>
</ol>

<h3>2️⃣ Installera ACF</h3>
<ol>
    <li>Gå till WordPress adminpanel → <em>Plugins → Lägg till nytt</em>.</li>
    <li>Sök efter <strong>Advanced Custom Fields</strong>.</li>
    <li>Installera och aktivera pluginet.</li>
</ol>

<h3>3️⃣ Importera ACF-fälten</h3>
<p>För att Food Images-sektionen ska kunna redigeras korrekt, behöver ACF-fälten importeras.</p>
<ol>
    <li>Gå till WordPress adminpanel → <em>ACF → Verktyg</em>.</li>
    <li>Klicka på <strong>Importera fältgrupper</strong>.</li>
    <li>Ladda upp filen <code>acf/acf-export.json</code> som finns i temamappen.</li>
    <li>Klicka på <strong>Importera</strong>.</li>
</ol>
<p>Nu är ACF-fälten korrekt installerade och du kan redigera Food Images-sektionen i WordPress-admin!</p>

<h2 id="funktioner">🚀 Funktioner</h2>
<ul>
    <li>Responsivt med Tailwind CSS</li>
    <li>ACF-integration för anpassning av matbilder via adminpanelen</li>
</ul>

<h2 id="struktur">📁 Struktur</h2>
<pre>
delights/
├── acf/
│   ├── acf-export.json  <-- ACF-fälten för import
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
<p><strong>Food Images-sektionen kan uppdateras genom Advanced Custom Fields (ACF).</strong></p>

<ul>
    <li><strong>Food Images:</strong> 
        <ul>
            <li><code>food_upper_image_1</code> - Övre stora bilden</li>
            <li><code>food_upper_image_2</code> - Övre högra bilden</li>
            <li><code>food_lower_image_1</code> - Nedre vänstra bilden</li>
            <li><code>food_lower_image_2</code> - Nedre mittenbilden</li>
            <li><code>food_lower_image_3</code> - Nedre högra bilden</li>
        </ul>
    </li>
</ul>

<h2 id="utveckling">👨‍💻 Utveckling och Anpassning</h2>
<ol>
    <li><strong>Byt ut bilder & text:</strong> Lägg dina egna bilder i <code>assets/images/</code>.</li>
    <li><strong>Styling:</strong> Tailwind laddas via CDN i <code>functions.php</code>.</li>
</ol>

<h2>📜 Licens</h2>
<p>Detta tema är fritt att använda och modifiera. Se eventuella licenskrav för tredjepartsbibliotek som Tailwind CSS och ACF.</p>

</body>
</html>
