<? if ($view === 'example'): ?>
<h2>Aufzeichnungen im Hörsaal: Beispiel</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel2.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel3.jpg" width="240">
        </p>
    </div>
    <p>
        Automatisierte Vorlesungsaufzeichnungen werden an der Hochschule Wismar schon seit vielen Jahren
        in ca. 50 Vorlesungen pro Semester eingesetzt. Der Ablauf ist für Lehrende denkbar einfach:
    </p>
<ul>
    <li>Aufzeichnungswunsch anmelden</li>
    <li>Vorlesung mit Mikrofon und Beamerbild halten</li>
</ul>
<p>&nbsp;<br>
    Die Vorlesung wird mit fest installierter Kamera gefilmt, die auf das Vortragspult ausgerichtet ist.
    Die Aufzeichnungen werden voll automatisiert verarbeitet und stehen für die Teilnehmenden über Stud.IP bereit.
    Auf Wunsch können die Aufzeichnungen auf öffentlich zugänglich gemacht werden.
</p>
    <p>
        Beispielaufzeichnung von
        Prof. Dr. Thomas Groß: <a href="https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808"  class="link-extern" target="_blank">https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808</a>.
    </p>
<p>
    Aufzeichnungen sind in folgenden Räumen möglich:<br>
    Innenstadt: Schloßaula, 01/E01, 01/B01, 11/212, 11/213, 15/E07, 15/E10, 15/E16, 15/128, 22/B01, 41/112, 44/E03, 44/E04<br>
    Westerberg: 32/102, 32/110, 35/E01, 35/E16, 35/E25, 66/E33, 93/E07, 93/E31
</p>


<? elseif ($view === 'howto'): ?>
    <h2>Aufzeichnungen im Hörsaal: So geht's</h2>
<p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kg80_XU8TGw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
    <p>
        Aufgrund der besonderen Situation während der Schließung bitten wir Sie um Kontaktaufnahme mit uns, wenn
        Sie Ihre Vorlesung im Hörsaal ohne Publikum aufzeichnen möchten.
    </p>
<p>
    <?= Studip\LinkButton::create(_('Anfrage stellen'),
        URLHelper::getURL('dispatch.php/messages/write',
            ['rec_uname' => 'elz@studip',
                'default_subject' => _('Anfrage Hörsaalaufzeichnung für '.Context::get()->Name),
                'default_body' => _('Liebes virtUOS-Team,
ich möchte im Hörsaal aufzeichnen.

Mein Terminwunsch: (Datum/Wochentag, Uhrzeit, einmalig/regelmäßig)
Mein Hörsaalwunsch: (Raum oder Stadtbereich)

Veranstaltung: '.Context::get()->Name.' ('.$course_id.')

Telefonnummer für Rückfragen:

')]),
        ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
    oder schreiben Sie eine E-Mail an: <a href="mailto:elearning@hs-wismar.de">elearning@hs-wismar.de</a>.
</p>
<p>
    Aufzeichnungen sind auch kurzfristig möglich!
</p>
<? endif ?>
