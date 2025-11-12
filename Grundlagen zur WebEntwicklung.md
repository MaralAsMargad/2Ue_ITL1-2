Zusammenfassung über Grundlagen zur WebEntwicklung 

1. Kommunikationsablauf – Webserver und Client/Browser 

Wenn ich im Browser eine Internetadresse eingebe ( bsp.: http://localhost/index.php.), sendet der Browser eine Anfrage an den Webserver. Diese empfängt dann die Anfrage, verarbeitet sie und führt den PHP-Code aus oder holt Daten aus der Datenbank (bsp.: MariaDB). Danach schickt der Server das Ergebnis in Form von HTML, CSS und JavaScript zurück an den Browser, welches dann die fertige Webseite anzeigt. 
 

2. Installation Entwicklungsumgebung (Webserver + PHP + MySQL/MariaDB - oder Alternative und ein Editor mit PHP-Support) 

-Webserver & PHP: XAMPP 
-Datenbank: MariaDB, HeidiSQL. 
-Editor: Visual Studio Code. 
 

3. Sicherheitsrisiken von Webanwendungen (Phishing, Datendiebstahl, SQL Injections, Cross-Site-Scripting, Session-Hijacking, DoS, ...) 

-Phishing: Cyberangriffsmethode, bei der Betrüger versuchen, persönliche Daten wie Passwörter, Bankdaten oder Kreditkartennummern zu stehlen, indem sie sich als vertrauenswürdige Quelle ausgeben. 

-Datendiebstahl: Unbefugte Zugriff auf persönliche oder digitale Informationen durch Sicherheitslücken. 

-SQL Injection: Die Platzierung von bösartigem Code in SQL-Anweisungen über Webseiten-Eingaben und ist eine Code-Injection-Technik, die Datenbanken zerstören könnte. 

-Cross-Site-Scripting (XSS): Eine Sicherheitslücke, die es einem Cyberangreifer ermöglicht, clientseitige Skripte (normalerweise JavaScript) in Webseiten einzufügen. Wenn andere Benutzer betroffene Seiten laden, werden die Skripte des Cyberangreifers ausgeführt, wodurch der Cyberangreifer Cookies und Sitzungstoken stehlen, den Inhalt der Webseite durch DOM-Manipulation ändern oder den Browser auf eine andere Seite umleiten kann. 

-Session Hijacking: Ein Cyberangriff, bei dem ein Angreifer die aktive Sitzungs-ID eines Benutzers stiehlt, um sich als dieser auszugeben und unbefugten Zugriff auf eine Webanwendung oder ein System zu erlangen. Dies wird häufig durch Abfangen oder Stehlen von Sitzungstoken (wie Cookies) durch Methoden wie das Sniffing unverschlüsselten Datenverkehrs, Cross-Site-Scripting (XSS) oder durch Ausnutzen von Netzwerk-Schwachstellen erreicht. 

-Denial of Service (DoS): Ein Cyberangriff, der ein Computernetzwerk, einen Dienst oder ein System für seine beabsichtigten Benutzer unzugänglich macht, indem er es mit einer Flut von Datenverkehr oder Anfragen überlastet. Angreifer erreichen dies, indem sie das Ziel mit übermäßigem Datenverkehr bombardieren, Schwachstellen ausnutzen oder seine Ressourcen erschöpfen, wodurch es sich verlangsamt, abstürzt oder ausfällt. 
 

4. Maßnahmen zum Schutz von Webanwendungen (Verschlüsselung, Multifaktor Authentifizierung, Sanitizing/Prepared Statements,... 

-Verschlüsselung (HTTPS): 
    Nutzung eines SSL-/TLS-Zertifikats, damit Daten sicher übertragen werden. 

-Multifaktor-Authentifizierung: 
    Zusätzliches Sicherheitsmerkmal (z. B. SMS-Code oder App-Bestätigung beim Login). 

-Eingabevalidierung & Sanitizing: 
    Alle Benutzereingaben prüfen, bevor sie weiterverarbeitet werden (z. B. HTML-Tags entfernen). 

-Prepared Statements (in PHP/MySQL): 
    Datenbankabfragen mit Platzhaltern, um SQL Injections zu verhindern. 

-Sichere Passwörter und Hashing: 
    Speicherung von Passwörtern mit bcrypt oder Argon2 statt im Klartext. 

-Regelmäßige Updates: 
    PHP, Datenbank und Frameworks aktuell halten, um bekannte Sicherheitslücken zu vermeiden. 

-Backups und Zugriffsbeschränkungen: 
    Nur autorisierte Benutzer dürfen sensible Bereiche erreichen; regelmäßige Datensicherungen durchführen. 

 