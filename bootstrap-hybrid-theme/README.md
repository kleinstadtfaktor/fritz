# Bootstrap Hybrid – klassisches/hybrides WordPress-Theme

Klassisches WordPress-Theme mit Bootstrap 5, jQuery und vollständiger Block-Editor-Unterstützung.

## Installation

1. Den Ordner `bootstrap-hybrid-theme` nach `wp-content/themes/` kopieren.
2. **Bootstrap-Dateien ergänzen** (die Platzhalter in `assets/` ersetzen):
   - Download: [Bootstrap 5.3.3](https://github.com/twbs/bootstrap/releases/download/v5.3.3/bootstrap-5.3.3-dist.zip)
   - `bootstrap.min.css` → `assets/css/bootstrap.min.css`
   - `bootstrap.bundle.min.js` → `assets/js/bootstrap.bundle.min.js`
3. Theme unter **Design → Themes** aktivieren.
4. Unter **Design → Menüs** ein Hauptmenü der Position *Hauptmenü (Navbar)* zuweisen.

## Struktur

```
bootstrap-hybrid-theme/
├── style.css              Theme-Header + eigene Styles
├── theme.json             Block-Editor-Global-Styles (Farben, Layout, Typografie)
├── functions.php          Lädt die Module aus inc/
├── inc/
│   ├── setup.php          Theme-Supports, Menüs, Widget-Bereiche
│   ├── enqueue.php        Bootstrap, jQuery, Theme-Assets (Frontend + Editor)
│   ├── blocks.php         Block-Kategorie für eigene Blöcke
│   └── template-tags.php  Menü-Fallback, Beitrags-Meta
├── header.php             Bootstrap-Navbar mit Custom Logo
├── footer.php             Footer mit Widget-Bereich
├── index.php              Blog-Übersicht (Card-Grid)
├── single.php             Einzelbeitrag
├── page.php               Statische Seite
├── archive.php            Archiv (Kategorie/Tag/Datum/Autor)
├── search.php             Suchergebnisse
├── searchform.php         Suchformular (Bootstrap-Style)
├── comments.php           Kommentare
├── sidebar.php            Sidebar-Widget-Bereich
├── 404.php                Fehlerseite
└── assets/
    ├── css/
    │   ├── bootstrap.min.css   (Platzhalter – ersetzen!)
    │   └── editor.css         Editor-Styles für den Block-Editor
    └── js/
        ├── bootstrap.bundle.min.js  (Platzhalter – ersetzen!)
        └── theme.js                Eigenes jQuery-Theme-Script
```

## Block-Editor-Features

- `theme.json` mit Bootstrap-Farbpalette, Content-/Wide-Größen und Schriftgrößen
- `align-wide`, `editor-styles`, `wp-block-styles` aktiviert
- Bootstrap-CSS wird auch im Editor geladen, damit Bootstrap-Klassen dort sichtbar sind
- Eigene Block-Kategorie *Bootstrap Hybrid* (Startpunkt für eigene Blöcke in `inc/blocks.php`)

## Hinweise

- jQuery wird über WordPress Core geladen (`wp_enqueue_script( 'jquery' )`).
- Menü-Tiefeneinstellungen: Navbar unterstützt bis zu 2 Ebenen (Dropdowns via Bootstrap).
- Widgets in der Sidebar werden als Bootstrap-Cards gerendert.
