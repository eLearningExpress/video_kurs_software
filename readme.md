# Video Kurs Software

Die Video Kurs Software ist eine fortschrittliche, webbasierte Lösung für die Bereitstellung und Verwaltung von Online-Kursmaterialien, mit einem besonderen Schwerpunkt auf Videoinhalten. Diese Plattform ermöglicht es, lokale Videos effektiv zu hosten und bietet ein responsives Menüdesign für eine optimale Nutzererfahrung auf verschiedenen Geräten. **Optimal als Intranet Lösung mit lokalem Server ([Xampp](https://www.apachefriends.org/de/index.html) oder ähnlichem).**



## Inhaltsverzeichnis

- [Einrichtung](#einrichtung)
- [Menüanpassungen](#menüanpassungen)
- [Videoanpassungen](#videoanpassungen)
- [Anpassung von Video-Titeln und -Beschreibungen](#anpassung-von-video-titeln-und--beschreibungen)
- [Anpassung](#anpassung)
- [Funktionsübersicht](#funktionsübersicht)
- [Lizenzverwaltung](#lizenzverwaltung)
- [Sicherheit](#sicherheit)



## Einrichtung

Zur Installation und Einrichtung der Video Kurs Software führen Sie folgende Schritte durch:

1. Extrahieren Sie den Softwareinhalt in das gewünschte Verzeichnis auf Ihrem Webserver.
2. Konfigurieren Sie den Webserver so, dass `index.php` als Einstiegspunkt fungiert.
3. Stellen Sie sicher, dass PHP 8.0 + auf Ihrem Server korrekt installiert und konfiguriert ist.



## Menüanpassungen

Das in `index.php` implementierte **vertikale Menü** ist für Desktop- und Tablet-Geräte optimiert und verschwindet auf Mobilgeräten. Anpassungen am Menü können direkt in der `index.php` vorgenommen werden, um das Menü an spezifische Nutzeranforderungen anzupassen.

```html
<div class="vertical-menu" id="verticalMenu">
    <a href="#" target="_blank">Ergänzende Informationen zum Video 1</a>
    <a href="#" target="_blank">Ergänzende Informationen zum Video 2</a>
    <!-- Fügen Sie weitere Menüpunkte nach Bedarf hinzu -->
</div>
```



## Videoanpassungen

Passen Sie Videos durch Bearbeiten der `main.js` im `js`-Ordner an:

1. Öffnen Sie `js/main.js`.
2. Finden Sie das Array `videoPaths`.
3. Ersetzen Sie vorhandene Pfade durch die Pfade zu Ihren lokalen Videodateien.
4. Legen Sie Ihre Videos in den Ordner videos.

```javascript
const videoPaths = [
    'videos/dein_video_1.mp4',
    'videos/dein_video_2.mp4',
    // Ergänzen Sie das Array mit weiteren Video-Pfaden.
];
```



## Anpassung von Video-Titeln und -Beschreibungen

Die **Titel** und **Beschreibungen** der Videos können in der `index.php` geändert werden:

1. Suchen Sie nach den entsprechenden Listenelementen (`<li>`), die die Videoinformationen enthalten.
2. Ändern Sie den Text innerhalb der `<div class="fw-bold">` für den Titel und den nachfolgenden `<div>` für die Beschreibung jedes Videos.
3. Achten Sie auf eine fortlaufende Nummerierung der `id="videoItem1, id="videoItem2 u.s.w.`

```html
<li class="list-group-item d-flex justify-content-between align-items-center" id="videoItem1">
    <div class="ms-2 me-auto">
        <div class="fw-bold">Video 1</div>
        Beschreibung des Videos 1.
    </div>
    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
</li>

<li class="list-group-item d-flex justify-content-between align-items-center" id="videoItem2">
    <div class="ms-2 me-auto">
        <div class="fw-bold">Video 2</div>
        Beschreibung des Videos 2.
    </div>
    <button type="button" class="btn btn-primary btn-sm">Video laden</button>
</li>

<!--Ergänzen Sie weitere Titel und Beschreibungrn. -->
```



## Anpassung

Personalisieren Sie die Plattform durch Bearbeitung folgender Bereiche:

-  **Datenschutz und Impressum**: Aktualisieren Sie `datenschutz.html` und `impressum.html` mit Ihren rechtlichen Informationen.
-  **CSS**: Passen Sie die Stylesheets im `css/`-Verzeichnis an, um das Design zu individualisieren.
-  **JavaScript**: Ändern Sie Dateien im `js/`-Verzeichnis, um benutzerdefinierte Funktionen und Interaktionen hinzuzufügen.



## Passen Sie das Copyright im Footer an

```html
<footer class="footer mt-5 py-5 bg-body-tertiary">
    <div class="container text-center">
        <span id="current-year">©
            </span>
        bei E-Learning Express |
        <a href="impressum.html" target="_blank">Impressum</a>
        |
        <a href="datenschutz.html" target="_blank">Datenschutz</a>
    </div>
</footer>
```



## Funktionsübersicht

Hauptfunktionen der Software umfassen:

-  **Benutzeranmeldung**: Ein sicheres Anmeldesystem für Kursteilnehmer über einen Lizenzschlüssel.
-  **Vertikales Menü**: Optimiert für Desktop- und Tablet-Ansichten, verborgen auf Mobilgeräten.
-  **Lokale Video-Integration**: Ermöglicht einfache Anpassung und Integration von Videoinhalten.



## Lizenzverwaltung

Generieren Sie Passwörter mit Anweisungen aus der `Passwort Prompt.txt` im Root-Verzeichnis und speichern Sie diese in der `lizenzen.txt` im Ordner `Lizenzen`. Diese Passwörter werden für den Zugang zu geschützten Bereichen der Software benötigt. Beispiel für einen in der lizenzen.txt hinterlegten Lizenzschlüssel ist: **q]9JFhljOYl**



## Sicherheit

Folgen Sie den Best Practices zur Passworterstellung, wie in `Passwort Prompt.txt` beschrieben, um die Sicherheit der Plattform und der Nutzerdaten zu gewährleisten. Bewahren Sie `lizenzen.txt` sicher auf und gewähren Sie nur autorisierten Personen den Zugang.



## Wir sagen Danke

Ein besonderer Dank gilt der Open-Source-Community für die Bereitstellung von Tools und Bibliotheken wie Bootstrap 5.3.3, die es uns ermöglichen, robuste und ansprechende Anwendungen zu erstellen.